<?php

class Reservation_data
{
    private $name;
    private $age;
    private $destination;
    private $number_palces;
    private $error;
    private $id=null;


    public function __construct($name, $age,$id,$destination, $number_places )
    {
        if ($id = !null) {
            $this->id = $id;
        }
        $this->name = $name;
        $this->age = $age;
        $this->destination = $destination;
        $this->number_palces = $number_places;
    }

    public function __contruct($error)
    {
        $this->error=error_destination;
        $this->error=err

    }


     public function return_id ()
    {
        return $this->id;
    }

    public function define_destionation ()
    {
        return $this->destination;

    }

    public function set_destination ($new_destionation)
    {
        return $this->destination= $new_destionation;
    }

    public function Error_define_destination()
    {
        if ($this->destination==" ")
        {
            $this-> error_destination="Veilleu...."
        }

    }

    public function define_num_palces ()
    {
        return $this->number_palces;
    }

    public function set_num_palces()
    {
        if ($this->number_palces < 1) {
            throw new Exception('Number of passengers is null');
        }

        return $this->number_palces;
    }

    public function set1_num_places($new_number_places)
    {
       return $this-> number_places=$new_number_places;
    }

    public function add_passenger()
    {
        if (count($this->name) < $this->number_palces)
        {
            $this->number_places= count($this->name);
        }
    }

    public function set_passenger($new_name)
    {
        return $this->name=$new_name;
    }

    public function add_age()
    {
        if (count($this->age)<$this->number_palces)
        {
            $this->number_palces= count($this->age);
        }

        if (!is_numeric($this->age) || $this->age < 1)
        {
            return '';
        }
    }














}