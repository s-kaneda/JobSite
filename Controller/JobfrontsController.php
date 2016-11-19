<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class JobfrontsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array(
        'Paginator'=>[
            'limit'=>5
        ],
        'Session',
    );    
    
     public  $uses = ['Job','Contact','Category','JobSearch']; //モデルを指定
    
    //コンポーネント:各コントローラーに使えるようにする
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
        $this->layout = 'front';
       
    }

    public function isAuthorized($user) {
//        parent::isAuthorized();
        //一覧表示と詳細表示は誰でも可能            
        if (in_array($this->action, array('index','view','login','logout'))) {
            return true;
        }  
        if($user['role'] ==='admin'){
            return true;
        }
        
        if($this->action === 'edit') {
            //ログインしたユーザーがeditアクションの時に編集しようとしてるユーザーとidが一致したらtrueを返す。   
            
            if( $this->params['pass'][0] === $user['id'])
            {
                return true;
            }
        }
        // adminは編集や削除や追加ができる //adminは上記以外のactionにアクセスできる
        return false;
    }        
    
    public function contact($id = null) {
        
        $job = $this->Job->findById($id);
        $this->set('job',$job);
            
        if ($this->request->is('post')) {
            
            $this->Contact->create();
            
            $this->Contact->set($this->request->data);
//            var_dump($this->request->data);
//            exit;
            if($this->Contact->validates()){
                //mailを送る
                $this->sendMail($this->request->data['Contact']);
                
                //フラッシュメッセージを出す
                $this->Flash->success('メールを送信しました');
                //応募詳細画面に戻る
                return $this->redirect(['action' => 'view',$id]);
            }
            
        }
        
        
    }
    
    public function confirm() {
        
        $contact = $this->Session->read('Contact');
//        var_dump($contact);
        
        $this->set('contact',$contact);
                
        if ($this->request->is('post')) {
            
            $this->sendMail($contact);
            // メール送信後 セッションデーターをクリアc
            $this->Session->delete('Contact');
            $this->Flash->success('メールを送信しました');             
            return $this->redirect(array('action' => 'contact'));            
        }
        
    }
                    
    private function sendMail($contact) {
//        var_dump($contact);
//        exit;
        // セッションからお問い合わせデーターを取得
        $Email = new CakeEmail('gmail');
        $Email->viewVars($contact);        
        $Email->template('contact');
        $Email->emailFormat('text');
        $Email->from(array('sobani.live311@gmail.com' => 'Jobsiteから'));
        $Email->to('sobani.live311@gmail.com');
        $Email->subject('応募');                
        $Email->send();                
    }
    
   

    public function wanted(){

        
        
        if ($this->request->is('post')) {
            $this->JobSearch->create();
            $this->JobSearch->set($this->request->data);
            if($this->JobSearch->validates()){
                $this->Paginator->settings = array(
                    'conditions' => array('Job.description LIKE' => '%'.$this->request->data['JobSearch']['keyword'].'%'),
                );
                
            } else {
                $this->Flash->danger('キーワードを入力してください');
                //
            }
        }
        
		$this->Job->recursive = 0;
        $jobs = $this->Paginator->paginate('Job'); //引数にモデル名を指定
        
        $category_list = $this->Category->find('list');

        $this->set('category_list', $category_list);
        $this->set('jobs', $jobs); 
    }
    
    public function view($id = null) {
        
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
        
	}
    
}
