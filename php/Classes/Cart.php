<?php

class Cart
{
    /**
     * Attributs
     * le "?" signifie que la valeur de la variable peut-être = "null"
     */
    private ?int $theQuantity;
    private float $thePrice;

    // ------------------------- __CONSTRUCT -----------------------------
    public function __construct(int $quant, float $price)
    {
        $this->theQuantity = $quant;
        $this->thePrice = $price;
    }

    // -------------------------- __TOSTRING -----------------------------
    /**
     * Summary of __toString
     * @return string
     * convert a class object as a string
     */
    public function __toString()
    {
        return "With the discount, the final price is $this->thePrice";
    }


    // ---------------------------- SETTER -----------------------------
    public function setQuantity(int $quant): void
    {
        $this->theQuantity = $quant;
    }
    public function setPrice(float $price = 0): void
    {
        $this->thePrice = $price;
    }


    // ---------------------------- GETTER -----------------------------
    public function getQuantity(): float
    {
        return $this->theQuantity;
    }
    public function getPrice(): float
    {
        return $this->thePrice;
    }


    // --------------------------- FUNCTIONS -----------------------------
    public function discount(int $discAmount): float
    {
        $total = $this->theQuantity * $this->thePrice;
        $total = $total - ($total * ($discAmount / 100));
        $this->thePrice = $total;
        return $total;
    }

    public function totalPrice(): int
    {
        $calcul = $this->theQuantity * $this->thePrice;
        return $calcul;
    }
}
