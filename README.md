## La liga

Esta web sirve para gestionar una liga de fútbol. He utilizado de prueba los datos de primera división de la liga española.

## Seeders

Cuando ejecutas las migraciones y los seeders se cargan los datos de equipos y partidos y también cuatro usuarios:

-   'name' => 'Rafa Llonch',
    'email' => 'rafa_sbd@hotmail.com',
    'password' => bcrypt('12345678')
    ])->assignRole('Administrador');

-   'name' => 'Rubén',
    'email' => 'ruben@hotmail.com',
    'password' => bcrypt('12345678')
    ])->assignRole('Administrador');

-   'name' => 'Ana',
    'email' => 'ana@hotmail.com',
    'password' => bcrypt('12345678')
    ])->assignRole('Usuario');

-   'name' => 'Maria',
    'email' => 'maria@hotmail.com',
    'password' => bcrypt('12345678')
    ])->assignRole('Usuario');

Cada vez que un usuario nuevo se registra en la web se le asigna el rol de usuario, sólo le puede dar el permiso de administrador un usuario ya registrado y con rol de administrador.

Sólo los administradores pueden acceder a la vista de administrador, donde pueden crear, editar y borrar partidos y equipos.

