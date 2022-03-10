<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

class Hidden extends Common
{
    public function __construct(string $name, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }
}
