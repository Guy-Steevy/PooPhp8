<!-- ------------------- TEST CREATION DOCKER CONTAINER ------------------ -->
<!-- <h1>
    <?php echo "Bienvenue sur Docker, nous utilisons php : " . phpversion(); ?>
</h1>

<?php
$host = 'mysql';
$user = 'root';
$pwd = 'root';
$db = 'docker_database';

$conn = new mysqli($host, $user, $pwd, $db);

if ($conn->connect_error) {
    echo 'La connexion à MySql a échouée 🙄' . $conn->connect_error;
} else {
    echo 'La connexion à MySql a réussit 🥳';
}
?> -->
<!-- ---------------- END TEST CREATION DOCKER CONTAINER ------------------ -->


<!-- ------------------------- LEARNING PHP POO --------------------------- -->
<?php

//---------------------------------- PART 1 ---------------------------------------------------------------------
require_once('./Classes/Card.php');
require_once('./Classes/Paypal/Payment.php');
require_once('./Classes/Stripe/Payment.php');
require_once('Classes/Users/User.php');

$eCart = new Card(5, 100);
$eCart->setQuantity(50);

$eCart->discount(5);

echo $eCart;

// echo '<pre>';
// var_dump($eCart);
// echo '</pre>';

echo '<hr>';

$bag = new Card(0, 0);
echo 'In my bag, I have ' . $bag->getQuantity() . ' apple and the cost is ' . $bag->getPrice() . ' per unity.';
echo '<br>';

$bag->setQuantity(40);
$bag->setPrice(100);
echo 'In my bag, I have ' . $bag->getQuantity() . ' apple and the cost is ' . $bag->getPrice() . ' per unity.';
echo '<br>';

$priceBag = $bag->totalPrice();
echo 'The total price is ' . $priceBag . ' €';
$priceBag = $bag->discount(10);
echo 'The total price after discount is ' . $priceBag . ' €';

// echo '<pre>';
// var_dump($bag);
// var_dump($priceBag);
// echo '</pre>';

echo '<hr>';

//---------------------------------- PART 2 ---------------------------------------------------------------------

use Classes\Paypal\Payment as PaypalPayment;
use Classes\Stripe\Payment;

$pal = new PaypalPayment();
$strip = new Payment();

// echo '<pre>';
// var_dump($pal);
// var_dump($strip);
// echo '</pre>';