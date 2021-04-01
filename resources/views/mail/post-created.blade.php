@component('mail::message')
# Introduction
Ciao questo messaggio contiene il seguente testo: <br/>
{{$post->text}}

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
