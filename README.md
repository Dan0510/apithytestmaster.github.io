## apithy

### Caso
Se requiere dar de alta a varios usuarios (25,000), la información será extraída de un archivo de excel,
para ello, se espera que el usuario cargue el archivo mediante la página y después, cargue la información al servidor.
una vez cargada se podrá consultar la lista de usuarios registrados en el sistema (limitar a los primeros 50 resultados o bien, integrar un páginador).

Todo lo anterior, debe operar bajo un esquema de api-resource.

### Instrucciones base
1. Crear migraciones para las tablas que lo requieran.
2. Crear seeders para rellenar la información de las tablas requeridas.
3. Se debe priorizar la optimización de la carga masiva de datos.
4. El código debe llevar la documentación que sea necesaria.
5. Hacer pruebas unitarias para las funciones y clases que así lo requieran.
6. Al consultar la informacion de usuarios registrados, se debe priorizar el rendimiento.
7. Se debe priorizar el rendimiento al cargar y guardar la información.

#### Bonus
1. El usuario podría descargar una lista de usuarios cargados correctamente.
2. El usuario podría descargar una lista de usuarios que no se cargaron correctamente.

### Información detallada
Formato de laravel api-rest:

### Validaciones:
1. Se debe validar que el correo sea en formato correcto, que sea único y que no exceda los 50 carácteres.
2. El nombre no debe exceder los 50 carácteres.
3. El rol debe existir en la base de datos.

#### Migraciones a realizar

1. tabla users
    * id: integer
    * email: string
    * role_id: integer
    * password: string / nullable
    * timestamps
    
2. tabla roles
    * id: integer
    * name: string
    * code: string
    
#### Seeders
Informacion de para el seeder de tabla roles

1.
    * Administrador
    * AD
2.
    * Profesor
    * PROF
3.
    * Estudiante
    * STU
    
# Importante:
* Se tiene un archivo listo para cargar esa información, lo puedes obtener mediante el botón de descarga o bien, en su ubicación `public/downloads/apithy-test.xlsx`
* El tiempo para finalizar esté reto es de 4 horas.
* Se valora mucho la optimización del código, no solo que funcione.
* Es posible que en front se deban agregar elementos (esto es a propósito).
* Se debe subir a un repositorio de git, el primer commit será cuando se cargue todo (por primera vez).


