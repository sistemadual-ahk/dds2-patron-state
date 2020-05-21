package dominio.estados;

import dominio.Contexto;

public class EstadoConcretoA implements EstadoContexto{

    public void actuar(Contexto contexto) {
        //TODO
        if(cumpleCondicionParaCambiarDeEstado(contexto)){
            contexto.cambiarEstado(new EstadoConcretoB());
        }
    }

    private boolean cumpleCondicionParaCambiarDeEstado(Contexto contexto){
        //TODO
        return true;
    }
}