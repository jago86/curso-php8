<?php

class Model
{
    public function buildString()
    {
        $me = new ReflectionClass($this);
        $properties = $me->getProperties();

        $string = "";
        foreach ($properties as $property) {
            $propertyName = $property->name;
            $propertyValue = $this->$propertyName;
            $string = $string . "{$propertyName}:" . (is_bool($propertyValue) ? var_export($propertyValue, true) : $propertyValue) .  "\n";
        }

        return $string;
    }

    public function save($name = null)
    {
        if (is_null($name)) {
            $me = new ReflectionClass($this);
            $filename = $me->getName();
            $name = lcfirst($filename) . ".txt";
        }

        $file = fopen($name, 'w');
        fwrite($file, $this->buildString());
        fclose($file);
    }
}
