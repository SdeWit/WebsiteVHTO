<?php get_header(); ?>

    <div class="columns banner-background-8 is-vcentered p-5 m-0" style="min-height:45vh;">
        <div class="column is-offset-1 is-3 banner-home">
            <div class="is-size-1 has-text-centered">
                <strong style="color:white"> <?php the_title(); ?> </strong>
            </div>
        </div>
    </div>

    <div class="columns is-multiline p-5">
        <?php
        $activities = new WP_Query(array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        ));
            while($activities->have_posts()){
                $activities->the_post(); ?>
                <div class="column is-3">
                    <a href="<?php the_permalink() ?>">
                        <div class="card has-background-purple">
                            <div class="card-image">
                                <figure class="image is-2by1">
                                <?php if(has_post_thumbnail()) { ?>
                                    <img src="<?php echo get_the_post_thumbnail(); ?>" alt="Nieuws image"> 
                                <?php } else { ?>
                                    <img src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image"> 
                                <?php } ?>
                            </figure>
                            </div>
                            <div class="card-content">
                                <p class="title" style="color:white;">
                                    <?php the_title(); ?>
                                </p>
                                <div class="content">
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

            <!-- nieuwsbrief blokje -->
    <?php include "partials/form-nieuwsbrief.php"; ?>

<?php  get_footer(); ?>