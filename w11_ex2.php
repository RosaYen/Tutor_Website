<!DOCTYPE html>
<html>
<head>
  <meat charset="utf-8">
  <title>w11_ex1</title>
</head>
<body>
  <?php
    $chrome = "Chrome";
    $firefox = "Firefox";
    $safari = "Safari";

    if(strcmp($chrome,$firefox)>=0){
      if(strcmp($chrome,$safari)>=0){
        print("<p>$chrome is greater than $firefox and greater than $safari");
        if(strcmp($firefox,$safari)>=0){
          print("<p>$firefox is less than $chrome and greater than $safari");
          print("<p>$safari is less than $chrome and less than $firefox");
        }

        else{
          print("<p>$firefox is less than $chrome and less than $safari");
          print("<p>$safari is less than $chrome and greater than $firefox");
        }
      }



      else{
        print("<p>$chrome is greater than $firefox and less than $safari");
        print("<p>$safari is greater than $chrome and greater than $firefox");
        print("<p>$firefox is less than $chrome and less than $safari");
      }
    }



    else{
      if(strcmp($chrome,$safari)>=0){
        print("<p>$chrome is less than $firefox and greater than $safari");
        print("<p>$firefox is greater than $chrome and greater than $safari");
        print("<p>$safari is less than $chrome and less than $firefox");
      }

      else{
        print("<p>$chrome is less than $firefox and less than $safari");
        if(strcmp($firefox,$safari)>=0){
          print("<p>$firefox is greater than $chrome and greater than $safari");
          print("<p>$safari is greater than $chrome and less than $firefox");
        }

        else{
          print("<p>$firefox is greater than $chrome and less than $safari");
          print("<p>$safari is greater than $chrome and greater than $firefox");
        }

      }

    }

   ?>
</body>
</html>
