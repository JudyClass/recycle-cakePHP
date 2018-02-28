<?php 
	
	namespace App\Controller;
	
	class ItemsController extends AppController
	{
		public function index()
		{
			$this->loadComponent('Paginator');
			$items = $this->Paginator->paginate($this->Items->find());
			$this->set(compact('items'));
		}
	}