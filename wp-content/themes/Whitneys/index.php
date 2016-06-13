<?php /* Template Name: Home Page Template */ get_header(); ?>


<body class="home_bg">
    <div class="container-fluid">

        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <div class="row content-body">
        
        
            <div class="col-xs-12 col-md-4 grid_item">
                <a href="<?php echo home_url( $path ); ?>/stylist">
                    <img class="img-responsive" src="<?php echo bloginfo('template_url');?>/images/front-1.jpg"></img>
                    <p>Stylist</p>
                </a>
            </div>
            <div class="col-xs-12 col-md-4 grid_item">
                <a href="#">
                    <img class="img-responsive" src="<?php echo bloginfo('template_url');?>/images/red1.jpg"></img>
                </a>
            </div>
            <div class="col-xs-12 col-md-4 grid_item">
                <a href="<?php echo home_url( $path ); ?>/pricing">
                        <img class="img-responsive" src="<?php echo bloginfo('template_url');?>/images/004.jpg"></img>
                    <p>Pricing</p>
                </a>
            </div>
        
        
            <div class="col-xs-12 col-md-4 grid_item">
                <a href="#">
                <img class="img-responsive" src="<?php echo bloginfo('template_url');?>/images/vedo-1.jpg"></img>
                 </a>
            </div>
            <div class="col-xs-12 col-md-4 grid_item">
                <a href="<?php echo home_url( $path ); ?>/contact-us">
                    <img class="img-responsive" src="<?php echo bloginfo('template_url');?>/images/back-1.jpg"></img>
                <p>Contact us</p>
               </a>
            </div>
            <div class="col-xs-12 col-md-4 grid_item">
                <a href="#">
                   <img class="img-responsive" src="<?php echo bloginfo('template_url');?>/images/001.jpg"></img>
            </a>
            </div>
        
        
        </div>
        
        
        </div>


</body>


<?php get_footer(); ?>