from src.estados.estado_concreto_a import EstadoConcretoA


class Contexto(object):
    __estado = None

    def __init__(self):
        self.__estado = EstadoConcretoA()

    def actuar(self):
        self.__estado.actuar(contexto=self)

    def cambiar_estado(self, estado):
        self.__estado = estado
