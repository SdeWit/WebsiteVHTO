<?php get_header(); ?>

    <div class="columns has-background-success is-vcentered pt-5 pb-5"> 
        <div class="column is-offset-1 is-6">
            <div class="is-size-1 has-text-centered has-background-primary activity-title">
                <?php the_title(); ?>
            </div>
            <div class="is-size-5 activity-excerpt">
                </br> 
                <?php the_excerpt(); ?>
            </div>

            <?php if(get_field('partners')) { ?>
                <div class="is-size-5 activity-partners">
                    </br> Met dank aan <?php echo get_field('partners') ?>
                </div>
            <?php } ?>
        </div>
        <div class="column is-3 is-offset-1">
            <figure class="image is-2by1">
                <?php if(has_post_thumbnail()) { ?>
                    <img src="<?php echo get_the_post_thumbnail(); ?>" alt="Activity image"> 
                <?php } else { ?>
                    <img src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image"> 
                <?php } ?>
            </figure>
        </div>
    </div>

    <div class="columns pt-3">
        <div class="column is-flex is-offset-1 is-4">
            <div class="content">
                <?php if(get_field('contact_information_top')) { ?>
                    <div> <?php echo get_field('contact_information_top') ?> </div>
                 <?php } ?>
                 <?php if(get_field('signup_forms')) { ?>
                    <iframe width="640px" height="480px" 
                    src=<?php echo get_field('signup_forms') ?> 
                    frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
                 <?php } ?>

                
            </div>   
        </div>
        <div class="column is-flex is-offset-1 is-5">
            <div class="content">
                <?php the_content(); ?>
            </div>   
        </div>
    </div>

     <!-- nieuwsbrief blokje -->
    <?php include "partials/form-nieuwsbrief.php"; ?>
<?php  get_footer(); ?>