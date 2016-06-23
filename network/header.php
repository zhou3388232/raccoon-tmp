<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <!-- <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/aaoo_48X48.ico" type="images/x-icon"/> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/main.css" media="(min-width: 769px)">
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile.css" media="(max-width: 768px)"> -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://www.raccoon-tech.com/wp-content/themes/raccon/main.css">
    <script src="http://cdn.bootcss.com/modernizr/2010.07.06dev/modernizr.min.js"></script>
    <![endif]-->
    <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
    <?php wp_head();?>
</head>   