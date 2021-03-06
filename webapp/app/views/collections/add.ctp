<script language="javascript">
$(document).ready(function() {

	$('.collection_image').click(function(){
		if($(this).attr('selected')=="false"){
		$(this).css('border', '2px solid #00bdf6');
		$(this).attr('selected', 'true');
		}
		else {
		$(this).css('border', '2px solid #565656');
		$(this).attr('selected', 'false');
		}
	})
	
	$('input[type=submit]').click(function(e){
		e.preventDefault();
		var collection_items = new Array;
		var collection_string = "";
		$('.collection_image[selected=true]').each(function(index){
			collection_items[index]=$(this).attr('pid');
		})
		
		for(i=0;i<collection_items.length;i++){
			if(i==(collection_items.length - 1)){
			collection_string += collection_items[i];	
			}
			else{
			collection_string += collection_items[i] + "|";
			}
		}
		
		action = $('#CollectionAddForm').attr('action') + "/products:" + collection_string;;
		
		$('#CollectionAddForm').attr('action', action); 
		
		$('#CollectionAddForm').submit();
		
	})
});
</script>

<h1>add collection</h1>
<?php

echo $form->create('Collection', array('action' => 'add'));
echo $form->input('collection_name', array('label'=>'collection name'));
?>
<p>select products:</p>
<ul id="CollectionProductsBox">
<?
foreach($products as $product){
	echo "<li><img class='collection_image' selected='false' pid=".$product['Product']['id']." src='/".$product['Product']['thumb_url']."'/></li>";
}
?>
</ul>
<?

echo $form->end('add collection');

?>