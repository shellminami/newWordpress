<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>
<?php global $post ?>
<body <?php body_class("is-{$post->post_name}-page"); ?>>  
  <?php get_template_part('header'); ?>
  
  <main class="main">
    <!-- breadcrumb -->
    <?php breadcrumb(); ?>

    <?php
    if(have_posts()): 
      while(have_posts()): the_post(); 
    ?>

    <div class="heading-body">
      <div class="heading-title__thumb"></div>
      <div class="heading-title">
        <h1 class="heading-title__name">
          <?php the_title(); ?>
          <!-- <?php 
            if($post->post_name === "404-not-found") {
              echo "ページが<br class=\"pc-none\"/>見つかりません";
              echo "subtitle";
            } elseif($post->post_name === "bbb") {

            }
          ?> -->
        </h1>        
      </div>
    </div>

    <div class="page-content">
      <?php the_content(); ?>    
    </div>
    
    <?php
      endwhile;
      endif;
    ?>   
    
    <?php if(is_page('')); ?>
  </main>  
<?php get_template_part( 'footer'); ?>
  
</body>
</html>
