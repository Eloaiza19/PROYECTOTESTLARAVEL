**Table of Contents**

[TOCM]

[TOC]

#Introducción
El proyecto AcademiaLaravel se creó inicialmente con el fin de saciar las necesidades que constituyen esta academia, facilitando la creación de datos, ingreso, registro, etc. También, se facilitó el manejo de la información para el administrador, pudiendo así editar o eliminar tales registros en caso de ser necesario.

Este proyecto fue desarrollado en el centro de diseño e innovación tecnológica industrial (CDITI), el cual fue auspiciado por sus directivas, y desarrollado por sus estudiantes, supliendo las necesidades correspondientes de los usuarios, y culminando este proyecto satisfactoriamente, para así dar por finalizado el proyecto de grado.

Se desarrolló un software basado en un framework (Laravel) de PHP, el cual le dio funcionalidad a el backend, y facilitó el trabajo, ya que se pudo desarrollar de una manera más rápida y eficiente.

De igual manera para el frontend se utilizó un framework (bootstrap) de CSS, el cual se destinó para darle estilo a la apariencia de la academia, conectándose así con Laravel, para crear una página funcional.

#Objetivos
El proyecto tiene como objetivo elaborar un sistema eficaz. Capaz de simular el funcionamiento de una institución educativa, donde sus principales entes son Estudiantes, docentes y cursos. se relacionan entre sí:
1.	Agilizar el modo de uso tradicional al crear cursos.
2.	Crear de manera ágil fichas de estudiantes y docentes. 
3.	Relacionar datos tanto de la ficha estudiante, docente y cursos en una base de datos.

#Alcance
1.	El documento está orienta al grupo de programadores de la ficha 2341240 e instructores involucrados en la revisión de este.
2.	El sistema involucra a todo el Centro De Diseño E Innovación Tecnológica Industria SENA Dosquebradas.
3.	El sistema fue probado a través de servidores locales obteniendo con éxito la creación de la ficha curso con sus respectivos datos. El sistema es capaz de crear una ficha de estudiantes a través de su módulo de creación ingresando los datos del estudiante y relacionándolo con el curso correspondiente a su inscripción de igual manera permite crear al docente. El sistema aún no permite que usuarios se registren o inicien sesión, no contiene un módulo de gestión de usuarios, no ha sido probado en servidores. En esta fase del proyecto no se ha desarrollado aún un Frontend. Se ha trabajado únicamente en el backend de la aplicación, en una versión no terminada. Por tanto, este manual solo aplica al backend. Funcionalidades como que un estudiante matriculado pueda inscribir materias o ver las materias de un estudiante, aún no se han creado modelos que nos permita elaborar este tipo de acciones.

#Usuarios
Usuarios del software, este software está dirigido principalmente a los estudiantes, docentes y administrativos.

Los estudiantes y aspirantes al igual que los docentes, podrán registrarse e ingresar los datos correspondientes, también podrán hacer el respectivo login.

los administradores, podrán hacer registros, editar los datos, e incluso eliminarlos.
Se debe aclarar que, en esta fase del proyecto, no se han completado los roles de usuario, privilegios administrativos ni tampoco se han realizado pruebas del sistema, pero así se pretende manejar el tratamiento de los usuarios.

**Ejemplos para esta sección**
De acuerdo con el documento de requisitos, los usuarios que tendrá este aplicativo son:

**Aspirantes:** Son las personas que desean estudiar en Academia Laravel, lo podrán hacer registrándose con su documento de identidad y sus datos personales Una vez registrados, pueden realizar la matrícula al programa deseado.

**Estudiantes:** son las personas que ya están dentro del programa y podrán acceder a la página fácilmente haciendo su login, con los datos que anteriormente ingresaron en el registro.

**Docentes:** tendrán la posibilidad de ingresar a través de él login con los datos ingresados anteriormente en el registro, podrán observar el listado de los cursos disponibles y la cantidad de alumnos por curso.

