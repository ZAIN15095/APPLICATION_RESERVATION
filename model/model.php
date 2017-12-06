<?php
class Reservation
{
    private $destination;
    private $number_places;
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
    {
        return $this->destination;
    }

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
            }
            return False;
        }
    }

}
?>
