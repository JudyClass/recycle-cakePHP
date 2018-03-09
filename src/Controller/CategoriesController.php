<?php 
	
	namespace App\Controller;
	
	class CategoriesController extends AppController
	{
		public function index()
		{
			$this->loadComponent('Paginator');
			$categories = $this->Paginator->paginate($this->Categories->find());
			$this->set(compact('categories'));
		}

		public function view($id = null)
		{
			$categories = $this->Categories->findById($id)->first();
			$this->set(compact('categories'));
		}

		
		public function add()
    {
        $categories = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $categories = $this->Categories->patchEntity($categories, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $categories->user_id = 1;

            if ($this->Categories->save($categories)) {
                $this->Flash->success(__('Your category has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your category.'));
        }
        $this->set('categories', $categories);
    }
    
    public function edit($id)
		{
		    $categories = $this->Categories->findById($id)->first();
		    if ($this->request->is(['post', 'put'])) {
		        $this->Categories->patchEntity($categories, $this->request->getData());
		        if ($this->Categories->save($categories)) {
		            $this->Flash->success(__('Your category has been updated.'));
		            return $this->redirect(['action' => 'index']);
		        }
		        $this->Flash->error(__('Unable to update your category.'));
		    }
		
		    $this->set('categories', $categories);
		}
		public function search()
		{
		   $this->render('/Categories/index');
		}

	}