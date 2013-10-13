<?php

if (!defined('DIR_APP'))
    die('Your have not permission');

class Order extends Module {

    function __construct() {
        global $db, $mod;
        $this->model($_GET['p'] . '/model/query');
    }

    function index() {
        $rowpage = PAGE_ROWS_ADMIN;
        $curpage = CUR_ROWS;
        $getpage = empty($_GET['page']) ? 1 : $_GET['page'];
        $offset = ($getpage - 1) * $rowpage;
        $sql = "select * from #__subcribe order by id desc";
        $num = $this->num($sql);
        $query = $num > 0 ? $sql . " Limit $offset, $rowpage" : $sql;
        $data['rows'] = $this->rows($query);
        $product_ids = Tool :: getColumns($data['rows'],'product_id');
        $sql = "select * from #__products where id IN (".implode(',', $product_ids).")";
        $data['products'] = Tool :: changeKey($this->rows($sql),'id');
		$category_ids = Tool :: getColumns($data['products'],'category_id');
		$sql = "select * from #__category where caid IN (".implode(',', $category_ids).")";
		$data['categorys'] = Tool :: changeKey($this->rows($sql),'caid');
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
            if (ModelOrder::delete($_POST['id'])) {
                $_SESSION['message'] = LANG_DELETE_SUCCESS;
            } else {
                $_SESSION['message'] = LANG_DELETE_SUCCESS;
            }
        }

        $this->redirect('index.php?p=' . $_GET['p']);
    }



    //publish
    function publish() {
        $this->query("Update #__subcribe Set approve=if(approve='Y','N','Y') Where id=" . $_GET['id']);
        $this->redirect('index.php?p=' . $_GET['p']);
    }

    //publish
    function remove() {
        $this->query("Delete From #__subcribe Where id=" . $_GET['id']);
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