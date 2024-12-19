@component('mail::message')

# Welcome to {{ $demo->sender }}!
Dear {{ $demo->receiver_name }},<br>
Thank you for choosing {{ $demo->sender }} as your Crypto Investment Platform. Your account has been successfully created. Make deposit now into your investment account to start earning daily profits.

Make sure to keep your login details safe for future references. For safety and security reasons, never share your login details or password with anyone. 

A large list of tradeable Assets, Indices, NFT art, gold, Stocks and Commodities CFD with Crypto Investment using the MTA trading platform and Bitcoin mining.

Please contact us at {{ $demo->contact_email }} with your email or your updated contact number or visit our contact us page. <br><br>

Kind regards,<br>
{{ $demo->sender }}.<br><br>
@endcomponent


