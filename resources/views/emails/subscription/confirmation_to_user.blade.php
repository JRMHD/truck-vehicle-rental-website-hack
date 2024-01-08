@component('mail::message')
# Thank You for Subscribing!

Hi {{ $subscription->first_name }},

Thank you for subscribing to our newsletter. We appreciate your interest in our updates.

**Name:** {{ $subscription->first_name }} {{ $subscription->last_name }}

**Email:** {{ $subscription->email }}

@component('mail::button', ['url' => 'https://hacksolutionsusa.com/'])
Visit Our Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
