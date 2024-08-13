<?php get_header(); ?>

    <!-- first banner -->
    <!-- <div class="columns has-background-primary is-vcentered p-5" style="min-height:60vh;">  -->
    <div class="columns banner-background-1 is-vcentered p-5 m-0" style="min-height:60vh;">
        <div class="column is-offset-one-quarter is-half banner-home">
            <div class="is-size-1 has-text-centered">
                <strong style="color:white"> <?php the_title(); ?> </strong>
            </div>
            <div class="is-size-3 has-text-centered">
                <?php the_content(); ?>
                <a href="/doe-mee" class="button is-info is-large is-rounded mt-5">
                    <strong>Doe mee</strong>
                </a>
            </div>
        </div>
    </div>

    <!-- highlighted activities -->
    <div class="columns p-5 is-centered">
        <?php
            $activities = new WP_Query(array(
                'post_type' => 'activities',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                // Filter on highlight
                'meta_key' => 'highlight',
                'orderby' => 'rand',
                'meta_query' => array(
                    'key' => 'highlight',
                    'value' => 1,
                    'compare' => '='
                )
            ));
                while($activities->have_posts()){
                    $activities->the_post(); ?>
                    <div class="column p-4 is-3">
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
                                        <?php the_title(); ?>
                                    </p>
                                    <p class="subtitle is-size-6" style="color:white;">
                                        Voor
                                    <?php 
                                           $terms = get_the_terms(get_the_ID(), 'targetgroup');
                                           if( $terms != false){
                                                foreach ( $terms as $term ) {
                                                    echo $term->name;
                                                    echo ", "; 
                                                    // eigenlijk laatste komma niet ;/ 
                                                };
                                           };
                                           
                                            ?>
                                    </p>
                                    <div class="content" style="color:white;">
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
            <div class="columns pb-4">
                <div class="column" style="text-align: center;">
                    <a href="aanbod" class="button is-info is-medium is-rounded">
                    <strong>Het volledige aanbod</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- partner banner -->
    <div class="columns banner-background-4 is-vcentered p-5" style="min-height:60vh;"> 
        <div class="column is-offset-2 is-5 banner-home has-text-centered">
            <div class="is-size-4">
                Dankzij onze partners deden
            </div>
            <div class="is-size-1 p-4">
                ca. 17.000 leerlingen 
            </div>
            <div class="is-size-4">
                mee aan onze activiteiten in 2023. 
            </div>
            <a href="/doe-mee" class="button is-info is-large is-rounded mt-5">
                <strong>Word ook partner</strong>
            </a>                        
        </div>
    </div>

     <!-- news and agenda banner -->
    <div class="columns p-5 is-centered">
        <!-- news -->
        <?php
        $news = new WP_Query(array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => 2,
            'orderby' => 'post_date',
            'order'   => 'DESC',
        ));
        while($news->have_posts()){
            $news->the_post(); ?>
            <div class="column p-4 is-3">
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
                                <?php the_title(); ?>
                            </p>
                            <div class="content" style="color:white;">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php }
        wp_reset_query();
        ?>

        <!-- agenda -->
            <?php
                $today = date('Ymd');
                $activities = new WP_Query(array(
                    'post_type' => 'agenda',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'meta_key' => 'agenda_date',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'agenda_date',
                            'compare' => '>=',
                            'value' => $today,
                            'type' => 'numeric'
                        )
                    )
                ));
                

                    while($activities->have_posts()){
                        $activities->the_post(); 
                        $eventDate = new DateTime(get_field('agenda_date')); ?>
                        <div class="column p-4 is-3">
                            <a href="<?php the_permalink()?>">
                                <div class="card has-background-success">
                                    <div class="card-image">
                                        <figure class="image is-2by1">
                                            <?php if(has_post_thumbnail()) { ?>
                                                <img src="<?php echo get_the_post_thumbnail(); ?>" alt="Agenda image"> 
                                            <?php } else { ?>
                                                    <img src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image"> 
                                            <?php } ?>
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <p class="title pt-4" style="color:white;">
                                            <?php the_title(); ?>
                                        </p>
                                         <p class="subtitle is-size-6" style="color:white;">
                                            <?php echo $eventDate -> format('d-m'); ?> 
                                        </p>
                                        <div class="content" style="color:white;">
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


    <div class="columns pb-4">
        <div class="column" style="text-align: center;">
            <a href="nieuws" class="button is-info is-medium is-rounded">
            <strong>Meer nieuws en agenda</strong>
            </a>
        </div>
    </div>

    <!-- nieuwsbrief blokje -->
    <?php include "partials/form-nieuwsbrief.php"; ?>

<?php  get_footer(); ?>