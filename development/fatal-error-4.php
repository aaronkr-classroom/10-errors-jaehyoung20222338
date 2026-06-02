<?php 
class Basket
{
    function total(int $price, int $quantity = 1)
    {
        return $price * $quantity;
    }
}
$basket = new Basket(); ?>
<h1>Basket</h1>
<?= $basket->total(3,5) ?>