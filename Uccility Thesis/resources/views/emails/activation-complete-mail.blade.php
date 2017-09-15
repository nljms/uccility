@component('mail::message')

<h3> Your Account has been Activated! </h3>

@component('mail::panel')
You may login with your username "{{ $user->username }}"" or via email {{ $user->email }}
@endcomponent

Start using the App by Downloading:

@component('mail::button', ['url' => 'https://github.com'])
Download the App!
@endcomponent

Thanks,<br>
{{ config('app.name') }}    

@endcomponent
