<x-mail::message>
# New Contact Form Submission

You have received a new message from the contact form on your landing page.

**Name:** {{ $name }}  
**Email:** {{ $email }}

**Message:**
<x-mail::panel>
{{ $message }}
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
