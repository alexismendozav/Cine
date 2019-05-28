CREATE DATABASE cine2;
USE cine2;
CREATE TABLE salas (
    id_sala INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    sala VARCHAR(5) NOT NULL);

CREATE TABLE categorias (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    categoria VARCHAR(20) NOT NULL,
    visible VARCHAR(5) NOT NULL
    );

CREATE TABLE clasificaciones (
    id_clasificacion INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    clasificacion VARCHAR(20) NOT NULL);

CREATE TABLE proyecciones (
    id_proyeccion INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    pelicula INT NOT NULL,
    sala INT NOT NULL, 
    dia DATE NOT NULL, 
    horario TIME NOT NULL);

CREATE TABLE peliculas(
    id_pelicula INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre_pelicula VARCHAR(80) NOT NULL,
    imagen VARCHAR(100) NOT NULL,
    triler VARCHAR(200) NOT NULL,
    duracion VARCHAR(15) NOT NULL,
    clasificacion int NOT NULL,
    categoria INT NOT NULL,
    idioma VARCHAR(20) NOT NULL,
    prioridad VARCHAR (15) NOT NULL,
    calificacion FLOAT NOT NULL,
    fecha DATE NOT NULL,
    descripcion VARCHAR(2000) NOT NULL 
);


ALTER TABLE proyecciones ADD CONSTRAINT fk_proyeccion_pelicula FOREIGN KEY(pelicula) REFERENCES peliculas(id_pelicula) ; 
ALTER TABLE proyecciones ADD CONSTRAINT fk_proyeccion_sala FOREIGN KEY(sala) REFERENCES salas(id_sala) ; 
 

ALTER TABLE peliculas ADD CONSTRAINT fk_pelicula_categoria FOREIGN KEY(categoria) REFERENCES categorias(id_categoria); 
ALTER TABLE peliculas ADD CONSTRAINT fk_pelicula_clasificacion FOREIGN KEY(clasificacion) REFERENCES clasificaciones(id_clasificacion); 

INSERT INTO salas VALUES (NULL,"S1"),(NULL,"S2"),(NULL,"S3"),(NULL,"S4"),(NULL,"S5"),(NULL,"S6"),(NULL,"S7");
INSERT INTO categorias VALUES (NULL,"ACCION","SI"),(NULL,"ANIMACION","SI"),(NULL,"AVENTURA","SI"),(NULL,"CIENCIA FICCION","SI"),(NULL,"COMEDIA","SI"),(NULL,"COMEDIA ROMANTICA","SI"),(NULL,"DRAMA","SI"),(NULL,"FANTASIA","SI"),(NULL,"ROMANCE","SI"),(NULL,"SUSPENSO","SI"),(NULL,"TERROR","SI");
INSERT INTO clasificaciones VALUES (NULL,"AA"),(NULL,"A"),(NULL,"B"),(NULL,"B15"),(NULL,"C"),(NULL,"D");


INSERT INTO peliculas VALUES (NULL,
                             'Aladdín',
                             'https://i.ibb.co/Nr4wWPF/aladdin.jpg',
                             'https://www.youtube.com/watch?v=foyufD52aog',
                             '128 min',
                              2,
                              10,
                              'ESP',
                              'ESTRENO',
                              4.0,
                              '2019-04-14',
                             'ALADDÍN, la apasionante adaptación de acción real del clásico animado de Disney de 1992, es la emocionante historia del encantador joven callejero Aladdín, la valiente y decidida Princesa Jasmín y el Genio, que puede ser la clave de su futuro. ALADDÍN está dirigida por Guy Ritchie (Sherlock Holmes, The Man from U.N.C.L.E.), que aporta su singular estilo de rápida acción visceral a la ficticia ciudad portuaria de Agrabah, y está escrita por John August (Dark Shadows, Big Fish) y Ritchie, basada en ALADDÍN de Disney. La película es protagonizada por: Will Smith (Ali, Hombres de negro) como el gran Genio; Mena Massoud (Tom Clancy’s Jack Ryan) como Aladdín, el desafortunado pero encantador joven callejero; Naomi Scott (Power Rangers) como la Princesa Jasmín, la hermosa y decidida hija del Sultán; Marwan Kenzari (Murder on the Orient Express) como Jafar, el poderoso hechicero; Navid Negahban (Homeland) como el Sultán preocupado por el futuro de su hija; Nasim Pedrad (Saturday Night Live) como Dalia, la mejor amiga y confidente de espíritu libre de la Princesa Jasmín; Billy Magnussen (EN EL BOSQUE) como el apuesto y arrogante pretendiente Príncipe Anders; y Numan Acar (The Great Wall) en el rol de Hakim, la mano derecha de Jafar y capitán de los guardias del palacio.'
                             );

