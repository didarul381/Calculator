
<?php 
include_once './Calculator.php';
// print_r($_POST);
if(!empty($_POST)){
    $n1=$_POST['num1'];
    $n2=$_POST['num2'];
    
    $cal=new Calculator();

    if($n1 !="" && $n2 !=""){
       
    if(isset($_POST['plus'])){
     $sum= $cal->addition($n1,$n2);
     echo $sum;
    }
    if(isset($_POST['minus'])){
        $sub= $cal->subtraction($n1,$n2);
        echo $sub;
       }
       if(isset($_POST['multi'])){
        $mul= $cal->multipication($n1,$n2);
        echo $mul;
       }
      
       if(isset($_POST['div'])){
        $div= $cal->division($n1,$n2);
        echo $div;
       }

    }
    else{
        echo 'requier number...';
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator.....</h2>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table >
  
            <tr>
              <td>1st Number:</td>
              <td><input type="text" placeholder="enter first number" name="num1"   ></td>
              
            </tr>
            <tr>
              <td>2nd Number:</td>
              <td><input  type="text" placeholder="enter second number" name="num2"   ></td>
              
            </tr>
            <tr>
              <td></td>
              <td>
                  <input type="submit" value="+" name="plus"  >
                  <input type="submit"value="-" name="minus"  >
                  <input type="submit" value="*" name="multi"  >
                  <input type="submit" value="/" name="div"  >
              
              </td>
              
            </tr>
            
          </table>

    </form>
</body>
</html>

</body>
</html>