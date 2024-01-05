<!-- resources/views/emails/reservation_confirmation.blade.php -->

@component('mail::message')
    # New Reservation

    You have a new reservation with the following details:

    **Email:** {{ $reservationData['email'] }}
    **Phone:** {{ $reservationData['phone'] }}
    **Title:** {{ $reservationData['title'] }}
    **Content:** {{ $reservationData['content'] }}
    **Price:** ${{ $reservationData['price'] }}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