**Administradores:** Son los encargados de administrar la plataforma. tendrán un rol especial en el aplicativo ya que podrán disponer de las siguientes opciones:
•	Agregar usuarios
•	Editar usuarios
•	Eliminar usuarios

#Herramientas utilizadas en el desarrollo
**Visual Studio Code**
Es un IDE desarrollado. Se utilizó la versión 1.71.1 cuya descarga se obtuvo des de https://code.visualstudio.com/download
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/nueva1.PNG?raw=true)

**GitHub**
Un repositorio de Git es un almacenamiento virtual de tu proyecto. Te permite guardar versiones del código a las que puedes acceder cuando lo necesites.
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/nueva2.PNG?raw=true)

**Git Bash**
Git Bash es una aplicación para entornos de Microsoft Windows que ofrece una capa de emulación para una experiencia de líneas de comandos de Git. Bash es el acrónimo en inglés de Bourne Again Shell. Una shell es una aplicación de terminal que se utiliza como interfaz con un sistema operativo mediante comandos escritos.
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/nueva3.PNG?raw=true)

###Plugins instalados:
•	**Bootstrap Snippets**
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/1.png?raw=true)

•	**Laravel extensión Pack:** incluye: Laravel Blade, laravel snippets
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/2.png?raw=true)

**Framework Laravel**
En la instalación se indicó que el ejecutable de php se encuentra en la carpeta de XAMPP, en la ruta: E:\xampp-old_2\php
 ![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/nueva4.PNG?raw=true)

#Metodologia del proyecto
###Cascade
Para el desarrollo de este proyecto de software se utilizó la metodología CASCADA, la cual consiste en trabajar por fases, cuando termina una, inmediatamente se inicia la otra, todo se desarrolla por pasos, haciendo que el trabajo sea mucho más organizado
Si en algún momento se requiere algún tipo de cambio será más fácil llevarlo a cabo debido a que se trabajó por bloques, y todo se elaboró de manera organizada.
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/nueva5.PNG?raw=true)

#Requisitos técnicos para desarrollar el sistema
Para el correcto desarrollo del proyecto se usaron 2 Computadores con las siguientes características:
**RAM:** 64 GB
**Disco Duro: **1166 mb
**Procesador:** intel(R) Xeon(R) W-10855M CPU 
**Pantalla:** intel(R) UHD Graphics P630
**Ancho banda del internet: **descarga 10.88MPS a subida 21.55MPS

#Requisitos técnicos para la ejecución del sistema
La página web con todas sus funcionalidades, se podrá acceder desde cualquier computador que tenga mínimo estas características:

•	RAM: 16gb
•	Disco duro: 64gb
Se ha probado que el sistema funciona correctamente en los siguientes navegadores:
•	Google Chrome en su última versión
•	Mozilla Firefox
•	Opera
•	Microsoft edge

#Reglas de negocio
**Ley de Protección de Datos o Ley 1581 de 2012**
Reconoce y protege el derecho que tienen todas las personas a conocer, actualizar y rectificar las informaciones que se hayan recogido sobre ellas en bases de datos o archivos que sean susceptibles de tratamiento por entidades de naturaleza pública o privada.

**ley 30 de 1992- servicio público de educación superior **
La Educación Superior es un proceso permanente que posibilita el desarrollo de las potencialidades del ser humano de una manera integral, se realiza con posterioridad a la educación media o secundaria y tiene por objetivo el pleno desarrollo de los alumnos y su formación académica o profesional.

#Detalles de distribución de carpetas y archivos
Se colocan los pantallazos, explicando cada carpeta qué contiene, a qué se refiere cada archivo, se dan detalles de las rutas.

###Distribución de carpetas en el backend
 ![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/4.png?raw=true)

###Controladores de recursos
 ![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/5.png?raw=true)

Dentro de Http tenemos la carpeta Controllers, donde a su vez tenemos los siguientes controladores que son de recursos:

