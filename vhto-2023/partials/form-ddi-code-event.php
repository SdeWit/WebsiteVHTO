<?php 
if ( isset( $_GET['success'] ) ) {
	$success = sanitize_title( $_GET['success'] );

    if( $success == 1){
        ?><h3>Bedankt voor het inschrijven! </h3> <?php
    }
} else {
    ?><h3>Schrijf je in voor het code event!</h3> <?php
}
?>


<form action="#" method="POST" class="register-form">
    <!-- is a check if data comes from our own site/page -->
	<?php wp_nonce_field( 'ddi-event-form', 'cagnotte-verif' ); ?>

    <div class="field" hidden>
        <div class="control">
            <input class="input" id="type" type="type" name="type" value="code-event" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="firstname">Voornaam</label>
        <div class="control">
            <input class="input" id="firstname" type="text" name="firstname" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="lastname">Achternaam</label>
        <div class="control">
            <input class="input" id="lastname" type="text" name="lastname" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="age">Leeftijd</label>
        <div class="control">
            <input class="input" type="number" name="age" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email">Email</label>
        <div class="control">
            <input class="input" id="email" type="email" name="email" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="city">Woonplaats</label>
        <div class="control">
            <input class="input" id="city" type="text" name="city" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="school">School</label>
        <div class="control">
            <input class="input" id="school" type="text" name="school" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="level">In welke klas zit je?</label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="level" value="3havo">
                    3 havo
            </label>
            <label class="radio">
                <input type="radio" name="level" value="3vwo">
                    3 vwo
            </label>
            <label class="radio">
                <input type="radio" name="level" value="4havo">
                    4 havo
            </label>
            <label class="radio">
                <input type="radio" name="level" value="4vwo">
                    4 vwo
            </label>
            <label class="radio">
                <input type="radio" name="level" value="5havo">
                    5 havo
            </label>
            <label class="radio">
                <input type="radio" name="level" value="5vwo">
                    5 vwo
            </label>
            <label class="radio">
                <input type="radio" name="level" value="6vwo">
                    6 vwo
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="experience">Heb je al eerder geprogrammeerd?</label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="experience" value="ja">
                    Ja
            </label>
            <label class="radio">
                <input type="radio" name="experience" value="nee">
                    Nee
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email2">Email ouder of verzorger</label>
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
        <label class="label" for="remarks">Overige opmerkingen</label>
        <div class="control">
            <textarea class="textarea" id="remarks" name="remarks" rows="4" cols="50"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <input class="button is-link" id="submit" type="submit" name="signup-form-ddi-event" id="submit" class="submit" value="Aanmelden" />
        </div>
    </div>

</form>

