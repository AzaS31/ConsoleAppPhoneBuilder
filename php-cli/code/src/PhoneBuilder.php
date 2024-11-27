<?php

namespace App;

class PhoneBuilder
{
    private Smartphone $smartphone;

    private array $processors = [];
    private array $batteries = [];
    private array $cases = [];
    private array $cameras = [];

    public function __construct()
    {
        $this->smartphone = new Smartphone();

        $this->processors = [
            new Processor("Snapdragon 8 Gen 2", "Qualcomm", 300, 8),
            new Processor("Exynos 2200", "Samsung", 250, 8),
            new Processor("A17 Bionic", "Apple", 400, 6),
        ];

        $this->batteries = [
            new Battery("Li-Ion 5000mAh", "Samsung", 100, 5000),
            new Battery("Li-Po 4500mAh", "Sony", 120, 4500),
            new Battery("Li-Ion 6000mAh", "Panasonic", 150, 6000),
        ];

        $this->cases = [
            new PhoneCase("Aluminium Body", "Generic", 50, "Aluminium", "Grey"),
            new PhoneCase("Plastic Body", "Generic", 30, "Plastic", "Black"),
            new PhoneCase("Glass Body", "Generic", 80, "Glass", "White"),
        ];

        $this->cameras = [
            new Camera("Ultra HD Camera", "Sony", 200, 108, true),
            new Camera("Wide Angle Camera", "Samsung", 150, 64, false),
            new Camera("Telephoto Camera", "Canon", 180, 48, true),
        ];
    }

    public function run(): void
    {
        echo "Добро пожаловать в сборщик смартфонов!\n";
        $this->selectProcessor();
        $this->selectBattery();
        $this->selectCase();
        $this->selectCamera();
        $this->completeAssembly();
    }

    private function selectProcessor(): void
    {
        echo "Выберите процессор:\n";
        foreach ($this->processors as $index => $processor) {
            echo ($index + 1) . ". " . $processor->getDetails() . "\n";
        }

        $choice = (int) trim(fgets(STDIN)) - 1;
        if (isset($this->processors[$choice])) {
            $this->smartphone->addComponent($this->processors[$choice]);
            echo "Процессор добавлен.\n";
        } else {
            echo "Неверный выбор.\n";
            $this->selectProcessor();
        }
    }

    private function selectBattery(): void
    {
        echo "Выберите аккумулятор:\n";
        foreach ($this->batteries as $index => $battery) {
            echo ($index + 1) . ". " . $battery->getDetails() . "\n";
        }

        $choice = (int) trim(fgets(STDIN)) - 1;
        if (isset($this->batteries[$choice])) {
            $this->smartphone->addComponent($this->batteries[$choice]);
            echo "Аккумулятор добавлен.\n";
        } else {
            echo "Неверный выбор.\n";
            $this->selectBattery();
        }
    }

    private function selectCase(): void
    {
        echo "Выберите корпус:\n";
        foreach ($this->cases as $index => $case) {
            echo ($index + 1) . ". " . $case->getDetails() . "\n";
        }

        $choice = (int) trim(fgets(STDIN)) - 1;
        if (isset($this->cases[$choice])) {
            $this->smartphone->addComponent($this->cases[$choice]);
            echo "Корпус добавлен.\n";
        } else {
            echo "Неверный выбор.\n";
            $this->selectCase();
        }
    }

    private function selectCamera(): void
    {
        echo "Выберите камеру:\n";
        foreach ($this->cameras as $index => $camera) {
            echo ($index + 1) . ". " . $camera->getDetails() . "\n";
        }

        $choice = (int) trim(fgets(STDIN)) - 1;
        if (isset($this->cameras[$choice])) {
            $this->smartphone->addComponent($this->cameras[$choice]);
            echo "Камера добавлена.\n";
        } else {
            echo "Неверный выбор.\n";
            $this->selectCamera();
        }
    }

    private function completeAssembly(): void
    {
        echo "Сборка завершена!\n";
        echo $this->smartphone->getDetails();
        echo "Общая стоимость: $" . $this->smartphone->getTotalPrice() . "\n";
    }
}
