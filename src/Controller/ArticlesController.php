<?php
<<<<<<< HEAD
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
	/**
	 * Index method
	 *
	 * @return \Cake\Http\Response|null
	 */
	public function index()
	{
		$articles = $this->paginate($this->Articles);

		$this->set(compact('articles'));
	}

	/**
	 * View method
	 *
	 * @param string|null $id Article id.
	 * @return \Cake\Http\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$article = $this->Articles->get($id);
		$this->set(compact('article'));

	}

	/**
	 * Add method
	 *
	 * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$article = $this->Articles->newEntity();
		if ($this->request->is('post')) {
			$article = $this->Articles->patchEntity($article, $this->request->getData());
			if ($this->Articles->save($article)) {
				$this->Flash->success(__('The article has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The article could not be saved. Please, try again.'));
		}
		$this->set(compact('article'));
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id Article id.
	 * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function beforeSave($event, $entity, $options)
	{
		if ($entity->isNew() && !$entity->slug) {
			$sluggedTitle = Text::slug($entity->title);
			// スラグをスキーマで定義されている最大長に調整
			$entity->slug = substr($sluggedTitle, 0, 191);
		}
	}
	public function edit($id = null)
	{
		$article = $this->Articles->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$article = $this->Articles->patchEntity($article, $this->request->getData());
			if ($this->Articles->save($article)) {
				$this->Flash->success(__('The article has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The article could not be saved. Please, try again.'));
		}
		$this->set(compact('article'));
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Article id.
	 * @return \Cake\Http\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$article = $this->Articles->get($id);
		if ($this->Articles->delete($article)) {
			$this->Flash->success(__('The article has been deleted.'));
		} else {
			$this->Flash->error(__('The article could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
=======

namespace App\Controller;

class ArticlesController extends AppController
{
    public function index(){
        $this->loasComponent('Paginater');
        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }
>>>>>>> origin/master
}
