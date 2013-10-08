<?php

if (! defined ( 'DIR_APP' ))
	die ( 'Your have not permission' );
class tuvan extends Module {
	function __construct() {
		global $db, $mod;
		$this->lang ( 'news' );
		$this->lang ( 'user' );
		$this->model ( $_GET ['p'] . '/model/query' );
		//$this->model ( 'category_tuvan' . '/model/query' );
	}
	function index() {
		$rowpage = PAGE_ROWS_ADMIN;
		$curpage = CUR_ROWS;
		$getpage = empty ( $_GET ['page'] ) ? 1 : $_GET ['page'];
		$offset = ($getpage - 1) * $rowpage;
		$data ['rows'] = ModelTuvan :: getAllTinTuc($offset,$rowpage);
		$num = ModelTuvan :: countTinTuc();
		//category
		//$category_tu_van_id = Tool :: getColumns($data ['rows'],'category_tu_van_id');
		//$category_tu_van = ModelCategoryTuvan :: getCatByIds($category_tu_van_id);
		//$data['category'] = Tool :: changeKey($category_tu_van,'caid');
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
			if (ModelTuvan::delete ( $_POST ['id'] )) {
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
				Tool :: addImage('tuvan',ModelTuvan);
			}
		}
		//$data['category'] = $category = ModelCategoryTuvan :: getAllCategory();
		$this->view ( $_GET ['p'] . '/view/add',$data );
	}
	function edit() {
		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			extract ( $_POST );
			if (empty ( $title )) {
				$_SESSION ['message'] = LANG_REQUIRE;
			} else {
				Tool :: editImage('tuvan',ModelTuvan);
			}
		}
		$row = ModelTuvan::getRecordById($_GET ['id']);
		$data = array ();
		//$data ['category'] = ModelCategoryTuvan :: getAllCategory();
		//$data ['category_id'] = $row ['category_tu_van_id'];
		$data ['title'] = $row ['title'];
		$data ['intro'] = $row ['intro'];
		$data ['content'] = $row ['content'];
		$data ['uri'] = _path_image . 'tuvan/small_' . $row ['hinh'];
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