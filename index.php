<?php
  /*require_once("var_conn.php");
  $sql = "CALL getIdRandom()";
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($res);
  $_SESSION['idParolaDaTrovare'] = $row[0];*/
?>

<html>
  <head>
      <link rel="stylesheet" href="css/index_style.css">
  </head>

  <body>
      <h1 id='titolo'>Word?e</h1>
      <p id="vecchieParole"></p>
      <input oninput="testoScritto()" placeholder="Inserisci una parola di 5 caratteri" type="text" name="nuovaParola" id="nuovaParola" maxlength="5">
      <button id='invioBtn' onclick="clickBtnCerca()">Invio</button>

      <script>
        let contatore = 0;
        function clickBtnCerca()
        {
          ++contatore;
          if(contatore <= 6)
          {
            var nuovaParola = document.getElementById("nuovaParola").value;
            if(nuovaParola.length == 5)
            {
              if(!nuovaParola.includes(" "))
              {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) 
                {
                    var res = this.responseText;
                    if (res.slice(-3) == "win")
                    {
                      res = res.slice(0, -3);
                      var pulsanteInvio = document.getElementById("invioBtn");
                      pulsanteInvio.style.display = "none";
                      var iNuovaParola = document.getElementById("nuovaParola");
                      iNuovaParola.style.display = "none";
                    }
                    document.getElementById("vecchieParole").innerHTML = res;
                }
                };
                var vecchieParole = document.getElementById("vecchieParole").innerHTML;
                xhttp.open("GET", "verifica_parola.php?nuovaParola="+nuovaParola+"&vecchieParole="+vecchieParole, true);
                xhttp.send();
                }
                else
                  alert("La parola non può contenere spazi!");
            }
            else
              alert("La parola deve essere lunga 5 caratteri!");
          }
          if(contatore == 6)
          {
            var pulsanteInvio = document.getElementById("invioBtn");
            pulsanteInvio.style.display = "none";
            var iNuovaParola = document.getElementById("nuovaParola");
            iNuovaParola.style.display = "none";
          }
        }

        function testoScritto()
        {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
              var res = this.responseText;
              var pulsanteInvio = document.getElementById("invioBtn");
              if(res === "non esiste")
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
          xhttp.open("GET", "verifica_esistenza_parola.php?nuovaParolaVerifica="+nuovaParola, true);
          xhttp.send();
        }
      </script>

  </body>
</html>