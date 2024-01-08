@component('mail::message')
    # New Subscription Alert

    A new user has subscribed:

    **Name:** {{ $subscription->first_name }} {{ $subscription->last_name }}

    **Email:** {{ $subscription->email }}

    This information has been stored in the database.

    @component('mail::button', ['url' => ''])
        View Subscription
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
