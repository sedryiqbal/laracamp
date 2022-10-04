@component('mail::message')
# Welcome

Hi {{$user->name}}
<br>
Welcome To Laracamp, Your Account Has been Created Successfully. Now You can choose Your best match camp

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
