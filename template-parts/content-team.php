<?php 

$data['title'] = get_sub_field('title') ? get_sub_field('title') : '';
$data['title_strong'] = get_sub_field('title_strong') ? get_sub_field('title_strong') : '';
$data['image'] = get_sub_field('image') ? ' style="background-image: url('.get_sub_field('image').')"' : false;
$data['workers'] = get_sub_field('workers') ? get_sub_field('workers') : false;

?>
    <!-- Team Page 		<<< - - -	Flexible field + Custom post Types
    ==========================================-->
    <div id="tf-team" class="text-center" <?php echo $data['image']; ?> >
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <?php if ( strlen($data['title']) || srtlen($data['title_strong']) ): ?>
                        <h2><?php echo $data['title']; ?> <strong><?php echo $data['title_strong']; ?></strong></h2>
                    <?php endif ?>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <?php if ( is_array( $data['workers'] ) ): ?>
                <div id="team" class="owl-carousel owl-theme row">
                    <?php foreach ($data['workers'] as $worker ): ?>
                        <div class="item">
                            <div class="thumbnail">
                                <?php if ( strlen( $worker['image'] ) ): ?>
                                    <img src="<?php echo $worker['image'];?>" alt="..." class="img-circle team-img">
                                <?php endif ?>
                                <div class="caption">
                                    <h3><?php echo $worker['name'];?></h3>
                                    <p><?php echo $worker['position'];?></p>
                                    <p><?php echo $worker['text'];?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>