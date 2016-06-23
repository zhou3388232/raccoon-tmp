<?php
/*
Template Name:index
*/
?>

<?php get_header();?>
<body class="home">
    <h1>智能家居 - 深圳市洛酷信息科技有限公司</h1>
    <?php include(TEMPLATEPATH.'/menu.php');?>
    <div class="main">
        <div class="banner">
            <div class="btn">
                <a href="#" title="立即咨询">立即咨询</a>
            </div>
        </div>
        <div class="home-service">
            <?php 
                $postid = 29;
                $postinfo = get_post($postid);
                $title = $postinfo->post_title;
                $content = $postinfo->post_content;
            ?>
            <div class="title">
                <h2><?php echo $title; ?></h2>
                <span class="title-en"><?php echo $content; ?></span>
            </div>
            <div class="page-width">
                <div class="list">
                    <?php 
                        $postid = 34;
                        $postinfo = get_post($postid);
                        $content = $postinfo->post_content;
                        echo $content;
                    ?>
                </div>
            </div>
        </div>
        <div class="home-case">
            <?php 
                $postid = 30;
                $postinfo = get_post($postid);
                $title = $postinfo->post_title;
                $content = $postinfo->post_content;
            ?>
            <div class="title">
                <h2><?php echo $title; ?></h2>
                <span class="title-en"><?php echo $content; ?></span>
            </div>
            <div class="page-width">
                <div class="list">
                    <ul class="clearfix">
                        <?php
                            $args = array(
                            'showposts' => 3,
                            'tax_query' => array( 
                                array( 
                                    'taxonomy' => 'index_category',
                                     'terms' => '5' 
                                     ) 
                                ),
                            'order' => ASC
                            );
                            query_posts($args);
                            while(have_posts()):the_post();
                        ?>
                        <li class="clearfix">
                            <div class="pic">
                                <img alt="" src="<?php $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); echo $full_image_url[0];?>" />
                            </div>
                            <div class="text">
                                <div class="subtitle">
                                    <h4><?php the_title();?></h4>
                                </div>
                                <?php the_content();?>
                            </div>
                        </li>
                        <?php endwhile;wp_reset_query();?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="home-process">
            <div class="title">
                <h2><?php echo $title; ?></h2>
                <span class="title-en"><?php echo $content; ?></span>
            </div>
            <div class="page-width">
                <?php 
                    $postid = 31;
                    $postinfo = get_post($postid);
                    $title = $postinfo->post_title;
                    $content = $postinfo->post_content;
                ?>
                <div class="list">
                    <?php 
                        $postid = 33;
                        $postinfo = get_post($postid);
                        $content = $postinfo->post_content;
                        echo $content;
                    ?>
                </div>
            </div>
        </div>
        <div class="home-partner">
            <?php 
                $postid = 32;
                $postinfo = get_post($postid);
                $title = $postinfo->post_title;
                $content = $postinfo->post_content;
            ?>
            <div class="title">
                <h2><?php echo $title; ?></h2>
                <span class="title-en"><?php echo $content; ?></span>
            </div>
            <div class="page-width">
                <div class="list">
                    <ul class="clearfix">
                        <?php 
                            for ($x=0; $x<15; $x++) {
                              echo "<li><div></div></li>";
                            } 
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.97074.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script type="text/javascript">
        (function($){
            $(function() {
                $('.home-partner .list ul li ').each( function() { $(this).hoverdir(); } );
            });
        })(jQuery);
    </script>
<?php get_footer();?>