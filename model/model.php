<?php
class Data_Reservation
{
	private $name;
    private $age;
    private $destination;
    private $number_places;
    private $error;
    private $id;
    private $price;

    public function __construct($name= '', $age='', $id= null, $destination='', $number_places='', $price=0)
    {
		if ($id = !null) 
	{
            $this->id = $id;
        }
        $this->name =$name;
        $this->age = $age;
        $this->destination = $destination;
        $this->number_palces = $number_places;
		$this->error_get_name=' ';
		$this->error_get_age='';
		$this->checkbox = '';
		$this->error_get_nbr_places='';
        $this->price= $price;
		
    }
	
	public function get_id()
    {
		return $this->id;
    }

    public function set_id($id)
    {
        $this->id= $id;
    }

    public function get_destination()
    {
        return $this->destination;
    }

    public function set_destination($destionation)
    {
		$this->destination = $destionation;
    }


    public function get_num_palces()
    {
        return $this->number_palces;
    }

    public function set_num_places($number_places)
    {
		$this-> number_places= $number_places;
    }

    public function error_get_number_places()
    {
        if ($this->number_palces=''|| $this->number_places= ' ')
        {
            $this->error_get_nbr_places="veuiller renter un nombre";
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

	public function get_name()
	{
		while(count($this->name) <= $this->number_palces)
        	{
				return $this->name;
        	}
            
	}

    public function set_name($name)
    {
        $this->name=$name;
    }

    public function get_error_name() 
    {
        if ($this->name!= is_string($this->name) )
        {
            $this->error_get_name="veuiller...";
        }
        
        if ($this->name= '' || $this->name= " ")
        {
            $this->error_get_name="veuiller...";
        }
        
		else
		{
            $this->error_get_name='';
        }
		
		return $this->error_get_name;
	}

    public function get_age()
    {
       while (count($this->age)<=$this->number_palces)
        {
            return $this->age;
        }
    }

    public function set_age($age)
    {
        $this->age=$age;
    }

    public function get_error_age()
    {
        if ($this->age='' || $this->age= ' ' )
        {
            $this->error_get_age="veuiller...";
        }
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
             $this->error_get_age='';
        }
        return $this->error_get_age;
    }

	
	public function get_checkbox()
	{
    return $this->checkbox;
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
	}
	
	public function insurance()
	{
		if ($this->checkbox == insurance)
		{
			return "has insurance";
			
		}
		
		else 
		{
			return "not insurance";
		}
		
		
	}
	
	public function get_price()
	{
		foreach ($this->age as $age)
		{
			if (is_numeric($age) && $age <= 12)
			{
				$this->price += 10;
			}
			elseif (is_numeric($age) && $age > 13)
			{
				$this->price += 15;
            }
        }
		
		if ($this->checkbutton == 'insurance')
		{
			return $this->price + 20;
		}
			
		else
		{
			return $this->price;
		}
	}
	
}
?>
