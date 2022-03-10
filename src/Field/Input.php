<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

class Input extends Common
{
    public function __construct(string $label, string $name, $value = null, string $type = 'text')
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
    }
}
