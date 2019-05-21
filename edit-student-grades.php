<?php session_start();

if (!isset($_SESSION['agent']) || ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']))) {
    header('Location: not-authorized.php');
}

try {
  require "common/config.php";

  $connection = new PDO($db_dsn, $db_username, $db_password, $db_options);

  $sql = "SELECT * FROM students_grades;";
  $statement = $connection->prepare($sql);
  $statement->execute();
  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}

?>

<?php
$title = 'My Academic Page - Student Grades';
include(realpath(__DIR__).'\templates\header.php'); 
?>
    <!-- Begin page content -->
    <main role="main" class="container" style="margin-top: 15px;">
      <h1>Student grades management</h1>
      <hr>
      <div class="container">
      <?php if($result && $statement->rowCount() > 0) {
        ?>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Student ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Grade</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) 
		        { ?>
          <tr>
            <td><?php echo $row["student_id"]; ?></th>
            <td><?php echo $row["student_first_name"]; ?></td>
            <td><?php echo $row["student_last_name"]; ?></td>
            <td><?php echo $row["grade"]; ?></td>
            <td>
                <form action="edit_grade.php" method="post">
                    <input type="hidden" value="<?php echo $row["student_id"]; ?>" name="student_id">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                <form action="delete.php" id="delete_form_<?php echo $row["student_id"]; ?>"
                method="post">
                    <input type="hidden" id="student_id" name="student_id_delete"
                           value="<?php echo $row["student_id"]; ?>">
                    <button type="button" onclick="submitDeleteForm('delete_form_' +
                                '<?php echo $row["student_id"]; ?>',
                    '<?php echo $row["student_first_name"]; ?>',
                    '<?php echo $row["student_last_name"]; ?>'
                            )"
                    class="btn btn-danger">X</button></form></td>
      </tr>
      <?php } ?>
        </tbody>
      </table>
      <?php }?>
      </div>
        <hr>
        <div class="col">
            <div class="row">
                <a href="new_grade.php" class="btn btn-success">New Grade</a>
            </div>
        </div>
    </main>
<script>
    function submitDeleteForm(studentId, studentName, studentLastName) {
        console.log('Trying to submit form: ' + studentId);
        const result = confirm("Do you want to delete the mark of the student "
            + studentName + " " + studentLastName + "?");
        if (result) {
            //Logic to delete the item
            document.getElementById(studentId).submit();
        }
    }
</script>
    <?php include(realpath(__DIR__).'\templates\footer.php'); ?>