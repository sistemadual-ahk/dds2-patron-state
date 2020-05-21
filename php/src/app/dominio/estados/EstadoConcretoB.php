<?php


class EstadoConcretoB implements EstadoContexto {

    public function actuar(Contexto $contexto) {
        // TODO: Implement actuar() method.
        if($this->cumpleCondicionParaCambiarDeEstado($contexto)){
            //cambiar a otro estado
        }
    }

    private function cumpleCondicionParaCambiarDeEstado(Contexto $contexto) : boolean {
        // TODO
        return true;
    }
}