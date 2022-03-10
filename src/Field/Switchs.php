<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

use DigPHP\Form\ItemInterface;

class Switchs extends Common
{
    public function __construct(string $label, string $name, $value = null, array $options = [])
    {
        foreach ($options as $key => $vo) {
            $this->$key = $vo;
        }
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->switchs = [];
    }

    public function addSwitch(string $label, $value, ItemInterface ...$items): self
    {
        $this->switchs[] = [
            'label' => $label,
            'value' => $value,
            'body' => implode('', $items)
        ];
        return $this;
    }
}
