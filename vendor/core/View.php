<?php

namespace core;

class View {

    public $template = 'main';
    public $page;

    public function render() {
	include_once 'vendor/views/templates/' . $this->template . '.php';
    }

}
