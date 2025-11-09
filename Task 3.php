<?php

//1. Start a session and take user name and budget from a simple form

session_start();
$_POST;


//2. Store the data in session and show “Welcome, (name)! Your budget is (amount).”

if (isset($_POST['sub'])) {
    $name = $_POST['uname'];
    $budget = $_POST['budget'];
    echo "Welcome,$name! your budget is $budget";
};
//3. Add a button to delete the session.

if (isset($_POST['del'])) {
    session_unset();
    session_destroy();
};


?>



<form action="" method="POST">
    <input type="text" name="uname" placeholder="name">
    <input type="text" name="budget" placeholder="Budget">
    <input type="submit" name="sub">
    <button type="submit" name="del">Delete</button>
</form>



<?php

//4. Create a recursive function to calculate sum from an array


function recursive(array $array): int|float
{


    $total = 0;
    foreach ($array as $item) {


        $total += $item;
    }
    return $total;
}


$myArray = [1, 1, 2, 6, 8, 9, 3];

$sum = recursive($myArray);
echo "Array sum is $sum<br>";

?>


<?php

//5. Create a function that applies a discount using a callback.

function callback(float $price, int $discount, $Total)
{
    echo "Price is => $price<br>";

    $math = $discount / 100;
    $sum = $price * $math;
    $subtotal = $price - $sum;
    $Total($subtotal);
}


callback(1000, 7, function ($Total) {


    echo "After discount => $Total<br>";
});



?>



<?php

//6. Write a function that divides two numbers and handle errors with try-catch-finally


function divide($num1, $num2)
{
    try {
        if ($num2 == 0) {
            throw new Exception('Zero not valid');
        }
        $sum = $num1 / $num2;
        return $sum;
    } catch (Exception $e) {
        echo "<br>" . $e->getMessage() . "<br>";
    } finally {
        echo "completed<br>";
    }
}


echo divide(10, 5) . "<br>";
echo divide(5, 0) . "<br>";


?>