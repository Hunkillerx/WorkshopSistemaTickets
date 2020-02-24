
## Glosario:
* ***PK*** - Primary Key
* ***FK*** - Foreign Key
* ***UQ*** - Unique
* ***CAT*** - Catalog
* ***1 - 1*** - One to One
* ***1 - M*** - One to Many
* ***M - M*** - Many to Many

## Reglas de Negocio:
* Registrar participantes para el evento Entrena tu Glamour.
* El evento tendta 4 disciplinas:
    - KickBoxing
    - Pilates
    - Yoga
    - Zumba
* Cada disciplina tendra 3 bloques de horarios:
    - Bloque 1 de 9:00 a 12:00
    - Bloque 2 de 14:00 a 17:00
    - Bloque 3 de 18:00 a 21:00
* Cada bloque tendra un maximo de 10 participantes, excepto los de Yoga que tendran 20.
* Cada participante solo se podra registrar en una sola actividad.

## Entidades

### Actividades(***CAT***)

* actividad_id (***PK***)
* bloque
* disciplina
* horario
* cupo

### Participantes
* email (***PK***) y (***UQ***)
* nombre
* apellidos
* nacimiento
  
### Registro
* registro_id (***PK***)
* email (***FK***)
* actividad (***FK***)
* fecha

## Relaciones del Modelo
1. Los **Participates** crean un **Registro** (*1 - 1*).
2. Las **Actividades** se asignan a un **Registro** (*1 - 1*)

## Informacion de catalogo de actividades
* ('1K','Bloque1','KICK BOXING','9:00 a 12:00',10)
* ('1Y','Bloque1','YOGA','9:00 a 12:00',20)
* ('1P','Bloque1','PILATES','9:00 a 12:00',10)
* ('1Z','Bloque1','ZUMBA','9:00 a 12:00',10)
* ('2K','Bloque2','KICK BOXING','14:00 a 17:00',10)
* ('2Y','Bloque2','YOGA','14:00 a 17:00',20)
* ('2P','Bloque2','PILATES','14:00 a 17:00',10)
* ('2Z','Bloque2','ZUMBA','14:00 a 17:00',10)
* ('3K','Bloque3','KICK BOXING','18:00 a 21:00',10)
* ('3Y','Bloque3','YOGA','18:00 a 21:00',20)
* ('3P','Bloque3','PILATES','18:00 a 21:00',10)
* ('3Z','Bloque3','ZUMBA','18:00 a 21:00',10)

## Operaciones CRUD_

* Registrar Participantes:
  * Validar cupo de la actividad.
  * Insertar datos a las entidades Participantes y Registro
* Listar Registro.
* Eliminar Participante:
  * Eliminar datos a las entidades a las entidades Participantes y Registros.