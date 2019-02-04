<?php 
    require_once("../css/view.css");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/view.css">
</head>
<body>
<main>
    <h2>Success</h2>
    <p>Thank you! The following information has been successfully
       sent to my email and we will respond to your request shortly.</p>
    <ul>
        <li>First Name: <?php echo htmlspecialchars($first_name); ?></li>
        <li>Last Name: <?php echo htmlspecialchars($last_name); ?></li>
        <li>Email: <?php echo htmlspecialchars($email); ?></li>
        <li>Phone Number: <?php echo htmlspecialchars($phone); ?></li>
        <li>Comment: <?php echo htmlspecialchars($comment); ?></li>
    </ul>
    <div class="buttonDiv">
        <a href="index.php"><button type="button" id="goHome" >Go Back</button></a>
    </div>
</main>
</body>
</html>