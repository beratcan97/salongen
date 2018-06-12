<div class="terms">
    <button onclick="myFunction()" class="dropbtn">
        <?php echo "Pris" . $_GET["prisMin"] . " - " . $_GET["prisMax"] . "kr"?>
        <img src="../images/buttons/dropdown.png" class="dropdownButton"></img>
    </button>
    <div id="myDropdown" class="dropdown-content">
        <a href="../salonger.php?prisMin=0&prisMax=100">Pris 0 - 100kr</a>
        <a href="../salonger.php?prisMin=100&prisMax=200">Pris 100 - 200kr</a>
        <a href="../salonger.php?prisMin=200&prisMax=300">Pris 200 - 300kr</a>
        <a href="../salonger.php?prisMin=300&prisMax=400">Pris 300 - 400kr</a>
        <a href="../salonger.php?prisMin=400&prisMax=500">Pris 400 - 500kr</a>
        <a href="../salonger.php?prisMin=500&prisMax=1000">Pris 500 - 1000kr</a>
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
