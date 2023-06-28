<?php
get_header();?>
<section class="product py-5">
            <div class="container">
                <div class="row gx-3 gy-3 g-sm-5 g-md-5">
                    
<?php
$args = array(
    'category_name' => 'uncategorized',
    'posts_per_page' => 10,  // Number of posts to display
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();?>
        
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="single-product">
                            <a href="<?php echo get_permalink();?>">
                                <img class="img-fluid px-4 py-4 rounded-3" style="background-color: #dddddd8a;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Woman Jacket">
                            </a>
                            <div class="product-details mt-3">
                                <h4 class="fw-bold"><?php the_title(); ?></h4>
                                <small class="d-inline-block my-1 custom-line-height text-muted fw-normal"><?php the_content(); ?></small>
                                <div class="buy-section d-flex justify-content-between">
                                    <h3 class="fw-bold" style="color: var(--secondery);">NPR <?php echo get_field('price');?></h3>
                                    <a href="<?php echo get_permalink();?>" class="btn btn-sm px-3 py-2 d-block text-white" id="button">
                                        <img width="24" src="<?php echo get_template_directory_uri();?>/pictures/icons/shopping-cart 1.png" alt="">
                                        View More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                
    <?php }
} else {
    // No posts found
}

// Restore original post data
wp_reset_postdata();
?>
</div>
            </div>
        </section>
        <?php get_footer();?>