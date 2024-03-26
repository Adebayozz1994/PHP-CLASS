<?php
$firstname='adebayo';
echo $firstname; echo '<br>';
echo 'my <strong>firstname</strong> is '.$firstname;
echo '<br>';
$varone=[1,2,3,4,5,6,7,8,9,10];
print_r($varone);
$varone[3]='adebayo';
print_r($varone); 
echo '<br>';

$assoc_array=[
    'age' => 25,
    'firstname'=>'adebayo',
    'lastname'=>'olalekan',
    'hobbies' => 'football'
];
echo '<br>';

print_r($assoc_array);echo '<br>';

$lastname= $assoc_array['lastname']; echo '<br>';

echo 'my lastname is '.$lastname;
 echo '<br>';
$vartwo=array('adebayo','olalekan','peter');
print_r($vartwo);
echo '<br>';

array_push($varone, $vartwo);
print_r($varone[10][2]);




?>