<?php get_header(); ?>
    <div class="columns banner-background-7 is-vcentered p-5 m-0" style="min-height:45vh;">
        <div class="column is-offset-1 is-8 banner-home">
            <div class="is-size-1 has-text-centered">
                <strong style="color:white"> <?php the_title(); ?> </strong>
            </div>
        </div>
    </div>

    <div class="columns is-multiline pt-5">
        <?php if(get_field('banner')) { ?>
            <div class="column is-offset-3 is-6">
                <figure class="image p-5">
                    <img src="<?php echo get_field('banner'); ?>" alt="banner"> 
                </figure>
            </div>
            <?php } ?>
        <div class="column is-offset-2 is-8">
            <div class="content">
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-background wp-element-button" href="/network-gender-and-stem" style="background-color:#ec7404">Back to Network Gender and STEM</a>
                </div>
                <?php the_content(); ?>
            </div>   
        </div>
    </div>

     <!-- nieuwsbrief blokje -->
    <?php include "partials/form-nieuwsbrief.php"; ?>

<?php  get_footer(); ?>