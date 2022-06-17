<?php

namespace App\Controllers;

abstract class Controller
{
    public $task;
    public $view;
    public $model;
    public function __construct($task)
    {
        $this->task = $task;
        $this->view = new \App\View\View($task);
        $this->model = $this->loadModel($task['controller']);
    }
    public function loadModel($modelName)
    {
        $modelName = ucfirst($modelName);
        $path = ROOT . "/Models/" . $modelName . ".php";
        if (file_exists($path)) {
            $modelClass = "\App\Models\\" . $modelName ;
            return new $modelClass();
        }
    }
}
