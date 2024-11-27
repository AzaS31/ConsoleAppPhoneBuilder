<?php

namespace App;

class Display extends Component
{
    protected string $resolution;
    protected float $diagonal;

    public function __construct(string $name, string $manufacturer, float $price, string $resolution, float $diagonal)
    {
        parent::__construct($name, $manufacturer, $price);
        $this->resolution = $resolution;
        $this->diagonal = $diagonal;
    }

    public function getDiagonal(): float
    {
        return $this->diagonal;
    }

    public function setDiagonal(float $diagonal): void
    {
        $this->diagonal = $diagonal;
    }

    public function getResolution(): string
    {
        return $this->resolution;
    }

    public function setResolution(string $resolution): void
    {
        $this->resolution = $resolution;
    }

    public function getDetails(): string
    {
        return "Дисплей: {$this->getName()}, Производитель: {$this->getManufacturer()}, Разрешение экрана: {$this->getResolution()} пикселей, Диагональ: {$this->getDiagonal()} дюйм, Цена: \$" . $this->getPrice();
    }
}