<?php
$name = "Winston";
echo $name;

$balance = 100;
$balance = $balance - 50;
echo $balance;

//This code will not show, its called a comment
/* this is a comment
it has more than one line
it can go on
 */

//  conditions
echo "<br>";
$amount = 40;
if ($amount > $balance) {
    echo "Insufficient fund";
}elseif ($amount == $balance) {
    echo "You cant empty your account";
}else{
    $balance = $balance - $amount;
    echo "Withdrawal successful";
}

echo "<br>";

$age = 20;
if ($age > 18) {
    echo "You are welcome";
}else{
    echo 'You are not allowed';
}



?>