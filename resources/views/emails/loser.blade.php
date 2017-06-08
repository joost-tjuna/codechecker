@component('mail::message')
# {{$user->firstname. " " . $user->lastname}} U heeft verloren


@component('mail::button', ['url' => ''])
Probeer het nog eens
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
