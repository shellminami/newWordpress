<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ねこブログ | ハンドメイド猫グッズのお店 l'atelier Queue
  </title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/common.css">
  <?php
    $template_link = get_stylesheet_directory_uri( );
    $stylesheet_link = "";
    
    if(is_home( )) {
      $stylesheet_link = "/assets/css/blog.css";
    } elseif (is_page()){
      $stylesheet_link = "/assets/css/page.css";
    } else {

    }
    echo "<link rel=\"stylesheet\" href=\"${template_link}/${stylesheet_link}\">";
  
  ?>

</head>