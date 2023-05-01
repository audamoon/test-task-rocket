<?php 
function generateCheckups($link) {
   $sql = 'SELECT category, description, sale, price_without_sale from checkups';
    $result = mysqli_query($link, $sql);
    $checkups = mysqli_fetch_all($result, MYSQLI_ASSOC);
    for ($i = 0; $i < count($checkups); $i++) {
        echo "<div class='checkup-text-description' id = 'checkup-description-$i'>";
        echo "<h1>CHECK-UP</h1>";
        echo "<h3>".$checkups[$i]['category']."</h3>";
        foreach (explode(";",$checkups[$i]['description']) as $info) {
            echo "<p><span class='dot'>&#9679</span>".$info."</p>";
        }
        echo "<div class='two-prices'>";
        echo "<p class='checkup-sale-price'>Всего ".$checkups[$i]['sale']."₽</p>";
        echo "<p class='checkup-without-sale-price' id='id-sale'> ".$checkups[$i]
        ['price_without_sale']."</p>";
        echo "</div>";
        echo "</div>";
    };       
}
