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
      <input placeholder="Inserisci una parola di 5 caratteri" type="text" name="nuovaParola" id="nuovaParola" maxlength="5">
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
                  document.getElementById("vecchieParole").innerHTML = this.responseText;
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
        }
      </script>

  </body>
</html>