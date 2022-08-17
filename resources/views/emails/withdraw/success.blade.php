@component('mail::message')
# Withdrawal Successful

Dear user, <br>
You’ve successfully withdrawn {{ number_format($transaction->amount,2) }} funds from your account. 

Don’t recognize this activity? Please reset your password and contact customer support immediately. 

@component('mail::button', ['url' => route('user.support.create')])
Support Center
@endcomponent

Thanks,<br>
{{ env('APP_NAME') }}
@endcomponent
