package dominio.estados;

import dominio.Contexto;

public class EstadoConcretoB implements EstadoContexto {

    public void actuar(Contexto contexto) {
        //TODO
        if(cumpleCondicionParaCambiarDeEstado(contexto)){
            //cambiar a otro estado
        }
    }

    private boolean cumpleCondicionParaCambiarDeEstado(Contexto contexto){
        //TODO
        return true;
    }
}