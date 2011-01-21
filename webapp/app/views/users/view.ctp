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
		  $(this).find('.expand_profile').children('img').attr("src","/img/up_arrow.png");
		  expandOpen = false;
		}
	    });

		$('.expand_profile').click(function() {
		  if(expandOpen==false) {	
		  $(this).parent('.product_info').parent('.product_inner').parent('.product').animate({
		    scrollTop: [50, 'swing'],
		   },200);
		  $(this).children('img').attr("src","/img/down_arrow.png");
		  expandOpen = true;
	  		}
			else {
			$(this).parent('.product_info').parent('.product_inner').parent('.product').animate({
			    scrollTop: [0, 'swing'],
			   },200);
			  $(this).children('img').attr("src","/img/up_arrow.png");
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
  $userAction = "<a href='users_products/add/".$product['Product']['id']."'><img src='/img/add.png'/></a>";
foreach($usersProducts as $userProduct){
if($userProduct['Product']['id']==$product['Product']['id']){
  $userAction = "<a href='products/delete/".$product['Product']['id']."'><img src='/img/delete.png'/></a>";
}
}
	echo "<li class='product'>";
	echo "<span class='product_inner'>";
	echo "<a class='img_link' href='products/view/" . $product['Product']['id'] . "'><img class='product_image' src='" . $product['Product']['thumb_url'] . "' /></a>";
	echo "<span class='product_info'><a href='javascript:void(0)' class='expand_profile'><img src='/img/up_arrow.png'/></a><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p></span>";
	echo "<span class='expand_box'><p class='expand_links'><a href='".$product['Product']['product_url']."'><img src='/img/home.png'/></a>".$userAction."</p></span></span>";
	echo "</li>";
}
?>
<? else:?>
<h1>profile</h1>
<?
foreach($products as $product) {
	echo "<li class='product'>";
	echo "<span class='product_inner'>";
	echo "<a class='img_link' href='products/view/" . $product['Product']['id'] . "'><img class='product_image' src='" . $product['Product']['thumb_url'] . "' /></a>";
	echo "<span class='product_info'><a href='javascript:void(0)' class='expand_profile'><img src='/img/up_arrow.png'/></a><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p></span>";
	echo "<span class='expand_box'><p class='expand_links'><a href='".$product['Product']['product_url']."'><img src='/img/home.png'/></a><a href='products/delete/".$product['Product']['id']."'><img src='/img/delete.png'/></a></p></span></span>";
	echo "</li>";
}
?>
<? endif; ?>