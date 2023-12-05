<!DOCTYPE html>
<html>
<body>

<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "palmtop";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$fname = $_POST['Fname'];
$sname = $_POST['Sname'];
$purpose = $_POST['Purpose'];
$province = $_POST['Province'];
$stradd1 = $_POST['StrAdd1'];
$stradd2 = $_POST['StrAdd2'];
$town = $_POST['Town'];
$poscode = $_POST['PosCode'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];

// Additional shipping dat
$showAdditional = isset($_POST['showAdditional']);
$sfname = $showAdditional ? $_POST['sfname'] : $fname;
$ssname = $showAdditional ? $_POST['ssname'] : $sname;
$sprovince = $showAdditional ? $_POST['sprovince'] : $province;
$ssaddress = $showAdditional ? $_POST['ssaddress'] : $stradd1;
$ssapartment = $showAdditional ? $_POST['ssapartment'] : $_POST['StrAdd2'];
$stown = $showAdditional ? $_POST['stown'] : $town;
$spostal = $showAdditional ? $_POST['spostal'] : $poscode;
$sphone = $showAdditional ? $_POST['sphone'] : $phone;
$semail = $showAdditional ? $_POST['semail'] : $email;
$info = $showAdditional ? $_POST['bio'] : "";

// Insert data into the cusdetails table
$sql_cusdetails = "INSERT INTO cusdetails (Fname, Sname, Purpose, Province, StrAdd1, StrAdd2, Town, PosCode, Phone, Email)
                    VALUES ('$fname', '$sname', '$purpose', '$province', '$stradd1', '$stradd2', '$town', '$poscode', '$phone', '$email')";

if ($conn->query($sql_cusdetails) === TRUE) {
    echo "Record inserted successfully";

    // Insert data into the shipping table if checkbox is checked
    if ($showAdditional) {
        $sql_shipping = "INSERT INTO shipping (Fname, Sname, Province, StrAdd1, StrAdd2, Town, PosCode, Phone, Email, Info)
                        VALUES ('$sfname', '$ssname', '$sprovince', '$ssaddress', '$ssapartment', '$stown', '$spostal', '$sphone', '$semail', '$info')";

        if ($conn->query($sql_shipping) !== TRUE) {
            echo "Error inserting shipping data: " . $conn->error;
        }
    }
} else {
    echo "Error inserting cusdetails data: " . $conn->error;
}

$conn->close();
?>


</body>
</html>
