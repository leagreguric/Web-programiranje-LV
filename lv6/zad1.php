<?php
$student = array("Lea","Gregurić","456456", "1145", "3.");
foreach ($student as $value){
	echo "$value <br/>";
}

$automobil = array( 
   "hyundai" => array (
   "ime" => "hyundai",
      "tip automobila" => "Limuzina",
      "kubikaža" => "1.6",	
      "boja" => "bijela",
      "godina proizvodnje" => "2016",
      "motor" => "1.6 crdi"
   ),
   
   "volkswagen" => array (
   "ime" => "volkswagen",
      "tip automobila" => "coupe",
      "kubikaža" => "1.4",	
      "boja" => "siva s efektom",
      "godina proizvodnje" => "2009",
      "motor" => "1.4 tsi"
   )
);

echo "<br/>";
         

foreach ($automobil['hyundai'] as $key => $value) {
   echo "$key: $value <br/>";
}
echo "<br/>";

echo "ime: " . $automobil['volkswagen']['ime'] . "<br/>";
echo "tip automobila: " . $automobil['volkswagen']['tip automobila'] . "<br/>";
echo "kubikaža: " . $automobil['volkswagen']['kubikaža'] . "<br/>";
echo "boja: " . $automobil['volkswagen']['boja'] . "<br/>";
echo "godina proizvodnje: " . $automobil['volkswagen']['godina proizvodnje'] . "<br/>";
echo "motor: " . $automobil['volkswagen']['motor'] . "<br/>";

function kvadrat($num) {
   return $num * $num;
}

$num = 9;
$result = kvadrat($num);
echo "<br/>";
echo "Kvadrat broja $num je: $result";

class Kupac {
   private $firstName;
   private $lastName;

   public function __construct($firstName, $lastName) {
       $this->firstName = $firstName;
       $this->lastName = $lastName;
   }

   public function setFirstName($firstName) {
       $this->firstName = $firstName;
   }

   public function setLastName($lastName) {
       $this->lastName = $lastName;
   }

   public function printKupacInfo() {
       echo "Kupac je: $this->firstName $this->lastName";
   }
}
echo "<br/>";
echo "<br/>";

$kupac = new Kupac("David", "Mikulić");

$kupac->setFirstName("Perica");
$kupac->setLastName("Peričić");

$kupac->printKupacInfo();

?>
