<h1>collections</h1>
<a href="/collections/add">add a new collection</a>
<ul>
<?php
foreach($collections as $collection) {
echo "<li class='product'>";
echo "<span class='product_inner'>";
echo "<a class='img_link' href='/collections/view/" . $collection['Collection']['id'] . "'><img class='product_image' src='/" . $collection['CollectionsProduct'][0]['Product']['thumb_url'] . "' />";
echo "<span class='collection_info'>";
echo "<p class='collection_name'>" . $collection['Collection']['collection_name'] . "</p>";
echo"</a></span></span>";
echo "</li>";
}
?>
</ul>