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

            <div class="columns banner-background-7 is-vcentered p-5 m-0" style="min-height:45vh;">
                <div class="column is-offset-1 is-3 banner-home">
                    <div class="is-size-1 has-text-centered">
                        <strong style="color:white"> <?php the_title(); ?> </strong>
                    </div>
                </div>
            </div>
            
    <?php }  ?>

    <div class="columns is-multiline is-centered">
        <div class="column is-5 has-background-success m-5" style="border-radius:2vh;">
            <div class="content p-5 has-text-centered">
                <figure class="image">
                    <img class="is-rounded" src="<?php echo get_theme_file_uri('assets/images/icon-werkgever.png')?>" style="max-width:20vh; max-height:20vh;">
                </figure>
                <h4 class="title is-4 has-text-white">Ik ben een werkgever</h4>
                <p style="color: white;"> 
                    Bij het uitvoeren van onze missie spelen organisaties een belangrijke rol. Niet alleen voor financiële ondersteuning, ook als werkgever. We bieden daarom verschillende mogelijkheden om als werkgever bij te dragen aan meer vrouwen in bèta, techniek en IT.
                </p>
                <a href="word-partner" class="button is-white is-medium is-rounded">
                    <strong>Doe mee</strong>
                </a>
            </div>   
        </div>
        <div class="column is-5 has-background-success m-5" style="border-radius:2vh;">
            <div class="content p-5 has-text-centered">
                <figure class="image">
                    <img class="is-rounded" src="<?php echo get_theme_file_uri('assets/images/icon-onderwijs.png')?>" style="max-width:20vh; max-height:20vh;">
                </figure>
                <h4 class="title is-4 has-text-white has-text-centered">Ik werk bij een onderwijsinstelling</h4>
                <p style="color: white;"> 
                    Als meisjes op jonge leeftijd al kennismaken met bèta, techniek of IT dan is de kans groter dat ze er later voor kiezen. Daar beginnen onze interventies al in het basisonderwijs. Aan onderwijsinstellingen na het voortgezet onderwijs geven we advies voor een inclusieve leeromgeving.
                </p>
                <a href="/aanbod" class="button is-white is-medium is-rounded">
                    <strong>Doe mee</strong>
                </a>
            </div>   
        </div>
        <div class="column is-5 has-background-success m-5" style="border-radius:2vh;">
            <div class="content p-5 has-text-centered">
                <figure class="image">
                    <img class="is-rounded" src="<?php echo get_theme_file_uri('assets/images/icon-rolmodel.png')?>" style="max-width:20vh; max-height:20vh;">
                </figure>
                <h4 class="title is-4 has-text-white has-text-centered">Ik ben een vrouw die werkt in bèta, techniek en IT</h4>
                <p style="color: white;"> 
                    Bij het aanpakken van hardnekkige genderstereotiepe opvattingen over technische beroepen is belangrijk om vrouwen in bèta, techniek en IT zichtbaar te maken. Vrouwen die werken in deze sectoren zetten we daarom in tijdens onze interventies of koppelen we media of eventprogrammeurs.
                </p>
                <a href="/aanbod/spiegelbeeld" class="button is-white is-medium is-rounded">
                    <strong>Doe mee</strong>
                </a>
            </div>   
        </div>
        <div class="column is-5 has-background-success m-5" style="border-radius:2vh;">
            <div class="content p-5 has-text-centered">
                <figure class="image">
                    <img class="is-rounded" src="<?php echo get_theme_file_uri('assets/images/icon-particulier.png')?>" style="max-width:20vh; max-height:20vh;">
                </figure>
                <h4 class="title is-4 has-text-white has-text-centered">Ik ben een particulier</h4>
                <p style="color: white;">  
                    Voel je je betrokken bij de missie van VHTO? Vind je het belangrijk dat meer meisjes voor een toekomst in bèta, techniek en IT kiezen? Met jouw hulp als particulier draag je bij aan het mogelijk maken van onze activiteiten. Wij zijn blij met elke bijdrage!
                </p>
                <a href="doneer-aan-vhto" class="button is-white is-medium is-rounded">
                    <strong>Doe mee</strong>
                </a>
            </div>   
        </div>
    </div>
    
    <!-- nieuwsbrief blokje -->
    <?php include "partials/form-nieuwsbrief.php"; ?>
<?php  get_footer(); ?>