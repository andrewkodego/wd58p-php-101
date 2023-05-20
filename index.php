<?php
    $page_title = $_REQUEST['page_title'];
    $value2 = $_REQUEST['var2'];
?>
<!DOCTYPE html>  
<html>  
    <title><?php echo $page_title.' '.$value2 ?></title>
<body>  
<?php  
    echo "<h1>Hello, I'm WD58P</h1>";  
    echo 1 + 4;
?>  

<div>
    <h2>This is a sample php page</h2>
</div>

<button class="btn <?php echo 'btn-primary' ?> "><?php echo 6 * 3; ?></button>

<?php 
$total = 10 + 70;

if($total > 20){
    echo "<br/> $total is greater than 20";
}else{
    echo "<br/> $total is less than 20";
}

$strValue = "KodeGo";

if($strValue == "KodeGo"){
    echo "<br/>String is equal";
}else{
    echo "<br/>String not equal";
}

$value = "b";

switch($value){
    case "a":
        echo "<br/>value is A";
    break;
    case "b":
        echo "<br/>value is B";
    break;
    default:
        echo "<br/>default";
}

for($i=0; $i <=10; $i++){
    echo "<br/> $i";
}
echo "<br/>";

$students = ["Joshua","Rommel","Jerold","Xander","Meloy","Carlo","Nicole","Ralph","Lyka"];

$students_1 = ["Joshua_1","Rommel_1","Jerold_1","Xander_1","Meloy_1","Carlo_1","Nicole_1","Ralph_1","Lyka_1"];

$index = 0;
foreach($students as $item){
    echo "$item, ";
}

echo "<br/>";

foreach($students as $index=>$item){
    echo "$index - $item, ";
}

function displayStudentNames($list){
    foreach($list as $item){
        echo "$item, ";
    }
}

echo "<br/>";
displayStudentNames($students);
echo "<br/>";
displayStudentNames($students_1);
echo "<br/>";
displayStudentNames($students);
echo "<br/>";
displayStudentNames($students_1);
echo "<br/>";
displayStudentNames($students);

echo "<br/>";



echo "<br/>".addTwoNumbers(3, 4);

echo "<br/>".addTwoNumbers(330, 67);
echo "<br/>";
echo addTwoNumbers(56, 98);

echo "<br/>";
echo doMultiply(2, 4);

echo "<br/>";
echo doMultiply(4, 4);

echo "<br/>";
echo doMultiply(3, 8);


echo "<br/>";
displayNumber(11);

function displayNumber($number){
    if($number <= 20){
        echo "$number <br/>";
        displayNumber($number + 1);
    }
}

function addTwoNumbers($num1, $num2){
    return $num1 + $num2;
}

function doMultiply($multiplicant, $multiplier){
    $product = 0;
    for($ctr=0; $ctr < $multiplier; $ctr++){
        $product = addTwoNumbers($multiplicant, $product);
    }
    return $product;
}

function add_five(&$number, &$number1){
    $number += 5;
    $number1 += 10;
}

function add_five_ten($number, $number1){
    $number += 5;
    $number1 += 10;

    return [$number, $number1];
}

$newNumber = 9;
$newNumber_1 = 9;

add_five($newNumber, $newNumber_1);

$result = add_five_ten($newNumber, $newNumber_1);

echo "<h4>Pass by Reference Result </h4>";
echo $newNumber;
echo "<br/>";
echo $newNumber_1;
echo "<br/>";
echo $result[0];
echo "<br/>";
echo $result[1];



?>

<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($students as $index=>$item){           
            if($index == 3){
                continue;
            }
            ?>
            <tr>
                <td><?php echo $index ?></td>
                <td><?php echo $item ?></td>
            </tr>
        <?php } 

        $ctr = 0;
        while($ctr < count($students)){
            
            if($ctr == 4){
                $ctr++;
                continue;
            }
            
            ?>
            <tr>
                <td><?php echo $ctr ?></td>
                <td><?php echo $students[$ctr] ?></td>
            </tr>
        <?php $ctr++;
        } 
        
        $ctr = 0;
        do{?>
            <tr>
                <td><?php echo $ctr ?></td>
                <td><?php echo $students[$ctr] ?></td>
            </tr>
        <?php $ctr++;
        }while($ctr < 0);
        ?>
        </tbody>
    </table>

</div>
<script>

var studentNames = [<?php
foreach($students as $item){
    echo "'$item', ";
}
?>];

</script>

</body> 

</html>
