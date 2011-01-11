<h1>products</h1>
<ul>
<?php
foreach($products as $product) {
	echo "<li class='product'>";
	echo "<img class='product_image' src='" . $product['Product']['product_image'] . "' />";
	echo "<p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p>";
	echo "<a href='#' class='buy_now'>buy now</a>";
	echo "</li>";
}
?>
</ul>