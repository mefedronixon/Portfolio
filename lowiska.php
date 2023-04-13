<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Strona wędkarska</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="main">
    <form action="" method="POST">
        <table>

            <th>Nazwa łowiska</th>
            <th>Cena</th>
            <th>Cena łódki</th>
            <th>Dopłata za brak karty</th>
            

            <?php
            $link = mysqli_connect("localhost", "root", "", "zezwolenia");
            $query = "select nazwa,cena,cena_lodzi,brak_czlonkostwa from lowiska";
            $result = mysqli_query($link, $query);

            while ($array = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td>$array[0]</td>";
                echo "<td>$array[1] PLN</td>";
                echo "<td>$array[2] PLN</td>";
                echo "<td>$array[3] PLN</td>";
                echo "</tr>";
            }

            mysqli_close($link);
            ?>
            
            
        </table>
    </form>
</div>
</body>
</html>