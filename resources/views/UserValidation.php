<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

    if(Session::has('usuario')=='') {
        Log::alert('Entro al loginardo');
        header('Location: /login');
        die();
    }