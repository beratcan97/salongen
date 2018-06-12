<?php
$jsonFile = file_get_contents('salonger.json');
$jsonArray= json_decode($jsonFile); 

echo "<ul class='salongerListItemUl'>";

foreach ($jsonArray as $jsonItem) {
    $value = false;
    if((isset($_GET["prisMin"])) && ($_GET["prisMin"] <= $jsonItem->pris && $jsonItem->pris <= $_GET["prisMax"])){
        $value = true;
    }
    else if(!isset($_GET["prisMin"]) && !isset($_GET["prisMax"])){
        $value = true;
    }
    if($value){
        echo "<a href='../infoOmSalonger.php?ID={$jsonItem->ID}'>";
        ?>
            <li class='salongerListItem'>
                <div class='salongerListItemFirst'>
                    <p><?php echo $jsonItem->startar ?></p>
                </div>

                <div class='salongerListItemSecond'>
                    <p><?php echo $jsonItem->namn ?></p>
                    <div class="listStarContainer">
                        <img src='../images/stars/<?php echo $jsonItem->stjärnor ?>.png' class='stjarnor'></img>
                        <p>test</p>
                    </div>
                    <p><?php echo $jsonItem->adress ?></p>
                </div>

                <div class='salongerListItemThird'>
                    <p><?php echo $jsonItem->pris ?></p>
                    <p><?php echo $jsonItem->tid ?></p>
                </div>

                <div class='salongerListItemFourth'>
                <img src='../images/buttons/right.png' class='rightButton'></img>
                </div>
            </li>
        </a>
    <?php
    }
} ?>
</ul>