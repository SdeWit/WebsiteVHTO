<?php 
if ( isset( $_GET['success'] ) ) {
	$success = sanitize_title( $_GET['success'] );

    if( $success == 1){
        ?><h3>Bedankt voor het inschrijven! </h3> <?php
    }
} else {
    ?><h3>Schrijf je in voor een gastles</h3> <?php
}
?>


<form action="#" method="POST" class="register-form">
    <!-- is a check if data comes from our own site/page -->
	<?php wp_nonce_field( 'bb-form', 'cagnotte-verif' ); ?>

    <div class="field" hidden>
        <div class="control">
            <input class="input" id="type" type="type" name="type" value="gastles" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="name"> Naam</label>
        <div class="control">
            <input class="input" id="name" type="text" name="name" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="function"> Functie</label>
    <div class="control">
            <input class="input" id="function" type="text" name="function" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email"> Email</label>
        <div class="control">
            <input class="input" id="email" type="email" name="email" value="" required/>
        </div>
    </div>


    <div class="field">
        <label class="label" for="tel"> Telefoonnummer</label>
        <div class="control">
            <input class="input" id="tel" type="tel" name="tel" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="name-school"> Naam school</label>
        <div class="control">
            <input class="input" id="name-school" type="text" name="name-school" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="location-school"> Plaats school</label>
        <div class="control">
            <input class="input" type="text" name="location-school" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="amount-groups"> Met hoeveel klassen wil je meedoen?</label>
        <div class="control">
            <input class="input" type="number" name="amount-groups" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="which-groups"> Uit welke groep/groepen?</label>
        <div class="control">
            <input class="input" id="which-groups" type="text" name="which-groups" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="preference-date"> Voorkeur voor datum, dag(en) en tijd</label>
        <div class="control">
            <input class="input" id="preference-date" type="text" name="preference-date" value="" required/>
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
            <input class="button is-link" id="submit" type="submit" name="signup-form-bb" id="submit" class="submit" value="Meld je aan" />
        </div>
    </div>

</form>

