<?php
$args = array(
);
?>
<?php $getposts = new WP_query($args); 
      $title = 'xmx';
?>
<?php
global $wp_query;
$wp_query->in_the_loop = true;
?>
<!DOCTYPE html>

<html>
    <head>
        <title>module 009</title>
        <meta charset="UTF-8">

    </head>

    <body>   
        <div class="type-011-contact">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php if(get_the_title() == $title){?>
                    <div class="sp">
                        <a href="<?php the_permalink(); ?>" class="sphv">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
                        </a>
                    </div>
                    <?php }
                endwhile;
                wp_reset_postdata();
                ?>
                </div>
        </div>

    </body>
</html>                                    
