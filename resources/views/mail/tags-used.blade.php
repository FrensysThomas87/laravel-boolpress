@component('mail::message')
# Introduction
@foreach ($tags as $tag )
{{$tag->tag_name}}
@endforeach

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
