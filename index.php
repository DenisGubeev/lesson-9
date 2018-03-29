<?php
class Car
{
  public $CarModel;
  public $CarColor;
  public $CarPrice;
  public function getCarPrice() {
      if ($this->CarColor == 'Exclusive') {
	return $this->CarPrice + 100000;
	} else {
	    return $this->CarPrice;
	}
  }
  public function __construct($CarModel, $CarColor, $CarPrice) {
    $this->CarModel = $CarModel;
    $this->CarColor = $CarColor;
    $this->CarPrice = $CarPrice; 
  }
}

class Tv
{
  public $TvModel;
  public $TvSize;
  public $TvPrice;
  public function getTvPrice() {
    if($this->TvSize <= 55){
      return $this->TvPrice + 500;
    }else {
       echo "<i>Бесплатная доставка</i>"; 
    }
  }
  public function __construct($TvModel, $TvSize, $TvPrice) {
    $this->TvModel = $TvModel;
    $this->TvSize = $TvSize;
    $this->TvPrice = $TvPrice;	
  }
}

class Pen
{
  public $penColor;
  public $inkColor;
  public $penPrice;
  public function getPenPrice() {
    if($this->inkColor == 'black' || $this->inkColor == 'dark-blue') {
      return $this->penPrice;
    }else {
      return 'Такие ручки бесценны, так что закатай губу';
    }
  }
  public function __construct($penColor, $inkColor, $penPrice) {
    $this->penPrice = $penPrice;
    $this->penColor = $penColor;
    $this->inkColor = $inkColor;
  }
}

class Duck
{
  public $place;
  public $breed;
  public function getBreed() {
    if($this->place){
      return $this->breed;
    }else {
      return 'такой породы нет в базе';
    }   
  }
  public function __construct($place, $breed) {
    $this->place = $place;
    $this->breed = $breed;
  }
}

class Product
{
  public $name;
  private $price;
  public $discount;
  public function getPrice() {
    if($this->discount) {
      return $this->price * (1 - ($this->discount / 100));
    }else{
      return $this->price;
    }
  }
  public function __construct($name, $price, $discount) {
    $this->price = $price;
    $this->name = $name;
    $this->discount = $discount;
  }	
}
 
$audi= new Car('Audi', 'Exclusive', 2000000);
$toyota= new Car('Toyota', 'Red', 1000000);
 
$sony = new Tv('Sony', 61, 75000);
$lg = new Tv('LG', 35, 35000);

$one= new Pen('Purple', 'black', 10);
$two= new Pen('Yellow', 'Red' , '');

$duckAsia= new Duck('Eurasia', 'Pekin Duck');
$duckAmerica= new Duck('America', 'Canadian Duck');

$samsung = new Product('Samsung', 55000, 10);
$lenovo = new Product('Lenovo', 50000, 20);

echo '<b>Машины :</b>';
echo "</br>";
echo $audi->CarModel . ' ' . "<i>$audi->CarColor</i>" . ' ' . $audi->getCarPrice();
echo "</br>";
echo $toyota->CarModel . ' ' . "<i>$toyota->CarColor</i>" . ' ' . $toyota->getCarPrice();
echo "<hr>";

echo '<b>Телевизоры :</b>';
echo "</br>";
echo $sony->TvModel . ' ' . $sony->TvSize . "'" . ' ' . $sony->TvPrice;
echo "</br>";
echo $sony->getTvPrice();
echo "</br>";
echo $lg->TvModel . ' ' . $lg->TvSize . "'" . ' ' . $lg->TvPrice;
echo "</br>"; 
echo "<i>Цена с учетом доставки :</i>" . ' '  . $lg->getTvPrice() ;
echo "<hr>";

echo '<b>Ручки :</b>';
echo "</br>";
echo $one->penColor . ' ' . "<i>$one->inkColor</i>" . ' ' . $one->getPenPrice();
echo "</br>";
echo $two->penColor . ' ' . "<i>$two->inkColor</i>" . ' ' . $two->getPenPrice();
echo "<hr>";

echo '<b>Утки :</b>';
echo "</br>";
echo $duckAsia->place . ' '  . $duckAsia->getBreed();
echo "</br>";
echo $duckAmerica->place . ' ' . $duckAmerica->getBreed();
echo "<hr>";

echo '<b>Телефоны :</b>';
echo "</br>";
echo $samsung->name . ' ' . 'Цена со Скидкой' . ' ' . $samsung->getPrice();
echo "</br>";
echo $lenovo->name . ' ' . 'Цена со Скидкой' . ' ' . $lenovo->getPrice();
echo "<hr>";
?>
