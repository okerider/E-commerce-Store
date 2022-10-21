<?php
App::uses('AppController', 'Controller');
/**
 * Wholesales Controller
 *
 * @property Wholesale $Wholesale
 * @property PaginatorComponent $Paginator
 */
class WholesalesController extends AppController {

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
		$this->Wholesale->recursive = 0;
		$this->set('wholesales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Wholesale->exists($id)) {
			throw new NotFoundException(__('Invalid wholesale'));
		}
		$options = array('conditions' => array('Wholesale.' . $this->Wholesale->primaryKey => $id));
		$this->set('wholesale', $this->Wholesale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wholesale->create();
			if ($this->Wholesale->save($this->request->data)) {
				$this->Session->setFlash(__('The wholesale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wholesale could not be saved. Please, try again.'));
			}
		}
		$products = $this->Wholesale->Product->find('list');
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
		if (!$this->Wholesale->exists($id)) {
			throw new NotFoundException(__('Invalid wholesale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Wholesale->save($this->request->data)) {
				$this->Session->setFlash(__('The wholesale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wholesale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Wholesale.' . $this->Wholesale->primaryKey => $id));
			$this->request->data = $this->Wholesale->find('first', $options);
		}
		$products = $this->Wholesale->Product->find('list');
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
		$this->Wholesale->id = $id;
		if (!$this->Wholesale->exists()) {
			throw new NotFoundException(__('Invalid wholesale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Wholesale->delete()) {
			$this->Session->setFlash(__('The wholesale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wholesale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
