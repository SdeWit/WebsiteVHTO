<?php 
if ( isset( $_GET['success'] ) ) {
	$success = sanitize_title( $_GET['success'] );

    if( $success == 1){
        ?><h3>Bedankt voor je aanmelding in spiegelbeeld! </h3> <?php
    }
} else {
    ?><h3>Schrijf je in voor spiegebeeld</h3> <?php
}
?>

<form action="#" method="POST" class="register-form">
    <!-- is a check if data comes from our own site/page -->
	<?php wp_nonce_field( 'spiegelbeeld-form', 'cagnotte-verif' ); ?>

    <h4>Persoonlijke gegevens</h4> 
    <div class="field">
        <label class="label" for="first-name">Voornaam</label>
        <div class="control">
            <input class="input" id="first-name" type="text" name="first-name" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="last-name">Achternaam</label>
        <div class="control">
            <input class="input" id="last-name" type="text" name="last-name" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="role">Ik ben een</label>
        <div class="control">
            <input type="radio" name="role" value="student" id="role1"> 
            <label class="radio" for="role1">Student</label>

            <input type="radio" name="role" value="professional" id="role2"> 
            <label class="radio" for="role2">Professional of PhD/Postdoc</label>

            <input type="radio" name="role" value="anders" id="role3"> 
            <label class="radio" for="role3">Anders, namelijk</label>
            <input class="input" type="text" name="role-text" />
        </div>
    </div>

    <div class="field">
        <label class="label" for="email">Email waarop we je kunnen bereiken</label>
        <div class="control">
            <input class="input" id="email" type="email" name="email" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email2">Email (reserve)</label>
        <div class="control">
            <input class="input" id="email2" type="email" name="email2" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="tel">Telefoonnummer</label>
        <div class="control">
            <input class="input" id="tel" type="tel" name="tel" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="birthday">Geboortedatum</label>
        <div class="control">
            <input class="input" id="birthday" type="date" name="birthday" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="adres">Adres (straat, huisnummer en postcode)</label>
        <div class="control">
            <input class="input" id="adres" type="text" name="adres" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="adres-city">Woonplaats</label>
        <div class="control">
            <input class="input" id="adres-city" type="text" name="adres-city" value="" required/>
        </div>
    </div>

     <h4>Opleiding</h4> 
    <div class="field">
        <label class="label" for="name-school">Naam onderwijsinstelling</label>
        <div class="control">
            <input class="input" id="name-school" type="text" name="name-school" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="school-city">Plaats onderwijsinstelling</label>
        <div class="control">
            <input class="input" id="school-city" type="text" name="school-city" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="levels">Opleidingsniveau (als je meerdere opleiding hebt gevulgd, kruis deze aan)</label>
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" name="mbo-1" value="mbo-1">
                    mbo-niveau 1
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="mbo-2" value="mbo-2">
                    mbo-niveau 2
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="mbo-3" value="mbo-3">
                    mbo-niveau 3
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="mbo-4" value="mbo-4">
                    mbo-niveau 4
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="hbo-bachelor" value="hbo-bachelor">
                    hbo-bachelor
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="hbo-master" value="hbo-master">
                    hbo-master
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="wo-bachelor" value="wo-bachelor">
                    wo-bachelor
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="wo-master" value="wo-master">
                    wo-master
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="phd" value="phd">
                    PhD
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="postdoc" value="postdoc">
                    Postdoc
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="study">Naam hoogst genoten opleiding</label>
        <div class="control">
            <input class="input" id="study" type="text" name="study" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="graduation-date">Verwachte afstudeerdatum (indien student)</label>
        <div class="control">
            <input class="input" id="graduation-date" type="date" name="graduation-date" value=""/>
        </div>
    </div>

    <h4>Werk</h4> 
    <p>Ben je student? Dan kun je de vragen over werk overslaan</p>

    <div class="field">
        <label class="label" for="name-company">Naam werkgever</label>
        <div class="control">
            <input class="input" id="name-company" type="text" name="name-company" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="function-company">Huidige functie</label>
        <div class="control">
            <input class="input" id="function-company" type="text" name="function-company" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="function-description">Functie-omschrijving</label>
        <div class="control">
            <textarea class="textarea" id="function-description" name="function-description" rows="4" cols="50"></textarea>
        </div>
    </div>

    <div class="field">
        <label class="label" for="adres-company">Adres werkgever</label>
        <div class="control">
            <input class="input" id="adres-company" type="text" name="adres-company" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="zipcode-company">Postcode</label>
        <div class="control">
            <input class="input" id="zipcode-company" type="text" name="zipcode-company" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="city-company">Woonplaats</label>
        <div class="control">
            <input class="input" id="city-company" type="text" name="city-company" value=""/>
        </div>
    </div>

    <h4>Inzet voorlichtingsactiviteiten</h4> 
    <p>Je mag zelf bepalen hoe vaak je aan voorlichtingsactiviteiten wilt deelnemen. Je ontvangt een uitnodiging wanneer er bij jou in de buurt een activiteit wordt georganiseerd.</p>

    <div class="field">
        <label class="label" for="activities">Ik ben inzetbaar voor (meerdere opties mogelijk)</label>
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" name="activities-speeddaten" value="speeddaten">
                    Speeddaten
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="activities-gastles" value="gastlessen">
                    Gastlessen
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="activities-mentor" value="mentoring">
                    Mentoring
            </label></br>
            <label class="checkbox">
                <input type="checkbox" name="activities-publiek" value="publiek">
                    Publiek optreden
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="remarks"> Vragen/opmerkingen?</label>
        <div class="control">
            <textarea class="textarea" id="remarks" name="remarks" rows="4" cols="50"></textarea>
        </div>
    </div>

    <div class="field">
        <label class="label" for="VHTO"> Hoe heb je VHTO gevonden?</label>
        <div class="control">
            <textarea class="textarea" id="VHTO" name="VHTO" rows="4" cols="50" required></textarea>
        </div>
    </div>

    <div class="field">
        <label class="label" for="privacy-statement"><a href="/privacyverklaring" target="_blank">Privacy statement</a> gelezen?</label>
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" name="privacy-statement" value="ja" required>
                    Ja
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="newsletter">Ik ontvang graag de nieuwsbrief</label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="newsletter" value="ja">
                    Ja
            </label>
            <label class="radio">
                <input type="radio" name="newsletter" value="nee">
                Nee
            </label>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <input class="button is-link" id="submit" type="submit" name="signup-form-spiegelbeeld" id="submit" class="submit" value="Aanmelden" />
        </div>
    </div>

</form>

