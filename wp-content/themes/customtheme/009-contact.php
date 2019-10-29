
<!DOCTYPE html>

<html>
    <head>
        <title>module 009</title>
        <meta charset="UTF-8">

    </head>

    <body>   
        <div class="type-009-contact">
                <div class="row">
                    <?php
                    $args = array(
                        'posts_per_page' => 10,
                        'post_status' => 'publish',
                        'post_type' => 'product',
                        'orderby' => 'meta_value_num',
                    );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php
                    global $wp_query;
                    $wp_query->in_the_loop = true;
                    ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <ul class="products columns-4">
                        <li>
                            <div class="sp">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>
                            </a>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="price-product"><?php echo $product->get_price_html(); ?></div>
                            <!--<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a>-->
                        </div>
                        </li>
                        
                    </ul>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

    </body>
</html>                                    
