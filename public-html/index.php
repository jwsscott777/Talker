<?php
$website = 'http://www.zavrel.net';
?>

<!DOCTYPE html>
<head>
<title>Hello Everyone</title>
</head>

<body>
<h1 style="color:red;">Hello Everyone</h1>
<a href="<?php echo $website; ?>"><?php echo 'Consulting: ' . $website; ?></a>"
<?php
    $trueValue = true;
    $falseValue = false;
    ?>
<p><?php echo "This is the content of trueValue: $trueValue"; ?></p>
<p><?php echo "This is the content of falseValue: $falseValue"; ?></p>

   
    
   
   
    
    <p>
    <?php
        class carBluePrint {
            
            //constructor
            public function __construct($newColor, $newMake){
                $this->color = $newColor;
                $this->make = $newMake;
            }
            
            // setter method
            public function setColor($newColor){
                $this->color = $newColor;
            }
            
            //getter method
            public function getColor(){
                return "<br>New color is: " . $this->color . "<br>";
            }
        }
        $firstRealCar = new carBluePrint('green', 'Volvo');
        
        var_dump($firstRealCar);
        echo $firstRealCar->color;
        
        
        echo $firstRealCar->getColor();
        
        $secondRealCar = new carBluePrint('blue', 'Toyota');
        
        
        echo $secondRealCar->getColor();
        var_dump($secondRealCar);
        
        ?>
    </p>
    
<p>
    
  <?php
    class sportCarBluePrint extends carBluePrint {
        public function __construct($newColor, $newMake, $newSpoiler){
            parent::__construct($newColor, $newMake);
            $this->spoiler = $newSpoiler;
        }
        
        public function activateSpoiler(){
            return "<br><strong>Spoiler Active!</strong><br>";
        }
    }
    
    $firstSportCar = new sportCarBluePrint('magenta', 'Porsche', 'tail');
    $firstSportCar->setColor('Pink');
    var_dump($firstSportCar);
    $firstSportCar->activateSpoiler();
    
    
    ?>
    
    
</p>
    
</body>