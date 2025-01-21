<x-mail::message>
# New Contact Form Submission

## Name: {{ $contactData['nama'] }}
## E-mail: {{ $contactData['email'] }}
## NIK: {{ $contactData['NIK'] }}
## Alamat: {{ $contactData['alamat'] }}
## telepon: {{ $contactData['telepon'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
