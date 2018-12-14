<?php

namespace controllers;

use core\controllers\Main as baseMain;
use models\Articles;

class Main extends baseMain {
    
    public function __construct() {
	parent::__construct();
	$this->model = new Articles();
    }

    public function index() {
	$this->view->articles = $this->model->getAll();
	$this->view->render();
    }

}
