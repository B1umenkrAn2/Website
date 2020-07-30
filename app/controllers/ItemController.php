<?php

namespace app\controllers;

use core\base\Controller;
use app\models\Auser;

class ItemController extends Controller
{
    public function index()
    {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

        if ($keyword) {
            $items = (new Auser())->search($keyword);
        } else {
            $items = (new Auser)->where()->order(['id DESC'])->fetchAll();
        }

        $this->assign('title', 'all category');
        $this->assign('keyword', $keyword);
        $this->assign('items', $items);
        $this->render();
    }

    public function detail($id)
    {
        //  using ? for replace param
        $item = (new Auser())->where(["id = ?"], [$id])->fetch();

        $this->assign('title', 'details');
        $this->assign('item', $item);
        $this->render();
    }

    public function add()
    {
        $data['item_name'] = $_POST['value'];
        $count = (new Auser)->add($data);

        $this->assign('title', 'success');
        $this->assign('count', $count);
        $this->render();
    }

    public function manage($id = 0)
    {
        $item = array();
        if ($id) {
            $item = (new Auser())->where(["id = :id"], [':id' => $id])->fetch();
        }

        $this->assign('title', 'manage');
        $this->assign('item', $item);
        $this->render();
    }

    public function update()
    {
        $data = array('id' => $_POST['id'], 'item_name' => $_POST['value']);
        $count = (new Auser)->where(['id = :id'], [':id' => $data['id']])->update($data);
        $this->assign('title', 'update success');
        $this->assign('count', $count);
        $this->render();
    }

    public function delete($id = null)
    {
        $count = (new Auser)->delete($id);

        $this->assign('title', 'delete success');
        $this->assign('count', $count);
        $this->render();
    }
}