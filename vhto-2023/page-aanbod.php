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
                    <strong style="color:black"> <?php the_title(); ?> </strong>
                </div>
            </div>
        </div>
         <?php } else { ?>

            <div class="columns banner-background-3 is-vcentered p-5 m-0" style="min-height:45vh;">
                <div class="column is-offset-1 is-3 banner-home">
                    <div class="is-size-1 has-text-centered">
                        <strong style="color:black"> <?php the_title(); ?> </strong>
                    </div>
                </div>
            </div>
        <?php }  ?>

    <?php if(the_content()) { ?>
        <div class="columns pt-5">
            <div class="column is-10 pl-5 ml-3">
                <div class="content">
                    <?php the_content(); ?>
                </div>   
            </div>
        </div>
     <?php } ?>

    <div class="columns pt-5 is-centered">
        <div class="column is-flex is-justify-content-center">
            <div class="field is-grouped is-grouped-multiline">
                <?php
                $terms = get_terms( 'targetgroup', array(
                'hide_empty' => true,
                ) );
                if( $terms != false){
                    foreach ( $terms as $term ) { ?>
                        <label class="checkbox p-5">
                            <input class="filter-input-aanbod" type="checkbox" id=<?php echo $term->slug; ?>>
                            <?php echo $term->name ?>
                        </label>
                        <?php
                    };
                }; 
                ?>
            </div>  
        </div>
    </div>

    <div class="columns is-multiline p-5 filtered-posts">
        <?php
        $activities = new WP_Query(array(
            'post_type' => 'activities',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        ));
        while($activities->have_posts()){
            $activities->the_post(); ?>
            <div class="column is-3">
                <a href="<?php the_permalink()?>">
                    <div class="card has-background-success">
                        <div class="card-image">
                            <figure class="image is-2by1">
                                <?php if(has_post_thumbnail()) { ?>
                                    <img src="<?php echo get_the_post_thumbnail(); ?>" alt="Activity image"> 
                                <?php } else { ?>
                                    <img src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image"> 
                                <?php } ?>
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title" style="color:white;">
                                <?php the_title();?>
                                <?php echo get_field('targetgroup');
                                    // $terms <- get_the_terms($activities->the_post(), 'targetgroup');        
                                ?> 
                            </p>
                            <div class="content" style="color: white;">
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