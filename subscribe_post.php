<?php
include 'connection.php';
include 'common.php';

// create vars to receive the input;

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$website = $_POST['website'];
$tel = $_POST['tel'];
$companyName = $_POST['companyName'];
$street_nr = $_POST['street_nr'];
$code_city = $_POST['code_city'];
$bio = $_POST['bio'];

$query = "INSERT INTO `teachers` (`firstName`, `lastName`, `email`, `website`, `tel`, `companyName`, `street_nr`, `code_city`, `bio`) VALUES
('firstName', 'lastName', 'email', 'website', 'tel', 'companyName', 'street_nr', 'code_city', 'bio');";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanvraag registratie SyntraPXL docenten</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
            <div class="row">
                <div class="col">
                    <img src="assets/logo.svg" class="img-fluid mt-5 mb-3" width="150px">
                    <h1>Bedankt<span class="docent"> Docent</span></h1>
                    <div class="thanakyou">
                    We hebben uw gegevens goed ontvangen, zodra u bent goedgekeurd zal u zichtbaar zijn op onze website...Het SyntraPXL team!
                    </div>
                
                </div>
            </div>
        </div>
</body>
</html>