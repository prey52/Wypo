<?php
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'wypozyczalnia');
    $catch = $_POST['category_name'];
    if ($catch == "Wszystkie") {
        $vir_query = mysqli_query($connect, "SELECT * FROM `gry` WHERE 1");
    }
    else {
        $vir_query = mysqli_query($connect, "SELECT * FROM `gry` WHERE `Typ` = '$catch'");
    }
?>
<html>
<head>
    <?php
        //echo "<title>WYPO: $game[1]</title>";
    ?>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="resources/favicon.png">
    </head>
    <body>
    <?php
        //echo "<div class=tlo style='background-image: url(data:image/jpeg;base64,".base64_encode($game[5]).")'</div>"; //OKURWA DZIAŁA
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
        <?php
            echo "<h1>$catch</h1>";
            echo "<div class=productions>";
            while($category = mysqli_fetch_array($vir_query)){
                echo "<div class=gra style='background-image: url(data:image/jpeg;base64,".base64_encode($category[5]).")'";
                echo "<p class=gametitle>$category[1]</p>";
                echo "<p>$category[2]</p>";
                echo "<form method=post action=game.php>
                <input type=hidden  name=game_name value=$category[0]>
                <input type=submit class=submit_game value=Zamów>
                </form>";
                echo "</div>";
            }
            echo "</div>";
        ?>
        </div>
        </div>
    </body>
</html>