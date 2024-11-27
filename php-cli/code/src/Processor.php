<?php

namespace App;

class Processor extends Component
{
    protected int $coreCount;

    public function __construct(string $name, string $manufacturer, float $price, int $coreCount) {
        parent::__construct($name, $manufacturer, $price);
        $this->coreCount = $coreCount;
    }

    public function getDetails(): string
    {
        return "Процессор: {$this->getName()}, Производитель: {$this->getManufacturer()}, Количество ядер: {$this->getCoreCount()}, Цена: \$" . $this->getPrice();
    }

    public function getCoreCount(): int
    {
        return $this->coreCount;
    }

    public function setCoreCount(int $coreCount): void
    {
        $this->coreCount = $coreCount;
    }
}
