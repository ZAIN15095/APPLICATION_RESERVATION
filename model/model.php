<?php
class Data_Reservation
{
    private $destination;
    private $number_places;
<<<<<<< HEAD
    private $name;
    private $age;
    private $page;
    private $error;
    private $box;
    private $price;
    private $update;
    private $idUpdate;

    public function __construct($destination = '', $number_places = '')
    {
        $this->destination = $destination;
        $this->number_places = $number_places;
        $this->name = [];
        $this->age = [];
        $this->page = True;
        $this->error = False;
        $this->box = False;
        $this->price = 0;
        $this->update = False;
    }

    public function getDestination()
=======
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
    }

    public function get_destination()
>>>>>>> 4f870c561aba0bf8c081c25327c2ec5e925534d3
    {
        return $this->destination;
    }

<<<<<<< HEAD
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    public function getPlace()
    {
        return $this->number_places;
    }

    public function setPlace($places)
    {
        $this->number_places = $places;
    }

    public function getName()
    {
        while (count($this->name) < $this->number_places)
        {
            array_push($this->name, '');
        }
        return $this->name;
    }

    public function setName($names)
    {
        $this->name = $names;
    }

    public function analyseAge($age)
    {
        foreach ($this->age as $age){
            if (is_numeric($age) || $age == "" || (int)($age) <= 0 || (int)($age) >= 100) {
                return False;
            }
            return True;
        }
    }

    public function getAge()
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

    public function setAge($ages)
    {
        $this->age = $ages;
    }

    public function analysePlace($places)
    {
        if ((int)$places <= 10 && is_numeric($places) && (int)$places > 0) {
            return True;
        }
        return False;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function currentPage()
    {
        return $this->page;
    }

    public function comparePlace($places)
    {
        if ($places == $this->number_places) {
            $this->state_place = 0;
        } elseif ($places == 0) {
            $this->state_place = 0;
        } elseif ($places > $this->number_places) {
            $this->state_place = $places - $this->number_places;
        }
    }

    public function setErrorText($error)
    {
        $this->error = $error;
    }

    public function getErrorText()
    {
        return $this->error;
    }

    public function setBox($box)
    {
        $this->box = $box;
    }

    public function getBox()
    {
        return $this->box;
    }

    public function stateUpdate()
    {
        return $this->update;
    }

    public function setStateUpdate($update)
    {
        $this->update = $update;
    }

    public function idUpdate()
    {
        return $this->idUpdate;
    }

    public function setIdUpdate($idUpdate)
    {
        $this->idUpdate = $idUpdate;
    }


    public function getPrice()
    {
        $price = 0;
        foreach ($this->age as $age) {
            if (is_numeric($age) && $age < 13)
                $price += 10;

            elseif (is_numeric($age) && $age > 12)
                $price += 15;
        }
        if ($this->box == True)
            return $price + 20;

        else
            return $price;
    }

    public function setPrice($price)
    {
        return $this->price;
    }

    public function getNameError()
    {
        foreach ($this->name as $name) {
            if (is_numeric($name) || $name == "") {
                return True;
            }
            return False;
        }
    }


    public function getAgeError()
    {
        foreach ($this->age as $age) {
            if (!is_numeric($age) || $age == "" || (int)($age) <= 0 || (int)($age) >= 100) {
                return True;
=======
    public function set_destination($destination)
    {
		$this->destination = $destination;
    }

    public function error_destination()
    {
        if ($this->destination == '' || $this->destination== ' '  )
        {echo '*Veuillez rentrer une destination convenable';}
        elseif (is_numeric($this->destination))
        {echo '*Veuillez rentrer une destination convenable avec des lettres';}

        else
        {
            echo '';
        }

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
    public function error_number()
    {
        if($this->number_places != is_numeric($this->number_places))
        {
            echo "*Veuillez rentrer un chiffre correcte";
        }
        elseif($this->number_places < 1 || $this->number_places > 10)
        {
            echo "*Veuillez choisir le nombre de place adéquat";
        }

        else
        {
            echo '';
        }
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
>>>>>>> 4f870c561aba0bf8c081c25327c2ec5e925534d3
            }
            return False;
        }
<<<<<<< HEAD
=======
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
>>>>>>> 4f870c561aba0bf8c081c25327c2ec5e925534d3
    }

}
?>
