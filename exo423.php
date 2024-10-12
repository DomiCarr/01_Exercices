<?php 

$flog = fopen("./exo423/exo423.log", "w");
$input = fopen("./exo423/classes.txt", "r");

writeLog ($flog, " -- START : Log file creation -------------\n");

if ($input) {
    writeLog ($flog, " -- if -------------\n");
    while (($line = fgets($input)) !== false) {
        writeLog ($flog, " -- while -------------\n");
        // The line is exploded 
        $linedetail = explode(",", (str_replace(["\n", ""], '', $line)));

        // lecture nom du namespace 
        $namespace = $linedetail[0];
        // nom de la classe = nom du namespace avec 1er caractere en majuscule
        $classe = ucfirst($namespace);

        writeLog ($flog, "namespace: ".$namespace."\n");
        writeLog ($flog, "Classe: ".$classe."\n");

        // Creation of the file with the class name
        $output = fopen("./exo423/$namespace.php", "w");

        writeLog ($flog, "Creation fichier: ./exo423/".$namespace.".php"."\n");

        // First lines of the class file (php, namespace, class) 
        writeFile ($output, "<?php\n");
        writeFile ($output, "namespace ".$namespace.";\n");
        writeFile ($output, "class ".$classe."{\n");
       
        $i = 1;
        $t = 0;
        while($i < count($linedetail)) {
            writeLog ($flog, " i: ".$i."  count:". count($linedetail)."\n") ;
            // lecture type de l'attribut
            $typeAttribut = $linedetail[$i];
            // lecture nom de l'attribut on enlève le retour à laligne s'il y en a un
            $nomAttribut = $linedetail[$i+1];
            // on définit une variable avec 1er caractere de l'attribut en majuscules
            $nomMajAttribut = ucfirst($nomAttribut);

            $attribut[$t][0]=$typeAttribut;
            $attribut[$t][1]=$nomAttribut;
            echo ("<br> attribut t 0 :".$attribut[$t][0]);
            echo ("<br> attribut t 1 :".$attribut[$t][1]);
            echo ("<br>----------- ");
            

            writeLog ($flog, "type attribut: ".$typeAttribut."\n");
            writeLog ($flog, "nom attribut: ".$nomAttribut."\n");
            writeLog ($flog, "nom attribut avec maj: ".$nomMajAttribut."\n");
            writeLog ($flog, "tableau attribut t 0 :".$attribut[$t][0]."\n");
            writeLog ($flog, "tableau attribut t 1 :".$attribut[$t][1]."\n");
            

            // Attribute decription 
            writeFile ($output,"private ". $typeAttribut." \$".$nomAttribut."; \n");
            writeFile ($output, " \n");
            writeLog ($flog, "Ecriture ligne attribut de ".$nomAttribut." \n");

            // Attribute setter
            writeFile ($output, "public function get".$nomMajAttribut."() : ".$typeAttribut."{\n");
            writeFile ($output, "return \$this->".$nomAttribut."; \n");
            writeFile ($output, "} \n");
            writeFile ($output, " \n");
            writeLog ($flog, "Ecriture bloc get de ".$nomAttribut." \n");
        
            // Attribute getter
            writeFile ($output, ("public function set".$nomMajAttribut."(".$typeAttribut." $".$nomAttribut.") {\n"));
            writeFile ($output, "\$this->".$nomAttribut." = \$".$nomAttribut.";"." \n");
            writeFile ($output, "} \n");
            writeLog ($flog, "Ecriture bloc set de ".$nomAttribut." \n");
            writeFile ($output, " \n");
        
            $i = $i + 2;
            $t = $t +1;
        // fin du while sur la ligne a traiter
        }
        // Ecriture de la premiere ligne du constructeur
        
        writeFile ($output, "public function __construct(");
        for ($j=0; $j<$t-1;$j++) {
            writeFile ($output, $attribut[$j][0]." $".$attribut[$j][1].",");
        }
        writeFile ($output, $attribut[$j][0]." $".$attribut[$j][1].") { \n");

        // Ecriture des setters du constructeur
        for ($j=0; $j<$t;$j++) {
            writeFile ($output, "\$this->set".ucfirst($attribut[$j][1])."($".$attribut[$j][1]."); \n");
        }
        writeFile ($output, "} \n");

        writeFile ($output, "} \n");          
        writeFile ($output, "?> \n");
writeFile ($output, " \n");

// fin du while sur la lecture du fichier
}
writeLog ($flog, " -- END -------------\n");
}

fclose($input);

function writeFile ($output, $line) {
$bytes_written = fwrite($output, $line);
if($bytes_written !== false) {
return true;
} else {
return false;
}
}

function writeLog ($output, $line) {
$bytes_written = fwrite($output, date("Y-m-d H:i:s")." : ".$line);
if($bytes_written !== false) {
return true;
} else {
return false;
}
}




?>