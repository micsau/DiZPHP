<?php
     header("Content-Type:application/json");
     $fileName = "vocabolario.json";
     $input = $_GET["input"];
     $p = lcfirst($_GET["p"]);
     $vocabolario = file_get_contents($fileName);
     $vocabolario = json_decode($vocabolario, true);
     $esiste = $vocabolario[$input];
     if(!!$esiste){
          $risposta["risultato"] = $esiste;
          echo json_encode($risposta);
     }
     else{
          $risposta["risultato"] = "no";
          echo json_encode($risposta);
     }
?>