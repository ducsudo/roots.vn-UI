<?php
    class Art {

        public $age;
        public $name = "";
        public $description = "";

        public function __construct(
            string $name, 
            string $description,
            int $age = 0
        ) {
            $this->age = $age;
            $this->name = $name;
            $this->description = $description;
        }

        public function getAge(): int {
            return $this->age;
        }

        public function getName(): string {
            return $this->name;
        }

    }


    class Actor {

        public $age;
        public $description = 'Young people';
        public function __construct( 
            string $description,
            int $age = 29, 
        ) {
            $this->description = $description;
            $this->age = $age;
        }

        public function show() {
            $art1 = new Art("actor1", $this->description);
            echo "hi::: ";
            print_r($art1->getAge());
        }
    }

    $act = new Actor( "Show");
    $act->show();

?>