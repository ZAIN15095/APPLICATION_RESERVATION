<?php
class Reservation
{
    private $name;
    private $age;
    private $destination;
    private $number_places;
    private $error;
    private $id=null;

    public function __construct($name, $age, $id, $destination='', $number_places='')
    {
        if ($id = !null) 
		{
            $this->id = $id;
        }
        $this->name = $name;
        $this->age = $age;
        $this->destination = $destination;
        $this->number_palces = $number_places;
		$this->error_get_name=' '
		$this->error_get_age=''
		$this->checkbox = '';
		$this->error_get_nbr_places='';
		
    }

     public function return_id()
    {
        return $this->id;
    }

    public function get_Destionation()
    {
        return $this->destination;
    }

    public function set_Destination($new_destionation)
    {
		$this->destination = $new_destionation;
    }


    

    public function get_num_palces ()
    {
        return $this->number_palces;
    }

    public function set_num_palces()
    {
        if ($this->number_palces < 1)
		{
            throw new Exception('Number of passengers is null');
        }
        return $this->number_palces;
    }

    public function set_num_places($new_number_places)
    {
       return $this-> number_places=$new_number_places;
    }

    public function error_get_number_places()
    {
        if ($this->number_palces=" ")
        {
            $this->error_get_nbr_places="veuiller renter un nombre correct";
        }
        if ($this->number_palces!= is_numeric($this->number_palces) )
        {
            $this->error_get_nbr_places="veuiller...";
        }
        if ($this->number_palces < 1 || $this->number_palces >= 10)
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
	public function set_price()
	{
	$price=0
    foreach ($this->age as $age)
    {
      if (is_numeric($age) && $age <= 12)
      {
        $price + = 10;
      }
      elseif (is_numeric($age) && $age > 13)
      {
        $price += 15;
      }
    }
    if ($this->checkbutton == 'checked')
    {
      return $this->price + 20;
    }
    else
    {
      return $price;
    }
	}
	
	public function get_checkbox()
	{
    return $this->checkbutton;
	}
	
	public function set_checkbox($value)
	{
    if ($value == 'insurance')
    {
      $this->checkbox = 'insurance';
    }
    else
    {
      $this->checkbox = '';
    }
	public function insurance()
	{
		if ($this->checkbox==insurance)
		{
			return "has insurance";
			
		}
		
		else 
		{
			return "not insurance";
		}
		
		
	}
	
	
	public function ErrorName() 
	{
		if ($this->name!= is_string($this->name) )
        {
            $this->error_get_name="veuiller...";
		}
		
		else
		{
			 $this->error_get_name=' ';
		}
		return $this->error_get_name
		
		
		
	public function ErrorAgege()
	{
		if ($this->age!= is_numeric($this->age) )
        {
            $this->error_get_name="veuiller...";
		}
		
		if ($this->age <= 0 || $this->age > 120 )
        {
            $this->error_get_age="veuiller...";
		}
		
		else
		{
			 $this->error_get_age=' ';
		}
		return $this->error_get_age
		
		
		
	}
	
	
	
	
}