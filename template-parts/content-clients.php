<?php 

$data['title'] = get_sub_field('title') ? get_sub_field('title') : '';
$data['title_strong'] = get_sub_field('title_strong') ? get_sub_field('title_strong') : '';
$data['backgroud'] = get_sub_field('backgroud') ? 'style="background-image: url('.get_sub_field('backgroud').')"' : '';
$data['clients'] = get_sub_field('clients') ? get_sub_field('clients') : false;

?>

<!-- Clients Section 		<<< - - -	Flexible field
==========================================-->
<div id="tf-clients" class="text-center" <?php echo $data['backgroud']; ?> >
    <div class="overlay">
        <div class="container">

            <div class="section-title center">
                <?php if ( strlen($data['title']) || strlen($data['title_strong']) ): ?>
                    <h2><?php echo $data['title'] ?> <strong><?php echo $data['title_strong'] ?></strong></h2>
                <?php endif ?>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div id="clients" class="owl-carousel owl-theme">
                <?php if ( is_array( $data['clients'] ) ): ?>
                    <?php foreach ($data['clients'] as $client): ?>
                        <div class="item">
                            <img src="<?php echo $client['url'] ?>">
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>

        </div>
    </div>
</div>