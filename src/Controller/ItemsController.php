<?php 
	
	namespace App\Controller;
	
	class ItemsController extends AppController
	{
		public function initialize()
		{
		    parent::initialize();
		
		    $this->loadComponent('Search.Prg', [
		        // This is default config. You can modify "actions" as needed to make
		        // the PRG component work only for specified methods.
		        'actions' => ['index', 'lookup']
		    ]);
		}
		
		public function index()
		{
			$this->loadComponent('Paginator');
			//$items = $this->Paginator->paginate($this->Items->find());
			//$this->set(compact('items'));
			
			 $query = $this->Items
        // Use the plugins 'search' custom finder and pass in the
        // processed query params
        ->find('search', ['search' => $this->request->query]);
        // You can add extra things to the query if you need to
        //->contain(['Comments'])
        //->where(['title IS NOT' => null]);

    $this->set('items', $this->paginate($query));
		}
		
		public function view($id = null)
		{
			$items = $this->Items->findById($id)->first();
			$this->set(compact('items'));
		}
				
		public function add()
    {
        $items = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $items = $this->Items->patchEntity($items, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $items->user_id = 1;

            if ($this->Items->save($items)) {
                $this->Flash->success(__('Your item has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your item.'));
        }
        $this->set('items', $items);
        
        $categories = $this->Items->Categories->find('list');
        $this->set('items', $items);
        $this->set('categories', $categories);
    }
    
    public function edit($id)
		{
		    $items = $this->Items->findById($id)->first();
		    if ($this->request->is(['post', 'put'])) {
		        $this->Items->patchEntity($items, $this->request->getData());
		        if ($this->Items->save($items)) {
		            $this->Flash->success(__('Your item has been updated.'));
		            return $this->redirect(['action' => 'index']);
		        }
		        $this->Flash->error(__('Unable to update your item.'));
		    }
		
		    $this->set('items', $items);
		    
		    $categories = $this->Items->Categories->find('list');
        $this->set('items', $items);
        $this->set('categories', $categories);
		}
		public function search()
		{
		   $this->render('/Items/index');
		}
	}