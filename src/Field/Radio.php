<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

class Radio extends Common
{
    public function __construct(string $label, string $name, $value = null, array $items = [])
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->items = $items;
    }
}
