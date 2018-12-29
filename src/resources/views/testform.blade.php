<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Mailer</title>
</head>
<body>
    <h1>Test Mailer</h1>
    <form action="{{ route('fgiardina.mailer.sendemail') }}" method="POST">
        <input type="text" name="to_name" placeholder="to_name" value="John Doe"><br/>
        <input type="text" name="to_email" placeholder="to_email" value="johndoe@mail.com" required>*<br/>
        <input type="text" name="to_bcc_email" placeholder="to_bcc_email" value="johndoe2@mail.com"><br/>
        <input type="text" name="subject" placeholder="subject" value="Subject Email" required>*<br/>
        <input type="text" name="header" placeholder="header" value="Header Email"><br/>
        <textarea name="body" id="" cols="30" rows="10" required><br/>
Body Email
<br/></textarea>*<br/>
        <input type="text" name="footer" placeholder="footer" value="Footer Email"><br/>
        <input type="text" name="template" placeholder="template: exmaple: basic" value="basic" required>*<br/>
        <input type="submit" class="button-blue" value="Send">
    </form>
</body>
</html>

<style scoped>
body {
    font-family:Arial, Helvetica, sans-serif;
    margin-top: 20px;
    color: black;
}
input[type=text], textarea {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
}
input[type=text]:focus {
  border: 3px solid #555;
}
.button-blue {
    margin: 8px 0;
    width: 50%;
    background-color: #3097D1;
    border-top: 10px solid #3097D1;
    border-right: 18px solid #3097D1;
    border-bottom: 10px solid #3097D1;
    border-left: 18px solid #3097D1;
    border-radius: 4px;
}
</style>