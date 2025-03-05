
<?php
class MyClass {
    private $name;
    function __construct($name) {
        $this->name = $name;
    }
    function sayHello() {
        echo "Hello, my name is $this->name.";
    }
}
?>