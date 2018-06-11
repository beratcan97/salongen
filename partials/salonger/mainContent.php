<?php
$jsonFile = file_get_contents('salonger.json');
$jsonArray= json_decode($jsonFile); 

echo "<ul class='salongerListItemUl'>";
foreach ($jsonArray as $jsonItem) {
    echo "<a href='../infoOmSalonger.php?ID={$jsonItem->ID}'>";
        echo "<li class='salongerListItem'>";
            echo "<div class='salongerListItemFirst'>";
                echo "<p>" . $jsonItem->startar . "</p>";
            echo "</div>";

            echo "<div class='salongerListItemSecond'>";
                echo "<p>" . $jsonItem->namn . "</p>";


                if($jsonItem->stjärnor == 0){
                    echo "<img src='../images/stars/0.png' class='stjarnor'></img>";
                }
                else if($jsonItem->stjärnor == 1){
                    echo "<img src='../images/stars/1.png' class='stjarnor'></img>";
                }
                else if($jsonItem->stjärnor == 2){
                    echo "<img src='../images/stars/2.png' class='stjarnor'></img>";
                }
                else if($jsonItem->stjärnor == 3){
                    echo "<img src='../images/stars/3.png' class='stjarnor'></img>";
                }
                else if($jsonItem->stjärnor == 4){
                    echo "<img src='../images/stars/4.png' class='stjarnor'></img>";
                }
                else if($jsonItem->stjärnor == 5){
                    echo "<img src='../images/stars/5.png' class='stjarnor'></img>";
                }
                echo "<p>" . $jsonItem->adress . "</p>";
            echo "</div>";

            echo "<div class='salongerListItemThird'>";
                echo "<p>" . $jsonItem->pris . "</p>";
                echo "<p>" . $jsonItem->tid . "</p>";
            echo "</div>";

            echo "<div class='salongerListItemFourth'>";
            echo "<img src='../images/buttons/right.png' class='rightButton'></img>";
            echo "</div>";
        echo "</li>";
    echo "</a>";
}
echo "</ul>";
?>