<h1>Add Item</h1>
<?php
    echo $this->Form->create($items);
    echo $this->Form->control('name');
    echo $this->Form->control('description', ['rows' => '3']);
    echo $this->Form->control('image');
    echo $this->Form->button(__('Save Item'));
    echo $this->Form->end();
?>