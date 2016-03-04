<?
// echo "\n";
// fwrite(STDOUT, "Input a number\n");
// $a = fgets(STDIN);
// echo "\n";
// fwrite(STDOUT, "Input another number\n");
// $b = fgets(STDIN);
// echo "\n";
// function add(&$a, &$b)
// {
//     echo "A:\t$a";
//     echo "\t+ \n";
//     echo "B:\t$b";
//     echo "\n";
//     return $a + $b;
// }

// function subtract(&$a, &$b)
// {
//     echo "A:\t$a";
//     echo "\t- \n";
//     echo "B:\t$b";
//     echo "\n";
//     return $a - $b;
// }

// function multiply(&$a, &$b)
// {
//     echo "A:\t$a";
//     echo "\tx \n";
//     echo "B:\t$b";
//     echo "\n";
//     return $a * $b;
// }

// function divide(&$a, &$b)
// {
//     echo "A:\t$a";
//     echo "\t\\ \n";
//     echo "B:\t$b";
//     echo "\n";
//     return $a / $b;
// }

// echo "Add: \n";
// $totalAdd = add($a, $b);
// echo "Total:  $totalAdd\n\n";
// echo "Subtract: \n";
// $totalSub = subtract($a, $b);
// echo "Total:  $totalSub\n\n";
// echo "Multiply: \n";
// $totalMult = multiply($a, $b);
// echo "Total:  $totalMult\n\n";
// echo "Divide: \n";
// $totalDiv = divide($a, $b);
// echo "Total:  $totalDiv";

echo "\n";

$a = 0;
$b = 0;

function inputCheckA(&$a)
{
  fwrite(STDOUT, "Please Input a Number\n");
  (int)$a = fgets(STDIN);
  // do {
    if(is_numeric((int)$a) === true) {
    } else {
      errorMsg($a);
      $a = fgets(STDIN);
    }
  // } while (is_numeric($a) === false);
} 

function inputCheckB(&$b)
{
  fwrite(STDOUT, "\nPlease Input a Number\n");
  (int)$b = fgets(STDIN);
  echo "\n";
  // do {
    if(is_numeric((int)$b) === true && (int)$b != 0) {
    } else {
      errorMsg($a, $b);
      $b = fgets(STDIN);
    }
  // } while (is_numeric($b) != true);
} 

function errorMsg($a, $b)
{
  if(is_numeric($a) === false || is_numeric($b) === false)
  {
    return "Please Enter a Valid Number\n";
  } else if ($b == 0) {
    return "Pleas Enter a Different Number, Division by 0 is Not Allowed\n";
  }
}

function doMath($a, $b)
{
  add($a, $b);
  subtract($a, $b);
  multiply($a, $b);
  divide($a, $b);
}

echo "\n";
function add($a, $b)
{
    echo "A:\t$a";
    echo "\t+ \n";
    echo "B:\t$b";
    echo "\n";
    return $a + $b;
}

function subtract($a, $b)
{
    echo "A:\t$a";
    echo "\t- \n";
    echo "B:\t$b";
    echo "\n";
    return $a - $b;
}

function multiply($a, $b)
{
    echo "A:\t$a";
    echo "\tx \n";
    echo "B:\t$b";
    echo "\n";
    return $a * $b;
}

function divide($a, $b)
{
    echo "A:\t$a";
    echo "\t\\ \n";
    echo "B:\t$b";
    echo "\n";
    return $a / $b;
}

inputCheckA($a);
inputCheckB($b);

echo "Add: \n";
$totalAdd = add($a, $b);
echo "Total:  $totalAdd\n\n";
echo "Subtract: \n";
$totalSub = subtract($a, $b);
echo "Total:  $totalSub\n\n";
echo "Multiply: \n";
$totalMult = multiply($a, $b);
echo "Total:  $totalMult\n\n";
echo "Divide: \n";
$totalDiv = divide($a, $b);
echo "Total:  $totalDiv";

?>


