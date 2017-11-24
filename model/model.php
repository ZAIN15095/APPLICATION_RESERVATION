<?php
class Data_Reservation
{
    private $destination;
    private $number_places;
    private $checkbox;
	private $name;
    private $age;
    private $price;
    private $page;
    private $error;

    public function __construct($name= [], $age= [], $error=False)
    {
        $this->destination = '';
        $this->number_places = 0;
        $this->checkbox = False;
        $this->name =$name;
        $this->age = $age;
        $this->price= 0;
        $this->return = False;
        $this->error = $error;
        $this->page= 'view/firstpage.php';
        $this->display_error_destination='';
        $this->display_error_number= '';
    }

    public function get_destination()
    {
        return $this->destination;
    }

    public function set_destination($destination)
    {
		$this->destination = $destination;
    }

    public function get_number_places()
    {
        if ($this->number_places == 0 || $this->number_places < 1 || $this->number_places > 9)
        {
            return '';
        }
        return $this->number_places;
    }

    public function set_number_places($number_places)
    {
        $this->number_places = $number_places;
    }

    public function get_checkbox()
    {
        return $this->checkbox;
    }

    public function set_checkbox($checkbox)
    {
        $this->checkbox = $checkbox ;
    }
    public function insurance()
    {
        return $this->checkbox == True ? "insurance" : "not insurance";
    }
    public function get_name()
    {
        while (count($this->name) < $this->number_places)
        {
            array_push($this->name, '');
        }
        return $this->name;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_age()
    {
        while (count($this->age) < $this->number_places)
        {
            array_push($this->age, '');
        }
        for($i = 0; $i < count($this->age); $i++)
        {
            if (!is_numeric($this->age[$i]) || $this->age[$i] < 1)
            {
                $this->age[$i] = '';
            }
        }
        return $this->age;
    }

    public function set_age($age)
    {
        $this->age = $age;
    }

    public function get_price()
    {
        foreach ($this->age as $age)
        {
            if (is_numeric($age) && $age < 13)
            {
                $this->price += 10;
            }
            elseif (is_numeric($age) && $age > 12)
            {
                $this->price += 15;
            }
        }
        return $this->checkbox == True ? $this->price + 20 : $this->price;

    }

    public function set_price($price)
    {
        $this->price = $price;
    }

    public function set_display_error($error)
    {
        $this->error=$error;
    }

    public function get_display_error(){
        return $this->error;
    }


    public function set_page($page){
        $this->page=$page;
    }

    public function current_page()
    {
        return $this->page;
    }

    public function error_destination()
    {
        if ($this->destination == '' )
        {$this->display_error_destination = '*Veuillez rentrer une destination convenable';}
        elseif (is_numeric($this->destination))
        {$this->display_error_destination =  '*Veuillez rentrer une destination convenable avec des lettres';}

        return $this->display_error_destination;

    }

    public function error_number()
    {
        if($this->number_places != is_numeric($this->number_places))
        {
            $this->display_error_number="*Veuillez rentrer un chiffre correcte";
        }
        elseif($this->number_places < 1 || $this->number_places > 10)
        {
            $this->display_error_number="*Veuillez choisir le nombre de place adéquat";
        }

        else
            {
                $this->display_error_number='';
            }
        return $this->display_error_number;
    }



}
?>
