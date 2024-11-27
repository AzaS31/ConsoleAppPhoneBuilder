<?php

namespace App;

class Battery extends Component
{
    protected int $capacity;

    public function __construct(string $name, string $manufacturer, float $price, int $capacity)
    {
        parent::__construct($name, $manufacturer, $price);
        $this->capacity = $capacity;
    }

    public function getDetails(): string
    {
        return "Аккумулятор: {$this->getName()}, Производитель: {$this->getManufacturer()}, Вместимость: {$this->getCapacity()} мАч, Цена: \$" . $this->getPrice();
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
}
