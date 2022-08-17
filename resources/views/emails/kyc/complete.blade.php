@component('mail::message')
# KYC Request Update

Dear User,
Your KYC Request Approved Successfully, now you can access unrestricted Features in {{ env('APP_NAME') }}'s account.

@component('mail::button', ['url' => route('user.profile.index')])
Go to Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent