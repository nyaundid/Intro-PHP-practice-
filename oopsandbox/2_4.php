<?php
class User {
    public $name;
    public $age;
//runs when object is created
public function __construct($name, $age){
echo 'class' . __CLASS__ . ' instantiated<br>' ;
$this->name = $name;
$this->age = $age;

}

    public function sayHello(){
        return $this->name . ' says hello';
    }
//called when no other references to a certain odbc_fetch_object
//used for clean up etc

public function __destruct(){
    echo ' distructor ran...';
}


}

$user1 = new User('brad', 36);
echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayHello();


echo '<br>';

$user2 = new User('sarah', 26);
echo $user2->name . ' is ' . $user2->age . 'years old';
echo '<br>';
echo $user2->sayHello();
