<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Strona wędkarska</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="main">
        <form action="" method="POST">
            <label for="imie">Imię:</label>
            <input type="text" id="imie" name="imie" required>

            <label for="nazwisko">Nazwisko:</label>
            <input type="text" id="nazwisko" name="nazwisko" required>

            <label for="adres">Adres:</label>
            <input type="text" id="adres" name="adres" required>

            <label for="kod">Kod pocztowy:</label>
            <input type="text" id="kod" name="kod" placeholder="XX-XXXX" required>

            <label for="miejscowosc">Miejscowość:</label>
            <input type="text" id="miejscowosc" name="miejscowosc" required>

            <label for="email">Adres e-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="karta_wedkarska">
                Karta wędkarska:
                <select id="karta_wedkarksa" name="karta_wedkarksa" required>
                    <option value="Niezrzeszony">Niezrzeszony</option>
                    <option value="Członek PZW">Członek PZW</option>
                </select>
            </label>

            <input type="submit" value="Przejdź dalej" name="btn">
            <div id="message">
                <?php

                if(isset($_POST['btn'])){
                    $imie = $_POST['imie'];
                    $nazwisko = $_POST['nazwisko'];
                    $adres = $_POST['adres'];
                    $kod = $_POST['kod'];
                    $miejscowosc = $_POST['miejscowosc'];
                    $email = $_POST['email'];
                    $karta = $_POST['karta_wedkarska'];

                    if($kod[2] == '-'){
                        $link = mysqli_connect("localhost", "root", "", "zezwolenia");
                        $query = "insert into wedkarze values (null, '$imie', '$nazwisko', '$adres', '$kod', '$miejscowosc', '$email', '')";
                        mysqli_query($link, $query);
                        mysqli_close($link);

                        session_start();
                        $_SESSION = array("karta"=> true);

                        header("location:lowiska.php");
                    }else{
                        echo "Błąd w formacie kodu pocztowego!";
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>