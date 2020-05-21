package dominio;

import dominio.estados.EstadoConcretoA;
import dominio.estados.EstadoContexto;

public class Contexto {
    private EstadoContexto estado;

    public Contexto(){
        this.estado = new EstadoConcretoA();
    }

    public void actuar(){
        this.estado.actuar(this);
    }

    public void cambiarEstado(EstadoContexto estado){
        this.estado = estado;
    }
}