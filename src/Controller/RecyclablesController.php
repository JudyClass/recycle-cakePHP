<?php 
	
	namespace App\Controller;
	
	class RecyclablesController extends AppController
	{
		public function index()
		{
			$this->loadComponent('Paginator');
			$recyclables = $this->Paginator->paginate($this->Recyclables->find());
			$this->set(compact('recyclables'));
		}
	}