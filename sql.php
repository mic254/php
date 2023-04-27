<?php

// connect to the database by creating a connection parameter
$userName = "root";
$hostName = "localhost";
$password = "";
$dbName = "students_info";
// check if connection is successful
$conn = mysqli_connect($hostName, $userName, $password, $dbName);

if ($conn) echo "connected to db successfuly";
// sql queries
// step one create atable called students
// step two create a new student using php and mysqli
$query = "INSERT INtO students(student_name, student_email, student_gender, student_age, course_id) VALUES('Micah', 'Alex', 'Male', '20', 2) ";

// execute the query 
// $results = mysqli_query($conn, $query);

// check if record is inserted sucessfully
        if (mysqli_query ($conn, $query)){
            echo "created sucessfully";
        }
        else{
            echo "entry failed";
        }
// query SELECT the students
        function queryStudents($conn) {
        $query =  "SELECT * FROM students_info";
        $results = mysqli_query($conn, $query);
        
//  var_dump($conn);
        while($student = mysqli_fetch_assoc($results)){
            echo '<pre>';
            echo $student['student_id'] . "." . $student['student_name'] . " " . $student['student_gender'];
            echo '</prev>' ;
            }
        }
        queryStudents($conn) ;    
    
// UPDATE the students 
// DELETE the students
