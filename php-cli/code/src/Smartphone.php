<?php

namespace App;

class Smartphone
{
    private array $components = [];

    public function addComponent($component): void
    {
        $this->components[] = $component;
    }

    public function getDetails(): string
    {
        if (empty($this->components)) {
            return "Смартфон пока не содержит компонентов.\n";
        }

        $details = "Состав смартфона:\n";
        foreach ($this->components as $component) {
            $details .= "- " . $component->getDetails() . "\n";
        }
        return $details;
    }

    public function getTotalPrice(): float
    {
        $total = 0;
        foreach ($this->components as $component) {
            $total += $component->getPrice();
        }
        return $total;
    }
}
