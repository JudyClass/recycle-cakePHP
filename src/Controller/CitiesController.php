<?php 
	
	namespace App\Controller;
	
	class CitiesController extends AppController
	{
		public function index()
		{
			$this->loadComponent('Paginator');
			$cities = $this->Paginator->paginate($this->Cities->find());
			$this->set(compact('cities'));
		}
	}