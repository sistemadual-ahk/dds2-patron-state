<?php
namespace dominio\estados;

use dominio\Contexto;

interface EstadoContexto {
    public function actuar(Contexto $contexto);
}