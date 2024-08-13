
<footer class="footer">
  <div class="columns">
    <div class="column is-3 pl-5">
      <a href="/"><img src="<?php echo get_theme_file_uri('assets/images/logo-full.png')?>" style="max-height:50vh;"></a>
    </div>
    <div class="column is-offset-1 is-2">
      <h5 class="title is-5" style="padding-top:2vh;"><a href="/" class="footer-link">VHTO</a></h5>
    </div>
    <div class="column is-2">
      <h5 class="title is-5" style="padding-top:2vh;"><a href="/doe-mee" class="footer-link">Doe mee</a></h5>
    </div>
    <div class="column is-2">
      <h5 class="title is-5" style="padding-top:2vh;"><a href="/over-vhto" class="footer-link">Over ons</a></h5>
    </div>
  </div>
  <div class="columns">
    <div class="column is-3 pl-5">
      <p> Prinsessegracht 23 </p>
      <p> 2514 AP Den Haag </p>
      <p><a href="https://www.kivi.nl/meer/contact" target="_blank">Routebeschrijving</a></p>
      </br>
      <p> +31 70 219 5370 </p>
      <p><a class="email" data-email="vhto"></a></p>

      <script>
      var emailLinks = document.getElementsByClassName('email');
      for (i = 0; i < emailLinks.length; i++) {
          var ctrl = emailLinks[i];
          host = document.location.host;
          host = host.split('www.');
          length_host = host.length;
          host = host[length_host-1]
          var email = ctrl.getAttribute('data-email') +  '@' + host;
          ctrl.href= 'mailto:' + email;
          ctrl.innerText = email;
      }
      </script>

      </br>
      <p> KvK-nummer: 41028643 </p>
      </br>
      <a href="https://www.linkedin.com/company/vhto" target="_blank"><i class="fa-brands fa-linkedin p-2 social-icons" style="font-size:42px;"></i></a>
      <a href="https://www.facebook.com/VHTOnl/" target="_blank"><i class="fa-brands fa-facebook p-2 social-icons" style="font-size:42px;"></i></a>
      <a href="https://twitter.com/VHTOnl" target="_blank"><i class="fa-brands fa-x-twitter p-2 social-icons" style="font-size:42px;"></i></a>
    </div>
    <div class="column is-offset-1 is-2">
      <p><a href="/aanbod" class="footer-link">Aanbod</a></p>
      <p><a href="/kennis" class="footer-link">Kennis</a></p>
    </div>
    <div class="column is-2">
      <p><a href="/doe-mee/word-partner" class="footer-link">Partner</a></p>
      <p><a href="/aanbod/spiegelbeeld" class="footer-link">Rolmodel</a></p>
      <p><a href="/doe-mee/doneer-aan-vhto" class="footer-link">Sponsor</a></p>
    </div>
    <div class="column is-2 p-4">
      <p><a href="/over-vhto/missie-visie" class="footer-link">Missie en Visie</p>
      <p><a href="/nieuws" class="footer-link">Nieuws</a></p>
      <p><a href="/anbi" class="footer-link">ANBI</a></p>
    </div>
  </div>
  <div class="columns">
    <div class="column p-4 is-size-7" >
      © <script>document.write(new Date().getFullYear())</script> VHTO. Alle rechten voorbehouden. 
      <a href="/privacyverklaring"> Privacyverklaring </a>
      <a href="/disclaimer"> Disclaimer </a>
    </div>
  </div>
</footer>



    <?php wp_footer(); ?>
 </body>
</html>