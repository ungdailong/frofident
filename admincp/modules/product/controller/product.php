<?php

if (!defined('DIR_APP'))
    die('Your have not permission');

class Product extends Module {

    function __construct() {
        global $db, $mod;
        $this->model($_GET['p'] . '/model/query');
    }

    function index() {
        $rowpage = PAGE_ROWS_ADMIN;
        $curpage = CUR_ROWS;
        $getpage = empty($_GET['page']) ? 1 : $_GET['page'];
        $offset = ($getpage - 1) * $rowpage;
        //if($getpage == 1)
        $sql = "select * from #__products where type = 'product' order by id desc";
        $num = $this->num($sql);
        $query = $num > 0 ? $sql . " Limit $offset, $rowpage" : $sql;
        $data['rows'] = $this->rows($query);
        $category_ids = Tool::getColumns($data['rows'],'category_id');

        $data['categorys'] = $this->rows('select * from #__category where caid IN ('.implode(',', $category_ids) . ')');
        $data['categorys'] = Tool :: changeKey($data['categorys'],'caid');
        $query = "select * from #__products where type = 'curaprox'";
        $data['curaprox'] = $this->row($query);

        // Load Paging
        $data['paging'] = Paging::load($getpage, $num, $rowpage, $curpage, "index.php?p=" . $_GET['p']);
        //Load Type

        $data['countrows'] = ($rowpage * $getpage) - $rowpage + 1;
        $this->view($_GET['p'] . '/view/list', $data);
    }

    function delete() {

        if (empty($_POST['id'])) {
            $_SESSION['message'] = LANG_CHOOSE_ID;
        } else {
            if (ModelTour::delete($_POST['id'])) {
                $_SESSION['message'] = LANG_DELETE_SUCCESS;
            } else {
                $_SESSION['message'] = LANG_DELETE_SUCCESS;
            }
        }

        $this->redirect('index.php?p=' . $_GET['p']);
    }

    function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        	extract($_POST);
        	if (empty ( $title )) {
        		$_SESSION ['message'] = LANG_REQUIRE;
        	}
        	else{
            	Tool :: addImage('product',ModelProduct);
        	}
        }
		$data['categorys'] = $this->rows('select * from #__category');
        $this->view($_GET['p'] . '/view/add',$data);
    }

    function edit() {
        // Update data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($_GET['id'] == 1){
				if(ModelProduct :: updateCuraProx())
					$_SESSION['message'] = LANG_UPDATE_SUCCESS;
				else
					$_SESSION['message'] = LANG_UPDATE_FAILED;
				$this->redirect('index.php?p=' . $_GET['p']);
            }else{
	        	extract($_POST);
	            if (empty ( $title )) {
	            	$_SESSION ['message'] = LANG_REQUIRE;
	            } else {
	            	Tool :: editImage('product',ModelProduct);
	            }
            }
        }
        $data = array();
        // Load data
        if($_GET['id'] == 1)
        	$row = $this->row('select * from #__products where type = "curaprox" and id = "' . $_GET['id'] . '"');
        else
        	$row = $this->row('select * from #__products where type = "product" and id = "' . $_GET['id'] . '"');
        $data['categorys'] = $this->rows('select * from #__category');
		$data['row'] = $row;
		$data['uri'] = _path_image . 'product/small_' . $row ['hinh'];
		//print_r($row);
		if($_GET['id'] == 1)
			$this->view($_GET['p'] . '/view/editCuraprox', $data);
		else
        	$this->view($_GET['p'] . '/view/add', $data);
    }

    //publish
    function publish() {
        $this->query("Update #__products Set hide=if(hide='Y','N','Y') Where id=" . $_GET['id']);
        $this->redirect('index.php?p=' . $_GET['p']);
    }

    //publish
    function remove() {
        $row = $this->row('select * from #__tour where id = "' . $_GET['id'] . '"');
        $img = $row['image'];
        unlink("../upload/tour/" . $img);
        unlink("../upload/tour/small_" . $img);
        $this->query("Delete From #__tour Where id=" . $_GET['id']);
        $this->redirect('index.php?p=' . $_GET['p']);
    }

	//find
    function find() {
        $rowpage = PAGE_ROWS;
        $curpage = CUR_ROWS;
        $getpage = empty($_GET['page']) ? 1 : $_GET['page'];
        $offset = ($getpage - 1) * $rowpage;

        //if($getpage == 1)


        $sql = 'select * from #__tour where name like "%' . $_GET['id'] . '%" order by id desc';

        $num = $this->num($sql);

        $query = $num > 0 ? $sql . " Limit $offset, $rowpage" : $sql;

        $data['rows'] = $this->rows($query);

        // Load Paging
        $data['paging'] = Paging::load($getpage, $num, $rowpage, $curpage, "index.php?p=" . $_GET['p'] . "&q=" . $_GET['q'] . "&id=" . $_GET['id']);
        //Load Type

        $data['countrows'] = ($rowpage * $getpage) - $rowpage + 1;
        $this->view($_GET['p'] . '/view/list', $data);
    }

    //find
    function filter() {
        $rowpage = PAGE_ROWS;
        $curpage = CUR_ROWS;
        $getpage = empty($_GET['page']) ? 1 : $_GET['page'];
        $offset = ($getpage - 1) * $rowpage;

        //if($getpage == 1)

        $where = ($_GET['id'] > 0) ? 'where type = "' . $_GET['id'] . '"' : "";
        $sql = 'select * from #__tour ' .$where . ' order by id desc';
		//echo $sql;
        $num = $this->num($sql);

        $query = $num > 0 ? $sql . " Limit $offset, $rowpage" : $sql;

        $data['rows'] = $this->rows($query);

        // Load Paging
        $data['paging'] = Paging::load($getpage, $num, $rowpage, $curpage, "index.php?p=" . $_GET['p'] . "&q=" . $_GET['q'] . "&id=" . $_GET['id']);
        //Load Type

        $data['countrows'] = ($rowpage * $getpage) - $rowpage + 1;
        $this->view($_GET['p'] . '/view/list', $data);
    }
}

?>