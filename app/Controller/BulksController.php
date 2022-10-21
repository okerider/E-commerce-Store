<?php
App::uses('AppController', 'Controller');
/**
 * Bulks Controller
 *
 * @property Bulk $Bulk
 * @property PaginatorComponent $Paginator
 */
class BulksController extends AppController {

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
		$this->Bulk->recursive = 0;
		$this->set('bulks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bulk->exists($id)) {
			throw new NotFoundException(__('Invalid bulk'));
		}
		$options = array('conditions' => array('Bulk.' . $this->Bulk->primaryKey => $id));
		$this->set('bulk', $this->Bulk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bulk->create();
			if ($this->Bulk->save($this->request->data)) {
				$this->Session->setFlash(__('The bulk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bulk could not be saved. Please, try again.'));
			}
		}
		$products = $this->Bulk->Product->find('list');
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
		if (!$this->Bulk->exists($id)) {
			throw new NotFoundException(__('Invalid bulk'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bulk->save($this->request->data)) {
				$this->Session->setFlash(__('The bulk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bulk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bulk.' . $this->Bulk->primaryKey => $id));
			$this->request->data = $this->Bulk->find('first', $options);
		}
		$products = $this->Bulk->Product->find('list');
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
		$this->Bulk->id = $id;
		if (!$this->Bulk->exists()) {
			throw new NotFoundException(__('Invalid bulk'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bulk->delete()) {
			$this->Session->setFlash(__('The bulk has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bulk could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
