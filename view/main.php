<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R&T Remodeling</title>
</head>
<body>
<header>
    <nav class="navbar">
        <p class="title">R & T Remodeling</p>
    </nav>
</header>
    <main>
        <div class="services">
            <h3>Services</h3>
            <ul>
                <li class="serviceList">Air Conditioning Installation, Repair, and System Check</li>
                <li class="serviceList">Heating Installation and Repair</li>
                <li class="serviceList">Ventilation Installation, Repair, and Replacement</li>
                <li class="serviceList">Heat Pump System Check</li>
                <li class="serviceList">Gas and Furnance Replacement</li>
                <li class="serviceList">Water Heater Installation, Repair, and Replacement</li>
                <li class="serviceList">Duct Cleaning</li>
            </ul>
        </div>
        <div class=contactForm>
        <form action="." method="post" >
    <fieldset>
        <legend>Your Information</legend>
        
        <?php if (isset($error)) : ?>
        <p class='error'><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <label>First Name:</label>
        <input type="text" name="first_name" 
               value="<?php echo htmlspecialchars($first_name);?>"><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" 
               value="<?php echo htmlspecialchars($last_name);?>"><br>

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email);?>"><br>

        <label>Comment:</label>
        <textarea cols="40" rows="8" type="text" name="comment" required ><?php echo htmlspecialchars($comment);?></textarea>
    </fieldset>
    <fieldset>
        <legend>Submit</legend>
        
        <label>&nbsp;</label>
        <input type="submit" name="action" value="Submit"/>
        <input type="submit" name="action" value="Reset" /><br>
    </fieldset>
    </form>
        </div>
    </main>
</body>
</html>