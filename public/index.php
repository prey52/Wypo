<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'wypozyczalnia');
?>
<html>
    <head>
        <title>Wypożyczalnia</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="resources/favicon.png">
    </head>

    <body>
        <header>
            <div class="lheader">
                <p>O nas</p>
            </div>
            <div class="mheader">
                <img class="logo" src="resources/logo.jpg">
            </div>
            <div class="rheader">
                <a class="downl-img-google" target="_blank" href="https://play.google.com/"></a>
                <a class="downl-img-apple" target="_blank" href="https://www.apple.com/pl/app-store/"></a>
            </div>
        </header>
        <div class="search-bar">
            <img class="hglass" src="resources/lupa.jpg">
            <input class="search" type="text" value="Szukaj...">
            <div class="vl"></div>
            <input type="submit" class="search-category" value="Wszystkie">
            <input type="submit" class="search-category" value="FPS">
            <input type="submit" class="search-category" value="RPG">
            <input type="submit" class="search-category" value="Wyścigi">
            <input type="submit" class="search-category" value="Przygodowe">
            <input type="submit" class="search-category" value="Bijatyki">
            <input type="submit" class="search-category" value="Sportowe">
            <div class="vl"></div>
        </div>
        <h1>Polecamy</h1>
<?php
    echo "<div class=productions>";
    $query_game = "select * from gry";
    $sql_game = mysqli_query($connect, $query_game);
    while($row_game = mysqli_fetch_array($sql_game))
    {
        echo "<div class=$row_game[1]>";
        echo "<p class=gametitle>$row_game[1]</p>";
        echo "<p>$row_game[2]</p>";
        echo" <form method=post action=game.php target=_blank>
                <input type=hidden  name=game_name value=$row_game[0]>
                <input type=submit class=submit_game value=Zamów>
              </form>";
        echo "</div>";
        //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row_game[5] ).'"/>';
    }
    echo "</div>";
?>
    </body>
</html>