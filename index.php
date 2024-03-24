<?php
$currentValue = 0;

$input = [];


function getInputAsString($values){
	$o = "";
	foreach ($values as $value){
		$o .= $value;
	}
	return $o;
}


function calculateInput($userInput){
    $arr = [];
    $char = "";
    foreach ($userInput as $num){
        if(is_numeric($num) || $num == "."){
            $char .= $num;
        }else if(!is_numeric($num)){
            if(!empty($char)){
                $arr[] = $char;
                $char = "";
            }
            $arr[] = $num;
        }
    }
    if(!empty($char)){
        $arr[] = $char;
    }
    // calculate user input

    $current = 0;
    $action = null;
    for($i=0; $i<= count($arr)-1; $i++){
        if(is_numeric($arr[$i])){
            if($action){
                if($action == "+"){
                    $current = $current + $arr[$i];
                }
                if($action == "-"){
                    $current = $current - $arr[$i];
                }
                if($action == "*"){
                    $current = $current * $arr[$i];
                }
                if($action == "/"){
                    $current = $current / $arr[$i];
				}
                $action = null;
            }else{
                if($current == 0){
                    $current = $arr[$i];
                }
            }
        }else{
            $action = $arr[$i];
        }
    }
    return $current;

}

$rep="";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['input'])){
        $input = json_decode($_POST['input']);
	}


    if(isset($_POST)){
		
        foreach ($_POST as $key=>$value){
            if($key == '='){
               $currentValue = calculateInput($input);
               $input = [];
               $input[] = $currentValue;
            }elseif($key == "c"){
                $input = [];
                $currentValue = 0;
            }elseif($key != 'input'){
                $input[] = $value;
            }
        }
    }
}
?>

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
        <form name="calculadora" method="post" action="" value="<?php echo $currentValue;?>">
        <div class="container text-center">
<div class="card gap-2 col-4 mx-auto" >
  <div class="card-body" >
  <input class="border-0" style="card-body" value="<?php echo getInputAsString($input);?>">
    <input class="card-body"  type="hidden" name="input" value='<?php echo json_encode($input);?>'/>

  </div>
</div>
    <div class="gap-2 col-4 mx-auto" style="background-color:LightGray">
  <div class="row">
  <div class="col">
  <br>
  <button type="submit" class="btn btn-warning col-2" name="c" value="c">C</button> 
  <button type="submit" class="btn btn-light col-2" name="+" value="+">+</button> 
  <button type="submit" class="btn btn-light col-2" name="-" value="-">-</button> 
  <button type="submit" class="btn btn-light col-2" name="/" value="/">/</button> 
</div>
  </div>
  <div class="row">
  <div class="col">
  <br> 
  <button type="submit" class="btn btn-secondary col-2" name="7" value="7">7</button> 
  <button type="submit" class="btn btn-secondary col-2" name="8" value="8">8</button> 
  <button type="submit" class="btn btn-secondary col-2" name="9" value="9">9</button> 
  <button type="submit" class="btn btn-light col-2" name="*-" value="*">*</button> 
</div>
  </div>
  <br> 
  <div class="row">
  <div class="col">
  <button type="submit" class="btn btn-secondary col-2" name="4" value="4">4</button> 
  <button type="submit" class="btn btn-secondary col-2" name="5" value="5">5</button> 
  <button type="submit" class="btn btn-secondary col-2" name="4" value="4">4</button> 
  <button type="submit" class="btn btn-success col-2" name="=" value="=">=</button> 
</div>
  </div>
  <br> 
  <div class="row">
  <div class="col">
  <button type="submit" class="btn btn-secondary col-2" name="3" value="3">3</button> 
  <button type="submit" class="btn btn-secondary col-2" name="2" value="2">2</button> 
  <button type="submit" class="btn btn-secondary col-2" name="1" value="1">1</button> 
  <button type="submit" class="btn btn-secondary col-2" name="0" value="0">0</button> 
</div>
  </div>
  <br> <br>
  </div>
</div>


        </form>
        </div>
    </div>
    </div>
</body>
</html>
