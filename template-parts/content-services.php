<?php 

$data['title'] = get_sub_field('title') ? get_sub_field('title') : '';
$data['title_strong'] = get_sub_field('title_strong') ? get_sub_field('title_strong') : '';
$data['desc'] = get_sub_field('desc') ? get_sub_field('desc') : '';
$data['services'] = get_sub_field('services') ? get_sub_field('services') : false;

?>
    <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <?php if ( strlen( $data['title'] ) || strlen( $data['title_strong'] ) ): ?>
                    <h2><?php echo $data['title'] ?> <strong><?php echo $data['title_strong'] ?></strong></h2>
                <?php endif ?>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em><?php echo $data['desc'] ?></em></small>
            </div>
            <div class="space"></div>
            <div class="row">
                <?php if ( is_array( $data['services'] ) ): ?>

                    <?php foreach ( $data['services'] as $key => $service ): ?>
                         <div class="col-md-3 col-sm-6 service">
                            <i class="fa <?php echo $service['icon']; ?>"></i>
                            <h4><strong><?php echo $service['title']; ?></strong></h4>
                            <p><?php echo $service['text']; ?></p>
                        </div>
                    <?php endforeach ?>
                   
                <?php endif ?>
            </div>
        </div>
    </div>