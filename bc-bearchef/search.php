<?php
include 'includes/config.php';
include 'views/helpers_user.php';
include "views/helpers_HTML.php";

session_start();
$user_chef = 'chef';
$user_customer = 'customer';

// Retrieve user information from the session
$userID = "";

if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == $user_chef) {
    // header_USER($user_chef);
    $userID = $_SESSION['userID'];
} elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == $user_customer) {
    $userID = $_SESSION['userID'];
    // header_USER($user_customer);
}else{
//    header_HTML();
}
search($conn);
footer_HTML();

function search($conn)
{
    $query = "SELECT * FROM user_form WHERE user_type= 'chef'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $lastname = $row['lastName'];
            $idChef = $row['id'];

            echo <<<REVIEW
               <button onclick="redirectToProfile($idChef);">$name $lastname</button></p> 
            REVIEW;
        }
    } else {
        echo <<<NOREVIEW
               <p> No chef available <br>
               <button onclick="location.href = 'index.php';"">Go Back</button></p> 
            NOREVIEW;
    }

    echo <<<ENDREVIEW
      <script>
        function redirectToProfile(id) {
            window.location.href = 'view_profile.php?id=' + id;
        }
      </script>
      ENDREVIEW;

    // close connection
    $conn->close();
}
?>