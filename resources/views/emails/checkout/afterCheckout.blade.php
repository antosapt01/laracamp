@component('mail::message')
# Register Camp: {{$checkout->camp->title}}

Hi {{$checkout->user->name}}

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
