Hice la estructura de la base de datos con el script proporcionado por el trainer y luego creé la estructura básica de archivos del backend, instale el composer con los comandos "composer init" luego introduje "bramus/router": "^1.6" en el require para las rutas que al final no terminé usando y usé el comando "composer i" y "composer update" para hacer el autoload y actualizar todo el composer, hice el httaccess para que tomara como archivo principal el "index.php" y luego cree una clase conexión que no funcionó asi que tuve que modificarla a como estaba indicada en el reto, siguió sin funcionar, creé la clase campers para poder hacerle el crud.
Hice el formulario en "index.php" que manda los datos al archivo "campers.php" para poder introducirlos a la base de datos de manera correcta