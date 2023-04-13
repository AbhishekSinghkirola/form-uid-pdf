<?php
require_once('db-config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Form</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= SITE_PATH ?>style.css">

</head>

<body>

    <main id="form-wrapper">
        <form id="form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h1>Contact Form</h1>
            <div>
                <label for="name" class="label"> Name</label>
                <input type="text" id="name" placeholder="Enter Your Name" class="input mt-15px" name="full_name" autofocus required>
                <span class="field-error name_error">Plese Fill the name</span>
            </div>
            <div>
                <label for="mobile" class="label">Phone Number</label>
                <input type="number" id="mobile" placeholder="Enter Your Mobile Number" class="input mt-15px" name="mobile" required>
                <span class="field-error mobile_error">Plese Fill the Mobile Number</span>
            </div>
            <div>
                <label for="city" class="label">City</label>
                <input type="text" id="city" placeholder="Enter Your City" class="input mt-15px" name="city" required>
                <span class="field-error city_error">Plese Fill the City</span>
            </div>
            <div>
                <input type="submit" name="submit" value="Submit" class="btn btn-pink mt-15px">
            </div>
        </form>
    </main>

    <script src="<?= SITE_PATH ?>script.js"></script>
</body>

</html>