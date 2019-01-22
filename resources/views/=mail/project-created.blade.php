@component('mail::message')
# New Post : {{ $project -> title }}
<p>{{ $project -> Description }}</p>

@component('mail::button', ['url' => url('/projects/'.$project -> id)])
View Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
