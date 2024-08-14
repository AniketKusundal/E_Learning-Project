<?php // Enable error reporting
error_reporting(E_ALL); ini_set('display_errors', 1);
// Start session
if (!isset($_SESSION)) {session_start();}
define ("TITLE", 'Add Course'); $msg = '';
// Include necessary files
include("./Adminheader.php"); include("../dbConnection.php");
// Check if admin is logged in
if (!isset($_SESSION['is_admin_login'])) {
    // Redirect if not logged in
    echo "<script> location.href='./index.php'; </script>";exit;}
// Check if form is submitted
if (isset($_POST['courseSubmitBtn'])) {
    // Check for empty fields
    if (empty($_POST['course_name']) || empty($_POST['course_desc']) || empty($_POST['course_author']) || empty($_POST['course_duration']) || empty($_POST['course_price']) || empty($_POST['course_original_price'])) {
        // Display error message if fields are empty
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';} else {
        // Get form data
        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_author = $_POST['course_author'];
        $course_duration = $_POST['course_duration'];
        $course_price = $_POST['course_price'];
        $course_original_price = $_POST['course_original_price'];
        $course_image = $_FILES['course_img']['name'];
        $course_image_temp = $_FILES['course_img']['tmp_name'];
        $img_folder = '../image/courseimg/' . $course_image;
        // Move uploaded file to destination
        move_uploaded_file($course_image_temp, $img_folder);
        // Insert data into database
        $sql = "INSERT INTO course (course_name, course_desc, course_author, course_img, course_duration, course_price, course_original_price) VALUES ('$course_name', '$course_desc','$course_author', '$img_folder', '$course_duration', '$course_price', '$course_original_price')";
        if ($conn->query($sql) === TRUE) {
            // Display success message
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Course Added Successfully </div>';} 
            else {
            // Display error message
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add Course </div>';}}}
// Output message
echo $msg;
// Close database connection
$conn->close(); ?>
 <div class="container">
   <div class="col-sm-6 mt-5  mx-3 jumbotron">
     <h3 class="text-center">Add New Course</h3>
     <form action="" method="POST" enctype="multipart/form-data">
       <div class="form-group">
         <label for="course_name">Course Name</label>
         <input type="text" class="form-control" id="course_name" name="course_name"></div>
        <div class="form-group">
          <label for="course_desc">Course Description</label>
          <textarea class="form-control" id="course_desc" name="course_desc" row=2></textarea></div>
        <div class="form-group">
          <label for="course_author">Author</label>
          <input type="text" class="form-control" id="course_author" name="course_author"></div>
        <div class="form-group">
          <label for="course_duration">Course Duration</label>
          <input type="text" class="form-control" id="course_duration" name="course_duration"></div>
        <div class="form-group">
          <label for="course_original_price">Course Original Price</label>
          <input type="text" class="form-control" id="course_original_price" name="course_original_price" onkeypress="isInputNumber(event)"></div>
        <div class="form-group">
          <label for="course_price">Course Selling Price</label>
          <input type="text" class="form-control" id="course_price" name="course_price" onkeypress="isInputNumber(event)"></div>
    <div class="form-group">
      <label for="course_img">Course Image</label>
      <input type="file" class="form-control-file" id="course_img" name="course_img"></div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
      <a href="courses.php" class="btn btn-secondary">Close</a></div>
    <?php if(isset($msg)) {echo $msg; } ?></form></div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();}}
   </script>
</div>  <!-- div Row close from header --></div>  <!-- div Conatiner-fluid close from header --></div><?php include("./Adminfooter.php");?>