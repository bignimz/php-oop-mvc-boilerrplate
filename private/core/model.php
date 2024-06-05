<?php

/**
 * main model
 */

class Model extends Database
{
    public $errors = [];
    protected $validColumns = ['id', 'first_name', 'last_name', 'email']; // Add all valid columns here

    public function __construct()
    {
        // code..
        if(!property_exists($this, 'table')){
            $this->table = strtolower((new ReflectionClass($this))->getShortName()) . "s";
        }
    }

    public function where($column, $value)
    {
        // Validate the column name
        if (!in_array($column, $this->validColumns)) {
            throw new Exception("Invalid column name: $column");
        }

        $query = "SELECT * FROM $this->table WHERE $column = :value";
        return $this->run($query, [
            'value' => $value
        ]);
    }

    public function findAll()
    {
        $query = "SELECT * FROM $this->table";
        return $this->run($query);
    }

    public function insert($data)
    {
        // Build the query dynamically
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";

        return $this->run($query, $data);
    }

    public function update($id, $data)
    {
        // Build the SET part of the query
        $setPart = [];
        foreach ($data as $column => $value) {
            $setPart[] = "$column = :$column";
        }
        $setPart = implode(", ", $setPart);

        // Construct the full query
        $query = "UPDATE $this->table SET $setPart WHERE id = :id";

        // Add the id to the data array
        $data['id'] = $id;

        return $this->run($query, $data);
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $data['id'] = $id;
        return $this->run($query, $data);
    }
}
