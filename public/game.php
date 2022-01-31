<?php
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'wypozyczalnia');
    $catch = $_POST['game_name'];
    $vir_query = mysqli_query($connect, "SELECT * FROM `gry` WHERE id_gry=$catch");
    $game = mysqli_fetch_array($vir_query);
    //echo $game[0],$game[1],$game[2],$game[3],$game[4]
    //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row_game[5] ).'"/>';
    //echo '<img src="data:image/jpeg;base64,'.base64_encode($game[5]).'"/>';
    //echo "<div class=test style='background-image: url(data:image/jpeg;base64,".base64_encode($game[5]).")'</div>"; //OKURWA DZIAŁA
    
    $game_wallpaper = 'data:image/jpeg;base64,'.base64_encode($game[5]);
?>
<html>
<head>
    <?php
        echo "<title>$game[1]</title>";
    ?>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="resources/favicon.png">
    </head>
    <body>
    <?php
        echo "<div class=tlo style='background-image: url(data:image/jpeg;base64,".base64_encode($game[5]).")'</div>"; //OKURWA DZIAŁA
    ?>
    <header>
            <div class="lheader">
                <p>O nas</p>
            </div>
            <div class="mheader">
                <a href="http://localhost:8000/index.php"><img class="logo" src="resources/logo.jpg"></a>
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
            <?php
                    $tab = array("Wszystkie", "fps", "Sportowa", "RPG", "Wyścigi", "Przygodowe", "Bijatyki");
                    
                    $i = 0;
                    for ($i = 0; $i < count($tab); $i++) {
                    echo "<form method=post action=szukaj.php>
                            <input type=hidden  name=category_name value=$tab[$i]>
                            <input type=submit class=search-category value=$tab[$i]>
                        </form>";
                        
                    }
                ?>
            <div class="vl"></div>
        </div>
        <div class="game_info">
        <?php
            echo "<p class=game_title>$game[1]</p>";
            echo "<p class=game_desc>$game[4]</p>";
        ?>
        </div>
        </div>
    </body>
</html>