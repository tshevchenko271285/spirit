<?php 
$data['title'] = get_sub_field('title') ? get_sub_field('title') : '';
$data['title_strong'] = get_sub_field('title_strong') ? get_sub_field('title_strong') : '';
$data['text'] = get_sub_field('text') ? get_sub_field('text') : '';
?>

<!-- Contact Section 		<<< - - -	Flexible field + Flexible field Title
==========================================-->
<div id="tf-contact" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="section-title center">

                    <?php if ( strlen( $data['title'] ) || strlen( $data['title_strong'] ) ): ?>
                        <h2><?php echo $data['title'] ?> <strong><?php echo $data['title'] ?></strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                    <?php endif ?>

                    <small><em><?php echo $data['text'] ?></em></small>            
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" class="btn tf-btn btn-default">Submit</button>
                </form>

            </div>
        </div>

    </div>
</div>