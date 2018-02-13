<?php 
	$data['image'] = get_sub_field('image') ? get_sub_field('image') : false;
	$data['small_title'] = get_sub_field('small_title') ? get_sub_field('small_title') : '';
	$data['big_title'] = get_sub_field('big_title') ? get_sub_field('big_title') : '';
	$data['big_title_strong'] = get_sub_field('big_title_strong') ? get_sub_field('big_title_strong') : '';
	$data['text'] = get_sub_field('text') ? get_sub_field('text') : '';
	$data['list'] = get_sub_field('list') ? get_sub_field('list') : false;
?>

<!-- About Us Page 		<<< - - -	Flexible field
==========================================-->
<div id="tf-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            	<?php if ($data['image']): ?>
                	<img src="<?php echo $data['image']; ?>" class="img-responsive">
            	<?php endif ?>
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                    	<?php if ( strlen( $data['small_title'] ) ): ?>
                        	<h4><?php echo $data['small_title']; ?></h4>
                    	<?php endif ?>

                    	<?php if ( strlen( $data['big_title'] ) ): ?>
                        	<h2><?php echo $data['big_title']; ?> 
                        		<?php if ( strlen( $data['big_title_strong'] ) ): ?>
	                        		<strong><?php echo $data['big_title_strong']; ?></strong>
                        		<?php endif ?>
                        	</h2>
                    	<?php endif ?>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <?php if ( strlen( $data['text'] ) ): ?>
                    	<p class="intro"><?php echo $data['text']; ?></p>
                    <?php endif ?>
                    <?php if ( is_array( $data['list'] ) ): ?>
	                    <ul class="about-list">
	                    	<?php foreach ($data['list'] as $item): ?>
		                        <li>
		                            <span class="fa fa-dot-circle-o"></span>
		                            <strong><?php echo $item['first_text']; ?></strong>
		                            <em><?php echo $item['last_text']; ?></em>
		                        </li>
	                    	<?php endforeach ?>
	                    </ul>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