INSERT INTO peliculas VALUES (NULL,
                             'X-Men Dark Phoenix',
                             'https://i.ibb.co/tM6jcW5/dark-poenix.jpg',
                             'https://www.youtube.com/watch?v=FEHPUA2vL_g',
                             '114 min',
                              3,
                              1,
                              'ESP',
                              'ESTRENO',
                              4.0,
                              '2019-06-06',
                              'En X-MEN: DARK PHOENIX, los X-MEN se enfrentan a su enemigo más temible y poderoso: uno de los suyos, Jean Grey. Durante una misión de rescate en el espacio, Jean casi muere cuando es golpeada por una fuerza cósmica misteriosa. A su regreso a casa, esta fuerza no sólo la hace infinitamente más poderosa, sino también mucho más inestable. Jean, quien lucha en su interior contra esta entidad, desencadena sus poderes en formas que no puede comprender ni dominar. Al estar en un espiral fuera de control, y lastimar a aquellos que más ama, Jean comienza a deshacer la mismísima estructura que mantiene unidos a los X-Men. Ahora, con esta familia cayéndose a pedazos, deberán encontrar una manera de unirse —no sólo para salvar el alma de Jean, sino también para salvar a nuestro planeta de extraterrestres que desean convertir esta fuerza en un arma y gobernar la galaxia.'
                             );

                             
INSERT INTO peliculas VALUES (NULL,
                             'Godzilla II: El Rey de los Monstruos',
                             'https://i.ibb.co/DwsnhPJ/godzilla-king-monsters-fin-2.jpg',
                             'https://www.youtube.com/watch?v=KA94TLkE8eY',
                             '132 min',
                              3,
                              1,
                              'ESP',
                              'ESTRENO',
                              4.0,
                              '2019-05-31',
                              'Esta nueva historia relata los esfuerzos heroicos de la agencia criptozoológica, Monarch, cuyos integrantes se enfrentan a una legión de monstruos gigantescos, incluido el poderoso Godzilla, que enfrentará a Mothra, Rodan y a su máximo némesis con tres cabezas: Rey Ghidorah. En el momento en que estas antiguas superespecies –que se creía que eran tan solo un mito– resurgen, pelearan por la supremacía y pondrán la existencia de la especie humana al borde de la extinción.' );

                             
INSERT INTO peliculas VALUES (NULL,
                             'John Wick 3 Parabellum',
                             'https://i.ibb.co/y02qD0p/johnWick.jpg',
                             'https://www.youtube.com/watch?v=9CHmEHBKuyE',
                             '131 min',
                              5,
                              1,
                              'ESP',
                              'NORMAL',
                              4.0,
                              '2019-05-17',
                              'John Wick está huyendo tras matar a un asesino internacional, pero esta vez hay un precio sobre su cabeza. Mujeres y hombres de todo el mundo vienen tras el. Toda acción tiene consecuencias.'
                              );

INSERT INTO peliculas VALUES (NULL,
                             'Desastre en París',
                             'https://i.ibb.co/KqhGQMP/desastre-en-paris.jpg',
                             'https://www.youtube.com/watch?v=26nILOgBuvw',
                             '89 min',
                              3,
                              1,
                              'ESP',
                              'NORMAL',
                              4.0,
                              '2019-05-24',
                              'Cuando París se sumerge en una extraña niebla mortal, los sobrevivientes se refugian en el los pisos superiores y los tejados de la ciudad. Sin noticias del mundo exterior, electricidad, agua o comida, una familia lucha por sobrevivir a la catástrofe. Pero a medida que pasan las horas, se ven obligados a enfrentar la realidad: los equipos de rescate parece que no vendrán. Si esperan salir con vida, tendrán que arriesgarse a salir a la niebla.');


