<?php 

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
      <h1>My Student Grades Page<a href="admin.php" class="btn btn-secondary" style="float: right;">Edit Grades</a></h1>
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
          </tr>
      <?php } ?>
        </tbody>
      </table>
      <?php }?>
      </div>
    </main>
    <?php include(realpath(__DIR__).'\templates\footer.php'); ?>