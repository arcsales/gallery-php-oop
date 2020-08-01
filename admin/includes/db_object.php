<?php

class Db_object
{
    protected static $db_table = "users";

    public static function find_all()
    {
        return static::find_by_query("SELECT * FROM " . static::$db_table . " ");
    }

    public static function find_by_id($user_id)
    {
        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE id = '$user_id' LIMIT 1");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function find_by_query($sql)
    {
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();
        while ($row = mysqli_fetch_array($result_set)) {
            $the_object_array[] = static::instantation($row);
        }
        return $the_object_array;
    }

    public static function instantation($the_record)
    {
        $calling_class = get_called_class();
        $the_object = new $calling_class;
        foreach ($the_record as $the_attribute => $value) {
            if ($the_object->has_the_attribute($the_attribute)) {
                $the_object->$the_attribute = $value;
            }
        }

        return $the_object;
    }

    private function has_the_attribute($the_attribute)
    {
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties);
    }

    protected function properties()
    {
        $proeprties = array();
        foreach (static::$db_table_fields as $db_field) {
            if (property_exists($this, $db_field)) {
                $proeprties[$db_field] = $this->$db_field;
            }
        }
        return $proeprties;
    }

    protected function clean_properties()
    {
        global $database;
        $clean_properties = array();
        foreach ($this->properties() as $key => $value) {
            $clean_properties[$key] = $database->escape_string($value);
        }
        return $clean_properties;
    }

    public function save()
    {
        return isset($this->id) ? $this->update() : $this->create();
    }

    public function create()
    {
        global $database;
        $proeprties = $this->clean_properties();

        $sql  = "INSERT INTO " . static::$db_table . " (" . implode(",", array_keys($proeprties)) . ")";
        $sql .= "VALUES('" . implode("','", array_values($proeprties)) . "')";

        if ($database->query($sql)) {
            $this->id = $database->the_insert_id();
            return true;
        } else {
            return false;
        }
    }

    public function update()
    {
        global $database;

        $proeprties = $this->clean_properties();
        $proeprties_pairs = array();

        foreach ($proeprties as $key => $value) {
            $proeprties_pairs[] = "{$key}='{$value}'";
        }

        $sql  = "UPDATE " . static::$db_table . " SET ";
        $sql .= implode(",", $proeprties_pairs);
        $sql .= " WHERE id = " . $database->escape_string($this->id);

        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }

    public function delete()
    {
        global $database;

        $sql = "DELETE FROM "  . static::$db_table . " WHERE id = " . $database->escape_string($this->id) . " LIMIT 1";
        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }
}
