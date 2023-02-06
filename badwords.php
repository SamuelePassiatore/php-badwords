<?php
//Word
$word = $_GET['word'];
$trimmed_word = trim($word);
//Paragraph
$paragraph = $_GET['paragraph'];
$trimmed_paragraph = trim($paragraph);
$paragraph_length = strlen($trimmed_paragraph);
//Censored
$censored_paragraph = str_replace($word, '***', $trimmed_paragraph);
$censored_paragraph_length = strlen($censored_paragraph);

?>
 
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body class="text-center p-2">
    <div>
        <h2>Paragrafo Originale</h2>
        <p><?= $paragraph ?></p>
        <p><i>Il paragrafo originale era lungo <strong><?= $paragraph_length ?></strong> caratteri</i></p>
    </div>
    <hr>
    <div>
        <h2>Paragrafo censurato</h2>
        <p><?= $censored_paragraph ?></p>
        <p><i>Il paragrafo censurato è lungo <strong><?= $censored_paragraph_length?></strong> caratteri</i></p>
    </div>
    <hr>
</body>
</html>