**•	CursoController.php:** Se encarga de agrupar toda la lógica de las peticiones de Http relacionadas con las vistas de curso.
**•	DocenteControler.php:** Se encarga de agrupar toda la lógica de las peticiones de Http relacionadas con las vistas de docente.
**•	EstudianteController.php:** Se encarga de agrupar toda la lógica de las peticiones de Http relacionadas con las vistas de estudiante.

#Migraciones: 
En el proyecto se pueden apreciar las siguientes migraciones, dentro de la ruta databes->Migrations:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/6.png?raw=true)

**Create_users_table.php:** Esta migración se refiere a la tabla user, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/7.png?raw=true)

**create_password_resets_table.php:** Esta migración se refiere a la tabla password, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/8.png?raw=true)

**create_failed_jobs_table.php: **Esta migración se refiere a la tabla failed_jobs, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/9.png?raw=true)

**create_personal_access_tokens_table.php:** Esta migración se refiere a la tabla personal, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/11.png?raw=true)

**create_cursos_table.php: **Esta migración se refiere a la tabla cursos, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/11.png?raw=true)

**add_imagen_to_cursos.php:** Esta migración se refiere a la tabla add_imagen, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/13.png?raw=true)

**create_docentes_table.php:** Esta migración se refiere a la tabla docente, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/14.png?raw=true)

**create_materias_table.php:** Esta migración se refiere a la tabla materia, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/15.png?raw=true)

**create_paises_table.php:** Esta migración se refiere a la tabla paises, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/17.png?raw=true)

create_departamentos_table.php: ****Esta migración se refiere a la tabla departamentos, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/18.png?raw=true)

**create_municipios_table.php:** Esta migración se refiere a la tabla municipios, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/19.png?raw=true)

**create_cursos_materias_table.php:** Esta migración se refiere a la tabla cursos_materias, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/20.png?raw=true)

**create_estudiante_table.php:** Esta migración se refiere a la tabla estudiante, donde se describen los campos tales como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/21.png?raw=true)

#Rutas principales para el proyecto Laravel
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/22.png?raw=true)

Dentro del archivo web.php que está en routes, encontramos las rutas principales del proyecto como:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/23.png?raw=true)

**/curso:** Esta ruta provee acceso a el controlador de recursos CursoController

**/docente: **Esta ruta provee acceso a el controlador de recursos DocenteController

**/estudiante: **Esta ruta provee acceso a el controlador de recursos EstudianteCcontroller

#Configuración de la Base de Datos
Para el caso particular se usó MySQL y, específicamente, PhpMyadmin, herramienta contenida en Xampp.
Para poder trabajar en producción con la base de datos, se deben habilitar los servicios de Apache y Mysql, dando clic en los botones start del control panel.
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/24.png?raw=true)

Si algún puerto está ocupado, se hace el respectivo cambio usando el botón Admin.
Los datos de acceso a la base de datos son:
**Host:** 127.0.0.1
**Usuario:** JuanSebastian
**Clave:** 1234567890
**Nombre de la BD:** diagramaacademia

Para la correcta configuración del proyecto Laravel y su conexión con la base de datos se agrega la información respectiva en el archivo .env
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/25.png?raw=true)

A través del siguiente panel se pueden hacer configuraciones en la base de datos:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/26.png?raw=true)

![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/27.png?raw=true)

![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/27.png?raw=true)

![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/29.png?raw=true)

Cuando configuramos nuestra base de datos es importante tener en cuenta el nombre de los campos, que sean nombrados de la misma manera en el código y en phpMyAdmin, para que las migraciones se generen sin ningún inconveniente.

###Detalles de los modelos y migraciones Laravel
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/30.png?raw=true)

Esta migración es referente al modelo Estudiante, la cual contiene toda la información para la tabla estudiantes, para la cual se han definido los siguientes campos y tipos de datos:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/31.png?raw=true)

El modelo respectivo se llama Estudiante
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/32.png?raw=true)

