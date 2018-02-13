<?php 
	$data['image'] = get_sub_field('image') ? ' style="background-image:url(' . get_sub_field('image') . ')" ' : false;
	$data['text'] = get_sub_field('text') ? get_sub_field('text') : false;
?>

<!-- Home Page
==========================================-->
<div id="tf-home" class="text-center" <?php echo $data['image']; ?> >
    <div class="overlay">
        <div class="content">
        	<?php echo $data['text']; ?>
            <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>