<?php
	
	namespace App\Model\Table;
	
	use Cake\ORM\Table;
	
	class ItemsTable extends Table
	{
		public function initialize(array $config)
		{			
			$this->belongsTo('Categories');
			$this->addBehavior('Timestamp');
			$this->addBehavior('Search.Search');
			
			// Setup search filter using search manager
        $this->searchManager()
            ->value('name');
            // Here we will alias the 'q' query param to search the `Articles.title`
            // field and the `Articles.content` field, using a LIKE match, with `%`
            // both before and after.
           /* ->add('q', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['title', 'content']
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                }
            ]);*/
			
		}
	}
	
