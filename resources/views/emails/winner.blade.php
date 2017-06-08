@component('mail::message')

# {{$user->firstname. " " . $user->lastname}} u heeft Gewonnen!

winner winner chicken dinner

@component('mail::button', ['url' => ''])
Download ticket
@endcomponent


@endcomponent
