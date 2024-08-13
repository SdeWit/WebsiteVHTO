<?php 
if ( isset( $_GET['success'] ) ) {
	$success = sanitize_title( $_GET['success'] );

    if( $success == 1){
        ?><h3>Bedankt voor het inschrijven! </h3> <?php
    }
} else {
    ?><h3>Schrijf je in!</h3> <?php
}
?>

<script>
    function validateGDForm(){
        levels = document.getElementsByClassName('levels-checkbox-group')
        
        for (index = 0; index < levels.length; ++index) {
            console.log(index)
            if(levels[index].checked){
                return true
            } 
        }

        document.getElementById("levelValidation").innerText = "Selecteer minstens 1 optie.";
        document.getElementById("validationMessage").innerText = "Selecteer minstens 1 optie bij de vraag 'Schooltype die op bezoek gaan of wilt ontvangen?'.";
        return false;    
   }
</script>
<form action="#" method="POST" class="register-form" onsubmit="return validateGDForm();">
    <!-- is a check if data comes from our own site/page -->
	<?php wp_nonce_field( 'gd-form', 'cagnotte-verif' ); ?>

    <div class="field">
        <label class="label" for="type">Bedrijf of school</label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="type" value="bedrijf" required>
                Bedrijf
            </label>
            <label class="radio">
                <input type="radio" name="type" value="po" required>
                Basisschool
            </label>
            <label class="radio">
                <input type="radio" name="type" value="vo" required>
                Middelbare school
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="name">Naam school of bedrijf</label>
        <div class="control">
            <input class="input" id="type" type="name" name="name" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="addresss">Bezoekadres</label>
        <div class="control">
            <input class="input" id="addresss" type="text" name="addresss" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="zipcode">Postcode</label>
        <div class="control">
            <input class="input" id="zipcode" type="text" name="zipcode" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="city">Plaats</label>
        <div class="control">
            <input class="input" id="city" type="text" name="city" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="provincie">Provincie</label>
        <div class="control">
            <input class="input" id="provincie" type="text" name="provincie" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="address_post">Postadres</label>
        <div class="control">
            <input class="input" id="address_post" type="text" name="address_post" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="zipcode_post">Postcode</label>
        <div class="control">
            <input class="input" id="zipcode_post" type="text" name="zipcode_post" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="city_post">Plaats</label>
        <div class="control">
            <input class="input" id="city_post" type="text" name="city_post" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="provincie_post"> Provincie</label>
        <div class="control">
            <input class="input" id="provincie_post" type="text" name="provincie_post" value="" required/>
        </div>
    </div>

    <h4>Contactpersonen</h4> 
    <div class="field">
        <label class="label" for="name_cp1">Voornaam + Achternaam contactpersoon 1</label>
        <div class="control">
            <input class="input" id="name_cp1" type="text" name="name_cp1" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email">Emailadres contactpersoon 1</label>
        <div class="control">
            <input class="input" id="email" type="email" name="email" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="tel">Direct nummer/06-nummer contactpersoon 1</label>
        <div class="control">
            <input class="input" id="tel" type="tel" name="tel" value="" required/>
        </div>
    </div>

   <div class="field">
        <label class="label" for="name_cp2">Voornaam + Achternaam contactpersoon 2</label>
        <div class="control">
            <input class="input" id="name_cp2" type="text" name="name_cp2" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="email2">Emailadres contactpersoon 2</label>
        <div class="control">
            <input class="input" id="email2" type="email" name="email2" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="tel2">Direct nummer/06-nummer contactpersoon 2</label>
        <div class="control">
            <input class="input" id="tel2" type="tel" name="tel2" value="" required/>
        </div>
    </div>

    <h4>Aanpak</h4> 
    <div class="field">
        <label class="label" for="method">Voor welke aanpak kies je?</label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="method" value="Bemiddeling van VHTO" required>
                    Ik vraag bemiddeling van VHTO om in contact te komen met een bedrijf of school
            </label></br>
            <label class="radio">
                <input type="radio" name="method" value="Regel zelf een bedrijf of school" required>
                    Ik regel zelf een bedrijf of school
            </label></br>
            <label class="radio">
                <input type="radio" name="method" value="Door andere partij gekoppeld" required>
                    Ik ben/word door een andere partij dan VHTO gekoppeld aan een bedrijf of school
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="amount_girls"> Aantal meisjes (minimum aantal deelnemende meisjes is 10 meisjes)</label>
        <div class="control">
            <input class="input" type="number" name="amount_girls" value="" required/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="group_split">Voor scholen: mag de groep worden gesplitst?</label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="group_split" value="ja">
                    Ja
            </label>
            <label class="radio">
                <input type="radio" name="group_split" value="nee">
                    Nee
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="distance">We gaan ervanuit uit de school zelf vervoer organiseert naar het bedrijf. Hoeveel kilometer zijn jullie bereid te reizen?</label>
        <div class="control">
            <input class="input" type="number" name="distance" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="levels">Schooltype die op bezoek gaan of wilt ontvangen?</label>
        <p id="levelValidation" class="has-text-warning"></p>
        <div class="control">
            <label class="checkbox">
                <input class="levels-checkbox-group" type="checkbox" name="po-7" value="groep 7">
                    Groep 7 (basisschool)
            </label></br>
            <label class="checkbox">
                <input class="levels-checkbox-group" type="checkbox" name="po-8" value="groep 8">
                    Groep 8 (basisschool)
            </label></br>
            <label class="checkbox">
                <input class="levels-checkbox-group" type="checkbox"  name="po-7/8" value="groep 7/8">
                    Groep 7/8 (basisschool)
            </label></br>
            <label class="checkbox">
                <input class="levels-checkbox-group" type="checkbox" name="vo-vmboBK" value="klas 1/2 vmbo B/K">
                    Klas 1/2 vmbo B/K
            </label></br>
            <label class="checkbox">
                <input class="levels-checkbox-group" type="checkbox" name="vo-vmboGLTL" value="klas 1/2 vmbo GL/TL">
                    Klas 1/2 vmbo GL/TL
            </label></br>
            <label class="checkbox">
                <input class="levels-checkbox-group" type="checkbox" name="vo-h" value="klas 1/2 havo">
                    Klas 1/2 havo
            </label>
            <label class="checkbox">
                <input class="levels-checkbox-group" type="checkbox" name="vo-hv" value="klas 1/2 havo/vwo">
                    Klas 1/2 havo/vwo
            </label>
            <label class="checkbox">
                <input class="levels-checkbox-group" type="checkbox" name="vo-v" value="klas 1/2 vwo">
                    Klas 1/2 vwo
            </label>
        </div>
    </div>

    <div class="field">
        <label class="label" for="match_22">Indien van toepassing mag VHTO het bedrijf of school uit 2023 benaderen? </label>
        <div class="control">
            <label class="radio">
                <input type="radio" name="match_22" value="ja">
                    Ja
            </label>
            <label class="radio">
                <input type="radio" name="match_22" value="nee">
                    Nee
            </label>
        </div>
    </div>

    <p>Regel je zelf een bedrijf of school of word je door een intermediair gekoppeld (zie vraag onder aanpak)? Vul dan onderstaande informatie in als het contact is bevestigd. Is het contact nog niet bevestigd? Vul dan niets in. We nemen in november contact op voor meer informatie.</p>

    <div class="field">
        <label class="label" for="match_name">Naam bedrijf, school of intermediair (niet verplicht)</label>
        <div class="control">
            <input class="input" id="match_name" type="text" name="match_name" value=""/>
        </div>
    </div>
    
    <div class="field">
        <label class="label" for="match_cp">Contactpersoon (niet verplicht)</label>
        <div class="control">
            <input class="input" id="match_cp" type="text" name="match_cp" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="match_email">Mailadres contactpersoon (niet verplicht)</label>
        <div class="control">
            <input class="input" id="match_email" type="email" name="match_email" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="match_tel">Telefoonnummer contactpersoon (niet verplicht) </label>
        <div class="control">
            <input class="input" id="match_tel" type="tel" name="match_tel" value=""/>
        </div>
    </div>

    <div class="field">
        <label class="label" for="statement">Ik heb de voorwaarden* gelezen en ga ermee akkoord </label>
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" name="statement" value="ja" required>
                    Ja
            </label>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <p id="validationMessage" class="has-text-warning"></p>
            <input class="button is-link" id="submit" type="submit" name="signup-form-gd" id="submit" class="submit" value="Meld je aan" />
        </div>
    </div>

</form>

