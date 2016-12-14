<?php

class MyCustomHelperRedirector extends \Phalcon\Tag {

    public static function RedirectNotFound() {
        /* return $this->dispatcher->forward(array(
              'module' => 'b2b',
              'controller' => 'moddesktop',
              'action' => 'index',
              )); */
        $di = \Phalcon\DI::getDefault();
        $di->controller_params_array['objcontroller']->response->redirect($di->controller_params_array['site_index_path']);
        $di->controller_params_array['objcontroller']->view->disable();
        return;
    }
    
    public static function RedirectToPage($redirecturl) {
        $di = \Phalcon\DI::getDefault();
        $di->controller_params_array['objcontroller']->response->redirect($redirecturl);
        $di->controller_params_array['objcontroller']->view->disable();
        return;
    }

}
