@component('mail::message')
# Welcome to {{ env('APP_NAME') }}

Dear {{ auth()->user()->username }} Congratulations!
We welcome you to become a part of the {{ env('APP_NAME') }} and excel in your growth through tremendous opportunities at our platform.

@component('mail::button', ['url' => route('user.dashboard.index')])
Go to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent