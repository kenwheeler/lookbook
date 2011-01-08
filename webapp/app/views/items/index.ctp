<h1>Your Items</h1>
<ul>
<?php

foreach($items as $item) {
	echo "<li class='product'>";
	echo "<img class='product_image' src='" . $item['Item']['product_image'] . "' height='175px'/>";
	echo "<p class='product_name'>" . $item['Item']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $item['Item']['product_price'] . "</p>";
	echo "</li>";
}

?>
</ul>