<?php

if (! defined ( 'DIR_APP' ))
	die ( 'Your have not permission' );
class slider extends Module {
	function __construct() {
		global $db, $mod;
		$this->lang ( 'news' );
		$this->lang ( 'user' );
		$this->model ( $_GET ['p'] . '/model/query' );
	}
	function index() {

		if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
			// Kiem tra dinh dang hinh
			for($i = 0; $i < 5 ; $i ++){
				$j = $i + 1;
				$imga = $_FILES ['image'.$i] ['type'];
				$img_name = $_FILES ['image'.$i] ['name'];
				if ($imga != "") {
					// Kết thúc
					if ($imga == 'image/jpeg' || $imga == 'image/gif' || $imga == 'image/png') {

						$image_title = Admin::upload ( 'image'.$i, rand ( 100, 900 ) . "_" . substr ( $img_name, 0, - 4 ), "../application/static/upload/images/slider/" );
						$image_title1 = Admin::createThumbnail ( $image_title, 190, 130, "../application/static/upload/images/slider/", "../application/static/upload/images/slider/", 'small_' );

					} else {
						$_SESSION ['message'] = 'File hình '.($i + 1). ' không đúng định dạng ';
						//$this->redirect ( 'index.php?p=' . $_GET ['p'] );
					}
					$row = $this->row ( 'select * from #__slide where id = "' . $j . '"' );
					$img = $row ['hinh'];
					unlink ( "../application/static/upload/images/slider/" . $img );
					unlink ( "../application/static/upload/images/slider/small_" . $img );
					ModelSlider::update ($image_title,$j);


				}
			}
			$this->redirect ( 'index.php?p=' . $_GET ['p'] );
		}

		$sql = "select * from #__slide order by id asc";

		$query = $sql;

		$data ['rows'] = $this->rows ( $query );
		$data ['countrows'] = 5;

		$this->view ( $_GET ['p'] . '/view/list', $data );
	}



	function publish() {
		$this->query ( "Update #__slides Set hide=if(hide='1','0','1') ,date_create=" . time () . " Where id=" . $_GET ['id'] );
		$this->redirect ( 'index.php?p=' . $_GET ['p'] );
	}

	// publish
	function remove() {
		$row = $this->row ( 'select * from #__slide where id = "' . $_GET ['id'] . '"' );
		$img = $row ['hinh'];
		unlink ( "../application/static/upload/images/slider/" . $img );
		unlink ( "../application/static/upload/images/slider/small_" . $img );

		$this->query ( "Update #__slide Set hinh='', date_update=".time()." Where id=" . $_GET ['id'] );
		$this->redirect ( 'index.php?p=' . $_GET ['p'] );
	}
}

?>