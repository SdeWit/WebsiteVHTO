<?php get_header(); ?>

    <?php if(get_field('banner')) { ?>
        <div class="columns is-vcentered p-5 m-0" 
            style="min-height:45vh; 
            background: url('<?php echo get_field('banner'); ?>') no-repeat 0% 30%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            width: 100%;">
            <div class="column is-offset-4 is-6 banner-home">
                <div class="is-size-1 has-text-centered">
                    <strong style="color:white"> <?php the_title(); ?> </strong>
                </div>
            </div>
        </div>
         <?php } else { ?>

        <div class="columns banner-background-8 is-vcentered p-5 m-0" style="min-height:45vh;">
            <div class="column is-offset-4 is-6 banner-home">
                <div class="is-size-1 has-text-centered">
                    <strong style="color:white"> <?php the_title(); ?> </strong>
                </div>
            </div>
        </div>

    <?php }  ?>

    <div class="columns pt-5">
        <div class="column is-offset-2 is-8">
            <div class="content">
                <?php echo get_field('banner'); ?>
                <?php the_content(); ?>
                PUBLICATIES
            </div>   
        </div>
    </div>

    <!-- nieuwsbrief blokje -->
    <?php include "partials/form-nieuwsbrief.php"; ?>
   
<?php  get_footer(); ?>