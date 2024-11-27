<?php

namespace App;

abstract class Component {
    protected string $name;
    protected string $manufacturer;
    protected float $price;

    abstract public function getDetails(): string;

    public function __construct(string $name, string $manufacturer, float $price) {
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getManufacturer(): string {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): void {
        $this->manufacturer = $manufacturer;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function getInfo(): string {
        return "Название: $this->name, Производитель: $this->manufacturer, Цена: \$" . $this->price;
    }
}