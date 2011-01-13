<h1>add collection</h1>
<?php

echo $form->create('Collection', array('action' => 'add'));
echo $form->input('collection_name');
echo $form->end('add collection');

?>