#Detalles técnicos módulos del sistema 
###Módulo Estudiantes
Este módulo se ha creado para los estudiantes, cualquier persona puede registrarse, con el fin de dejar sus datos; la información aquí suministrada se guardará en la tabla estudiantes de la base de datos ya mencionada. Los campos han sido configurados para que en nombre y apellidos solo acepte letras, en el campo tipo de documento es tipo select (cedula, tarjeta de identidad, pasaporte, etc.), en el campo número de documento solo acepta números, como mínimo son 10 números, en el campo cargar documento de identidad, solo permite subir archivos pdf, en el campo país de expedición del documento es de tipo select, el campo departamento de expedición también, se cargan los departamentos dependiendo del país seleccionado, al igual que el municipio, se cargan dependiendo del departamento de expedición del documento, la fecha es de tipo date, se autorrellena o se cambia por la respectiva fecha que se requiera, el campo género es de tipo select (FEMENINO, MASCULINO, OTROS), los campos de los datos de nacimiento se ejecuta de la misma manera que los de el país de expedición, el campo curso, acepta cualquier tipo de dato, y el campo estrato social, es tipo select, del 1 al 6 este módulo, se conecta con la vista de docentes y cursos.

Al entrar a este módulo desde el navegador se vería así:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/33.png?raw=true)

Al ingresar estos datos la vista se verá así:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/34.png?raw=true)

###Módulo Cursos
Este módulo se ha creado para la implementación de los cursos, solamente los administradores pueden crear los cursos; la información aquí suministrada se guardará en la tabla cursos de la base de datos ya mencionada. Los campos han sido configurados para que en nombre y solo acepte letras, descripción acepta cualquier tipo de dato, duración también acepta cualquier tipo de dato, en el campo cague imagen acepta solo carga archivos pdf.
Este módulo, se conecta con la vista de docentes y estudiantes.
Al entrar a este módulo desde el navegador se vería así:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/35.png?raw=true)

###Módulo Docentes
Este módulo se ha creado para la implementación de los docentes ,cualquier persona puede inscribirse; la información aquí suministrada se guardará en la tabla de docentes en la base de datos ya mencionada. Los campos han sido configurados para que en nombre y apellido solo acepte letras, los campos título universitario y edad, aceptan cualquier tipo de dato, el campo fecha es de tipo date, se podrá configurar de la manera deseada, los campos foto y documento de identidad, permite cargar cualquier tipo de archivo (pdf, img, etc.)
Este módulo, se conecta con la vista de cursos y estudiantes.

Al entrar a este módulo desde el navegador se vería así:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/36.png?raw=true)

La vista (view) en Laravel que permite renderizar esta vista es estudiantes.show.blade. Además, existen otras vistas, dentro de la carpeta estudiantes, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son:

**Create.blade.php:** Vista que provee un formulario diseñado exclusivamente para los aspirantes que desean ingresar a la academia como estudiantes:
se ve así:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/37.PNG?raw=true)

**Show.blade.php:** Vista que provee los datos ingresados por el estudiante en el navegador, a su vez permite editar la información de los estudiantes, e incluso eliminarla
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/38.PNG?raw=true)

**Index.blade.php:** Vista que provee la información de los estudiantes, a su vez, permite retornar a la vista para agregar estudiantes nuevamente.
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/39.PNG?raw=true)

**Edit.blade.php:** permite editar los datos de los estudiantes, para modificar la información en la vista de show.blade.php y así, actualizando los datos.
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/40.PNG?raw=true)

**Update.blade.php:** confirma o verifica que los datos editados se hayan actualizado correctamente
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/41.PNG?raw=true)

**Error.blade.php:** nos muestra una validación, la cual nos indica el siguiente mensaje para poder registrar el formulario:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/41.PNG?raw=true)

**Delete.blade.php:** la validación nos arroja este resultado cuando se ha eliminado correctamente un estudiante
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/43.PNG?raw=true)

