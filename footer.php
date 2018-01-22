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

$footer['copytext'] = get_field('footer_copy_text', 'options') ? get_field('footer_copy_text', 'options') : '';
$footer['footer_designer'] = get_field('footer_designer', 'options') ? true : false;
$footer['footer_developer'] = get_field('footer_developer', 'options') ? true : false;
$footer['footer_social'] = get_field('footer_social', 'options') ? get_field('footer_social', 'options')  : false;

if( $footer['footer_designer'] ) {

	$footer['footer_designer_name'] = get_field('footer_designer_name', 'options') ? get_field('footer_designer_name', 'options') : '';

	$footer['footer_designer_url'] = get_field('footer_designer_url', 'options') ? get_field('footer_designer_url', 'options') : '';

	$desinger_link = ' Designed by <a href="' . $footer['footer_designer_url'] . '">' . $footer['footer_designer_name'] . '</a>';
} else {
	$desinger_link = false;
}

if( $footer['footer_developer'] ) {
	$develop_link = '';
	if ( $desinger_link ) {
		$develop_link .= 'and';
	}
	$footer['footer_developer_name'] = get_field('footer_developer_name', 'options') ? get_field('footer_developer_name', 'options') : '';

	$footer['footer_developer_url'] = get_field('footer_developer_url', 'options') ? get_field('footer_developer_url', 'options') : '';

	$develop_link .=  ' Coded by <a href="' . $footer['footer_developer_url'] . '">' . $footer['footer_developer_name'] . '</a>';

} else {
	$develop_link = false;
}
?>

<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>
            	<?php echo $footer['copytext']; ?>
            	<?php echo $desinger_link ? $desinger_link : ''; ?>
            	<?php echo $develop_link ? $develop_link : '' ?>
            </p>
        </div>
        <div class="pull-right fnav">
        	<?php if ( is_array( $footer['footer_social'] ) ): ?>
            <ul class="footer-social">
            	<?php foreach ($footer['footer_social'] as $item): ?>
	            	<li>
	            		<a href="<?php echo $item['url']; ?>">
	            			<i class="fa <?php echo $item['icon']; ?>"></i>
	            		</a>
	            	</li>
            	<?php endforeach ?>
            </ul>
        	<?php endif ?>
        </div>
    </div>
</nav>

<?php wp_footer(); ?>

</body>
</html>
