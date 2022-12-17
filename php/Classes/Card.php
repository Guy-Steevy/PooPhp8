<?php

class Card
{
    // ------------------------- __CONSTRUCT -----------------------------
    /**
     * Summary of __construct
     * @param int|null $theQuantity
     * @param float $thePrice
     * ecriture PHP8
     */
    public function __construct(
        private ?int $theQuantity,
        private float $thePrice
        ){}

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
