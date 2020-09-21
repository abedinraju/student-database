<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php

     /*
      * Add new student form
      */
      if(isset($_POST['add'])){

          // Get value

          $name = $_POST['name'];
          $email = $_POST['email'];
          $cell = $_POST['cell'];
          $uname = $_POST['uname'];
          $age = $_POST['age'];

          if (isset($_POST['gender'])){
              $gender = $_POST['gender'];
          }
          $shift = $_POST['shift'];
         echo $location = $_POST['location'];
      }


    ?>
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Add New Student</h2>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input name="age" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label> <br>
                        <input name="gender" class="" type="radio" value="Male" id="male"><label for="male">Male</label>
                        <input name="gender" class="" type="radio" value="Female" id="female"><label for="female">Female</label>
                    </div>

                    <div class="form-group">
                        <label for="">Shift</label>
                        <select class="form-control" name="shift" id="">
                            <option value="">-Select-</option>
                            <option value="Day">Day</option>
                            <option value="Evening">Evening</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <select class="form-control" name="location" id="">
                            <option value="">-Select-</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barishal">Barisal</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Rongpur">Rongpur</option>
                            <option value="Mymansing">Mymansing</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input name="photo" class="form-control-file" type="file">
                    </div>
					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Add New Student">
					</div>
				</form>

			</div>
		</div>
	</div>



    <br>
    <br>
    <br>
    <br>




	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>