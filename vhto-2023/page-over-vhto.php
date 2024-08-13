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
                <div class="column is-offset-1 is-3 banner-home">
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

    <!-- Het team -->
    <div class="columns has-background-link">
        <div class="column is-offset-2 is-8 p-5">
            <p class="title" style="color: white;">Het team</p>
            <p style="color: white;"> De interventies van VHTO wordt opgezet en begeleid door een team van enthousiaste medewerkers. </p>
        </div>
    </div>

    <div class="columns is-centered has-background-link">
        <?php
            $activities = new WP_Query(array(
                'post_type' => 'profiles',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'role',
                        'field' => 'slug',
                        'terms' =>  'medewerkers',
                    ),
                ),
            ));
                while($activities->have_posts()){
                    $activities->the_post(); ?>
                    <div class="column is-3">
                        <a href="<?php the_permalink()?>">
                            <div class="has-background-white p-4" style="background-color:white; border-radius:2rem; height:100%">
    
                                <div>
                                    <div class="is-flex is-justify-content-center">
                                        <figure class="image is-128x128">
                                            <?php if(has_post_thumbnail()) { ?>
                                                <img class="is-rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Medewerker"> 
                                            <?php } else { ?>
                                                <img class="is-rounded" src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image"> 
                                            <?php } ?>
                                        </figure>
                                    </div>
                                    <div class="has-text-centered pt-3">
                                        <p class="title">
                                            <?php the_title(); ?>
                                        </p>
                                        <div class="subtitle is-size-6">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php }
            wp_reset_query();
            ?>

            </div>
            <div class="columns pb-4 has-background-link is-centered">
                <div class="column" style="text-align: center;">
                    <a href="medewerkers" class="button is-info is-medium is-rounded">
                    <strong>Alle medewerkers</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Rvt -->
    <div class="columns">
        <div class="column is-offset-2 is-8 p-5">
            <p class="title"> Raad van toezicht </p>
            <p> VHTO is een stichting met een eenkoppig bestuur en kent een raad van toezicht, bestaande uit vier leden. </p>
        </div>
    </div>

    <div class="columns is-centered">
        <?php
            $activities = new WP_Query(array(
                'post_type' => 'profiles',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'rand',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'role',
                        'field' => 'slug',
                        'terms' =>  'raad-van-toezicht',
                    ),
                ),
            ));
                while($activities->have_posts()){
                    $activities->the_post(); ?>
                    <div class="column is-3">
                        <a href="<?php the_permalink()?>">
                            <div class="has-background-link p-4" style="background-color:white; border-radius:2rem; height:100%">
                                <div class="is-flex is-justify-content-center">
                                    <figure class="image is-128x128">
                                        <?php if(has_post_thumbnail()) { ?>
                                            <img class="is-rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Raad van Toezicht profiel"> 
                                        <?php } else { ?>
                                            <img class="is-rounded" src="https://bulma.io/images/placeholders/256x256.png" alt="Placeholder image"> 
                                        <?php } ?>
                                    </figure>
                                </div>
                                <div class="has-text-centered pt-3">
                                    <p class="title has-text-white">
                                        <?php the_title(); ?>
                                    </p>
                                    <div class="subtitle is-size-6 has-text-white">
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
            <div class="columns pb-4 is-centered">
                <div class="column" style="text-align: center;">
                    <a href="raad-van-toezicht" class="button is-info is-medium is-rounded">
                    <strong>Alle Raad van Toezicht leden</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>

        <!-- Leading Ladies -->
    <div class="columns has-background-link">
        <div class="column is-offset-2 is-8 p-5">
            <p class="title" style="color: white;">Leading Ladies</p>
            <p style="color: white;"> 
            Vrouwen die werkzaam zijn in bèta, techniek en IT vervullen een belangrijke voorbeeldfunctie voor meisjes en vrouwen. Daarom zijn we blij met de VHTO Leading Ladies. Zij vervullen de rol van ambassadeur om het belang van een verhoogde participatie van meisjes en vrouwen in bètawetenschap, techniek en ICT in Nederland te ondersteunen. Allen zijn zij bèta-, technische of ICT-vrouwen met een prachtige voorbeeldfunctie. 
            </p>
        </div>
    </div>

    <div class="columns is-centered has-background-link">
        <?php
            $activities = new WP_Query(array(
                'post_type' => 'profiles',
                'post_status' => 'publish',
                'posts_per_page' => 3,
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
                    <div class="column is-3">
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
                                    <p class="title">
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
            <div class="columns pb-4 has-background-link is-centered">
                <div class="column" style="text-align: center;">
                    <a href="leading-ladies" class="button is-info is-medium is-rounded">
                    <strong>Alle Leading Ladies</strong>
                    </a>
                </div>
            </div>
            <div class="columns pb-2 has-background-white is-centered">
            </div>
        </div>
    </div>



     <!-- nieuwsbrief blokje -->
    <?php include "partials/form-nieuwsbrief.php"; ?>
<?php  get_footer(); ?>