<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP intro - output</title>
</head>
<body>
    
    <?php

    $paragraph = $_POST['paragraph'];
    $censoredWord = $_POST['censored-word'];
    // str_replace is case sensitive, str_ireplace is case insensitive
    $censoredParagraph = str_ireplace($censoredWord, '***',$paragraph);

    ?>

    <h3>Paragraph:</h3>
    <p> <?php echo $paragraph ?> </p>
    <i>The paragraph above is <?php echo strlen($paragraph) ?> characthers and <?php echo str_word_count($paragraph) ?> words long.</i>

    <h3>Censored paragraph:</h3>
    <p> <?php echo $censoredParagraph ?> </p>
    <i>The paragraph above is <?php echo strlen($censoredParagraph) ?> characthers and <?php echo str_word_count($censoredParagraph) ?> words long.</i>

</body>
</html>