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

		$('.expand').click(function() {
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
<h1>home</h1>
<ul>
<?php
foreach($products as $product) {
      $userAction = "<a href='products/add/".$product['Product']['id']."'><img src='/img/add.png'/></a>";
  foreach($usersProducts as $userProduct){
    if($userProduct['Product']['id']==$product['Product']['id']){
      $userAction = "<a href='products/delete/".$product['Product']['id']."'><img src='/img/delete.png'/></a>";
    }
  }
	echo "<li class='product home'>";
	echo "<span class='product_inner'>";
	echo "<a class='img_link' href='products/view/" . $product['Product']['id'] . "'><img class='product_image' src='" . $product['Product']['thumb_url'] . "' /></a>";
	echo "<span class='product_info'><a href='javascript:void(0)' class='expand'><img src='/img/up_arrow.png'/></a><p class='product_name'>" . $product['Product']['product_name'] . "</p>";
	echo "<p class='product_price'>" . $product['Product']['product_price'] . "</p>";
	echo "<p class='added_by'>added by <a href='/".$product['User']['username']."'>".$product['User']['username']."</a></p></span>";
	echo "<span class='expand_box'><p class='expand_links'><a href='".$product['Product']['product_url']."'><img src='/img/home.png'/></a> ".$userAction."</p></span></span>";
	echo "</li>";
}
?>
