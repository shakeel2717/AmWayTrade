@component('mail::message')
# Confirm Your Withdrawal

Dear user, <br>
You’ve initiated a request to withdraw from your {{ env('APP_NAME') }} account. Your OTP is:

# {{ session('otp') }}

Please carefully review the withdrawal address and operation information before you proceed. {{ env('APP_NAME') }} will not be responsible for any funds sent to the wrong address.

@component('mail::button', ['url' => route('user.support.create')])
Support Center
@endcomponent

The verification code will be valid for 30 minutes. Please do not share your code with anyone.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
