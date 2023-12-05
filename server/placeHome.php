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

        // Customer data
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

        // Device data
        $manuf = isset($_POST['Manuf']) ? $_POST['Manuf'] : '';
        $price = isset($_POST['Price']) ? $_POST['Price'] : '';
        $model = isset($_POST['Model']) ? $_POST['Model'] : '';
        $modelno = isset($_POST['ModelNo']) ? $_POST['ModelNo'] : '';
        $proce = isset($_POST['Processor']) ? $_POST['Processor'] : '';
        $gen = isset($_POST['Generation']) ? $_POST['Generation'] : '';
        $ram = isset($_POST['Ram']) ? $_POST['Ram'] : '';

        // Additional shipping data
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
        $info = $showAdditional ? $_POST['info'] : "";

        // Insert data into the cusdetails table
        $sql_cusdetails = "INSERT INTO cusdetails (Fname, Sname, Purpose, Province, StrAdd1, StrAdd2, Town, PosCode, Phone, Email)
                            VALUES ('$fname', '$sname', '$purpose', '$province', '$stradd1', '$stradd2', '$town', '$poscode', '$phone', '$email')";

        // Execute the cusdetails query
        if ($conn->query($sql_cusdetails) === TRUE) {
            $successMessage = "Record inserted successfully";

            // Insert data into the shipping table if checkbox is checked
            if ($showAdditional) {
                $sql_shipping = "INSERT INTO shipping (Fname, Sname, Province, StrAdd1, StrAdd2, Town, PosCode, Phone, Email, Info)
                                VALUES ('$sfname', '$ssname', '$sprovince', '$ssaddress', '$ssapartment', '$stown', '$spostal', '$sphone', '$semail', '$info')";

                // Execute the shipping query
                if ($conn->query($sql_shipping) !== TRUE) {
                    $errorMessage = "Error inserting shipping data: " . $conn->error;
                }
            }

            // Insert data into the devices table
            $sql_devices = "INSERT INTO devices (Manuf, Price, Model, ModelNo, Processor, Generation, Ram)
                            VALUES ('$manuf', '$price', '$model', '$modelno', '$proce', '$gen', '$ram')";

            // Execute the devices query
            if ($conn->query($sql_devices) !== TRUE) {
                $errorMessage = "Error inserting device data: " . $conn->error;
            }
        } else {
            $errorMessage = "Error inserting cusdetails data: " . $conn->error;
        }

        $conn->close();

        // Redirect back to the HTML file with success or error message as URL parameters
        if (isset($successMessage)) {
            header("Location: ../PlaceUrOr HOME.html?success=" . urlencode($successMessage));
        } elseif (isset($errorMessage)) {
            header("Location: ../PlaceUrOr HOME.html?error=" . urlencode($errorMessage));
        }

        ?>

    </body>
</html>
