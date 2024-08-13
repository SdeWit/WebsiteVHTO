<div class="column is-3">
    <a href="<?php the_permalink() ?>">
        <div class="card has-background-purple">
            <div class="card-image">
                <figure class="image is-2by1">
                <?php if(has_post_thumbnail()) { ?>
                    <img src="<?php echo get_the_post_thumbnail(); ?>" alt="Kennis image"> 
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