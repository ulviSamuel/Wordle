<?php
  require_once("var_conn.php");
  $sql = "CALL getIdRandom()";
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($res);
<<<<<<< HEAD
  $_SESSION['idParolaDaTrovare'] = $row[0];*/
  session_start();
=======
  $_SESSION['idParolaDaTrovare'] = $row[0];
>>>>>>> parent of 8c717e3 (Cose)
?>

<html>
  <head>
      
  </head>

  <body>
      <input type="text" name="nuovaParola" id="nuovaParola" maxlength="5">
      <button onclick="clickBtnCerca()">Invio</button>

      <p id="vecchieParole"></p>
<<<<<<< HEAD
      <input onchange="testoScritto()" placeholder="Inserisci una parola di 5 caratteri" type="text" name="nuovaParola" id="nuovaParola" maxlength="5">
      <button id='invioBtn' onclick="clickBtnCerca()">Invio</button>
=======
>>>>>>> parent of 8c717e3 (Cose)

      <script>
        function clickBtnCerca()
        {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
              document.getElementById("vecchieParole").innerHTML = this.responseText;
            };
            var nuovaParola = document.getElementById("nuovaParola").value;
            var vecchieParole = document.getElementById("vecchieParole").innerHTML;
            xhttp.open("GET", "verifica_parola.php?nuovaParola="+nuovaParola+"&vecchieParole="+vecchieParole, true);
            xhttp.send();
        }

        function testoScritto()
        {
          /*var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
              var pulsanteInvio = document.getElementById("invioBtn");
              if(<?php echo $_SESSION['parolaEsistente']; ?> === "non esiste")
              {
                pulsanteInvio.style.backgroundColor = "red";
                pulsanteInvio.style.pointerEvents = "none";
              }
              else
              {
                pulsanteInvio.style.backgroundColor = "#04b304";
                pulsanteInvio.style.pointerEvents = "auto";
                pulsanteInvio.addEventListener("mouseover", function() {
                  pulsanteInvio.style.backgroundColor = "green";
                });
                pulsanteInvio.addEventListener("mouseout", function() {
                  pulsanteInvio.style.backgroundColor = "#04b304";
                });
              }
            }
          };
          xhttp.open("GET", "verifica_esistenza_parola.php?nuovaParola="+nuovaParola, true);
          xhttp.send();*/
        }
      </script>

  </body>
</html>