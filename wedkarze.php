<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Strona wędkarska</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="main">
    <div id="wedkarz">
        <table>

            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Adres</th>
            <th>Kod pocztowy</th>
            <th>Miejscowość</th>
            <th>E-mail</th>


            <?php
            $link = mysqli_connect("localhost", "root", "", "zezwolenia");
            $query = "select imie,nazwisko,adres,kod_pocztowy,miejscowosc,email from wedkarze";
            $result = mysqli_query($link, $query);

            while ($array = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>$array[0]</td>";
                echo "<td>$array[1]</td>";
                echo "<td>$array[2]</td>";
                echo "<td>$array[3]</td>";
				echo "<td>$array[4]</td>";
				echo "<td>$array[5]</td>";
                echo "</tr>";
            }

            mysqli_close($link);
            ?>
        </table>
    </div>
</div>
</body>
</html>