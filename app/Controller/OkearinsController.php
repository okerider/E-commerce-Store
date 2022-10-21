<?php

App::uses('AppController', 'Controller');

class OkearinsController extends AppController {

	public $helpers = array('Form', 'Html');
	
	public function home(){
		$this->set('title_for_layout', "Online Shopping on Okearin - Nigeria's largest Online Shopping Site");
	}





}