<?php

class MenuItem {
	private $menuitemid;
	private $itemname;
	private $description;
	private $picture;
	private $servingsize;
	private $price;
	
	public function setID($menuitemid){$this-> menuitemid = $menuitemid;}
	public function getID(){return $this-> menuitemid;}
	
	public function setPrice($price){$this->price = $price;}
	public function getPrice(){return $this->price;}
	
	public function setPicture($picture){$this->picture = $picture;}
	public function getPicture (){return $this->picture;}
	
	public function setItemName($itemname){$this->itemname = $itemname;}
	public function getItemName(){return $this->itemname;}
	
	public function setDescription($description){$this->description= $description;}
	public function getDescription(){return $this->description;}
	
	public function setServingSize($servingsize){$this->servingsize = $servingsize;}
	public function getServingSize(){return $this->servingsize;}

}

abstract class Menu {

	private $menuid;
	private $menuitemid;
	private $menuname;
	private $description;

	public function setMenuID($menuid){$this->menuid = $menuid;}
	public function getMenuID(){return $this->menuid;}

	public function setMenuItemID($menuitemid){$this-> menuitemid = $menuitemid;}
	public function getMenuItemID(){return $this-> menuitemid;}

	public function setMenuName($menuname){$this->menuname = $menuname;}
	public function getMenuName(){return $this->menuname;}

	public function setDescription($description){$this->description= $description;}
	public function getDescription(){return $this->description;}

}

// We inhereted classes

class MainMenu extends Menu {
	static public $title="<h1>Main Menu</h1>";
}

class DrinkMenu extends Menu {
	static public $title="<h2>Drink Menu</h2>";
}

class LunchMenu extends Menu {
	static public $title="<h3>Lunch Menu</h3>";
}
class KidsMenu extends Menu {
	static public $title="<h4>Kids Menu</h4>";
}

class DessertMenu extends Menu {
static public $title="<h5>Dessert Menu</h5>";
}


// Interfaces for seting contract for classes

interface DinnerPortion {
public function setDinnerPortion($itemobject);

}
interface DinnerPrices {
public function setDinnerPrices($itemobject);

}
interface HappyHourDrinkPrices {
public function setHappyHourDrinkPrices($itemobject);
}

// Final classes that uses interfaces to make special portions and prices for drink menu and diner menu

final class HappyHourMenu extends DrinkMenu implements HappyHourDrinkPrices {
	
	static public $title="<h2>Happy Hour Drink Menu</h2>";
	
	public function setHappyHourDrinkPrices($menuitemObject) {
		$adjusted_price = 1;
		$base_price = $menuitemObject->getPrice();
		
		//Make the dinner price 30% less than the normal price.
		$adjusted_price = ($base_price * 0.7);
		
		return round($adjusted_price,2);
	}
}

final class DinnerMenu extends LunchMenu implements DinnerPortion, DinnerPrices {
	
	static public $title="<h4>Dinner Menu</h4>";
	
	public function setDinnerPortion($menuitemObject) {
		$adjusted_servingsize = 1;
		$base_servingsize = $menuitemObject->getServingSize();
		
		//Make the dinner portion 50% bigger than the lunch portion.
		$adjusted_servingsize = $base_servingsize * 1.5;
		
		return $adjusted_servingsize;
	}
	public function setDinnerPrices($menuitemObject) {
		$adjusted_price = 1;
		$base_price = $menuitemObject->getPrice();
		
		//Make the dinner price 25% more than the lunch price.
		$adjusted_price = ($base_price * 1.25);
		
		return round($adjusted_price, 2);
	}

}

// We now test it 

// Create Test Menu Item object
$tmpMenuItem = new MenuItem();
$tmpMenuItem->setItemName('Atlantic Yellow Fin Tuna');
$tmpMenuItem->setPrice('14.75');

// Code to create Lunch Menu price
echo LunchMenu::$title ; // Ovde me outputujemo static property classe Lunchmenu
echo $tmpMenuItem->getItemName() . ' - $ ' . $tmpMenuItem->getPrice();
echo "<br><br>";

//Code to create dinner menu

$tmpDinnerMenu = new DinnerMenu();
echo DinnerMenu::$title; // Ovde mi outputujemo static property classe DinnerMenu
echo $tmpMenuItem->getItemName() . ' - $ ' . $tmpDinnerMenu->setDinnerPrices($tmpMenuItem);
echo "<br><br>";

// Code to change the title by changing static $title variable in the DinnerMenu class.

DinnerMenu::$title="<h2><em>Dinner</em></h2>";
echo DinnerMenu::$title;
echo $tmpMenuItem->getItemName() . ' - $ ' . $tmpDinnerMenu->setDinnerPrices($tmpMenuItem);
echo "<br><br>";






