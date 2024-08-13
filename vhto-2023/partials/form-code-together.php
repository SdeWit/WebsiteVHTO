<?php 
if ( isset( $_GET['success'] ) ) {
	$success = sanitize_title( $_GET['success'] );

    if( $success == 1){
        ?><h3>Bedankt voor het inschrijven! </h3> <?php
    }
} else {
    ?><h3>Schrijf je in voor code together!</h3> <?php
}
?>

<form action="#" method="POST" class="register-form">
    <!-- is a check if data comes from our own site/page -->
	<?php wp_nonce_field( 'code-together-form', 'cagnotte-verif' ); ?>

    <div class="field">
        <label class="label" for="date">Voorkeursdatum</label>
        <div class="control">
            <!-- <label class="radio">
                <input type="radio" name="date" value="13dec">
                    13 december 16.30-18.30
            </label> -->
            <label class="radio">
                <input type="radio" name="date" value="22dec">
                    22 december 16.30-18.30
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="name_guardian">Naam ouder of verzorger</label>
        <div class="control">
            <input class="input" id="name_guardian" type="text" name="name_guardian" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="name_child">Naam kind</label>
        <div class="control">
            <input class="input" id="name_child" type="text" name="name_child" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="age">Leeftijd kind</label>
        <div class="control">
            <input class="input" type="number" name="age" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="zipcode">Postcode en huisnummer</label>
        <div class="control">
            <input class="input" id="zipcode" type="text" name="zipcode" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email">Email ouder of verzorger</label>
        <div class="control">
            <input class="input" id="email" type="email" name="email" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email2">Bevestig e-mailadres</label>
        <div class="control">
            <input class="input" id="email2" type="email" name="email2" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="tel">Telefoonnummer ouder of verzorger</label>
        <div class="control">
            <input class="input" id="tel" type="tel" name="tel" value="" required/>
        </div>
    </div>
    

    <div class="field">
        <label class="label" for="remarks">Vragen of opmerkingen?</label>
        <div class="control">
            <textarea class="textarea" id="remarks" name="remarks" rows="4" cols="50"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <input class="button is-link" id="submit" type="submit" name="signup-form-code-together" id="submit" class="submit" value="Aanmelden" />
        </div>
    </div>

</form>

