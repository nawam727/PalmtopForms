<?php

$deviceId = $_POST['did'] ?? '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect billing details
    $billingFirstName = $_POST["First_Name"];
    $billingSecondName = $_POST["Second_Name"];
    $billingCompanyName = $_POST["Company_Name"];
    $billingProvince = $_POST["Province"];
    $billingStreetAddress = $_POST["Street_Address"];
    $billingSApartment = $_POST["SApartment"];
    $billingTown = $_POST["Town_City"];
    $billingPostalCode = $_POST["Postal_Code"];
    $billingPhone = $_POST["phone"];
    $billingEmail = $_POST["email"];
    

    // Connect to your database (replace the placeholders)
    include 'config.php';


    // Check if "Ship to a different address" is checked
    if (isset($_POST["showAdditional"]) && $_POST["showAdditional"] == "1") {
        // Collect shipping details
        $shippingFirstName = $_POST["sfname"];
        $shippingSecondName = $_POST["ssname"];
        $shippingProvince = $_POST["Province"];
        $shippingStreetAddress = $_POST["Street_Address"];
        $shippingApartment = $_POST["Apartment"];
        $shippingTown = $_POST["Town_City"];
        $shippingPostalCode = $_POST["Postal_Code"];
        $shippingPhone = $_POST["phone"];
        $shippingEmail = $_POST["email"];

        // Insert billing details into billing table
        $billingQuery = "INSERT INTO billing_table (FirstName, SecondName, CompanyName, Province, StreetAddress, Apartment, Town, PostalCode, Phone, Email, DID) VALUES ('$billingFirstName', '$billingSecondName', '$billingCompanyName', '$billingProvince', '$billingStreetAddress', '$billingSApartment', '$billingTown', '$billingPostalCode', '$billingPhone', '$billingEmail', '$deviceId')";
        $conn->query($billingQuery);

        // Insert shipping details into shipping table
        $shippingQuery = "INSERT INTO shipping_table (FirstName, SecondName, Province, StreetAddress, Apartment, Town, PostalCode, Phone, Email,DID) VALUES ('$shippingFirstName', '$shippingSecondName', '$shippingProvince', '$shippingStreetAddress', '$shippingApartment', '$shippingTown', '$shippingPostalCode', '$shippingPhone', '$shippingEmail', '$deviceId')";
        $conn->query($shippingQuery);
    } else {
        // Insert billing details into billing table only
        $billingQuery = "INSERT INTO billing_table (FirstName, SecondName, CompanyName, Province, StreetAddress, Apartment, Town, PostalCode, Phone, Email, DID) VALUES ('$billingFirstName', '$billingSecondName', '$billingCompanyName', '$billingProvince', '$billingStreetAddress', '$billingSApartment', '$billingTown', '$billingPostalCode', '$billingPhone', '$billingEmail', '$deviceId')";
        $conn->query($billingQuery);
    }

    // Close the database connection
    $conn->close();
}
?>
