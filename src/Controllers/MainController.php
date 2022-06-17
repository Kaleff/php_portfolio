<?php

namespace App\Controllers;

class MainController extends Controller
{
    public function indexAction()
    {
        $productList = $this->model->getDatabaseInfo();
        $this->view->render($productList);
    }
}
