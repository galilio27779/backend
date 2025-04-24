<?php

$employees = [
["name" => "Ahmed", "salary" => 5000, "age" => 30, "insurance" => "Yes"],
["name" => "Sara", "salary" => 6000, "age" => 28, "insurance" => "No"],
["name" => "Ali", "salary" => 4500, "age" => 35, "insurance" => "Yes"]
];


  
/*$count=count($employees);
for($i=0;$i<$count;$i++){
print_r($employees[$i]) ;
echo "<br>";
};*/

/*foreach($employees as $emp1){
    foreach($emp1 as $key=>$value){
    echo"$key : $value " ;
    
    echo"<br>";
    }
    echo"<hr>";
   
}


echo "<hr>";
$capitals=array("USA"=>"Washinto",
"japan"=>"tokyo",
"India"=>"new delhi");
foreach($capitals as $key=>$value){
    echo"{$key} {$value} <br>";
}

*/

?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="discription" content="Top Picks For You">
    <meta name="viewport" content="">
    div {
    background-color: aquamarine;
    background-position: 0cqh;
    text-align: center;
    
}
    </head>
<body>
<div>
<?php  
foreach($employees as $emp1){ ?>
    <ul type="circle">
        <h2> <b> <?php foreach($emp1 as $key=>$value){  ?> </b></h2> 
       
    <h2><u> <li><?php echo"$key : $value " ;?> </u></h2></li></ul>
   <?php 
    
    }
    echo"<hr>";
   
} ?>


</div>

</body>   

</html>