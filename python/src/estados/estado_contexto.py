import abc


class EstadoContexto(abc.ABC):

    @abc.abstractmethod
    def actuar(self, contexto):
        pass
