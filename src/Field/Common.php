<?php

declare(strict_types=1);

namespace DigPHP\Form\Field;

use DigPHP\Form\Builder;
use DigPHP\Form\ItemInterface;
use ReflectionClass;

abstract class Common implements ItemInterface
{
    private $_data = [];

    public function __set($name, $value)
    {
        $this->_data[$name] = $value;
    }

    public function __get($name)
    {
        if ($name == 'id') {
            if (!isset($this->_data['id'])) {
                $this->_data['id'] = 'field_' . uniqid();
            }
        }
        return $this->_data[$name];
    }

    public function set($name, $value): self
    {
        $this->$name = $value;
        return $this;
    }

    public function setHelp(string $help): self
    {
        $this->help = $help;
        return $this;
    }

    public function __toString()
    {
        $ref = new ReflectionClass(get_called_class());
        return '<div id="' . $this->id . '">' . Builder::getTemplate()->renderFromFile(strtolower($ref->getShortName()) . '@form-builder', $this->_data) . '</div>';
    }
}
