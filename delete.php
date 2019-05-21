<?php session_start();

if (!isset($_SESSION['agent']) || ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']))) {
    header('Location: not-authorized.php');
}

if (isset($_POST['student_id_delete'])) {
    $studentId = $_POST['student_id_delete'];
    require_once 'service/studentGradesService.php';
    deleteStudentGradeById($studentId);
    header('Location: edit-student-grades.php');
}
