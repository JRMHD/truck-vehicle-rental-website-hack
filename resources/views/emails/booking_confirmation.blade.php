@component('mail::message')
    # New Booking Alert

    Hello,

    A new booking has been made on your website. Here are the details:

    **Vehicle Type:** {{ $bookingData['vehicle_type'] }}
    **Email:** {{ $bookingData['email'] }}
    **Phone:** {{ $bookingData['phone'] }}

    Please take the necessary actions and respond to the user.

    @component('mail::button', ['url' => ''])
        View Booking
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
