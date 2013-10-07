<?php

if (! defined ( 'DIR_APP' ))
	die ( 'Your have not permission' );
class tintuc extends Module {
	function __construct() {
		global $db, $mod;
		$this->lang ( 'news' );
		$this->lang ( 'user' );
		$this->model ( $_GET ['p'] . '/model/query' );
	}
	function index() {
		$rowpage = PAGE_ROWS_ADMIN;
		$curpage = CUR_ROWS;
		$getpage = empty ( $_GET ['page'] ) ? 1 : $_GET ['page'];
		$offset = ($getpage - 1) * $rowpage;
		
		$sql = "select * from #__tin_tuc order by id desc";
		$num = $this->num ( $sql );
		$query = $num > 0 ? $sql . " Limit $offset, $rowpage" : $sql;
		
		$data ['rows'] = $this->rows ( $query );
		
		// Load Paging
		$data ['paging'] = Paging::load ( $getpage, $num, $rowpage, $curpage, "index.php?p=" . $_GET ['p'] );
		// Load Type
		
		$data ['countrows'] = ($rowpage * $getpage) - $rowpage + 1;
		
		$this->view ( $_GET ['p'] . '/view/list', $data );
	}
	function delete() {
		if (empty ( $_POST ['id'] )) {
			$_SESSION ['message'] = LANG_CHOOSE_ID;
		} else {
			if (ModelTintuc::delete ( $_POST ['id'] )) {
				$_SESSION ['message'] = LANG_DELETE_SUCCESS;
			} else {
				$_SESSION ['message'] = LANG_UPDATE_FAILED;
			}
		}
		
		$this->redirect ( 'index.php?p=' . $_GET ['p'] );
	}
	function add() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			
			extract ( $_POST );
			
			if (empty ( $title )) {
				$_SESSION ['message'] = LANG_REQUIRE;
			} else {
				// Kiem tra dinh dang hinh
				$imga = $_FILES ['image'] ['type'];
				$img_name = $_FILES ['image'] ['name'];
				if ($imga != "") {
					// Kết thúc
					if ($imga == 'image/jpeg' || $imga == 'image/gif' || $imga == 'image/png') {
						
						$image_title = Admin::upload ( 'image', rand ( 100, 900 ) . "_" . substr ( $img_name, 0, - 4 ), "../application/static/upload/images/tintuc/" );
						$image_title1 = Admin::createThumbnail ( $image_title, 190, 130, "../application/static/upload/images/tintuc/", "../application/static/upload/images/tintuc/", 'small_' );
						
					} else {
						$_SESSION ['message'] = 'File hình không đúng định dạng ';
						$this->redirect ( 'index.php?p=' . $_GET ['p'] );
					}
				}
				if (ModelTintuc::insert ($image_title)) {
					$_SESSION ['message'] = LANG_UPDATE_SUCCESS;
					$this->redirect ( 'index.php?p=' . $_GET ['p'] );
				} else {
					$_SESSION ['message'] = LANG_UPDATE_FAILED;
				}
			}
		}
		
		$this->view ( $_GET ['p'] . '/view/add' );
	}
	function edit() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			extract ( $_POST );
			if (empty ( $title )) {
				$_SESSION ['message'] = LANG_REQUIRE;
			} else {
				
				// Kiem tra dinh dang hinh
				$imga = $_FILES ['image'] ['type'];
				$img_name = $_FILES ['image'] ['name'];
				if ($imga != "") {
					// Kết thúc
					if ($imga == 'image/jpeg' || $imga == 'image/gif' || $imga == 'image/png') {
						
						$image_title = Admin::upload ( 'image', rand ( 100, 900 ) . "_" . substr ( $img_name, 0, - 4 ), "../application/static/upload/images/tintuc/" );
						$image_title1 = Admin::createThumbnail ( $image_title, 190, 130, "../application/static/upload/images/tintuc/", "../application/static/upload/images/tintuc/", 'small_' );
						
						$row = $this->row ( 'select * from #__tin_tuc where id = "' . $_GET ['id'] . '"' );
						$img = $row ['hinh'];
						unlink ( "../application/static/upload/images/tintuc/" . $img );
						unlink ( "../application/static/upload/images/tintuc/small_" . $img );
						
						if (ModelTintuc::update ( $image_title, $_GET ['id'] )) {
							$_SESSION ['message'] = LANG_UPDATE_SUCCESS;
							//$this->redirect ( 'index.php?p=' . $_GET ['p'] );
						} else {
							$_SESSION ['message'] = LANG_UPDATE_FAILED;
						}
					} else {
						$_SESSION ['message'] = 'File hình không đúng định dạng ';
					}
				} else {
					if (ModelTintuc::update ( '', $_GET ['id'] )) {
						$_SESSION ['message'] = LANG_UPDATE_SUCCESS;
						//$this->redirect ( 'index.php?p=' . $_GET ['p'] );
					} else {
						$_SESSION ['message'] = LANG_UPDATE_FAILED;
					}
				}
			}
		}
		$row = $this->row ( 'select * from #__tin_tuc where id = "' . $_GET ['id'] . '"' );
		$data = array ();
		$data ['title'] = $row ['title'];
		$data ['intro'] = $row ['intro'];
		$data ['content'] = $row ['content'];
		$data ['uri'] = _path_image . 'tintuc/small_' . $row ['hinh'];
		$data ['image_name'] = $row ['hinh'];
		$data ['trang_chu'] = $row ['trang_chu'];
		$data ['hide'] = $row ['hide'];
		$this->view ( $_GET ['p'] . '/view/add', $data );
	}
	function homepageshow() {
		//$this->query ( "Update #__tin_tuc Set trang_chu=0 Where trang_chu=1 and id <>" . $_GET ['id'] );
		$this->query ( "Update #__tin_tuc Set trang_chu=if(trang_chu='1','0','1'),date_create=" . time () . " Where id=" . $_GET ['id'] );
		$this->redirect ( 'index.php?p=' . $_GET ['p'] );
	}
	// publish
	function publish() {
		$this->query ( "Update #__tin_tuc Set hide=if(hide='1','0','1') ,date_create=" . time () . " Where id=" . $_GET ['id'] );
		$this->redirect ( 'index.php?p=' . $_GET ['p'] );
	}
	
	// publish
	function remove() {
		$row = $this->row ( 'select * from #__tin_tuc where id = "' . $_GET ['id'] . '"' );
		$img = $row ['hinh'];
		unlink ( "../application/static/upload/images/tintuc/" . $img );
		unlink ( "../application/static/upload/images/tintuc/small_" . $img );
		
		$this->query ( "Delete From #__tin_tuc Where id=" . $_GET ['id'] );
		$this->redirect ( 'index.php?p=' . $_GET ['p'] );
	}
}

?>