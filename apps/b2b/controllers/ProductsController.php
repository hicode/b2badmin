<?php

namespace B2b\Controllers;

use B2b\Models\Products as Products;

class ProductsController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
		$this->view->setVar('product', Products::findFirst());
	}

}