# Cotizador Dolar a Peso WHMCS!

Basicamente lo que hace esto es traer el valor del dolar, y lo adapta, y updatea la base de datos de WHMCS. 

# Funcion

- Trae el valor dolar de https://api-dolar-argentina.herokuapp.com/api/dolaroficial gracias<3
- Extraigo solo el valor venta
- Le agrego los 5 decimales que es como esta en WHMCS la base de datos
- Updatea la base de datos cada vez que se ejecuta


## Como instalarlo/hacerlo funcionar

Editar datos de base de datos -> Chequear los IDs de tu tblcurrencies, puede diferir del que le asigne yo -> Ejecutar en navegador para ver que funcione -> Si todo esta ok, agregalo a un cron y ejecutalo automaticamente
en tu servidor al horario que queiras
