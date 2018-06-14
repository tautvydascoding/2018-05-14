<?php




$name = "Bil";
echo "Howdy, my name is $name <br />";
echo "What will $name be in this line? <br />";
echo 'What will $name be in this line? <br />';
// echo 'What's wrong with this line?';

// if ($name == "bil") {
//  Hey, what's this? echo "got a match!";
// }

$colors = array('red' , 'blue' , 'green' , 'yellow');
foreach ($colors as $value) {
echo "Do you like <b>$value?\n</b>";
}
?>

<!-- <html>
<body>
<form action="welcome.php" method="post">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>
</body>
</html> -->

<?php
    class MyClass   {
          public $public = 'Public';
          protected $protected = 'Protected';
          private $private = 'Private';
          function printHello()  {
                echo $this->public;
                echo $this->protected;
                echo $this->private;
  }
}

$obj = new MyClass();
echo $obj->public;

// echo $obj->protected;
// echo $obj->private;
echo "<br />";
$obj->printHello();


function test() {
    static $a = 0;
    echo $a;
    $a++;
    echo "<br />";
}
test(); // $a == 0
test(); // $a == 1
test(); // $a == 2

echo "<br />";

function test2() {
    static $count = 0;
    $count++;
    echo $count;
          if ($count < 10) {
          test2();
          }
}


 ?>
