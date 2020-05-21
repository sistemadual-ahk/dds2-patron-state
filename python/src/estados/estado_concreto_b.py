from src.estados.estado_contexto import EstadoContexto


class EstadoConcretoB(EstadoContexto):

    def actuar(self, contexto):
        # TODO
        if self.__cumple_condicion_para_cambiar_de_estado(contexto):
            # cambiar de estado
            pass

    def __cumple_condicion_para_cambiar_de_estado(self, contexto):
        # TODO
        return True
