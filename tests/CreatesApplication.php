<?php

namespace Tests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        Hash::setRounds(4);

        return $app;
    }

    function es_test_para_add_user()
    {
        $this->post('/Registros/',[
            'nombre' => 'esasdg',
            'nombre2' => 'carajo',
            'apellido' => 'hijoles',
            'apellido2' =>'aszxdcfvgb'
 
        ])->assertSee('Hola hijos de la gran m.....');
    }
}
