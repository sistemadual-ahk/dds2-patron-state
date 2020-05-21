using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace state_template.src.dominio {
    using estados;
    
    class Contexto 
    {
        private EstadoContexto estado;

        public void actuar()
        {
            this.estado.actuar(this);
        }

        public void cambiarEstado(EstadoContexto estado)
        {
            this.estado = estado;
        }
    }
}
