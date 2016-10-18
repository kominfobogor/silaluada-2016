<div class="w3-container" style="padding: 10px 10px 20px 10px;">
  <h2>Data Perizinan</h2>
  <br />
  <br />

  <ul class="w3-navbar">
    <li>
        <a href="javascript:void(0)" class="tablink" id="active-first" onclick="openCity(event, 'London');">SPPL</a>
    </li>
    <li>
        <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Paris');">UKL-UPL</a>
    </li>
    <li>
        <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Tokyo');">Amdal</a>
    </li>
  </ul>

  <div id="London" class="w3-container w3-border city">
    <h2>SPPL</h2>
    <p>London is the capital city of England.</p>
  </div>

  <div id="Paris" class="w3-container w3-border city">
    <h2>UKL-UPL</h2>
    <p>Paris is the capital of France.</p> 
  </div>

  <div id="Tokyo" class="w3-container w3-border city">
    <h2>Amdal</h2>
    <p>Tokyo is the capital of Japan.</p>
  </div>
</div>

<script>

$('#active-first').click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.target.className += " w3-blue";
  
}


</script>