<?php session_start();

if (!isset($_SESSION['agent']) || ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']))) {
    header('Location: not-authorized.php');
}

require 'service/studentGradesService.php';
require 'common/validate.php';

if (isset($_POST['newGrade'])) {
    echo 'validating form...';
    $formStudentId = clean_input($_POST['student_id']);
    $formStudentFirstName = clean_input($_POST['first_name']);
    $formStudentLastName = clean_input($_POST['last_name']);
    $formGrade = clean_input($_POST['grade']);
    $errors = validate_student_grade_form($formStudentId, $formStudentFirstName,
        $formStudentLastName, $formGrade);
    if (empty($errors)) {
        $updateResult = newStudentGrade($formStudentId, $formStudentFirstName,
            $formStudentLastName, $formGrade);
        if ($updateResult) {
            echo 'success';
        } else {
            echo 'update error';
        }
    } else {
        echo 'form invalid';
    }

}

?>

<?php
$title = 'My Academic Page - Student Grades';
include(realpath(__DIR__).'\templates\header.php'); 
?>
    <!-- Begin page content -->
    <main role="main" class="container" style="margin-top: 15px;">
      <h1>Edit Grade Form</h1>
      <hr>
      <div class="container">
          <form action="" method="post">
              <div class="form-group">
                  <label for="studentId">Student Id</label>
                  <input type="text" class="form-control" name="student_id" id="studentId" required>
              </div>
              <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" name="first_name" id="firstName" required>
              </div>
              <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" name="last_name" id="lastName" required>
              </div>
              <div class="form-group">
                  <label for="grade">Grade</label>
                  <input type="number" class="form-control" name="grade" id="grade" required>
              </div>
              <button type="submit" class="btn btn-primary" name="newGrade">Confirm</button>
              <a href="edit-student-grades.php" class="btn btn-danger">Cancel</a>
          </form>
      </div>
    </main>
    <?php include(realpath(__DIR__).'\templates\footer.php'); ?>