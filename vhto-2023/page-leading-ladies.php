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
            <div class="column is-offset-3 is-6 banner-home">
                <div class="is-size-1 has-text-centered">
                    <strong style="color:white"> <?php the_title(); ?> </strong>
                </div>
            </div>
        </div>
         <?php } else { ?>

            <div class="columns banner-background-6 is-vcentered p-5 m-0" style="min-height:45vh;">
                <div class="column is-offset-1 is-6 banner-home">
                    <div class="is-size-1 has-text-centered">
                        <strong style="color:white"> <?php the_title(); ?> </strong>
                    </div>
                </div>
            </div>
            
        <?php }  ?>

    <div class="columns pt-5">
        <div class="column is-offset-1 is-10 p-4">
            <div class="content">
                <?php the_content(); ?>
            </div>   
        </div>
    </div>

        <!-- Leading Ladies -->
    <div class="columns is-multiline is-centered has-background-warning p-4">
        <?php
            $activities = new WP_Query(array(
                'post_type' => 'profiles',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'rand',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'role',
                        'field' => 'slug',
                        'terms' =>  'leading-ladies',
                    ),
                ),
            ));
                while($activities->have_posts()){
                    $activities->the_post(); ?>
                    <div class="column is-4 p-4">
                        <a href="<?php the_permalink()?>">
                            <div class="p-4" style="background-color:white; border-radius:2rem; height:100%">
                                <div class="is-flex is-justify-content-center">
                                    <figure class="image is-128x128">
                                        <?php if(has_post_thumbnail()) { ?>
                                            <img class="is-rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Leading Lady"> 
                                        <?php } else { ?>
                                             <img class="is-rounded" src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image"> 
                                        <?php } ?>
                                    </figure>
                                </div>
                                <div class="has-text-centered pt-3">
                                    <p class="title has-text-warning">
                                        <?php the_title(); ?>
                                    </p>
                                    <div class="subtitle is-size-6">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php }
            wp_reset_query();
            ?>

            </div>
        </div>
    </div>

     <!-- nieuwsbrief blokje -->
    <?php include "partials/form-nieuwsbrief.php"; ?>
<?php  get_footer(); ?>