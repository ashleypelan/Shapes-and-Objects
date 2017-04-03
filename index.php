<!DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel=/"stylesheet" href=/"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css/">

    <!-- jQuery library -->
    <script src=/"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js/"></script>

    <!-- Latest compiled JavaScript -->
    <script src=/"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js/"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="canvas1.css">
    <title></title>
  </head>
  <body>
    <canvas id="canvas" width="800" height="500"></canvas>
    <br>
    <div class="selections">
      <select class="shape" id="shape">
        <option class="shape" selected disabled>Circles or Squares?</option>
        <option id="circle" class="shape">Circle</option>
        <option id="square" class="shape">Square</option>
      </select>
      <input type="color" id="colour" class="color" value="#ffffff"></input>
      <br><br>
      <input type="text" id="width" class="width" placeholder="Width"></input>
      <br><br>
      <input type="submit" value="Change Color of All Shapes" id="change_colour"></input>
      <br><br>
      <input type="submit" value="Erase All Shapes" id="erase"></input>
      <br><br>
      <input type="submit" value="Randomly Change Colors" id="random_change"></input>
      <br><br>
      <input type="submit" value="Fill Canvas with Random Shapes" id="random"></input>
      <br><br>
    </div>
    <script type="text/javascript" src="canvas1.js"></script>
  </body>
</html>
