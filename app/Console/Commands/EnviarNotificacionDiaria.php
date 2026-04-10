<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:enviar-notificacion-diaria')]
#[Description('Command description')]
class EnviarNotificacionDiaria extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
    $email = 'tu-correo-destino@gmail.com';
    \Illuminate\Support\Facades\Mail::to($email)->send(new \App\Mail\NotificacionBot());
    
    $this->info('Correo enviado con éxito a las ' . now());
    }
}
