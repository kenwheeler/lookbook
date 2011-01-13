<h1>collections</h1>

<a href="collections/add">add a new collection</a>

<ul>
<?php

foreach($collections as $collection) {
	echo "<li>";
	echo "<p>" . $collection['Collection']['collection_name'] . "</p>";
	echo "</li>";
}

?>
</ul>