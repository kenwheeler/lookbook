<?

echo "<h1>".$product[0]['Product']['product_name']."</h1>";
echo "<li class='product_page'>";
echo "<img src='/" . $product[0]['Product']['product_image'] . "' />";
echo "<p>" . $product[0]['Product']['product_name'] . "</p>";
echo "<p>" . $product[0]['Product']['product_price'] . "</p>";
echo "<p>added by <a href='/". $product[0]['User']['username'] . "'>" . $product[0]['User']['username'] . "</a></p>";
$fbURL = 'http://sandbox.mediahive.com/products/view/'. $product[0]['Product']['id'];
echo $facebook->share($fbURL, array('style' => 'link', 'label' => 'share to facebook'));
echo "</li>";

?>