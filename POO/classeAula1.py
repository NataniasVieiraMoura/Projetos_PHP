'''RPG'''
class Mago:
    def __init__(self,nome="Merlin",tipo="Agua"):
        self.apelido = nome
        self.força = 0
        self.escudo = 0
        self.cajado = 0
        self.manto = 0
        self.habilidade = 0
        self.natureza = tipo
        self.energia = 1000
        self.historico = [self.apelido, self.força, self.escudo, self.cajado, self.manto, self.habilidade,
                          self.natureza, self.energia]
    def academ_mag(self,materia,consumo):
        self.disciplina = materia
        self.gasto = 0
        self.ocultismo = ' '
        if(self.disciplina == 'linguagens' or self.disciplina == 'humanas'):
            consumo -= consumo * 5
            especializacao = 'Latin e linguas ocultas'

        else:
            consumo -= consumo*10
            especializacao = 'Ruínas Antigas'
        self.ocultismo += especializacao
        self.historico.append(self.ocultismo)
        self.historico.append(self.disciplina)
        self.gasto += consumo/2
        self.historico[5] = consumo*3
        self.historico[7] = self.gasto

    def pergaminho(self, mostrar=True):
        if mostrar:
            print("Você abriu o pergaminho da sua jornada")
            for atributos in self.historico:
                print(f"O atributo mágico está: {atributos}")
        else:
            print("Você fecho o pergaminho da sua jornada.")
