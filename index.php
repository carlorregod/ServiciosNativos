<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Servicios nativos</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-primary my-2 mx-2">Servicios Nativos</h1>
    <form action="services.php" method="GET">
    <table>
        <tr>
            <td><label for="rut" class="mx-3">Ingrese un rut</label></td>
            <td><input type="text" id="txtRut" name="rut"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" class="btn btn-primary mx-2 my-2" id="btnEnviar" value="Enviar por GET"></td>
        </tr>
    </table>
    </form>
    <form action="services.php" method="POST">
    <table>
        <tr>
            <td><label for="rut" class="mx-3">Ingrese un rut</label></td>
            <td><input type="text" id="txtRut" name="rut"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" class="btn btn-primary mx-2 my-2" id="btnEnviar" value="Enviar por POST"></td>
        </tr>
    </table>
    </form>
</body>
</html>