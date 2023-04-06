<?php

add_theme_support( 'post-thumnails');

function breadcrumb() {
  global $post;
  $str = "" ;

  if(is_home()) {
    $str .= <<< EOM
    <div class="breadcrumb">
      <ul class="breadcrumb-list">
        <li class="breadcrumb-item">
          <a class="breadcrumb-link" href="#">ホーム</a>
        </li>
        <li class="breadcrumb-item">
          <a class="breadcrumb-link--current" href="">ねこブログ</a>
        </li>
      </ul>
    </div>
  EOM;
  }

  if(is_page( )) {
    $str .=<<< EOM
    <div class="breadcrumb-privacy ">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-item">
            <a class="breadcrumb-link" href="#">ホーム</a>
          </li>
          <li class="breadcrumb-item">
            <a class="breadcrumb-link--current" href="#">プライバシーポリシー</a>
          </li>
        </ul>
      </div>
    EOM;
  }


  echo $str;
}
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}


// wp_enqueue_style( $handle, $src, $deps, $ver, $media ); 
// wp_enqueue_style('name_style', get_template_directory_uri() . '/assets/css/reset.css','/assets/css/common.css', "/assets/css/page.css",array(), '1.0.0', 'screen and (max-width: 768px)');

// wp_enqueue_style('html5blank', false, array(), false, 'all and (max-width: 768px)');
