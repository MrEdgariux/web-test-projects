<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generuoju</title>
</head>
<body>
    <?php
    $servername = "116.202.134.139";
    $username = "saugykla_dataDa";
    $password = "(;[D,%n$5Skx";
    $dbname = "saugykla_testWebDB";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $counter = 0;
    $raides = 0;
    
    for($i = 'AAA'; $i < 'ZZZ'; $i++){
        for($ii = 0; $ii < 1000; $ii++){
            $daaa = str_pad($ii, 3, '0', STR_PAD_LEFT);
            $daab = $i." ". $daaa;
            $sql = "INSERT INTO license_plates (plate_number)
            VALUES ('$daab')";
            
            if ($conn->query($sql) === TRUE) {} else {
              echo "Error: " . $sql . "<br>" . $conn->error;
              break;
            }
            $counter++;
        }
        $raides++;
    }
    echo "<hr>Iš viso buvo atlikta: " .$counter. " skaičiavimai, iš kurių: " . $raides. " yra skirtingu raidžiu.";
    ?>
</body>
</html>