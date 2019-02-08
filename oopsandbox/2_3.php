<?php
//define a class
class User {
    //properties (attributes)
    public $name = 'brad';
    //methods (functions)
    public function sayHello(){
        return $this->name . ' sayHello ';
    }
}

// instatiate a user object from the user class
$user1 = new User();

$user1->name = 'Brad';
echo $user1->name;

echo '<br>';

echo $user1->sayHello ();

/// create user_error
$user2 = new User();
$user2->name = ' jeff ';
echo $user2->name;
echo '<br>' ;
echo $user2->sayHello();