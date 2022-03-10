<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

class Checkbox extends Common
{
    public function __construct(string $label, string $name, array $value = [], array $items = [])
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->items = $items;
    }
}
