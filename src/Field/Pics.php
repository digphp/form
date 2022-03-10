<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

class Pics extends Common
{
    public function __construct(string $label, string $name, array $value = [], string $upload_url = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->upload_url = $upload_url;
    }
}
