<?php
/*
Template Name: Projects Page template
*/
?>

<?php get_header(); ?>
<div class="homebanner">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>Digital History Portfolio</h1>
        <h2>Amanda Regan</h2>
      </div>
    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->

<?php $featured_posts = get_posts('category=8&posts_per_page=15'); ?>
<div class="container">
	<?php foreach($featured_posts as $post) { ?>
		<div class="row" id="project">
			<div class="col-md-3" id="projecthumb">
				<?php echo get_the_post_thumbnail($post->ID, 'thumbnail')?>
			</div>
			<div class="col-md-9" id="projectitle">
				<h2 class="title"><?php echo $post->post_title; ?></h2>
				<p class="projectext"><?php echo $post->post_content; ?></p>
			</div>
		</div>
		<?php } ?>
</div>







<?php get_footer(); ?>