**Add.blade.php:** la validación nos arroja este resultado cuando se agregan todos los datos de manera correcta:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/44.PNG?raw=true)

#Modulo relacional BD del sistema
La base de datos para este sistema, como ya se informó se llama diagramaacademia y el modelo es el siguiente:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/45.png?raw=true)

#Diccionario de datos
Se anexa documento Diccionario_Datos_Sena_3D.pdf, anexo número 4.

#Clases, librerías y métodos utilizados
###Métodos Utilizados
Para este proyecto en la mayoría de controladores se utilizaron los siguientes métodos:
•	Método index: Que lanza un listado de todos los registros de la tabla que se está trabajando.
•	**Método create:** Lanza un listado para crear un nuevo registro.
•	**Método store:** Es el que almacena la información de la base de datos.
•	**Método show:** Es el detalle que controla los métodos de la vista detalles.
•	**Método update:** El cual actualiza todos los datos ingresados por el usuario.

#Errores comunes y soluciones
**Al crear nuevos archivos de migración QueryException SQLSTATE[HY100]**

Al crear un nuevo Modelo con su archivo de migración, y ejecutar dicha migración, es posible que dé un error como el siguiente:
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/Captura1.PNG?raw=true)

Este error sucede debido al orden en que se han creado las migraciones por lo cual se arroja un problema al generar las llaves foráneas entre migraciones.

Supongamos que usted va crear un nuevo Modelo llamado Categoría, para categorizar los diferentes cursos de la Academia. En este caso, lo que usted debería hacer es en la terminal ingresar el siguiente comando php artisan make:model Categoria –mcr luego se creara la migración el modelo y los recursos de Categoria. Finalmente configuramos la migración para relacionar la tabla cursos.

**Al intentar acceder a una vista desde el navegador lanza el error SQLSTATE[HY000] [2002] No se puede establecer una conexión**
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/Captura2.PNG?raw=true)

Es posible que exista un problema con el servidor de base de datos. Pruebe reiniciar el XAMPP o revise que dichas conexiones estén encendidas, el apache y el MySQL.

•	**Al acceder a la vista principal de la Academia, no se cargan las imágenes**
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/Captura3.PNG?raw=true)

Es posible que el origen del error sea causado por que el proyecto no se ejecutó correctamente. la solución para este fue ejecutar en la consola el siguiente comando: php artisan storage:link

