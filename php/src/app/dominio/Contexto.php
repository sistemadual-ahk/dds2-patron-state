<?php


class Contexto {
    /**
     * @var EstadoContexto
     */
    private $estado;


    public function __construct(){
        $this->estado = new EstadoConcretoA();
    }

    public function actuar(){
        $this->estado->actuar($this);
    }

    public function cambiarEstado(EstadoContexto $estado){
        $this->estado = $estado;
    }
}