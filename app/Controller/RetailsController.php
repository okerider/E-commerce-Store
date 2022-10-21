<?php
App::uses('AppController', 'Controller');
/**
 * Retails Controller
 *
 * @property Retail $Retail
 * @property PaginatorComponent $Paginator
 */
class RetailsController extends AppController {

	 function beforeFilter() {
    	parent::beforeFilter();
        	$this->layout = 'developer';
  	}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Retail->recursive = 0;
		$this->set('retails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Retail->exists($id)) {
			throw new NotFoundException(__('Invalid retail'));
		}
		$options = array('conditions' => array('Retail.' . $this->Retail->primaryKey => $id));
		$this->set('retail', $this->Retail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Retail->create();
			if ($this->Retail->save($this->request->data)) {
				$this->Session->setFlash(__('The retail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retail could not be saved. Please, try again.'));
			}
		}
		$products = $this->Retail->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Retail->exists($id)) {
			throw new NotFoundException(__('Invalid retail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Retail->save($this->request->data)) {
				$this->Session->setFlash(__('The retail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Retail.' . $this->Retail->primaryKey => $id));
			$this->request->data = $this->Retail->find('first', $options);
		}
		$products = $this->Retail->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Retail->id = $id;
		if (!$this->Retail->exists()) {
			throw new NotFoundException(__('Invalid retail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Retail->delete()) {
			$this->Session->setFlash(__('The retail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The retail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
