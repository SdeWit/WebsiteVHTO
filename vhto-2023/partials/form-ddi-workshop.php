<?php 
if ( isset( $_GET['success'] ) ) {
	$success = sanitize_title( $_GET['success'] );

    if( $success == 1){
        ?><h3>Bedankt voor het inschrijven! </h3> <?php
    }
} else {
    ?><h3>Schrijf je in voor een workshop</h3> <?php
}
?>


<form action="#" method="POST" class="register-form">
    <!-- is a check if data comes from our own site/page -->
	<?php wp_nonce_field( 'ddi-form', 'cagnotte-verif' ); ?>

    <div class="field" hidden>
        <div class="control">
            <input class="input" id="type" type="type" name="type" value="workshop" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="name-school">Naam school</label>
        <div class="control">
            <input class="input" id="name-school" type="text" name="name-school" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="location-school">Locatie</label>
        <div class="control">
            <input class="input" id="location-school" type="text" name="location-school" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="adres">Adres</label>
        <div class="control">
            <input class="input" id="adres" type="text" name="adres" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="postcode">Postcode</label>
        <div class="control">
            <input class="input" id="postcode" type="text" name="postcode" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="plaats">Plaats</label>
        <div class="control">
            <input class="input" id="plaats" type="text" name="plaats" value="" required/>
        </div>
    </div>
    
    <div class="field">
        <label class="label" for="name">Contactpersoon school</label>
        <div class="control">
            <input class="input" id="name" type="text" name="name" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="function">Functie</label>
    <div class="control">
            <input class="input" id="function" type="text" name="function" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email">Email</label>
        <div class="control">
            <input class="input" id="email" type="email" name="email" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="tel">Telefoonnummer</label>
        <div class="control">
            <input class="input" id="tel" type="tel" name="tel" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="preference-date">Voorkeursdatum</label>
        <div class="control">
            <input class="input" id="preference-date" type="date" name="preference-date" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="amount-students">Aantal leerlingen</label>
        <div class="control">
            <input class="input" id="amount-students" type="number" name="amount-students" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="level">Niveau</label>
        <div class="control">
            <input class="input" id="level" type="text" name="level" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="year">Leerjaar</label>
        <div class="control">
            <input class="input" id="year" type="text" name="year" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="remarks"> Vragen/opmerkingen?</label>
        <div class="control">
            <textarea class="textarea" id="remarks" name="remarks" rows="4" cols="50"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <input class="button is-link" id="submit" type="submit" name="signup-form-ddi" id="submit" class="submit" value="Aanmelden" />
        </div>
    </div>

</form>

