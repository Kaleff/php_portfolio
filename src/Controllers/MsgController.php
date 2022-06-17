<?php

namespace App\Controllers;

class MsgController extends Controller
{
    public $newProduct;
    public function addAction()
    {
        $this->model->addNewItem($_POST);
        $this->view->render($_POST);
    }
}
