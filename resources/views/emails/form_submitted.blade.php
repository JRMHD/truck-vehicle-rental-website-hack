@component('mail::message')
    # You got a Message From a User in the Website.

    Check out bellow message:

    - **Name:** {{ $formData->name }}
    - **Email:** {{ $formData->email }}
    - **Subject:** {{ $formData->subject ?? 'Not specified' }}
    - **Message:** {{ $formData->message ?? 'No message' }}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
