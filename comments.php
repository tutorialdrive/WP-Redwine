
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

<ol class="">
  
  <li class="post-stub">
    <?php comments_template( $file, $separate_comments ); ?>
  </li>
  
  
</ol>
</div>
</div>
</header>
<!-- Related demos -->
          <!--          <section class="related">
          
        </section>-->
      </div>
      <?php get_footer(); ?>