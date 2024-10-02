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

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

	<!-- Boxicons CSS -->
	<link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		.gallery-property ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    padding: 0;
}

.gallery-property li {
    position: relative;
    margin: 10px;
}

.gallery-property img {
    width: 50px; /* Set the width of the image */
    height: 50px; /* Set the height of the image */
    object-fit: cover; /* Ensures the image scales correctly within the specified width and height */
    border: 2px solid #ddd;
    border-radius: 5px;
}

.gallery-property .delete-button {
    position: absolute;
    top: 5px;
    right: 5px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 2px 5px;
    border-radius: 3px;
    cursor: pointer;
}

	</style>

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

		<!-- /Header -->

		<!-- Breadcrumb -->
		<div class="breadcrumb">
			<div class="container">
				<div class="bread-crumb-head">
					<div class="breadcrumb-title">
						<h2>Add New Property</h2>
					</div>
					<div class="breadcrumb-list">
						<!-- <ul>
                                <li><a href="index.html">Home </a></li>
                                <li>Add New Property</li>
                            </ul> -->
					</div>
				</div>
				<div class="breadcrumb-border-img">
					<img src="assets/img/bg/line-bg.png" class="img-fluid" alt="Image">
				</div>
			</div>
		</div>
		<!-- Breadcrumb -->

		<!-- Content -->

		<!-- /Property Information -->
		<form action="./action_addnewproperty.php"  method="POST" >

		<div class="row" id="description" style="padding: 50px;">
			<div class="col-lg-4">
				<div class="property-info">
					<h4>Description</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's</p>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="add-property-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="review-form">
								<label>Enter Description of Property</label>
								<textarea class="form-control" rows="8" name="description" placeholder="Description"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Property Details -->
		<div class="row" id="property-details" style="padding: 50px;">

			<div class="col-lg-4">
				<div class="property-info">
					<h4>Property Details</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's</p>
				</div>
			</div>

			<div class="col-lg-8">
				<div class="add-property-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="review-form">
								<label>Property Id</label>
								<input type="text" name="propertyId"  class="form-control" placeholder="Enter Value">
							</div>
						</div>
						<div class="col-md-4">
							<div class="review-form">
								<label>Property Name</label>
								<input type="text"  name="propertyName" class="form-control" placeholder="Enter  Price">
							</div>
						</div>
						<div class="col-md-4">
							<div class="review-form">
								<label>Property Price per hour</label>
								<input type="number"  name="propertyPrice" class="form-control" placeholder="Enter  Price">
							</div>
						</div>
						<div class="col-md-4">
							<div class="review-form">
								<label>Wifi</label>
								<select class="select" name="wifi">
									<option>Available</option>
									<option>Not Available</option>
									<!-- <option>Rectangle</option> -->
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="review-form">
								<label>No of table</label>
								<input type="text" name="noOfTable"  class="form-control" placeholder="Enter Value">
							</div>
						</div>
						<div class="col-md-4">
							<div class="review-form">
								<label>No of chairs</label>
								<input type="text" name="noOfChairs" class="form-control" placeholder="Enter  Value">
							</div>
						</div>
						<div class="col-md-4">
							<div class="bathroom">
								<label>Bathroom</label>
								<select class="select" name="bathroom">
									<option>Available</option>
									<option>Not Available</option>
									<!-- <option>Rectangle</option> -->
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="review-form">
								<label>No of Floors</label>
								<input type="text"  name="noOfFloors" class="form-control" placeholder="Enter Value">
							</div>
						</div>
						<div class="col-md-4">
							<div class="review-form">
								<label>Year built</label>
								<input type="text" class="form-control" name="yearBuild" placeholder="Enter Value">
							</div>
						</div>
						<div class="col-md-4">
							<div class="review-form">
								<label>Parcking</label>
								<select class="select" name="parking">
									<!-- <option>Select </option> -->
									<option>Available</option>
									<option>Not Available</option>
								</select>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- Property Details -->

		<!-- Amenities -->

		<!-- /Property Documents -->

		<!-- Property gallery -->
		<div class="row" id="gallery" style="padding: 50px;">
			<div class="col-lg-4">
				<div class="property-info">
					<h4>Property Gallery</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's</p>
				</div>
			</div>

			<div class="col-lg-8">
				<div class="add-property-wrap">
				<div class="row">
    <div class="col-md-12">
        <div class="gallery-property">
            <ul id="gallery">
                <!-- Images will be displayed here dynamically -->
            </ul>
        </div>
    </div>
	<div class="col-md-8">
    <div class="review-form">
        <label>Photo</label>
        <div class="upload-file">
            <span>Select Photo</span>
            <input type="file" class="form-control" id="imageUpload" multiple>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="gallery-property">
        <ul id="gallery">
            <!-- Uploaded images will be displayed here -->
        </ul>
    </div>
