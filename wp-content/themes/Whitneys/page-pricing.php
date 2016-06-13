<?php /* Template Name: Pricing Page Template */
get_header(); ?>


<body class="full_bg">
    <div class="container ">
        <div class="col-lg-12">
            <h2 class="text-center">
                <?php echo get_the_title(); ?>
            </h2>
        </div>
        <div class="col-lg-12 pricing_body">
            <div class="col-xs-offset-0 col-xs-12 col-lg-4 text-center">
                <p class="pricing_header">
                    <?php the_field('price_title_1'); ?>
                </p>
                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('price_fields_1') ):
                 	// loop through the rows of data
                        while ( have_rows('price_fields_1') ) : the_row(); ?>
                        <p><?php the_sub_field('price_field'); ?></p>    
                    <?php
                    endwhile;
                    else : // no rows found
                    endif; ?>
                </p>
            </div>
            <div class="col-xs-offset-0 col-xs-12 col-lg-4 text-center">
                <p class="pricing_header">
                    <?php the_field('price_title_2'); ?>
                </p>    
                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('price_fields_2') ):
                 	// loop through the rows of data
                    while ( have_rows('price_fields_2') ) : the_row(); ?>

                    <p><?php the_sub_field('price_field'); ?></p>    
                    <?php
                    endwhile;
                    else : // no rows found
                    endif; ?>
                </p>
            </div>
            <div class="col-xs-offset-0 col-xs-12 col-lg-4 text-center">
                <p class="pricing_header">
                    <?php the_field('price_title_3'); ?>
                </p>           
                    <?php
                // check if the repeater field has rows of data
                if( have_rows('price_fields_3') ):
             	// loop through the rows of data
                    while ( have_rows('price_fields_3') ) : the_row(); ?>

                    <p><?php the_sub_field('price_field'); ?></p>    
                    <?php
                endwhile;
                else : // no rows found
                endif; ?>
                </p>
            </div>
            <div class="col-xs-offset-0 col-xs-12 col-lg-4 text-center col-lg-offset-2">
                <p class="pricing_header">
                    <?php the_field('price_title_4'); ?>
                </p>
                                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('price_fields_4') ):
             	    // loop through the rows of data
                    while ( have_rows('price_fields_4') ) : the_row(); ?>

                    <p><?php the_sub_field('price_field'); ?></p>    
                    <?php
                    endwhile;
                    else : // no rows found
                    endif; ?>
                </p>
            </div>
            <div class="col-xs-offset-0 col-xs-12 col-lg-4 text-center col-lg-offset-1">
                <p class="pricing_header">
                    <?php the_field('price_title_5'); ?>
                </p>
                            <?php
                // check if the repeater field has rows of data
                if( have_rows('price_fields_5') ):
             	// loop through the rows of data
                    while ( have_rows('price_fields_5') ) : the_row(); ?>

                    <p><?php the_sub_field('price_field'); ?></p>    
                <?php
                endwhile;
                else : // no rows found
                endif; ?>
                </p>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <p>
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </p>
        </div>
    </div>
</body>

<?php get_footer(); ?>