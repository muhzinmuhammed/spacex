<?php
require_once './config.php'; // Your Firebase configuration file
require_once './firebaseRDB.php'; // FirebaseRDB class file

// Initialize the FirebaseRDB class
$db = new firebaseRDB($databaseURL);

// Function to check if a time slot is already booked
function isSlotAvailable($db, $propertyKey, $checkInDateTime, $checkOutDateTime) {
    // Fetch all bookings for the property
    $bookings = $db->retrieve('bookings');
    $bookings = json_decode($bookings, true);

    if (!$bookings) {
        return true; // No bookings found, slot is available
    }

    foreach ($bookings as $booking) {
        // Convert stored booking dates to DateTime
        $existingCheckIn = new DateTime($booking['checkInDate'] . ' ' . $booking['checkInTime']);
        $existingCheckOut = new DateTime($booking['checkOutDate'] . ' ' . $booking['checkOutTime']);

        // Check for overlap
        if ($checkInDateTime < $existingCheckOut && $checkOutDateTime > $existingCheckIn) {
            return false; // Slot is not available
        }
    }

    return true; // Slot is available
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $comments = isset($_POST['comments']) ? $_POST['comments'] : '';
    $checkInDate = isset($_POST['check-in-date']) ? $_POST['check-in-date'] : '';
    $checkInTime = isset($_POST['check-in-time']) ? $_POST['check-in-time'] : '';
    $checkOutDate = isset($_POST['check-out-date']) ? $_POST['check-out-date'] : '';
    $checkOutTime = isset($_POST['check-out-time']) ? $_POST['check-out-time'] : '';
    $grandTotal = isset($_POST['grand-total']) ? $_POST['grand-total'] : '';

    // Validate input
    if (!$name || !$phone) {
        echo 'Name and Phone Number are required!';
        exit;
    }

    // Convert input to DateTime
    $checkInDateTime = new DateTime($checkInDate . ' ' . $checkInTime);
    $checkOutDateTime = new DateTime($checkOutDate . ' ' . $checkOutTime);

    // Check if slot is available
    $propertyKey = 'some_property_key'; // Replace with actual property key
    if (!isSlotAvailable($db, $propertyKey, $checkInDateTime, $checkOutDateTime)) {
        echo '<script>alert("The selected time slot is already booked. Please choose a different time."); window.location.href = window.history.back();</script>';
        exit;
    }

    // Prepare data to be saved
    $bookingData = [
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'address' => $address,
        'comments' => $comments,
        'checkInDate' => $checkInDate,
        'checkInTime' => $checkInTime,
        'checkOutDate' => $checkOutDate,
        'checkOutTime' => $checkOutTime,
        'grandTotal' => $grandTotal,
        'timestamp' => date('Y-m-d H:i:s')
    ];

    try {
        // Save data to Firebase
        $path = 'bookings/' . uniqid(); // Using a unique ID for each booking
        $db->insert('bookings', $bookingData);

        echo 'Booking details saved successfully!';
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo 'Invalid request method!';
}
?>
