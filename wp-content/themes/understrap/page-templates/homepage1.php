<?php
/**
 * Template Name: Homepage1
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>


<a href="#cd-nav" class="cd-nav-trigger">
  Menu<span><!-- used to create the menu icon --></span>
</a> <!-- .cd-nav-trigger -->

<main>
  
  <section class="cd-section index cd-selected">

<header>
            <section id="logo">
              <h1>EDOARDO FRANCESCO LIOTTA</h1>
            </section>
          </header>
    <?php if(false): ?>
    <header>&nbsp;

      <div class="cd-title">
        <h2>3D Bold Navigation</h2>

        <a href="http://codyhouse.co/?p=667">
          <span>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
              <polygon fill="#FFFFFF" points="15,7 4.4,7 8.4,3 7,1.6 0.6,8 0.6,8 0.6,8 7,14.4 8.4,13 4.4,9 15,9 "/>
            </svg>
          </span>
          Article &amp; Download
        </a>
      </div> <!-- .cd-title -->
    </header>

    <div class="cd-content">
    </div>
    <?php endif; ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'loop-templates/content', 'page' ); ?>
        
    <?php endwhile; // end of the loop. ?>

          <article id="contenuto">

              <ul>
                <li class="col-xs-12 col-sm-6 col-md-3"><img src="wp-content/themes/understrap/img/ps.png"></li>
                <li class="col-xs-12 col-sm-6 col-md-3"><img src="wp-content/themes/understrap/img/ai.png"></li>
                <li class="col-xs-12 col-sm-6 col-md-3"><img src="wp-content/themes/understrap/img/id.png"></li>
                <li class="col-xs-12 col-sm-6 col-md-3"><img src="wp-content/themes/understrap/img/web.png"></li>
            </ul>
          </article>
          <footer>
            <section id="social">
              <ul>
                <li class="col-xs-6 col-sm-3"><a href="http://www.facebook.it"><img src="wp-content/themes/understrap/img/facebook.png"></a></li>
                <li class="col-xs-6 col-sm-3"><a href="http://www.behance.com"><img src="wp-content/themes/understrap/img/behance.png"></a></li>
                <li class="col-xs-6 col-sm-3"><a href="#"><img src="wp-content/themes/understrap/img/email.png"></a></li>
                <li class="col-xs-6 col-sm-3"><a href="https://telegram.me/EdoardoLiotta"><img src="wp-content/themes/understrap/img/telegram.png"></a></li>
              </ul>
            </section>
          </footer>

  </section> <!-- .cd-section -->
</main>

<nav class="cd-nav-container" id="cd-nav">
  <header>
    <h3>Navigation</h3>
    <a href="#0" class="cd-close-nav">Close</a>
  </header>


  <?php
  wp_nav_menu(
    array(
      'menu' => 'main',
      'menu_class' => 'cd-nav',
    )
  );
  ?>


</nav>

<div class="cd-overlay"><!-- shadow layer visible when navigation is visible --></div>


<?php get_footer(); ?>