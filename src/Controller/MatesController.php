<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class MatesController extends AppController
{

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow(['add', 'logout']);
	}

	public function login()
	{
		if ($this->request->is('post')) {
			$mate = $this->Auth->identify();
			if ($mate) {
				$this->Auth->setmate($mate);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid matename or password, try again'));
		}
	}

	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}

	public function isAuthorized($mate)
	{
		return true;
	}

	public function index()
	{
		$this->set('mates', $this->mates->find('all'));
	}

	public function view($id)
	{
		$mate = $this->mates->get($id);
		$this->set(compact('mate'));
	}

	public function add()
	{
		$mate = $this->mates->newEntity();
		if ($this->request->is('post')) {
			$mate = $this->mates->patchEntity($mate, $this->request->data);
			if ($this->mates->save($mate)) {
				$this->Flash->success(__('The mate has been saved.'));
				return $this->redirect(['action' => 'add']);
			}
			$this->Flash->error(__('Unable to add the mate.'));
		}
		$this->set('mate', $mate);
	}

}
