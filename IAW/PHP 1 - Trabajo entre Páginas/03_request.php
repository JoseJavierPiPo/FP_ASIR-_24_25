<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="03_recibe_request.php" method="get">
            <fieldset>
                <legend>formu 1 get</legend>
                Nombre
                <input type="text" name="nombre" />
                <br/>
                <br/>
                <!--añade un campo que sea apellidos-->
                <input type="submit" value="Acceder al sitio web" name="enviar" />
            </fieldset>
        </form>
        <form action="03_recibe_request.php" method="post">
            <fieldset>
                <legend>formu 2 post</legend>
                Nombre
                <input type="text" name="nombre" />
                <br/>
                <br/>
                <!--añade un campo que sea email-->
                <input type="submit" value="Acceder al sitio web" name="enviar" />
            </fieldset>
        </form>
    </body>
</html>