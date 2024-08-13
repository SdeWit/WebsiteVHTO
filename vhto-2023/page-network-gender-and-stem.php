<?php get_header(); ?>
   
<!-- Banner -->
<?php 
    if(get_field('banner')) { ?>
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

        <div class="columns banner-background-1 is-vcentered p-5 m-0" style="min-height:45vh;">
            <div class="column is-offset-1 is-6 banner-home">
                <div class="is-size-1 has-text-centered">
                    <strong style="color:white"> <?php the_title(); ?> </strong>
                </div>
            </div>
        </div>

<?php }  ?>

<div class="columns pt-5 is-multiline">
    <div class="column is-offset-1 is-10 p-4">

        <!-- Introtekst -->
        <div class="content">
            <?php the_content(); ?>
        </div>   

        <!-- Conferences -->
        <div class="columns">
            <div class="column p-4 is-8">
                <?php 
                    $pagekids = get_pages(array(
                        'child_of' => get_the_ID(),   
                        'sort_column' => 'menu_order'
                    ));
                    $first_conference = $pagekids[0];
                ?>
                    <a href="<?php echo get_the_permalink($first_conference->ID)?>">
                        <div class="card has-background-danger">
                            <div class="card-content">
                                <p class="title" style="color:white;">
                                    <?php echo get_the_title($first_conference->ID)?>
                                </p>
                                <div class="content" style="color:white;">
                                    <?php echo get_the_excerpt($first_conference->ID)?>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>

            <div class="column p-4">
                    <div class="card has-background-purple">
                        <div class="card-content">
                            <p class="title" style="color:white;">
                                All conferences
                            </p>
                            <div class="content" style="color:white;">
                                <ul class="conference-links">

                                    <?php
                                        for ($x = 1; $x<count($pagekids); $x++){
                                            $conference = $pagekids[$x];
                                            ?> 
                                            <a href="<?php echo get_the_permalink($conference->ID)?>">
                                                <li><?php echo get_the_title($conference->ID)?></li>
                                            </a>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Research -->
        <div class="columns pb-4">
            <div class="column">
                <p>
                The conferences and special issues are an initiative of the “Network Gender & STEM: Educational and occupational pathways and participation”. 
                The Network conferences have marked the beginning of a more coherent way of exchanging information, as collectively we work to find new ways to 
                implement research findings in both policy and practice.
                </p>
            </div>
        </div>

        <div class="columns is-centered">
            <?php
            $activities = new WP_Query(array(
                'post_type' => 'network-publications',
                'post_status' => 'publish',
                'posts_per_page' => 0,
                'orderby' => 'rand',
            ));
                while($activities->have_posts()){
                    $activities->the_post(); ?>
                        <div class="column is-4 p-4">
                            <a href="<?php the_permalink()?>">
                                <div class="card has-background-yellow">
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

            <!-- <div class="column is-4 p-4">
                <a href="https://genderandset.open.ac.uk/index.php/genderandset/issue/view/21" target="_blank">
                    <div class="card has-background-yellow">
                        <div class="card-content">
                            <p class="title" style="color:white;">
                                Gender and STEM: What schools, families, and workplaces can do?
                            </p>
                            <div class="content" style="color:white;">
                                Part 1: Vol. 7, No. 2 (2015)
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="column is-4 p-4">
                <a href="https://genderandset.open.ac.uk/index.php/genderandset/issue/view/34" target="_blank">
                    <div class="card has-background-yellow">
                        <div class="card-content">
                            <p class="title" style="color:white;">
                                Re-imagining who does STEM
                            </p>
                            <div class="content" style="color:white;">
                                Part 1: Vol. 11, No. 3 (2019)
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="column is-4 p-4">
                <a href="https://genderandset.open.ac.uk/index.php/genderandset/issue/view/30" target="_blank">
                    <div class="card has-background-yellow">
                        <div class="card-content">
                            <p class="title" style="color:white;">
                                Girls' and women's participation in STEM: Past lessons and possible futures
                            </p>
                            <div class="content" style="color:white;">
                                Vol. 10, No. 2 (2018)
                            </div>
                        </div>
                    </div>
                </a>
            </div>

                -->
        </div>
<!-- 
        <div class="columns pb-4">
            <div class="column" style="text-align: center;">
                <a href="/publications" class="button is-success is-medium is-rounded">
                <strong>More publications</strong>
                </a>
            </div>
        </div> -->

        <!-- About the network -->
        <div class="columns pb-4">
            <div class="column">
                <?php if(get_field('content2')) { ?>
                    <?php echo get_field('content2'); ?>'
                <?php } ?>
            </div>
        </div>

    </div>
</div>

<!-- contactinformation -->
<div class="columns has-background-primary" style="margin-bottom: 0;">
    <div class="column is-offset-4 is-4 p-5">
        <h5 class="title is-5" style="color: white;"> Do you want to join our network? </h5>
        <p style="color: white;">
                        For more information about the Network Gender & STEM, feel free to contact co-Convenors Professors <a href="https://www.sydney.edu.au/arts/about/our-people/academic-staff/helen.watt.html" target="_blank">Helen Watt</a> or <a href="https://www.uni-potsdam.de/en/schoolpedagogy/prof-dr-rebecca-lazarides?fbclid=IwAR16MApZApZT5uwYPoptNacbxRRWpxIYZu8gqyr4ciIECga_AF64LJ_wYW4" target="_blank">
            Rebecca Lazarides</a>.
        </p>
    </div>
</div>

<?php  get_footer(); ?>