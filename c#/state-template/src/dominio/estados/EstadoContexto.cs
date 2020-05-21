using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace state_template.src.dominio.estados
{
    interface EstadoContexto 
    {
        void actuar(Contexto contexto);
    }
}
