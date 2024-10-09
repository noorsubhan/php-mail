<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpmail</title>
</head>
<body>


  <form action="./mailprocess.php" method="post">

<h1>Send Email</h1>

<label >Recipient Email</label>
<input type="email" name="email" placeholder="Enter the recipient email" required><br><br>

<label>Subject</label>
<input type="text"  name="subject" placeholder="Enter your subject" required><br><br>

<label>Message</label>
<textarea  name="message" placeholder="Enter your message" required></textarea><br><br>

<button type="submit">Send</button>
</form>
</body>
</html>