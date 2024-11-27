<?php

namespace App;

class PhoneCase extends Component
{
    protected string $material;
    protected string $color;

    public function __construct(string $name, string $manufacturer, float $price, string $material, string $color)
    {
        parent::__construct($name, $manufacturer, $price);
        $this->material = $material;
        $this->color = $color;
    }

    public function getDetails(): string
    {
        return "Корпус: {$this->getName()}, Производитель: {$this->getManufacturer()}, Материал: {$this->getMaterial()}, Цвет: {$this->getColor()}, Цена: \$" . $this->getPrice();
    }

    public function getMaterial(): string
    {
        return $this->material;
    }

    public function setMaterial(string $material): void
    {
        $this->material = $material;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
