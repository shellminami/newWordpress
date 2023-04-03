<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>
<body>
  <?php get_template_part('header'); ?>

  <main class="main">
    <!-- breadcrumb -->
    <?php breadcrumb(); ?>
    <div class="heading-body">
      <div class="heading-title__thumb"></div>
      <div class="heading-title">
        <h1 class="heading-title__name">ねこブログ</h1>
        <div class="heading-title__sub">blog</div>
      </div>
    </div>

  <!-- category -->
  <div class="category">
    <ul class="category-list">

      <?php $is_blog_page = is_home( ); ?>
      <li class="<?php echo $is_blog_page ?"category-list__item--current" : "category-list__item"; ?>">
        <a class="<?php echo $is_blog_page ? "category-list__link--current" : "category-list__link"; ?>" href="#">すべて</a>
      </li>
      <!-- 全てはカテゴリー内で作成できないため残しておく -->
      <?php 
      $categories = get_categories( ['hide_empty' => 0]);/* hide_emptyはカテゴリーカウント0のこと*/
      foreach($categories as $category):
      ?>
        <?php if($category->term_id === 1) continue; ?>
        <!-- term_id === 1は未分類(表示しないように) -->
        <li class="category-list__item">
          <a class="category-list__link" href="#"><?php echo $category->name ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>

  
  <!-- 表 -->
  <div class="blog-area">
    <?php if(have_posts()):?>
      <ul class="blog__list">
        <?php while(have_posts()) : the_post( ); ?>

          <li class="blog__item">
            <?php
            if(has_post_thumbnail( )){
              the_post_thumbnail( 'thumbnail', ['class'=>'blog__thumnail' ]);} 
              else {
                $template_link = get_template_directory_uri( );
                echo "<img class=\"blog__thumnail\" src=\"${template_link}/assets/images/common/noimage.png\" alt=\"NO image\">";
              }?>

                <div class="blog__feature">
                  <div class="blog__intro">
                    <div class="blog__date"><?php echo get_the_date( 'Y-m-d');?> </div>

                   <?php
                    $posttags = get_the_tags();

                    if($posttags[0]) {
                      $classname = $posttags[0]->term_id === 3 ? "blog__catch--emphasis" : "blog__catch";
                      echo "<div class={$classname}>{$posttags[0]->name}</div>";
                    }
                  ?>

                  </div>
                  <div class="blog__detail">
                    <a class="blog__title" href="<?php the_permalink();?>">
                      <?php the_title( );?>
                    </a>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>

  <!-- pagenation -->
  <div class="pagenation">
    <ul class="pagenation-list">
      <li class="pagenation-item">
        <a class="pagenation-link--prev" href="#">
          <div class="pagenation-link--prev_text">前へ</div>
        </a>
      </li>
      <li class="pagenation-item">
        <a class="pagenation-link--current" href="#">1</a>
      </li>
      <li class="pagenation-item">
        <a class="pagenation-link" href="#">2</a>
      </li>
      <li class="pagenation-item">
        <a class="pagenation-link" href="#">3</a>
      </li>
      <li class="pagenation-item">
        <a class="pagenation-link--dot" href="#">...</a>
      </li>
      <li class="pagenation-item">
        <a class="pagenation-link" href="#">7</a>
      </li>
      <li class="pagenation-item">
        <a class="pagenation-link--next" href="#">
          <div class="pagenation-link--next_text">次へ</div>
        </a>
      </li>
      
    </ul>
  </div> 
  </main>
  
  <?php get_template_part('footer'); ?>

  
</body>
</html>
