<?php

class Reservation_data
{
    private $name;
    private $age;
    private $destination;
    private $number_palces;
    private $error;
    private $id=null;


    public function __construct($name, $age,$id,$destination=" ", $number_places=" " )
    {
        if ($id = !null) {
            $this->id = $id;
        }
        $this->name = $name;
        $this->age = $age;
        $this->destination = $destination;
        $this->number_palces = $number_places;
        $this->error_get_destination=" ";
        $this-> error_get_nbr_places=" ";
    }




     public function return_id ()
    {
        return $this->id;
    }

    public function Get_destionation ()
    {
        return $this->destination;

    }

    public function set_destination ($new_destionation)
    {
        return $this->destination= $new_destionation;
    }

    public function Error_get_destination()
    {
        if ($this->destination==" ")
        {
           $this-> error_get_destination="Veilleu....";
        }

        if ($this->destination!=is_string($this->destination))
        {
           $this-> error_get_destination="Veullier....";
        }

        else
        {
                return $this->error_get_destination=" ";

        }

        return $this->error_get_destination;

    }

    public function get_num_palces ()
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

    public function set_num_places($new_number_places)
    {
       return $this-> number_places=$new_number_places;
    }


    public function Error_get_number ()
    {
        if ($this->number_palces=" ")
        {
            $this->error_get_nbr_places="veuiller renter un nombre correct";
        }
        if ($this->number_palces!= is_numeric($this->number_palces) )
        {
            $this->error_get_nbr_places="ve";
        }
        if ($this->number_palces < 1 || $this->number_palces >= 11)
        {
            $this->error_get_nbr_places="pas bon";
        }
        else
        {
            $this->error_get_nbr_places=" ";
        }

        return $this->error_get_nbr_places;
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