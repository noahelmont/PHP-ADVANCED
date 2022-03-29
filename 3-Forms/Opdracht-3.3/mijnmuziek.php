<!-- http://localhost/PHP-ADVANCED/3-Forms/Opdracht-3.3/invoer.php?Artiest=aloe+blacc&Titel=the+other+side&Jaar_uitkomst=2020&Muzieksoort=r%26b -->
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
 </head>
 <body>
  <form method="GET" action="invoer.php">
      Artiest <br> <input name="Artiest"> <br><br>
      Titel <br> <input name="Titel"> <br><br>
      Jaar van uitkomst <br> <input name="Jaar_uitkomst"> <br><br>
      Muzieksoort <br> <input name="Muzieksoort"> <br><br>
      <button type = "submit">Verzend</button>
  </form>
 </body>
</html>