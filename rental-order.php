<?php
require_once './config.php'; // Your Firebase configuration file
require_once './firebaseRDB.php'; // FirebaseRDB class file

// Initialize the FirebaseRDB class
$db = new firebaseRDB($databaseURL);

// Get the key from the URL parameter
$key = isset($_GET['id']) ? $_GET['id'] : null;

if ($key) {
    try {
        // Fetch data from the 'properties' node using the key
        $response = $db->retrieve('properties/' . $key);

        // Decode the JSON response to an array
        $property = json_decode($response, true);

        // Handle the case when property is not found
        if (!$property) {
            throw new Exception("Property not found");
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
        exit;
    }
} else {
    echo 'No property key specified';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>DreamsEstate</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Loader -->
    <div class="page-loader">
        <div class="page-loader-inner">
            <img src="assets/img/icons/loader.svg" alt="Loader">
            <label><i class="fa-solid fa-circle"></i></label>
            <label><i class="fa-solid fa-circle"></i></label>
            <label><i class="fa-solid fa-circle"></i></label>
        </div>
    </div>
    <!-- /Loader -->

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <div class="container">
                <div class="bread-crumb-head">
                    <div class="breadcrumb-title">
                        <h2>Rental Booking</h2>
                    </div>
                </div>
                <div class="breadcrumb-border-img">
                    <img src="assets/img/bg/line-bg.png" alt="Line Image">
                </div>
            </div>
        </div>
        <!-- Breadcrumb -->

        <!-- Detail View Section -->
        <section class="content inner-content bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="success-div">
                            <span><i class="bx bx-check-circle me-1"></i>
                                <?php echo htmlspecialchars($property['propertyName'], ENT_QUOTES, 'UTF-8'); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="details-div">
                            <div class="details-div-content">
                                <h5>Details</h5>
                                <p><?php echo htmlspecialchars($property['propertyName'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <h5>Location</h5>
                                <p class="mb-0"><?php echo htmlspecialchars($property['city'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                            <div class="details-div-price">
                                <h5>Booking Amount</h5>
                                <h6>₹ <?php echo htmlspecialchars($property['propertyPrice'], ENT_QUOTES, 'UTF-8'); ?> <span>/ Hr</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form id="booking-form" action="handle_booking.php" method="POST">
                            <div class="details-time">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="check-in-out">
                                            <h5>Check-in</h5>
                                            <div class="date-time-select">
                                                <input type="date" id="check-in-date" name="check-in-date" min="2024-08-21" max="2025-02-25">
                                                <select id="check-in-time" name="check-in-time">
                                                    <option value="">Select Time</option>
                                                    <option value="10:00">10:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="12:00">12:00 PM</option>
                                                    <option value="13:00">1:00 PM</option>
                                                    <option value="14:00">2:00 PM</option>
                                                    <option value="15:00">3:00 PM</option>
                                                    <option value="16:00">4:00 PM</option>
                                                    <option value="17:00">5:00 PM</option>
                                                    <option value="18:00">6:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="check-in-out">
                                            <h5>Check-out</h5>
                                            <div class="date-time-select">
                                                <input type="date" id="check-out-date" name="check-out-date" min="2024-08-21" max="2025-02-25">
                                                <select id="check-out-time" name="check-out-time">
                                                    <option value="">Select Time</option>
                                                    <option value="10:00">10:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="12:00">12:00 PM</option>
                                                    <option value="13:00">1:00 PM</option>
                                                    <option value="14:00">2:00 PM</option>
                                                    <option value="15:00">3:00 PM</option>
                                                    <option value="16:00">4:00 PM</option>
                                                    <option value="17:00">5:00 PM</option>
                                                    <option value="18:00">6:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-details-price">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul>
                                            <li>
                                                <h5>Booking Price </h5>
                                                <h6>₹ <span id="property-price"><?php echo htmlspecialchars($property['propertyPrice'], ENT_QUOTES, 'UTF-8'); ?></span> per hour</h6>
                                            </li>
                                        </ul>
                                        <ul class="booking-details-total">
                                            <li>
                                                <h5>Grand Total</h5>
                                                <h6 id="total-amount">₹ 0</h6>
												<input type="hidden" id="grand-total" name="grand-total" value="0">

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-details-btn">
                                <a href="#" class="btn btn-lightred me-2">Previous</a>
                                <button type="button" class="btn btn-primary" id="calculate-total">Calculate Total</button>
                                <a href="rental-order-step1.html" class="btn btn-primary">Go to Details</a>
                            </div>
                            <div class="col-lg-12">
                                <div class="booking-details mb-0">
                                    <h4>Fill out this quick form</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="review-form">
                                                <label>Name<span class="manitory">*</span></label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="review-form">
                                                <label>Phone Number <span class="manitory">*</span></label>
                                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="review-form">
                                                <label>Email Address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="review-form">
                                                <label>Full Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Enter Address">
                                            </div>
                                        </div>
										<input type="hidden" name="grandTotal" >
                                        <div class="col-lg-12">
                                            <div class="review-form mb-0">
                                                <label>Special Requests / Questions / Comments</label>
                                                <textarea name="comments" rows="5" placeholder="Enter Comments"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-btn-success" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Detail View Section -->

        <!-- Footer -->
        <?php include './footer.php'; ?>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    <!-- ScrollToTop -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- /ScrollToTop -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
    <script>
        document.getElementById('calculate-total').addEventListener('click', function() {
            const propertyPrice = parseFloat(document.getElementById('property-price').textContent.replace(/[^0-9.-]+/g, ''));
            const checkInDate = new Date(document.getElementById('check-in-date').value);
            const checkInTime = document.getElementById('check-in-time').value;
            const checkOutDate = new Date(document.getElementById('check-out-date').value);
            const checkOutTime = document.getElementById('check-out-time').value;

            if (checkInDate && checkInTime && checkOutDate && checkOutTime) {
                // Set time for the dates
                const [checkInHours, checkInMinutes] = checkInTime.split(':').map(Number);
                const [checkOutHours, checkOutMinutes] = checkOutTime.split(':').map(Number);
                checkInDate.setHours(checkInHours, checkInMinutes);
                checkOutDate.setHours(checkOutHours, checkOutMinutes);

                // Calculate difference in hours
                const diffInMs = checkOutDate - checkInDate;
                const diffInHours = Math.max(0, Math.ceil(diffInMs / (1000 * 60 * 60)));

                // Calculate total amount
                const totalAmount = diffInHours * propertyPrice;

                // Update total amount display
                document.getElementById('total-amount').textContent = `₹ ${totalAmount.toFixed(2)}`;
            } else {
                // Clear total amount if any input is missing
                document.getElementById('total-amount').textContent = '₹ 0';
            }
        });
		
    </script>

</body>

</html>
