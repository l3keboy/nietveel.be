<link rel="stylesheet" href="/css/mail.css">
<div id="mail" class="mail-container container">
    <div class="mail-form-div">
        <h1 class="mail-title">MA<span>I</span>L</h1>
        <h2 class="mail-subtitle">Wacht niet. Stuur een mail naar een vriend om aan te
            geven dat hij/zij niks kan.</h2>
    </div>
    <div class="mail-content-div">
        <form class="mail-form" id="mail-form" oninvalid="" action="/sendmail" method="POST">
            @csrf
            <div class="mail-form-input-div">
                <input class="mail-form-input" type="email" name="friendsemail" id="friendsemail" placeholder="E-mail Vriend (Verplicht)"
                       control-id="ControlID-1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" required>
            </div>
            <div class="mail-form-input-div">
                <input class="mail-form-input" type="text" name="friendsname" id="friendsname" placeholder="Naam Vriend (Verplicht)"
                       control-id="ControlID-2" required>
            </div>
            <div class="mail-form-input-div">
                <input class="mail-form-input" type="text" name="yourname" id="yourname" placeholder="Jouw Naam (Verplicht)"
                       control-id="ControlID-3" required>
            </div>
            <div class="mail-form-input-div">
                <input class="accept-policy-checkbox" type="checkbox" control-id="ControlID-4" required>
                <label class="accept-policy-checkbox-label">Door op 'VERSTUUR' te drukken geeft u toestemming voor het
                gebruik van deze gegevens. <br>Voor meer informatie zie de
                    <a href="/terms-of-use">Gebruiksvoorwaarden</a> en het <a href="/privacy-policy">Privacybeleid</a></label>
            </div>
            <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
            <div class="container-send-btn">
                <button class="send-btn" type="submit" value="submit" control-id="ControlID-5">
                    VERSTUUR
                </button>
            </div>
        </form>
    </div>
</div>
