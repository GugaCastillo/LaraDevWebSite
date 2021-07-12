@component('mail::message')
    Olá, você recebeu um contato através do website!

    Nome: <b>{{ $reply_name }}</b>

    Email: {{ $reply_email }}

    Sobre: <b>{{ $subject }}</b>

    Mensagem:

@component('mail::panel')
    {{ $message }}
@endcomponent

@endcomponent
