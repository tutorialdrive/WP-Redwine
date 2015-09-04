
<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>
<?php get_sidebar(); ?>


<ul class="site-nav">
	<?php 
	wp_nav_menu( array(
		'container' =>false,
		'menu_class' => 'site-nav-item',
		'echo' => true,
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'theme_location' => 'menu-top-quick-navigation',
		'depth' => 0,
		'walker' => new description_walker())
	);
	?>
  <!-- <li class="site-nav-item"><a class="js-ajax-link" title="Latest Post" href="">Latest Post</a></li>
  <li class="site-nav-item"><a class="js-ajax-link js-show-index" title="Browse Posts" href="">Browse Posts</a></li>
  <li class="site-nav-item"><a class="js-ajax-link" title="About" href="">About</a></li>
  <li class="site-nav-item"><a class="js-ajax-link" title="Contact" href="contact.html">Contact</a></li> -->
</ul>
<header class="post-header">
	<h1 class="post-title"><?php echo get_bloginfo( 'name' ); ?></h1>

	<!-- <p class="post-date">Published <time datetime="Sat Mar 08 2014 18:51:27 GMT+0530 (UTC)">July 2015</time> <strong>by <a href="#!">John Doe</a></strong></p> -->
</header>

<ol style="list-style: none;" class="">
	<?php


	$args = array( 'posts_per_page' => 5 );

	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li class="post-stub">
		<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
			<h4 class="post-stub-title"><strong><?php the_title(); ?></strong></h4>
			<span class="postlist">By <?php the_author(); ?> On <?php echo get_the_date(); ?></span>
    <!-- <a title="How do you run distributed standups?" href="/writing/distributed-standups/">
      <h4 class="post-stub-title">How do you run distributed standups?</h4>
      <time class="post-stub-date" datetime="2015-06-04 08:08:00-05:00">June 04, 2015</time>
  </a> -->
</li>
<?php endforeach; 
wp_reset_postdata();?>

</ol>
</div>
</div>

<?php
$defaults = array(
	'before'           => '<p>' . __( 'Pages:' ),
	'after'            => '</p>',
	'link_before'      => '',
	'link_after'       => '',
	'next_or_number'   => 'number',
	'separator'        => ' ',
	'nextpagelink'     => __( 'Next page' ),
	'previouspagelink' => __( 'Previous page' ),
	'pagelink'         => '%',
	'echo'             => 1
	);

wp_link_pages( $defaults );

?>


<div style="text-align:center;">
	<?php posts_nav_link( ' &#183; ', 'previous page', 'next page' ); ?>
</div>

<div class="navigation">
	<?php paginate_comments_links(); ?> 
</div>

<ol class="commentlist">
	<?php wp_list_comments(); ?>
</ol>

<div class="navigation">
	<?php paginate_comments_links(); ?> 
</div>
</header>
<!-- Related demos -->
          <!--          <section class="related">
          
      </section>-->
  </div>
  <?php get_footer(); ?>