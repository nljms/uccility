	@component('mail::message')

<h3> Your Account has been Activated! </h3>

@component('mail::panel')

<span style="font-size: 18px; color: rgb(252,115,73)">http://uccility.dev:8000/{{ $confirmation_code }}</span>

Contact us here: <br>
uccilityapp@gmail.com <br>
+6390123456789 <br>
123-456-789 <br>
@endcomponent

Start using the App by Downloading:


@component('mail::button', ['url' => 'https://github.com'])
Download the App!
@endcomponent

Thanks,<br>
{{ config('app.name') }} Admin  

@endcomponent
