<?php /* Template Name: Contact Page Template */ get_header(); ?>

<body class="full_bg">
    <div class="container-fluid">
        
        <div class="col-lg-12 contact_body map">
            <div class="col-xs-offset-0 col-xs-12 col-lg-offset-2 col-lg-12">
            <h2 class="pull-left">
                <?php echo get_the_title(); ?>
            </h2>
        </div>
            <div class="col-lg-4 col-xs-offset-0 col-lg-offset-2 col-xs-12 contact_text_body">
                <p>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </p>
            </div>
        </div>
    </div>


</body>



<?php get_footer(); ?>