•	**Al migrar las tablas a la base de datos, generaba el siguiente error**
![](https://github.com/Eloaiza19/TestLaravel/blob/master/img2/Captura4.PNG?raw=true)

Las tablas no se migraron correctamente debido a el diseño lógico de la base de datos, no corresponden a los campos respecto a las tablas. La solución fue cambiar el orden de los campos.

#Agregación de columnas en la base de Datos
###Para agregar columnas nuevas a las tablas
Para los siguientes casos, se asume que el programador ejecutará nuevamente las migraciones con un fresh, reconstruyendo todas las tablas de la base de datos.

###Agregar columnas nuevas a la tabla Cursos
Para esto, diríjase a la ruta database/migration, al archivo 2022_04_30_160631_create_cursos_table. Los campos actuales aparecen desde la línea 18. Agregue el o los campos deseados en la posición que prefiera.
También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, en la línea 10, protected $fillable y añadirlo dentro del array.

###Agregar columnas nuevas a la tabla materias
Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_102436_create_materias_table.php. Los campos actuales aparecen desde la línea 14. Agregue el o los campos deseados en la posición que prefiera.
También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo materia, en la línea 11, protected $fillable y añadirlo dentro del array.

###Agregar columnas nuevas a la tabla Docentes
Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_1234789_create docentes_table.php. Los campos actuales aparecen desde la línea 14. Agregue el o los campos deseados en la posición que prefiera.
También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo docentes, en la línea 10, protected $fillable y añadirlo dentro del array.

###Agregar columnas nuevas a la tabla Estudiantes
Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_789654_create_estudiante _table.php. Los campos actuales aparecen desde la línea 14. Agregue el o los campos deseados en la posición que prefiera.
También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo estudiantes, en la línea 10, protected $fillable y añadirlo dentro del array.

###Agregar columnas nuevas a la tabla Países
Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_102436_create_paises_table.php. Los campos actuales aparecen desde la línea 14. Agregue el o los campos deseados en la posición que prefiera.
También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo países, en la línea 11, protected $fillable y añadirlo dentro del array.

###Agregar columnas nuevas a la tabla Departamentos
Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_110214_create_departamentos_table.php. Los campos actuales aparecen desde la línea 14. Agregue el o los campos deseados en la posición que prefiera.
También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo departamentos, en la línea 11, protected $fillable y añadirlo dentro del array.

###Agregar columnas nuevas a la tabla Municipios
Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_111213_create_municipios_table.php. Los campos actuales aparecen desde la línea 14. Agregue el o los campos deseados en la posición que prefiera.
También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo municipios, en la línea 11, protected $fillable y añadirlo dentro del array

#Cambio del idioma
Mencione algunos de los pasos mostrados en el video https://www.youtube.com/watch?v=VYTy0v8pUGo&ab_channel=CarranzaWebStudio para la configuración del idioma.
•	Dentro de resources creamos una carpeta llamada lang.en.
•	En la carpeta lang, debemos separar los lenguajes entre carpetas (en:ingles, es: español).
•	Dentro de la carpeta en creamos un archivo que se llame mensajes.php, dentro del mismo creamos un array para las opciones.
•	Creamos una llave que se llame título y ingresamos nuestro título y así sucesivamente con lo que necesitemos traducir.
•	Copiamos y pegamos en la carpeta es, pero con nuestro texto cambiado o traducido.
•	Si nos dirigimos a la lista y necesitamos cambiar algo lo podemos realizar utilizando la etiqueta @lang y dentro de los paréntesis ingresamos el nombre del archivo, debemos poner la respectiva llave.
•	Podemos ir a nuestro archivo en config, app.php y le cambiamos la localidad a en o es.
•	También podemos ingresar a la documentación y copiar la ruta y también la clase app y le agregamos la localidad.

Estimado programador, para más información sobre idiomas y localización, vaya a la página de la documentación oficial de Laravel en https://laravel.com/docs/9.x/localization.

#LICENCIA
###LICENCIA DE SOFTWARE DE DEBIAN
La licencia Debian es parte del contrato
realizado entre Debian y la comunidad de usuarios de software
libre, y se denomina Debian Free Software Guidelines (DFSG). En
esencia, esta licencia contiene criterios para la
distribución que incluyen, además de la exigencia
de publicación del código fuente: (a) la
redistribución libre; (b) el código fuente debe
ser incluido y debe poder ser redistribuido; (c) todo trabajo
derivado debe poder ser redistribuido bajo la misma licencia del
original; (d) puede haber restricciones en cuanto a la
redistribución del código fuente, si el original
fue modificado; (e) la licencia no puede discriminar a ninguna
persona o grupo de personas, así como tampoco ninguna
forma de utilización del software; (f) los derechos
otorgados no dependen del sitio en el que el software se
encuentra; y (g) la licencia no puede 'contaminar' a otro
software.

Open Source. La licencia de Open Source
Initiative deriva de Debian.

#COLABORACIÓN
Para que usted pueda colaborar con el desarrollo de este proyecto, bien sea para hacer mejoras o para crear su propia versión de programa, es necesario que siga estos pasos:
1.	Deben ingresar al link del repositorio https://github.com/juananturi/AcademyFinal
2.	Descarga el repositorio en un documento .zip.
3.	Procede a descomprimirlo.
4.	Debe generar la clave para el proyecto.
5.	Enlazar la carpeta storage a public.
6.	Configurar la base de datos e hacer migración a la misma. 
7.	Php artisan storage:link para que las imágenes puedan cargar.
