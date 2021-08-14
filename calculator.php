<?php
include 'calculatorclass.php';
$newcal = new calculator_class(); //Calling a Function
/* Getting Input from the user  */
if (isset($_GET['Input1'])) {
  $Input1 = $_GET['Input1'];
}
if (isset($_GET['Input2'])){
  $Input2 = $_GET['Input2'];
}
?>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
   rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col">
      <div class="alert alert-success" role="alert">
<?php
if (isset($_GET['Input1'])&&isset($_GET['Input2'])) { // VALIDATING THE INPUT
   // Executing the functon
$addition = $newcal->add($Input1,$Input2);
echo 'Addition of  two number is : ' .$addition;
echo "</br>";
$Subraction = $newcal->sub($Input1,$Input2);
echo 'Subraction of two Number is : ' .$Subraction;
echo "</br>";
$multiplication = $newcal->multi($Input1,$Input2);
echo 'Multiplication of two Number is : ' .$multiplication;
echo "</br>";
$Division = $newcal->divi($Input1,$Input2);
echo 'Division of  two number is : '.$Division;
}
else {
  echo "<center>Basic Calculator Using PHP</center>";
}
?>
</div>
<form action="Calculator.php" method="get">
<div class="mb-3">
<label for="Getting input" class="form-label">Input1</label>
<input name="Input1" type="text" class="form-control" id="gettinginput" >
<div id="emailHelp" class="form-text"></div>
</div>
<div class="mb-3">
<label for="gettinginput" class="form-label">Input2</label>
  <input name="Input2" type="text" class="form-control" id="gettinginput">
</div>

  <button type="submit" class="btn btn-primary">calculate</button>
</form>
    </div>
    <div class="col">

    </div>
  </div>
</div>

</body>
</html>
