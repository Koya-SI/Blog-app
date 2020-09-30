<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webページ</title>
</head>
<body>
    <?php

        class Human{
            public $name;
            protected $birthday;
            private $gender;

            public function __construct($name,$birthday,$gender){
                $this->name = $name;
                $this->birthday = $birthday;
                $this->gender = $gender;
            }

            public function walk(){
                echo "{$this->name}は歩きます<br>";
            }

            public function eat(){
                echo "{$this->name}は食べます";
            }
        }

            $human = new Human('koya','19920701','male');
            $human->walk();
            $human->eat();
            
    ?>
</body>
</html>