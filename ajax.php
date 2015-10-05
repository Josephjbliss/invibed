<?php
if(get_field("thumbnail")) {
	$post_thumbnail_url = get_field("thumbnail");
}
else{
	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
}
if($category == "explore") {
	$thecategory = get_the_category();
	$categoryname = $thecategory[1]->slug;
	if($categoryname == "explore") {
		$categoryname = $thecategory[0]->slug;
	}
}
else {
	$categoryname = $category; 
}

if (get_field("short_title")){
	$title = get_field("short_title");
}
else {
	if (strlen(get_the_title()) > 50) {
		$title = substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...'; 
    } 
	else {
		$title = get_the_title();
	}
}
?>
<a href="<?php the_permalink(); ?>">
<article class="cards">
<div class="cards-img" style="background-image: url(<?php echo $post_thumbnail_url;?>)"></div>
<header class="cards-header">
<h4><span class="fa <?php echo $categoryname; ?>"></span><?php echo $categoryname; ?></h4>
<h3><?php echo $title?></h3>
</header>
</article>
</a>