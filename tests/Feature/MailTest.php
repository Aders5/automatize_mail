<?php

use App\Mail\NotificacionBot;
use Illuminate\Support\Facades\Mail;

it('envía un correo de notificación correctamente', function () {
    Mail::fake();

    Mail::to('test@example.com')->send(new NotificacionBot());

    Mail::assertSent(NotificacionBot::class);
});