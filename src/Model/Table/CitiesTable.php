<?php
	
	namespace App\Model\Table;
	
	use Cake\ORM\Table;
	
	class CitiesTable extends Table
	{
		public function initialize(array $config)
		{
			$this->hasMany('Items');
			$this->addBehavior('Timestamp');
			
		}
	}
	