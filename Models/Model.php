<?php

class Model
{
    protected $properties = [];

    protected $table;

    public static function create($properties)
    {
        $model = new static($properties);
        $model->save();

        return $model;
    }

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
        if (empty($this->table)) {
            throw new Exception("El nombre de la tabla no ha sido definido.");
        }

        App::get('database')->create($this->table, [
            'title' => $_POST['title'],
            'color' => $_POST['color'],
            'completed' => 0,
        ]);
    }
}
