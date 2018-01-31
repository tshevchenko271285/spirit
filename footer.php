<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spirit
 */
$data['copy_text'] = get_field('copy_text', 'option') ? get_field('copy_text', 'option') : '';
$data['desinger'] = get_field('show_desinger', 'option') ? get_field('show_desinger', 'option') : false;
$data['coder'] = get_field('show_coder', 'option') ? get_field('show_coder', 'option') : false;
$data['socials'] = get_field('socials', 'option') ? get_field('socials', 'option') : false;

if( $data['desinger'] ) {
	$data['desinger_name'] = get_field('desinger_name', 'option') ? get_field('desinger_name', 'option') : '';
	$data['desinger_url'] = get_field('desinger_url', 'option') ? get_field('desinger_url', 'option') : '';
}

if( $data['coder'] ) {
	$data['coder_name'] = get_field('coder_name', 'option') ? get_field('coder_name', 'option') : '';
	$data['coder_url'] = get_field('coder_url', 'option') ? get_field('coder_url', 'option') : '';
}


?>

<pre><?php var_dump($data); ?></pre>

<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p><?php echo $data['copy_text']; ?> <?php echo date('Y'); ?>. 
            	<?php if ( $data['desinger'] ): ?>
            		Designed by <a href="<?php echo $data['desinger_url'] ?>"><?php echo $data['desinger_name'] ?></a> 
            	<?php endif ?>
            	<?php if ( $data['desinger'] && $data['coder'] ): ?>
            		 and 
            	<?php endif ?>
            	<?php if ( $data['coder'] ): ?>
            		Coded by <a href="<?php echo $data['coder_url'] ?>"><?php echo $data['coder_name'] ?></a>
            	<?php endif ?>
            	 
            </p>
        </div>
        <?php if ( is_array( $data['socials'] ) ): ?>
        	<div class="pull-right fnav">
	            <ul class="footer-social">
	            	<?php foreach ($data['socials'] as $item): ?>
	                	<li>
	                		<a href="<?php echo $item['url'] ?>">
	                			<i class="fa <?php echo $item['icon'] ?>"></i>
	                		</a>
	                	</li>
	            	<?php endforeach ?>
	            </ul>
	        </div>
        <?php endif ?>
    </div>
</nav>
<?php wp_footer(); ?>
</body>
</html>
