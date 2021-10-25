@component('mail::message')
Beste {{ $data['FriendsName'] }}

Je kan niks!

met vriendelijke groet,<br>
{{ $data['YourName'] }}
<br>
    @component('mail::button', ['url' => 'https://nietveel.be/'])
        Stuur een mail terug!
    @endcomponent
<br><br>
    @component('mail::subcopy')
        Deze mail is gestuurd via {{env('APP_NAME')}}. De <a href="https://nietveel.be/terms-of-use">gebruiksvoorwaarden</a> en <a href="https://nietveel.be/privacy-policy">privacybeleid</a> van {{env('APP_NAME')}} zijn van toepassing
    @endcomponent
@endcomponent
