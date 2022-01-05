<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'wypozyczalnia');
$sql4 = "SELECT * FROM gry;";
                    $pyt4 = mysqli_query($connect, $sql4);
                    echo "<select name=idklient>";
                        while($row4 = mysqli_fetch_array($pyt4)) {
                                echo "<option value=$row4[0]>";
                                echo $row4[1]." ".$row4[2]."<br>";
                                echo "</option>";
                            }
                    echo "</select><br>";

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <div class="header-left">
                <p>O nas</p>
                <p>Blog</p>
                <p>Koszyk</p>
            </div>
            <!--<img src="logo.jpg">-->
            <div class="header-right">
                <img class="downl-img" src="android.png">
                <img class="downl-img" src="apple.png">
            </div>
        </header>
        <div class="search-bar">
            <button class="submit"><img src="lupa.jpg"></button>
            <input class="search" type="text" value="Szukaj...">
            <div class="vl"></div>
            <button class="search-category" value="wszystkie">Wszystkie</button>
            <button class="search-category" value="wszystkie">Wojenne</button>
            <button class="search-category" value="wszystkie">Strzelanki</button>
            <button class="search-category" value="wszystkie">Wyścigi</button>
            <button class="search-category" value="wszystkie">Przygodowe</button>
            <button class="search-category" value="wszystkie">Bijatyki</button>
            <button class="search-category" value="wszystkie">jRPG</button>
            <div class="vl"></div>
        </div>
    </body>
</html>