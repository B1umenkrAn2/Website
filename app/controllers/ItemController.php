<?php

namespace app\controllers;

use core\base\Controller;
use app\models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

        if ($keyword) {
            $items = (new Item())->search($keyword);
        } else {
            $items = (new Item)->where()->order(['id DESC'])->fetchAll();
        }

        $this->assign('title', 'all category');
        $this->assign('keyword', $keyword);
        $this->assign('items', $items);
        $this->render();
    }

    public function detail($id)
    {
        // 通过?占位符传入$id参数
        $item = (new Item())->where(["id = ?"], [$id])->fetch();

        $this->assign('title', 'details');
        $this->assign('item', $item);
        $this->render();
    }

    public function add()
    {
        $data['item_name'] = $_POST['value'];
        $count = (new Item)->add($data);

        $this->assign('title', 'success');
        $this->assign('count', $count);
        $this->render();
    }

    public function manage($id = 0)
    {
        $item = array();
        if ($id) {
            // 通过名称占位符传入参数
            $item = (new Item())->where(["id = :id"], [':id' => $id])->fetch();
        }

        $this->assign('title', 'manage');
        $this->assign('item', $item);
        $this->render();
    }

    public function update()
    {
        $data = array('id' => $_POST['id'], 'item_name' => $_POST['value']);
        $count = (new Item)->where(['id = :id'], [':id' => $data['id']])->update($data);

        $this->assign('title', 'update success');
        $this->assign('count', $count);
        $this->render();
    }

    public function delete($id = null)
    {
        $count = (new Item)->delete($id);

        $this->assign('title', 'delete success');
        $this->assign('count', $count);
        $this->render();
    }
}