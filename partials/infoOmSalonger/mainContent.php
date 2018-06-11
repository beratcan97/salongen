<div class="moreInfoMainContent">
    <p class="moreInfoMainContentItems">
        <img src="../images/moreInfoPage/logo/map.png" alt="Adress" class="logo"></img>
        <?php echo $currentObject->adress; ?>
    </p>
    <p class="moreInfoMainContentItems">
        <img src="../images/moreInfoPage/logo/clock.png" alt="clock" class="logo"></img>
        Öppet till 
        <?php echo $currentObject->stänger; ?>
    </p>
    <p class="moreInfoMainContentItems">
        <img src="../images/moreInfoPage/logo/tel.png" alt="tel" class="logo"></img>
        <?php echo $currentObject->telefon; ?>
    </p>
    <p class="moreInfoMainContentItems">
        <img src="../images/moreInfoPage/logo/web.png" alt="web" class="logo"></img>
        <?php echo $currentObject->webplats; ?>
    </p>
    <p class="moreInfoMainContentItems">
        <?php echo $currentObject->info; ?>
    </p>
</div>