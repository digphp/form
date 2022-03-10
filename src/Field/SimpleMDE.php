<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

class SimpleMDE extends Common
{
    public function __construct(string $label, string $name, $value = null, string $upload_url = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->upload_url = $upload_url;
    }
}
