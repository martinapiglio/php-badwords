<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP intro</title>
</head>
<body>

    <form action="output.php" method="POST">

        <h3>Paragraph</h3>
        <textarea name="paragraph" cols="30" rows="5" placeholder="Please enter your text here" required></textarea>

        <h3>Censored Word</h3>
        <input type="text" name="censored-word" placeholder="Please enter the word to be censored here" style="width: 260px" required>
        <button type="submit">Submit</button>

    </form>

</body>
</html>