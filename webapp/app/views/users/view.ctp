<script language="javascript">
$(document).ready(function() {
  $('.product').hover(function(){
    $(this).children('.product_info').slideDown('fast');
  }, function(){
    $(this).children('.product_info').slideUp('fast');
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
	echo "<a href='products/view/" . $product['Product']['id'] . "'><img class='product_image' src='" . $product['Product']['product_image'] . "' /></a>";
	echo "<span class='product_info'><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p></span>";
	echo "</li>";
}
?>
<? else:?>
<h1>profile</h1>
<?
foreach($products as $product) {
	echo "<li class='product'>";
	echo "<a href='products/view/" . $product['Product']['id'] . "'><img class='product_image' src='" . $product['Product']['product_image'] . "' /></a>";
	echo "<span class='product_info'><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p></span>";
	echo "</li>";
}
?>
<? endif; ?>