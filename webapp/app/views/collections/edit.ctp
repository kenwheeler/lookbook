<script language="javascript">
$(document).ready(function() {
	
	$('.collection_image').each(function(){
		if($(this).attr('selected')=="true"){
			$(this).css('border', '2px solid #00bdf6');
		}
	})

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
		
		action = $('#CollectionEditForm').attr('action') + "/products:" + collection_string;;
		
		$('#CollectionEditForm').attr('action', action); 
		
		$('#CollectionEditForm').submit();
		
	})
});
</script>

<div id="editForm">

<?php

if($collection['Collection']['user_id']==$userId){

echo $form->create('Collection', array('action' => 'edit'));
echo $form->input('collection_name');
?>
<p>select products:</p>
<ul id="CollectionProductsBox">
<?
foreach($products as $product){
$selected = "false";
foreach($clproducts as $cl){
if($product['Product']['id']==$cl['Product']['id']){
$selected = "true";
}
}
	echo "<li><img class='collection_image' selected='".$selected."' pid=".$product['Product']['id']." src='/".$product['Product']['thumb_url']."'/></li>";
}
?>
</ul>
<?
echo $form->end('save');

}
?>
</div>