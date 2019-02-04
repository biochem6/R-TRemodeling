<?php include 'header.php'; ?>
<main>
    <h2>Success</h2>
    <p>The following information has been successfully
       sent to my email and I will respond to you shortly.</p>
    <ul>
        <li>First Name: <?php echo htmlspecialchars($first_name); ?></li>
        <li>Last Name: <?php echo htmlspecialchars($last_name); ?></li>
        <li>Email: <?php echo htmlspecialchars($email); ?></li>
        <li>Phone Number: <?php echo htmlspecialchars($phone); ?></li>
        <li>Comment: <?php echo htmlspecialchars($comment); ?></li>
    </ul>
</main>
<?php include 'footer.php'; ?>