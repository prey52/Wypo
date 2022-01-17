<?php
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'wypozyczalnia');
    $test = $_POST['game_name'];
    $query_game = "select * from gry where id_gry=$test";
    $sql_game = mysqli_query($connect, $query_game);
    $game = mysqli_fetch_array($sql_game);
    //echo $game[0],$game[1],$game[2],$game[3],$game[4];
    $game_wallpaper = 'data:image/jpeg;base64,'.base64_encode($game[5]);
?>
<html>
<head>
    <?php
        echo "<title>WYPO: $game[1]</title>";
    ?>
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
    </body>
</html>