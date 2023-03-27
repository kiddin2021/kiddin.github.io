<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
</head>

<body>
    <h2>Contact Us</h2>
    <form method="post" action="send_email.php">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>
