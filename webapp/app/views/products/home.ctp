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
	  $(this).find('.expand').children('img').attr("src","/img/up_arrow.png");
	  expandOpen = false;
	}
    });
	
});
</script>
<h1>home</h1>
<ul>
<?php
foreach($products as $product) {
	echo "<li class='product home'>";
	echo "<span class='product_inner'>";
	echo "<a class='img_link' href='products/view/" . $product['Product']['id'] . "'><img class='product_image' src='" . $product['Product']['thumb_url'] . "' /></a>";
	echo "<span class='product_info'><a href='users_products/add/" . $product['Product']['id'] . "' class='expand'><img src='/img/add.png'/></a><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p>";
	echo "<p class='added_by'>added by <a href='/".$product['User']['username']."'>".$product['User']['username']."</a></p></span></span>";
	echo "</li>";
}
?>
