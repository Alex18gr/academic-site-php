<?php

function deleteStudentGradeById($studentId) {
    try {
        require 'common/config.php';
        $connection = new PDO($db_dsn, $db_username, $db_password, $db_options);
        $sql = "DELETE FROM students_grades WHERE (student_id = :studentId);";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':studentId', $studentId);
        $execution = $statement->execute();
        if ($execution) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $error) {
        return false;
    }
}

function getStudentGradeById($studentId) {
    try {
        require 'common/config.php';
        $connection = new PDO($db_dsn, $db_username, $db_password, $db_options);

        $sql = "SELECT * FROM students_grades WHERE student_id = :studentId LIMIT 1;";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':studentId', $studentId);
        $execution = $statement->execute();
        $student = array();
        if ($execution && $statement->rowCount() == 1) {
            $result = $statement->fetch();
            $student['student_id'] = $result['student_id'];
            $student['student_first_name'] = $result['student_first_name'];
            $student['student_last_name'] = $result['student_last_name'];
            $student['grade'] = $result['grade'];
        } else {
            return false;
        }
        // var_dump($student);
        return $student;
    } catch (PDOException $error) {
        return false;
    }

}

function newStudentGrade($studentId, $studentFirstName, $studentLastName, $studentGrade) {
    try {
        require 'common/config.php';
        $connection = new PDO($db_dsn, $db_username, $db_password, $db_options);
        $sql = "INSERT INTO students_grades (student_id, student_first_name, student_last_name, grade) VALUES (:studentId, :studentFirstName, :studentLastName, :grade);";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':studentId', $studentId);
        $statement->bindParam(':studentFirstName', $studentFirstName);
        $statement->bindParam(':studentLastName', $studentLastName);
        $statement->bindParam(':grade', $studentGrade);
        $execution = $statement->execute();
        if ($execution) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $error) {
        return false;
    }
}

function updateStudentGrade($studentId, $studentFirstName, $studentLastName, $studentGrade) {
    try {
        require 'common/config.php';
        $connection = new PDO($db_dsn, $db_username, $db_password, $db_options);
        $sql = "UPDATE students_grades SET student_id = :studentId, student_first_name = :studentFirstName, student_last_name = :studentLastName, grade = :grade WHERE (student_id = :studentId);";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':studentId', $studentId);
        $statement->bindParam(':studentFirstName', $studentFirstName);
        $statement->bindParam(':studentLastName', $studentLastName);
        $statement->bindParam(':grade', $studentGrade);
        $execution = $statement->execute();
        if ($execution) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $error) {
        return false;
    }
}


