using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace state_template.src.dominio.estados
{
    class EstadoConcretoB : EstadoContexto 
    {
        public void actuar(Contexto contexto) 
        {
            //TODO
            if (cumpleCondicionParaCambiarDeEstado(contexto))
            {
                //cambiar a otro estado
            }
        }

        private bool cumpleCondicionParaCambiarDeEstado(Contexto contexto)
        {
            //TODO
            return true;
        }
    }
}
