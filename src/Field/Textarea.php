<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

class Textarea extends Common
{
    public function __construct(string $label, string $name, $value = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }
}