</div>
    <div class="col-md-4">
        <div class="review-form">
            <label class="d-none d-md-block">&nbsp;</label>
            <button class="btn btn-primary btn-upload" id="uploadButton">
                <i class="bx bx-cloud-upload"></i>Upload Photos
            </button>
        </div>
    </div>
    <div class="col-md-12">
        <div class="upload-list">
            <ul>
                <li>The maximum photo size is 8 MB. Formats: jpeg, jpg, png. Put the main picture first</li>
                <li>Maximum number of files upload will be 10 files.</li>
            </ul>
            <p id="uploadStatus"><i class="bx bx-check-double"></i>Photo uploaded successfully</p>
        </div>
    </div>
</div>
				</div>
			</div>
		</div>
		<!-- /Property gallery -->

		<!-- /Floor Plan -->

		<!-- Property location -->
		<div class="row" id="location" style="padding: 50px;">
			<div class="col-lg-4">
				<div class="property-info">
					<h4>Property Address</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's</p>
				</div>
			</div>

			<div class="col-lg-8">
				<div class="add-property-wrap">
					<div class="row">
						<div class="col-md-12">
							<div class="review-form">
								<label>Property Name</label>
								<input type="text" name="propertyName" class="form-control" placeholder="Enter Address">
							</div>
						</div>
						<div class="col-md-6">
							<div class="review-form">
								<label>County / State</label>
								<select class="select" name="countyState">
									<option>Select Country</option>
									<option>UK</option>
									<option>Newyork</option>
									<option>India</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="review-form">
								<label>City</label>
								<input type="text" name="city" class="form-control" placeholder="Enter City">
							</div>
						</div>
						<div class="col-md-6">
							<div class="review-form">
								<label>Landmark</label>
								<input type="text" name="landmark" class="form-control" placeholder="Enter Landmark">
							</div>
						</div>
						<div class="col-md-6">
							<div class="review-form">
								<label>Zip Code</label>
								<input type="text" name="zipCode"   class="form-control" placeholder="Enter Zip Code">
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Property location -->

	<!-- Property location -->
	<div class="row">
		<div class="col-md-12">
			<div class="property-submit">
				<!-- <a href="javascript:void(0);" class="btn btn-lightred">Reset</a> -->
				<button type="submit" class="btn btn-primary">Add Property</button>
			</div>
		</div>
	</div>
</form>
	
	<!-- /Content -->

	<!-- Footer -->
	<footer class="footer">

	</footer>
	<!-- /Footer -->
	<!-- Modal -->
	<div class="modal fade modal-succeess" id="success" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog  modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="success-popup">
						<h4><img src="assets/img/icons/double-tick.svg" alt="img"></h4>
						<h5>Property Added Successful</h5>
						<p>Waitting for Admin Approval</p>
						<a href="seller.html" class="btn btn-primary w-100">Back to Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Search -->
	<div class="search-popup js-search-popup ">
		<a href="javascript:void(0);" class="close-button" id="search-close" aria-label="Close search">
			<i class="fa fa-close"></i>
		</a>
		<div class="popup-inner">
			<div class="inner-container">
				<form class="search-form" id="search-form" action="rent-property-grid.html">
					<h3>What Are You Looking for?</h3>
					<div class="search-form-box flex">
						<input type="text" class="search-input" placeholder="Type a  Keyword...." id="search-input"
							aria-label="Type to search" role="searchbox" autocomplete="off">
						<button type="submit" class="search-icon"><i class="bx bx-search"></i></button>
					</div>
					<h5>Popular Properties</h5>
					<ul>
						<li><a href="rent-property-grid.html">Beautiful Condo Room</a></li>
						<li><a href="rent-property-grid.html">Royal Apartment</a></li>
						<li><a href="rent-property-grid.html">Grand Villa House</a></li>
						<li><a href="rent-property-grid.html">Grand Mahaka</a></li>
						<li><a href="rent-property-grid.html">Lunaria Residence</a></li>
						<li><a href="rent-property-grid.html">Stephen Alexander Homes</a></li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	<!-- /Search -->

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

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	<script>
document.getElementById('imageUpload').addEventListener('change', function() {
    const files = this.files; // Get the selected files
    const gallery = document.getElementById('gallery');
    
    // Clear the gallery before displaying new images
    gallery.innerHTML = '';

    // Iterate over each selected file
    Array.from(files).forEach((file) => {
        // Check the file type and size
        if (!['image/jpeg', 'image/jpg', 'image/png'].includes(file.type)) {
            alert('Only JPEG, JPG, and PNG formats are allowed.');
            return;
        }

        if (file.size > 8 * 1024 * 1024) { // 8 MB limit
            alert('File size exceeds 8 MB');
            return;
        }

        // Create a FileReader to display the image
        const reader = new FileReader();
        reader.onload = function(e) {
            const li = document.createElement('li');
            li.innerHTML = `
                <img src="${e.target.result}" alt="Uploaded Image">
                <span class="delete-button"><i class="bx bx-trash"></i></span>
            `;
            gallery.appendChild(li);

            // Add click event to delete the image from the preview
            li.querySelector('.delete-button').addEventListener('click', function() {
                li.remove();
            });
        };
        reader.readAsDataURL(file); // Convert the file to a Data URL
    });
});
</script>


</body>

</html>