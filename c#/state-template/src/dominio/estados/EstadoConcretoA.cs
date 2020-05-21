using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace state_template.src.dominio.estados
{
    class EstadoConcretoA : EstadoContexto 
    {
        public void actuar(Contexto contexto) 
        {
            //TODO
            if (this.cumpleCondicionParaCambiarDeEstado(contexto))
            {
                contexto.cambiarEstado(new EstadoConcretoB());
            }
        }

        private bool cumpleCondicionParaCambiarDeEstado(Contexto contexto)
        {
            //TODO
            return true;
        }
    }
}
