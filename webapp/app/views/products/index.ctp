<script language="javascript">
$(document).ready(function() {
  $('.product').hover(function(){
    $(this).children('.product_info').slideDown('fast');
  }, function(){
    $(this).children('.product_info').slideUp('fast');
    });
});
</script>
<h1>products</h1>
<ul>
<?php
foreach($products as $product) {
	echo "<li class='product'>";
	echo "<img class='product_image' src='" . $product['Product']['product_image'] . "' />";
	echo "<span class='product_info'><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p></span>";
	echo "</li>";
}
?>
