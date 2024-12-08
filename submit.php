<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect the submitted form data
    $fullName = htmlspecialchars($_POST['full_name']);
    $studentId = htmlspecialchars($_POST['student_id']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $contactNumber = htmlspecialchars($_POST['contact_number']);
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);
    $yearOfStudy = htmlspecialchars($_POST['year_of_study']);
    $department = htmlspecialchars($_POST['department']);
    $club = htmlspecialchars($_POST['club']);
    $role = htmlspecialchars($_POST['role']);
    $skills = htmlspecialchars($_POST['skills']);
    $reason = htmlspecialchars($_POST['reason']);
    $emergencyName = htmlspecialchars($_POST['emergency_name']);
    $relationship = htmlspecialchars($_POST['relationship']);
    $emergencyContact = htmlspecialchars($_POST['emergency_contact']);

    // Display a "Thank You" message with the submitted information
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Thank You</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin: 0;
                padding: 20px;
                background-color: #f4f4f9;
            }
            .container {
                max-width: 600px;
                margin: auto;
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #007bff;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                text-align: left;
                padding: 8px;
                border-bottom: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Thank You, $fullName!</h1>
            <p>Your registration was successful. Here are the details you provided:</p>
            <table>
                <tr><th>Full Name:</th><td>$fullName</td></tr>
                <tr><th>Student ID:</th><td>$studentId</td></tr>
                <tr><th>Date of Birth:</th><td>$dob</td></tr>
                <tr><th>Gender:</th><td>$gender</td></tr>
                <tr><th>Contact Number:</th><td>$contactNumber</td></tr>
                <tr><th>Email Address:</th><td>$email</td></tr>
                <tr><th>Course:</th><td>$course</td></tr>
                <tr><th>Year of Study:</th><td>$yearOfStudy</td></tr>
                <tr><th>Department:</th><td>$department</td></tr>
                <tr><th>Preferred Club:</th><td>$club</td></tr>
                <tr><th>Preferred Role:</th><td>$role</td></tr>
                <tr><th>Skills/Interests:</th><td>$skills</td></tr>
                <tr><th>Reason for Joining:</th><td>$reason</td></tr>
                <tr><th>Emergency Contact Name:</th><td>$emergencyName</td></tr>
                <tr><th>Relationship:</th><td>$relationship</td></tr>
                <tr><th>Emergency Contact Number:</th><td>$emergencyContact</td></tr>
            </table>
        </div>
    </body>
    </html>";
} else {
    echo "Invalid request method.";
}
?>