INSERT INTO peliculas VALUES (NULL,
                             'El Fin de los Tiempos',
                             'https://i.ibb.co/6FQz7Pg/el-fin-de-los-tiempos.jpg',
                             'https://www.youtube.com/watch?v=c0xod651_GI',
                             '90 min',
                              3,
                              11,
                              'ESP',
                              'ESTRENO',
                              4.0,
                              '2019-05-24',
                              'Una pandemia viral de muertos vivientes ha arrasado todo el mundo, salvo dos ciudades. Dos supervivientes, Vivi y Maja consiguen subir al tren que les ha de llevar al refugio en el que supuestamente podrán rehacer sus vidas. Sin embargo, el tren se detiene a medio camino dejándolas expuestas en el denominado "corazón verde" de Thuringia, por lo que no les queda otro remedio que avanzar a pie. Por el camino forjan un vínculo entre ambas que se convierte en su mejor herramienta para intentar sobrevivir al caos en el que se ven inmersas.');

INSERT INTO peliculas VALUES (NULL,
                             'Pokémon: Detective Pikachu',
                             'https://i.ibb.co/PxfJVnJ/pokemon-detective-pikachu.jpg',
                             'https://www.youtube.com/watch?v=bILE5BEyhdo',
                             '105 min',
                              1,
                              3,
                              'ESP',
                              'ESTRENO',
                              4.5,
                              '2019-05-10',
                              'La historia comienza cuando el detective privado Harry Goodman desaparece misteriosamente y su hijo de 21 años, Tim, quiere averiguar qué pasó. Se une a la investigación el exsocio Pokémon de Harry, el Detective Pikachú: un superinvestigador adorable e hilarantemente perspicaz, que es un misterio hasta para él mismo. Cuando se dan cuenta que se pueden comunicar el uno con el otro, Tim y Pikachú unen esfuerzos para aventurarse a desembrollar el misterio. Al seguir las pistas juntos por las calles con luces de neón de Ryme City —una moderna metrópolis en expansión donde los humanos y Pokémones cohabitan en un mundo de acción en vivo hiper realista— se topan con diversos personajes de Pokémon y descubren una conspiración sorprendente que podría destruir esta coexistencia pacífica y amenazar al universo entero de Pokémon.');



INSERT INTO proyecciones VALUES (NULL,1,1,'2019-05-28','10:00'),(NULL,1,2,'2019-05-28','12:00'),(NULL,1,3,'2019-05-28','14:00'),(NULL,1,4,'2019-05-28','16:00'),
                                (NULL,1,5,'2019-05-28','16:00'),(NULL,1,6,'2019-05-28','18:00'),(NULL,1,7,'2019-05-28','20:00'),
                                (NULL,1,1,'2019-05-29','10:00'),(NULL,1,2,'2019-05-29','12:00'),(NULL,1,3,'2019-05-29','14:00'),(NULL,1,4,'2019-05-29','18:00'),
                                (NULL,1,5,'2019-05-29','19:00'),(NULL,1,6,'2019-05-30','22:00'),(NULL,1,7,'2019-05-30','14:00');

INSERT INTO proyecciones VALUES (NULL,2,1,'2019-05-28','11:00'),(NULL,2,2,'2019-05-28','13:00'),(NULL,2,3,'2019-05-28','15:00'),(NULL,2,4,'2019-05-28','17:00'),
                                (NULL,2,5,'2019-05-29','11:00'),
                                (NULL,2,5,'2019-05-30','11:00'),(NULL,2,2,'2019-05-30','13:00'),(NULL,2,3,'2019-05-30','19:00'),(NULL,2,4,'2019-05-30','23:00'),
                                (NULL,2,5,'2019-06-01','11:00');


INSERT INTO proyecciones VALUES (NULL,3,1,'2019-05-31','11:00'),(NULL,3,2,'2019-05-31','16:00'),(NULL,3,3,'2019-05-31','17:00'),(NULL,3,4,'2019-05-31','17:00'),
                                (NULL,3,5,'2019-06-01','11:00'),(NULL,3,5,'2019-06-01','16:00'),
                                (NULL,3,1,'2019-06-02','11:00'),(NULL,3,2,'2019-06-02','16:00'),(NULL,3,3,'2019-06-02','17:00'),(NULL,3,4,'2019-06-02','17:00'),
                                (NULL,3,5,'2019-06-03','11:00'),
                                 (NULL,3,1,'2019-06-03','11:00'),(NULL,3,2,'2019-06-03','16:00'),(NULL,3,3,'2019-06-03','17:00'),(NULL,3,4,'2019-06-03','17:00'),
                                (NULL,3,5,'2019-06-04','11:00');


