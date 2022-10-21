<?php

App::uses('AppController', 'Controller');

class FoodsController extends AppController {

	public $uses = array('Product', 'Category');

	public $components = array('Paginator');

	public $paginate = array(
		//'order' => 'RAND()',
		'limit' => 100
	);

	public $helpers = array('Form', 'Html');
	
	public function index(){
		$this->set('title_for_layout', "Online Shopping on Okearin - Foods");

		$this->Product->recursive = 1;

		$this->Paginator->settings = array(

						// Please Adjust this Category_ID Accordingly, Based on what Category you will fetch.
						// The ID currently corresponds to the Category Table ID field.
						// Basically the field belongs to Subcategory Table(Foreign key of Category)
						// Okechukwu Ezekiel. Web Applications Designer/Developer.

						'conditions' => array('Subcategory.Category_id' => 1),
          				//'order' => 'RAND()',
          				'limit' => 10
     					);

		$products = $this->Paginator->paginate(array());

		$this->Category->recursive = 2;
		$categories = $this->Category->find('all', array('conditions' => array('Category.title LIKE' => '%food%')));



		$this->set('products', $products);
		$this->set('categories', $categories);

		//echo debug($categories);
		
	}



	public function view($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));


	}


	public function lightbox($id = null) {

		$this->layout = 'lightbox';
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));


	}






}