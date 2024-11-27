<?php

namespace App;

class Camera extends Component
{
    protected int $resolution;
    protected bool $hasOpticalZoom;

    public function __construct(
        string $name,
        string $manufacturer,
        float $price,
        int $resolution,
        bool $hasOpticalZoom
    ) {
        parent::__construct($name, $manufacturer, $price);
        $this->resolution = $resolution;
        $this->hasOpticalZoom = $hasOpticalZoom;
    }

    public function getDetails(): string
    {
        $opticalZoomText = $this->hasOpticalZoom ? 'Да' : 'Нет';
        return "Камера: {$this->getName()}, Производитель: {$this->getManufacturer()}, Разрешение: {$this->getResolution()} Мп, Оптический зум: $opticalZoomText, Цена: \$" . $this->getPrice();
    }

    public function getResolution(): int
    {
        return $this->resolution;
    }

    public function setResolution(int $resolution): void
    {
        $this->resolution = $resolution;
    }

    public function hasOpticalZoom(): bool
    {
        return $this->hasOpticalZoom;
    }

    public function setOpticalZoom(bool $hasOpticalZoom): void
    {
        $this->hasOpticalZoom = $hasOpticalZoom;
    }
}
