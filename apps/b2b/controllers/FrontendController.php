<?php

namespace B2b\Controllers;

class FrontendController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        
    }
    public function route404Action()
    {
        $this->view->setLayout('layoutblank');
    }
    public function generalexceptionerrorAction()
    {
        $this->view->setLayout('layoutblank');
    }

}
