@component('mail::message')

Dear Valued Customer,

Greetings from TicketNepal!

Please find attached the electronic invoice against your payment for TicketNepal. 

Thank you for your business.


You can get further details about your order by logging into our website.

@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Go to Website
@endcomponent

Thank you again for choosing us.

Regards,<br>
{{ config('app.name') }}
@endcomponent
