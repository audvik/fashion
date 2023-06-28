<?php
/**
 * The Template for displaying all single posts.
 */

get_header();?>
<section class="facility-section py-5">
  <div class="container">        
      <?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();?>
		<div class="card">
        <div class="card-body">
            <div class="row">
			<div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center">
					<img class="img-fluid px-4 py-4 rounded-3" style="background-color: #dddddd8a;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Woman Jacket">	
				</div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
					<h2 class="fw-bold">WOMAN JACKET</h2>
					<h3>Code: <small class="text-success">#<?php echo get_field('code');?></small></h3>
                    <h4 class="box-title">Product description</h4>
                    <p><?php the_content();?></p>
                    <h2 class="mt-5">
                        Rs.<?php echo get_field('price');?><small class="text-success px-4">(<?php echo mt_rand(10,30);?>%off)</small>
                    </h2>
                    <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                    <button class="btn btn-primary btn-rounded">COMING SOON</button>
                    <h3 class="box-title mt-5">Key Highlights</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i>Feature #1</li>
                        <li><i class="fa fa-check text-success"></i>Feature #..</li>
                        <li><i class="fa fa-check text-success"></i>Feature #N</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if(is_user_logged_in()==true) :
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		endif;
	endwhile;
endif;

wp_reset_postdata();

$count_posts = wp_count_posts();

if ( $count_posts->publish > '1' ) :
	$next_post = get_next_post();
	$prev_post = get_previous_post();
?>
<hr class="mt-5">
<div class="post-navigation d-flex justify-content-between">
	<?php
		if ( $prev_post ) {
			$prev_title = get_the_title( $prev_post->ID );
	?>
		<div class="pr-3">
			<a class="previous-post btn btn-lg btn-outline-secondary" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" title="<?php echo esc_attr( $prev_title ); ?>">
				<span class="arrow">&larr;</span>
				<span class="title"><?php echo wp_kses_post( $prev_title ); ?></span>
			</a>
		</div>
	<?php
		}
		if ( $next_post ) {
			$next_title = get_the_title( $next_post->ID );
	?>
		<div class="pl-3">
			<a class="next-post btn btn-lg btn-outline-secondary" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo esc_attr( $next_title ); ?>">
				<span class="title"><?php echo wp_kses_post( $next_title ); ?></span>
				<span class="arrow">&rarr;</span>
			</a>
		</div>
	<?php
		}
	?>
</div><!-- /.post-navigation -->
<?php
endif;
?>
  </div>
</section>
<?php
get_footer();
