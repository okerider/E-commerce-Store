<?php
App::uses('AppController', 'Controller');
/**
 * Submenus Controller
 *
 * @property Submenu $Submenu
 * @property PaginatorComponent $Paginator
 */
class SubmenusController extends AppController {


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
		$this->Submenu->recursive = 0;
		$this->set('submenus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Submenu->exists($id)) {
			throw new NotFoundException(__('Invalid submenu'));
		}
		$options = array('conditions' => array('Submenu.' . $this->Submenu->primaryKey => $id));
		$this->set('submenu', $this->Submenu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Submenu->create();
			if ($this->Submenu->save($this->request->data)) {
				$this->Session->setFlash(__('The submenu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submenu could not be saved. Please, try again.'));
			}
		}
		$menus = $this->Submenu->Menu->find('list');
		$this->set(compact('menus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Submenu->exists($id)) {
			throw new NotFoundException(__('Invalid submenu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Submenu->save($this->request->data)) {
				$this->Session->setFlash(__('The submenu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submenu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Submenu.' . $this->Submenu->primaryKey => $id));
			$this->request->data = $this->Submenu->find('first', $options);
		}
		$menus = $this->Submenu->Menu->find('list');
		$this->set(compact('menus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Submenu->id = $id;
		if (!$this->Submenu->exists()) {
			throw new NotFoundException(__('Invalid submenu'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Submenu->delete()) {
			$this->Session->setFlash(__('The submenu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The submenu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
