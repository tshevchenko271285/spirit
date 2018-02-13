<?php 
$data['title'] = get_sub_field('title') ? get_sub_field('title') : '';
$data['title_strong'] = get_sub_field('title_strong') ? get_sub_field('title_strong') : '';
$data['text'] = get_sub_field('text') ? get_sub_field('text') : '';
$data['number_of_items'] = get_sub_field('number_of_items') ? get_sub_field('number_of_items') : '';

?>
<!-- Portfolio Section
==========================================-->
<div id="tf-works" >
    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
            <?php if ( strlen( $data['title'] ) || strlen( $data['title_strong'] ) ): ?>
                <h2><?php echo $data['title'] ?><strong><?php echo $data['title_strong'] ?></strong></h2>
            <?php endif ?>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em><?php echo $data['text']; ?></em></small>
        </div>
        <div class="space"></div>

        <div class="categories">
            
            <ul class="cat">
                <li class="pull-left"><h4>Filter by Type:</h4></li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <?php $args = array(
                            'taxonomy' => 'portfolio_category',
                            'hide_empty' => false,
                        );
                        $terms = get_terms( $args ); ?>

                        <?php foreach ($terms as $term): ?>
                            <li>
                                <a href="#" data-filter=".<?php echo $term->slug; ?>">
                                    <?php echo $term->name; ?>   
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div id="lightbox" class="row">
            <?php
                $args = [
                    'post_type' => 'portfolio',
                    'posts_per_page'=> $data['number_of_items'],
                ];
                $query = new WP_Query($args);
                if( $query->have_posts() ){
                    while( $query->have_posts() ){ $query->the_post();
                        $id = get_the_id();
                        $cats = wp_get_object_terms( $id, 'portfolio_category' );
                        $class = '';
                        $cat_str = '';
                        $first = '';
                        $url = get_field('project_url') ? get_field('project_url') : "#";
                        foreach ($cats as $cat) {
                            $class .= $cat->slug . " ";
                            $cat_str .= $first . $cat->name;
                            if( !strlen($first) ) {
                                $first = " / ";
                            }
                        }
                    ?>
                    <div class="col-sm-6 col-md-3 col-lg-3 <?php echo $class ?>">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="<?php echo $url ?>">
                                    <div class="hover-text">
                                        <h4><?php the_title(); ?></h4>
                                        <small><?php echo $cat_str ?></small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        </div>
                    </div> 
                   <?php     
                    }
                    wp_reset_postdata();
                } 
                else echo 'Записей нет.';
                ?>
        </div>
    </div>
</div>