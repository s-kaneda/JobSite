<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 */
class JobsController extends AppController {
         
/**
 * Components
 *
 * @var array
 */
	public $components = array(
        'Paginator'=>[
            'limit'=>5
        ],
        );
    
    public function beforeFilter(){
        parent::beforeFilter();
        $this->layout ='admin';
    }
    

    
/**
 * index method
 *
 * @return void
 */
	public function index() {
        
        $jobs = $this->Paginator->paginate();
		$this->Job->recursive = 0;
		$this->set('jobs', $jobs);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
        $this->loadModel('Category');
        $category_list = $this->Category->find('list');
        $this->set('category_list', $category_list);
//        var_dump($categcaory_list);
//        exit;
//        
		if ($this->request->is('post')) {
			$this->Job->create();
			if ($this->Job->save($this->request->data)) {
				$this->Flash->success(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The job could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->loadModel('Category');
        $category_list = $this->Category->find('list');
        $this->set('category_list', $category_list);
        
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Job->save($this->request->data)) {
				$this->Flash->success('編集完了しました');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->danger('削除できませんでした。もう一度トライして下さい。');
			}
		} else {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$this->request->data = $this->Job->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Job->id = $id;
		if (!$this->Job->exists()) {
			throw new NotFoundException(__('Invalid job'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Job->delete()) {
			$this->Flash->success(__('求人を削除しました'));
		} else {
			$this->Flash->error(__('求人を削除できませんでした。もう一度トライしてください'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
