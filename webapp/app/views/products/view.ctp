<?

echo "<h1>".$product[0]['Product']['product_name']."</h1>";
echo "<li class='product'>";
echo "<img src='" . $product[0]['Product']['product_image'] . "' />";
echo "<p>" . $product[0]['Product']['product_name'] . "</p>";
echo "<p>" . $product[0]['Product']['product_price'] . "</p>";
echo "<p>added by <a href='/". $product[0]['User']['username'] . "'>" . $product[0]['User']['username'] . "</a></p>";
echo "</li>";

?>