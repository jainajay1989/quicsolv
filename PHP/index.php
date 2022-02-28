<?php
// $text = "Hello worlds";
// echo $text; //Hello worlds
// var_dump($text);

// $text = 10;
// echo '<br/>'.$text; //10

// define('NAME', 'Ajay', true);
// echo '<br>'.NAME; //Ajay

// if(!defined('NAME'))
// define('NAME', 'Ajay 1');
// echo '<br>'.NAME; // Ajay 1

// var_dump(defined('NAME'));
// var_dump($text);
// echo '<br/>Insensative: '.name.'<br/>';

// define('cars',[
//     'Ajay','BMW','Mercedes'
// ]);
// print_r(cars);

// $text = [1,2,3,4,5];
// print_r($text);
// var_dump($text);

// $text1 = "I am good";
// echo "<br/>$text1";

// $x = 10;
// $y = '10';
// // echo $x += $y;$x + $y;
// if($x === $y) {

//     echo "<br/>$x.Equal";
// } else {
//     echo "<br/>Not equal";
// }

declare(strict_types=1);

function sum($x, $y) {
    // $x = 10;
    // $y = 20;
    $z = $x+$y;
    return;
    return $z;
    echo "I am best";
}

echo sum(10, 20);
// sum();
// sum();

$array = array('Ajay' => ['Surbhi','Siddhansh','Ayansh'], 'Kalpesh' => ['Madhu','Yug','Vidhi']);
print_r($array);
echo "<pre>";
print_r($array);

$array = array('Ajay','Abhishek','Anand');
echo var_dump($array);
echo var_dump(implode(', ',$array));

$txt = "Hello Everyone, I am okay";
echo $txt;
echo "<pre>";

print_r(explode(',', $txt));

$array = array('Ajay','Abhishek','Anand');
if(in_array('Ajay1', $array)) {
    echo 'Present';
} else {
    echo 'Absent';
}

echo '<br>'.count($array);

$string = 'Hello Everyone';
echo strtolower($string);
echo "<br>".str_replace('Hello', 'Bad', $string);
?>
<form method="POST" action="submit.php" enctype="multipart/form-data">
<input type="file" name="files" />
<input type="text" name="dob" />
<button type="submit">Submit</button>
</form>