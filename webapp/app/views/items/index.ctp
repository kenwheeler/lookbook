<h1>items</h1>
<ul>
<?php

foreach($items as $item) {
	echo "<li class='product'>";
	echo "<img class='product_image' src='" . $item['Item']['product_image'] . "' />";
	echo "<p class='product_name'>" . $item['Item']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $item['Item']['product_price'] . "</p>";
	echo "<a href='#' class='buy_now'>buy now</a>";
	echo "</li>";
}

?>
</ul>