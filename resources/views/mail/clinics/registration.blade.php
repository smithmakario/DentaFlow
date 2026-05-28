@component('mail::message')
# Hello {{ $clinic_name }}

Thank you for registering with DentaFlow.

Your registration was successful, and your profile is currently being reviewed by our team. Once the review is complete, you will receive another email regarding the status of your account.


@component('mail::button', ['url' => '#'])
    Dashboard
@endcomponent

Best regards,<br>
The DentaFlow Team
@endcomponent
