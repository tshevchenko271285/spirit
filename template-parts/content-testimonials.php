<?php 
$data['title'] = get_sub_field('title') ? get_sub_field('title') : '';
$data['title_strong'] = get_sub_field('title_strong') ? get_sub_field('title_strong') : '';
$data['testimonials'] = get_sub_field('testimonials') ? get_sub_field('testimonials') : false;
$data['bg'] = get_sub_field('image') ? 'style="background-image: url(' . get_sub_field('image') . ')"' : '';
?>

<!-- Testimonials Section 		<<< - - -	Flexible field
==========================================-->
<div id="tf-testimonials" class="text-center" <?php echo $data['bg'] ?> >
    <div class="overlay">
        <div class="container">
            <?php if ( strlen( $data['title'] ) || strlen( $data['title_strong'] ) ): ?>
            <div class="section-title center">
                <h2><strong>Our clients’</strong> testimonials</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <?php endif ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                	
                	<?php if ( is_array( $data['testimonials'] ) ): ?>
                	
                    <div id="testimonial" class="owl-carousel owl-theme">

						<?php foreach ($data['testimonials'] as $item): ?>
							
	                        <div class="item">
	                            <h5><?php echo $item['text'] ?></h5>
	                            <p><strong><?php echo $item['name'] ?></strong><?php echo $item['position'] ?></p>
	                        </div>

						<?php endforeach ?>

                    </div>

                    <?php endif ?>

                </div>
            </div>
        </div>
    </div>
</div>
