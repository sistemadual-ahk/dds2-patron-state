<?php
namespace dominio\estados;

use dominio\Contexto;

class EstadoConcretoA implements EstadoContexto {

    public function actuar(Contexto $contexto){
        // TODO: Implement actuar() method.
        if($this->cumpleCondicionParaCambiarDeEstado($contexto)){
            $contexto->cambiarEstado(new EstadoConcretoB());
        }
    }

    private function cumpleCondicionParaCambiarDeEstado(Contexto $contexto) : boolean {
        // TODO
        return true;
    }
}