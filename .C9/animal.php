<?php
    
    class Animal {
        public $cry = "bowbow!";
        
        function bow(){
            echo $this->cry . PHP_EOL;
        
        }
    }
    
    class Animal {
        public $cry = "nyanya!";
        
        function nya(){
            echo $this->cry . PHP_EOL;
         }
    }
    
    class Dog extends Animal {
        public $cry = "わんわん！";
    }
    class Cat extends Animal {
        public $cry = "にゃーにゃー！";
    }

    $animal_1 = new Dog();
    $animal_1 = new Cat();
    $animal_1->bow();
    $animal_1->nya();
    
?>