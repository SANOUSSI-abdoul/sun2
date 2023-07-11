<?php
include 'entete.php';
?>

<!DOCTYPE HTML>
  <html lang ="fr">
      <head>
            <title>titre page </title>
            <meta charsert="utf-8">
        </head>
              <body>

                <fieldset>


                
            <h1>configurattion </h1>

            <ul type="circle">
                <li>AFFICHAGE</li>
                <!DOCTYPE HTML>
  <html lang ="fr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <meta http-equiv="x-UA-compatible"content="IE=edge">

            <title>Dark theme</title>
            <style>
                body{
                    padding: 25px;
                    background-color: white;
                    color: black;
                    font-size: 25px;
                }
                .dark-mode{
                    background-color: black;
                    color: white;
                }
                button{
                    cursor: pointer;
                }
            </style>
            
            
        </head>
        <body>
           
            <p>cliquer sur le bouto pour changer de theme</p>
            <button onclick="myfonction()">changer de theme</button>
            <script>
                function myfonction(){
                    let element=document.body;
                    element.classList.toggle("dark-mode");
                }
            </script>
            
        </body>
 
               
                <li>AIDE</li>

                

                <a href="AIDE">lien vers la page d'aide</a>



                </html>

<?php
include 'pied.php';
?>