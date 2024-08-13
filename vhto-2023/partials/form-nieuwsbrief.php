<div class="columns banner-background-2" style="margin-bottom: 0;">
        <div class="column is-offset-4 is-4">
            <h5 class="title is-5" style="color: white;"> Blijf op de hoogte via onze nieuwsbrief</h5>

                <script>
                    function onSubmit(token) {
                        console.log("onsubmit")
                        //document.getElementById("form-newsletter").submit();
                    }
                </script>

                <form method="POST" accept-charset="utf-8" class="register-form captcha-form" id="form-newsletter" >
                    <!-- is a check if data comes from our own site/page -->
                    <?php wp_nonce_field( 'nieuwsbrief', 'cagnotte-verif' ); ?>

                    <div class="field is-grouped">
                        <div class="control has-icons-left is-expanded">
                            <input type="email" id ="email" value="" name="email" class="input is-flat" placeholder="email address" required/>
                        </div>

                        <div class="control">
                            <input class="button is-info is-rounded submit" type="submit" id="newsletter-input" name="signup-form-nieuwsbrief" value="Aanmelden"/>
                        </div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LcC0EUjAAAAALvqlwEUQV6_xUTEKjSiwXAfDFsU"></div>
                    <div class="captcha-error" style="color: red;"></div>
                </form> 
        </div>
    </div>