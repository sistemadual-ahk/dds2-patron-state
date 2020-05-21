<?php
namespace dominio;

use dominio\estados;

class Contexto {
    /**
     * @var estados\EstadoContexto
     */
    private $estado;


    public function __construct(){
        $this->estado = new estados\EstadoConcretoA();
    }

    public function actuar(){
        $this->estado->actuar($this);
    }

    public function cambiarEstado(estados\EstadoContexto $estado){
        $this->estado = $estado;
    }
}