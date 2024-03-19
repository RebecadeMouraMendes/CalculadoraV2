<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
    <div class="row">
        <div class="col">
        <br><h1>Calculadora</h1><br>
        <form name="calculadora" method="POST" action="">
        <div class="container text-center">
        <div class="card gap-2 col-4 mx-auto" >

  <div class="card-body" style="">
    This is some text within a card body.
  </div>
</div>
    <div class="gap-2 col-4 mx-auto" style="background-color:LightGray">
  <div class="row">
  <div class="col">
  <br>
  <button type="submit" class="btn btn-warning col-2" name="soma" value="Submit1">C</button> 
  <button type="submit" class="btn btn-light col-2" name="soma" value="Submit1">+</button> 
  <button type="submit" class="btn btn-light col-2" name="soma" value="Submit1">-</button> 
  <button type="submit" class="btn btn-light col-2" name="soma" value="Submit1">/</button> 
</div>
  </div>
  <div class="row">
  <div class="col">
  <br> 
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">7</button> 
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">8</button> 
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">9</button> 
  <button type="submit" class="btn btn-light col-2" name="soma" value="Submit1">*</button> 
</div>
  </div>
  <br> 
  <div class="row">
  <div class="col">
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">4</button> 
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">5</button> 
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">4</button> 
  <button type="submit" class="btn btn-success col-2" name="soma" value="Submit1">=</button> 
</div>
  </div>
  <br> 
  <div class="row">
  <div class="col">
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">3</button> 
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">2</button> 
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">1</button> 
  <button type="submit" class="btn btn-secondary col-2" name="soma" value="Submit1">0</button> 
</div>
  </div>
  <br> <br>
  </div>
</div>


        </form>

        <?php
        if(isset($_POST['priNum']) && isset($_POST['segNum'])){
        $priNum = $_POST['priNum'];
        $segNum = $_POST['segNum'];
        }
        
        if (isset($_POST['soma'])){
            ?> <br> <?php
            echo "<h3>A soma de ".$priNum ." + " .$segNum. " é igual a ". $priNum + $segNum; 
        }
        if (isset($_POST['sub'])){
            ?> <br> <?php
            echo "<h3> A subtração de ".$priNum ." - " .$segNum. " é igual a ". $priNum - $segNum;
            echo "<h3> A subtração de ".$segNum ." - " .$priNum. " é igual a ". $segNum - $priNum;
        }
        if (isset($_POST['mul'])){
            ?> <br> <?php
            echo "<h3> A multiplicação de ".$priNum ." x " .$segNum. " é igual a ". $priNum * $segNum;
        }
         if (isset($_POST['div'])){
            ?> <br> <?php
            echo "<h3> A divisão de ".$priNum ." / " .$segNum. " é igual a ". $priNum / $segNum;
            echo "<h3> A divisão de ".$segNum ." / " .$priNum. " é igual a ". $segNum / $priNum;
        } ?>
        </div>
    </div>
    </div>
</body>
</html>
