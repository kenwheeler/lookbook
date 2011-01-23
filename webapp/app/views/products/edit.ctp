<div id="editForm">

<?php

if($product['Product']['user_id']==$userId){

echo $form->create('Product', array('action' => 'edit'));
echo $form->input('product_name');
echo $form->input('product_price');
echo $form->end('save');

}
?>
</div>