<script language="javascript">
$(document).ready(function() {
	
  var expandOpen = false;
	
  $('.product').hover(function(){
    $(this).children('.product_inner').children('.product_info').slideDown('fast');
	expandOpen = false;
  }, function(){
    $(this).children('.product_inner').children('.product_info').slideUp('fast');
	if(expandOpen==true){
	$(this).animate({
	    scrollTop: [0, 'swing'],
	   },200);
	  $(this).find('.expand').html('more');
	  expandOpen = false;
	}
    });

	$('.expand').click(function() {
		
	  if(expandOpen==false) {	
	  $(this).parent('.product_info').parent('.product_inner').parent('.product').animate({
	    scrollTop: [50, 'swing'],
	   },200);
	  $(this).html('close');
	  expandOpen = true;
  		}
		else {
		$(this).parent('.product_info').parent('.product_inner').parent('.product').animate({
		    scrollTop: [0, 'swing'],
		   },200);
		  $(this).html('more');
		  expandOpen = false;
		}
	
	});
	
});
</script>
<? if($user['User']['username'] != $currentUser['User']['username']): ?>
<h1><?= $currentUser['User']['username']?></h1>
<? if($following): ?>
<? echo "<p>you are following " .$currentUser['User']['username']. "</p>"?>
<? else: ?>
<p><? echo $html->link('follow ' . $currentUser['User']['username'], array('controller'=>'friends', 'action'=>'add',$currentUser['User']['id'] )); ?></p>
<? endif; ?>
<?
foreach($products as $product) {
	echo "<li class='product'>";
	echo "<span class='product_inner'>";
	echo "<a class='img_link' href='products/view/" . $product['Product']['id'] . "'><img class='product_image' src='" . $product['Product']['product_image'] . "' /></a>";
	echo "<span class='product_info'><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p><a href='javascript:void(0)' class='expand'>more</a></span>";
	echo "<span class='expand_box'><p class='expand_links'> <a href='collections/add'>add product</a> <a href='products/delete'>delete product</a></p></span></span>";
	echo "</li>";
}
?>
<? else:?>
<h1>profile</h1>
<?
foreach($products as $product) {
	echo "<li class='product'>";
	echo "<span class='product_inner'>";
	echo "<a class='img_link' href='products/view/" . $product['Product']['id'] . "'><img class='product_image' src='" . $product['Product']['product_image'] . "' /></a>";
	echo "<span class='product_info'><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p><a href='javascript:void(0)' class='expand'>more</a></span>";
	echo "<span class='expand_box'><p class='expand_links'> <a href='products/delete'>delete product</a></p></span></span>";
	echo "</li>";
}
?>
<? endif; ?>