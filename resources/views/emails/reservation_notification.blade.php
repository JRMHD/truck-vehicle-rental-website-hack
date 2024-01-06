<!-- resources/views/emails/reservation_notification.blade.php -->

<p style="font-family:Arial, sans-serif; font-size:16px; line-height:1.5; color:#333">

<p style="font-size:18px; font-weight:bold; margin-top:25px">New Booking Notification</p>

<p><strong style="color:#0071bc">Email:</strong> <a href="mailto:{{ $reservationData['email'] }}"
        style="color:#666; text-decoration:none;">{{ $reservationData['email'] }}</a></p>

<p><strong style="color:#0071bc">Phone:</strong> <a href="tel:{{ $reservationData['phone'] }}"
        style="color:#666; text-decoration:none;">{{ $reservationData['phone'] }}</a></p>

<p><strong style="color:#0071bc">Vehicle Type:</strong> {{ $reservationData['vehicle_type'] }}</p>

<p style="border-bottom:3px solid #eee; padding-bottom:25px; margin-bottom:25px"></p>

<p style="font-size:14px; line-height:1.5; color:#999">
    You have received a new service booking on HackSolutionsUSA.com. Please review the request and contact the customer
    to confirm availability and pricing. Let us know if you have any other questions!
</p>

<p style="font-family:Arial, sans-serif;">Regards,<br>The HackSolutionsUSA.com Team</p>

</p>
