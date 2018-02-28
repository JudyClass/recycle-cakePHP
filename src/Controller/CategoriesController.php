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
	}