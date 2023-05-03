<?php
$paragraph = $_GET['paragraph'];
// 'paragraph' lo prendo dal textarea name
$badword = $_GET['badword'];
// 'badword' lo prendo dall'input name
$replaced = str_replace($badword, '***', $paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badword</title>
</head>
<body>
<!-- strlen = lunghezza stringa -->
    <h1><?php echo $paragraph; ?></h1>
    <h1>This paragraph is <?php echo strlen($paragraph); ?> characters long</h1>
    <hr>
    <hr>
    <hr>
    <h1><?php  echo $replaced; ?></h1>
    <h1>This paragraph is <?php echo strlen($replaced); ?> characters long</h1>
    
</body>
</html>