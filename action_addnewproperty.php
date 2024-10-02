<?php
require_once './config.php';
require_once './firebaseRDB.php';

// Start the session
session_name('MyCustomSessionName'); // Ensure session name is consistent
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    echo '<script>alert("User not logged in.");</script>';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collecting data from the form
    $description = htmlspecialchars($_POST['description']);
    $propertyId = htmlspecialchars($_POST['propertyId']);
    $propertyName = htmlspecialchars($_POST['propertyName']);
    $wifi = htmlspecialchars($_POST['wifi']);
    $noOfTable = intval($_POST['noOfTable']);
    $noOfChairs = intval($_POST['noOfChairs']);
    $bathroom = htmlspecialchars($_POST['bathroom']);
    $noOfFloors = intval($_POST['noOfFloors']);
    $propertyPrice=htmlspecialchars($_POST['propertyPrice']);
    $parking = intval($_POST['parking']);
    $countyState = htmlspecialchars($_POST['countyState']);
    $city = htmlspecialchars($_POST['city']);
    $landmark = htmlspecialchars($_POST['landmark']);
    $zipCode = htmlspecialchars($_POST['zipCode']);
    
    // Handle file uploads
    $imageUrls = [];
    if (isset($_FILES['imageUrls'])) {
        $uploadDir = 'uploads/';
        foreach ($_FILES['imageUrls']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['imageUrls']['name'][$key];
            $file_size = $_FILES['imageUrls']['size'][$key];
            $file_tmp = $_FILES['imageUrls']['tmp_name'][$key];
            $file_type = $_FILES['imageUrls']['type'][$key];
            
            if ($file_size > 8388608) { // 8MB limit
                echo '<script>alert("File size exceeds 8MB limit.");</script>';
                exit;
            }
            
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $extensions = array("jpeg", "jpg", "png");
            
            if (in_array($file_ext, $extensions) === false) {
                echo '<script>alert("Extension not allowed, please choose a JPEG or PNG file.");</script>';
                exit;
            }
            
            $new_file_name = uniqid() . "." . $file_ext;
            if (move_uploaded_file($file_tmp, $uploadDir . $new_file_name)) {
                $imageUrls[] = $uploadDir . $new_file_name;
            }
        }
    }

    try {
        // Initialize the FirebaseRDB class
        $db = new firebaseRDB($databaseURL);

        // Prepare data to be saved in Firebase
        $data = [
            'description' => $description,
            'propertyId' => $propertyId,
            'propertyName' => $propertyName,
            'wifi' => $wifi,
            'noOfTable' => $noOfTable,
            'noOfChairs' => $noOfChairs,
            'bathroom' => $bathroom,
            'noOfFloors' => $noOfFloors,
           'propertyPrice' =>$propertyPrice,
            'parking' => $parking,
            'countyState' => $countyState,
            'city' => $city,
            'landmark' => $landmark,
            'zipCode' => $zipCode,
            'imageUrls' => $imageUrls,
            'userName' => $_SESSION['user']['name'], // Add user ID to the data
            'userId' =>$_SESSION['user']['id'],
            'status' =>false
        ];

        // Save the data in Firebase under the 'properties' node
        $response = $db->insert('properties', $data);

        // Check response and provide feedback
        if ($response) {
            echo '<script>alert("Property added successfully!"); window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Failed to add property. Please try again.");</script>';
        }
    } catch (Exception $e) {
        echo '<script>alert("Error: ' . addslashes($e->getMessage()) . '");</script>';
    }
    exit;
}
?>
