<?php 

//Output
echo "Hello World! <br>";

//Variable & data type;
$number = 20;
$string = "Buncis";
$boolean = true;

echo "$number <br>";
echo "$string <br>";
echo "$boolean <br>";

//Arithmetic Operation
$result = 9 + 2;
echo "Add: $result <br>";
$result = 9 - 2;
echo "Minus: $result <br>";
$result = 9 * 2;
echo "Mutiply: $result <br>";
$result = 9 / 2;
echo "Divide: $result <br>";
$result = 9 % 2;
echo "Modulus: $result <br>";
$result = 9 ** 2;
echo "Exponent: $result <br>";

//assignment
$result += 3;
echo "Assignment = $result <br>";

//Selection (IF)
$age = 18;

if($age > 18){
    echo "Sudah masuk ke Universitas <br>";
}else if($age == 18){
    echo "Sudah bisa daftar Universitas <br>";
}else{
    echo "Tidak bisa masuk universitas <br>";
}

//Logical operator
$age = 20;
$SIM = true;

//AND
//Operator yang mengembalikan true jika kedua kondisi benar
if($age > 18 AND $SIM == true){
    echo "Kita lolos razia <br>";
}else{
    echo "Kena tilang <br>";
}

//OR
//Operator yang mengembalikan true jika salah satu atau kedua kondisinya true
if($age > 18 OR $SIM == true){
    echo "Kita lolos razia <br>";
}else{
    echo "Kena tilang <br>";
}

//XOR
//Operator yang mengembalikan true jika dan hanya jika salah satu kondisinya true
if($age > 18 XOR $SIM == true){
    echo "Kita lolos razia <br>";
}else{
    echo "Kena tilang <br>";
}

$input = 6;
printMenu();
switch($input){
    case 1:
        echo "You have chosen the first option <br>";
        break;
    case 2:
        echo "You have chosen the second option <br>";
        break;
    case 3:
        echo "You have chosen the third option <br>";
        break;
    case 4:
        echo "You have chosen the fourth option <br>";
        break;
    default:
        echo "Error, please give the relevant input <br>";
        break;
}

//repetition
//while
// $i = 0;
// while($i < 10){
//     echo "$i <br>";
//     $i += 1;
// }
//for
// for($i = 0 ; $i < 10; $i++){
//     echo "$i <br>";
// }

//do-while

// $i = 0;
// do{
//     $i += 1;
//     echo "$i <br>";
// }while($i < 10);

//array
$numbers = [1,2,3,4,5];
$numbers[1] = 6;

foreach($numbers as $number){
    echo "$number <br>";
}

$mahasiswa = array(
    'nama' => 'Rey',
    'NIM' => 2702258812,
    'Jurusan' => "CS"
);

foreach($mahasiswa as $mhs => $mhs_data){
    echo "$mhs => $mhs_data <br>";
}

$num1 = 10;
$num2 = 11;
$result = addition($num1, $num2);

echo "$result <br>";


function addition($a, $b){
    return $a + $b;
}

function printMenu(){
    echo "1. Add <br>";
    echo "2. Create <br>";
    echo "3. Update <br>";
    echo "4. Delete <br>";
}

$date = date("Y/M/D");
echo "$date <br>";

$string = "efionfiuanfekjesbjfkjKEBFJJBjsfnsdfnksfdnkjsnfksdnfjknk";
echo strlen($string);

$random = rand(1, 6);
echo "<br> $random <br>";

$string = strtoupper($string);
echo "$string <br>";

$string = strtolower($string);
echo "$string <br>";

$username = "andy231";
if(isset($username)){
    echo "$username <br>";
}
if(empty($username)){
    echo "This is null <br>";
}
?>