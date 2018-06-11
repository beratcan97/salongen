<?php
$jsonFile = file_get_contents('salonger.json');
$jsonArray= json_decode($jsonFile); 
$currentObject = "";

foreach ($jsonArray as $jsonItem) {
    if($jsonItem->ID == $_GET["ID"]) {
        $currentObject = $jsonItem;
    }
}
?>

<div class="moreInfoHeader">
    <img src="../images/moreInfoPage/salongBild.png" alt="Background image" class="moreInfoHeaderImg"></img>

    <div class="top-left">
        <a href="../salonger.php">
            <img src="../images/moreInfoPage/back.png" alt="Back" class="headerLeftButtonImg"></img>
        </a>
    </div>
    <div class="top-right">
        <a href="">
            <img src="../images/moreInfoPage/heart.png" alt="Back" class="headerRightButtonImg"></img>
        </a>
    </div>
    <div class="bottom-left">
        <h1><?php echo $currentObject->namn; ?></h1>
        <div class="headerStarContainer">
            <img src='../images/stars/<?php echo $currentObject->stjärnor; ?>.png' class='headerStjarnor'></img>
            <p>
                <?php echo $currentObject->antalRöster; ?>
            </p>
        </div>
    </div>
</div>