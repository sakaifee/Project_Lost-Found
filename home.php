<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
</head>

<body>
    <div class="containers-header">

        <h1>Lost and Found </h1>
        <p><i>Welcome to our Lost and Found Portal where you can find everything.</i></p>
        <?php
        if ($insert == true) {
            echo "<p class='submitmsg'> Thanks for submitting your Form. We are happy to help you.</p>";
        }
        ?>

    </div>
    <div class="containers">
        <form action="home.php" method="post">
            <label for="firstname"> Name: </label>
            <input type="name" name="Name" placeholder="Enter Your Name" />
            <br /><br />
            <label for="email">Email: </label>
            <input type="email" name="Email" placeholder="Enter Your Email" />
            <br /><br />
            <label for="Phone no">Ph no: </label>
            <input type="phone" name="Phone" placeholder="Enter your Phone No" />
            <br /><br />
            <textarea name="Others" id="Others" cols="30" rows="10" placeholder="Write something about the items."></textarea>
            <br />
            <a href="index.php"> <button class="btn">Search</button></a> 
            <button class="btn">Reset</button>

        </form>
    </div>

</body>

</html>