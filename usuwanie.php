<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <title>Strona wędkarska</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="main">


        <form action="" method="POST">
            Id: <input type="text" name="id">
            <input type="submit" name="przycisk" value="Usuń">
        

        <?php
        if (isset($_POST["przycisk"])) {
            $id = $_POST["id"];
            $id_polaczenia = mysqli_connect('localhost', 'root', '', 'zezwolenia');
            $zapytanie = "DELETE FROM wedkarze WHERE wedkarze.id = $id;";
            echo "Tabela została pomyślnie usunięta!";
            mysqli_query($id_polaczenia, $zapytanie);
            mysqli_close($id_polaczenia);
        }
        ?>
        </form>

    </div>
</body>

</html>