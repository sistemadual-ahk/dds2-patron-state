from src.estados.estado_contexto import EstadoContexto
from src.estados.estado_concreto_b import EstadoConcretoB


class EstadoConcretoA(EstadoContexto):

    def actuar(self, contexto):
        # TODO
        if self.__cumple_condicion_para_cambiar_de_estado(contexto):
            contexto.cambiar_estado(EstadoConcretoB())

    def __cumple_condicion_para_cambiar_de_estado(self, contexto):
        # TODO
        return True