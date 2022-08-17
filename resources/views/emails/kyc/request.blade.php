@component('mail::message')
# KYC Request Received!

Thank you for Submitting KYC. you will get notified once your KYC Reject or Approved.!

@component('mail::button', ['url' => route('user.dashboard.index')])
Go to Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent