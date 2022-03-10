<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

class Code extends Common
{
    public function __construct(string $label, string $name, $value = null, string $mode = 'htmlmixed')
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->mode = $mode;
    }
}
