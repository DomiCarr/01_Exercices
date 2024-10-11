<html>

<head>
    <title>php: Les fichiers</title>
</head>

<body>
    <?php 
$input = fopen("./files/input.txt", "r");
$output = fopen("./files/output.txt", "w");

if ($input) {
    while (($line = fgets($input)) !== false) {
        $bytes_written = fwrite($output, $line);
        echo $line;
        if($bytes_written !== false) {
            echo "Ecriture de " . $bytes_written . " octets réussie.";
            } else {
            echo "Erreur lors de l'écriture du fichier.";
        }
    }
} 

fclose($input);
fclose($output);

$count=0;
$output = fopen("./files/output.txt", "r");
while (!feof($output)) {
    $line = fgets($output);
    $count++;
}
echo "Le fichier contient" .$count . " lignes";


    ?>
</body>

</html>