<?php
    echo "PHP suck\n";
    $fuck = "Why do we need to learn this shit language!\n";
    echo $fuck;

    class User {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age =$age;
        }

        public function printAttributes() {
            echo "$this->name $this->age";
        }
    }

    $testUser = new User("John", 30);
    $testUser->printAttributes();
?>