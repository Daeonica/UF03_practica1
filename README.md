# UF03_practica1


Práctica 1 UF3. La biblioteca de Barcelona.

Enunciado

Dar de alta un libro telemáticamente se está
convirtiendo en toda una pesadilla para los
trabajadores de una biblioteca localizada en la
ciudad de Barcelona ubicada en el barrio de Sant
Antoni.

Por ello se les ha pedido a los alumnos de DAW2
la realización de una aplicación en Laravel que
permita gestionar internamente el archivo de
libros almacenados, para facilitar las gestiones a
los trabajadores de la biblioteca que usen la web.
Como primera entrega, los alumnos trabajarán simulando una metodología
Scrum y presentarán al cliente migraciones y seeders realizados para la
aplicación en un sprint que durará una semana.
La entrega deberá hacerse en un repositorio en
GitLab.

El profesor actuará de representante técnico de la biblioteca para valorar si
lo solicitado por la biblioteca está presente en la aplicación de Laravel, le
pedirá usar rollbacks y ejecutar migraciones-seeders respectivamente.
Funcionamiento
Migrations

➢ Crea una migración para una tabla llamada books con los siguientes
campos: id (clave primaria, autincremental), isbn (cadena de texto,
única), title (cadena de texto), author (cadena de texto),
published_date (fecha), description (cadena de texto), price
(número decimal), created_at y updated_at (campos de fecha y
hora).

➢ Crea una migración para una tabla llamada categories con los
siguientes campos: id (clave primaria), name (cadena de texto),
created_at y updated_at (campos de fecha y hora).

➢ Crea una migración para una tabla pivot llamada book_category que
relaciona los registros de las tablas books y categories con los
campos book_id (clave foránea de la tabla books) y category_id
(clave foránea de la tabla categories).
Todas las migraciones tendrán que tener implementada la funcionalidad
necesaria para poder realizar los rollbacks necesarios.
Seeders

➢ Crear seeders para las tablas books y categories bajo el nombre
BooksTableSeeder y CategoriesTableSeeder respectivamente. Cada
seeder debe generar 10 registros aleatorios con datos “realistas”.
Utiliza la librería Faker para generar los datos.

➢ Crear un seeder para la tabla pivot book_category bajo el nombre
BookCategoryTableSeeder.

➢ Modificar el seeder BookCategoryTableSeeder para relacionar
aleatoriamente los registros de las tablas books y categories. Cada
libro debe tener entre 1 y 3 categorías asignadas.

Ejecución y pruebas
Para probar la ejecución, será necesario testear la aplicación ejecutando
migraciones y rollbacks correspondientes. Las pruebas que se pedirán serán
las siguientes:
➢ Ejecuta las migraciones.
➢ Ejecuta los seeders.
➢ Ejecuta un rollback con todas las migraciones.
➢ Ejecuta un rollback de manera aislada.

Entrega
Se valorará positivamente:
• Identificación, declaración y uso de clases para el problema.
• Limpieza y orden en la estructura.
Al hacer las subidas cuida los elementos que hay que añadir al .gitignore para no incluir
información sensible (ej: configuración bbdd) de tu proyecto o información en exceso
(dependencias /vendor) en el repositorio remoto.
La entrega se hará dejando el enlace del repositorio de Gitlab con todo el código
PHP, el fichero de configuración y el fichero log.
