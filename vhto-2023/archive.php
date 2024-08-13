<?php get_header(); ?>
    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                <?php the_archive_title(); ?>
            </p>
            <p class="subtitle">
                <?php the_archive_description(); ?>
            </p>
        </div>
    </section>

    <div class="columns is-multiline p-5">
    <?php
        while(have_posts()){ 
            the_post(); ?>
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-3by2">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <p class="title">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </p>
                        <div class="content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php    }    ?>
    
    </div>

   
<?php  get_footer(); ?>