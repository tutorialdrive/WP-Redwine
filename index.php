
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
  <h1 class="post-title"><a href="<?php echo get_option('home'); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>

  <!-- <p class="post-date">Published <time datetime="Sat Mar 08 2014 18:51:27 GMT+0530 (UTC)">July 2015</time> <strong>by <a href="#!">John Doe</a></strong></p> -->
</header>

<?php while ( have_posts() ) : the_post(); ?>
  <h3><?php the_title(); ?></h3>
  <?php the_content(); ?>
<?php endwhile; // end of the loop. ?>

<p class="post-date">Tags: <?php echo get_the_tag_list(); ?></p>

<ul class="commentlist">
<?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
</ul>


<footer class="post-footer clearfix">
  <!-- <p class="post-tags"><span>Tagged:</span> <a href="/ghostwriter/tag/introductions/">Introductions</a></p> -->

  <!-- <div class="share">
    <a class="icon-twitter" href="http://twitter.com/share?text=Introducing%20Ghostwriter&amp;url=http://ghost.jollygoodthemes.com/ghostwriter/introducing-ghostwriter/" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
      <i class="fa fa-twitter"></i>
      <span class="hidden">Twitter</span>
    </a>

    <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://ghost.jollygoodthemes.com/ghostwriter/introducing-ghostwriter/" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
      <i class="fa fa-facebook"></i>
      <span class="hidden">Facebook</span>
    </a>

    <a class="icon-google-plus" href="https://plus.google.com/share?url=http://ghost.jollygoodthemes.com/ghostwriter/introducing-ghostwriter/" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
     <i class="fa fa-google-plus"></i>
     <span class="hidden">Google+</span>
   </a>
 </div> -->
</footer>

</div>
</div>
</header>
<!-- Related demos -->
          <!--          <section class="related">
          
        </section>-->
      </div>
      <?php get_footer(); ?>