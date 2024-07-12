<?php
$date1 = date("m.d.y");                                                
$date2 = date("Ymd");                                  
$date3 = date("H:i:s");                          
$date4 = date("Y-m-d H:i:s");  
$date5 = date("d l F Y");  
$date6 = date("L");
if($date6!=0){
    $responds="Oui";
}else{
    $responds="Non";
}
echo "<br> date 1 :".$date1;
echo "<br> date 2 :".$date2;
echo "<br> date 3 :".$date3;
echo "<br> date 4 :".$date4;
echo "<br> date 5 :".$date5;
echo "<br> date 6 : l'année est-elle bissextile ? ".$responds;

echo "<br> La date d'aujourd'hui au format Timestamp :".time();

echo "<br> La date d'aujourd'hui au format GMT :".gmdate("d/m/Y");

echo "<br>";
echo "<br> : " . print_r(getdate());

echo "<br>";
echo "<br>" . var_dump(checkdate(2,29 , 2023));
echo "<br>" . var_dump(checkdate(2, 29, 2024));

echo "<br>" . mktime(0, 0, 0, 0, 0, 0);
echo "<br>" . mktime(0, 0, 0, 11, 11, 1969);

$Date = "2023-03-27";
echo "<br> " . $Date;
echo "<br> " . date('Y-m-d', strtotime($Date. ' + 1 days'));
echo "<br> " . date('Y-m-d', strtotime($Date. ' + 1 months'));

/* COMPARER DES DATES */

/* Méthode 1 */
$Date1 = "2023-03-27";
$Date2 = "2023-04-01";
if($Date1>$Date2){
    echo "<br> ". $Date1 . "est plus récente que ". $Date2;
}else{
    echo "<br> ". $Date2 . "est plus récente que ". $Date1;
}

/* Méthode 2 */
$Date1 = "2023-03-27";
$Date2 = "2023-04-01";
if(strtotime($Date1)>strtotime($Date2)){
  echo "<br> ". $Date1 . "est plus récente que ". $Date2;
}else{
    echo "<br> ". $Date2 . "est plus récente que ". $Date1;
}

/* Méthode 3 */
$Date1 = new DateTime("2023-03-27");
$Date2  =  new DateTime("2023-04-01");
$Date1format = $Date1->format("d/m/Y");
$Date2format = $Date2->format("d/m/Y");
if($Date1 > $Date2){
	 echo "<br> La date 1 : ".$Date1format." est supérieur à la date 2 :".$Date2format;
}else{
	 echo "<br> La date 2 : ".$Date2format." est supérieur à la date 1 :".$Date2format;
}

/* difference entre 2 dates */
echo "<br> -----------------------------------------";
echo "<br> -- Difference entre 2 dates" ;
echo "<br> -----------------------------------------";

$start = date_create('2023-03-01');
echo "<br> Date début: ".$start->format("d/m/Y");
$end = date_create('2023-04-02');
echo "<br> Date de fin: ".$end->format("d/m/Y");
$nbdays = date_diff($start, $end);
echo "<br> ecart en jours: ". $nbdays->format("%d"); 
echo "<br> ecart en jours: ". $nbdays->format("%a");

echo "<br> -----------------------------------------";
echo "<br> -- Manipulation de dates" ;
echo "<br> -----------------------------------------";

$Date1 = "2023-03-27";
$Date2 = "2023-03-28";
$Date3 = date('Y-m-d', strtotime($Date1. ' + 3 days'));
if(strtotime($Date2)>strtotime($Date3)){
 
  echo "la date 2 est plus récente";
}else{
 
    echo "la date 3 est plus récente";
}


echo "<br> -----------------------------------------";
echo "<br> -- Manipulation de dates" ;
echo "<br> -----------------------------------------";

$Date1 = "2023-03-27";
$Date2 = "2023-04-27";
$start = date_create($Date1);
$end = date_create($Date2);
$diffdays = date_diff($start, $end);
$nbdays= $diffdays->format("%a");
echo "<br> La liste de toutes les dates: <br>"; 
for($i=1; $i<=$nbdays; $i++){
   
    $Date3 = date('Y-m-d', strtotime($Date1. ' + '.$i.' days'));
    $check=date('N', strtotime($Date3));
   
    if($check>=6 ){
       
        echo $Date3."<br/>";
      
    }
}

?>