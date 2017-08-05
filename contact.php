<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <header>
        <div class="container">
            <header class="content">
            </header>
            <nav>
                <ul class="navbar">
                    <li class="list-element"><a href="index.html">Accueil</a></li>
                    <li class="list-element"><a href="juridique.html">Cadre <br> Juridique</a></li>
                    <li class="list-element">
                    <a href="#">Réseaux <br> Membres</a>
                        <ul>
                        <li><a href="etusa.html">Bus ETUSA</a></li>
                        <li><a href="#">Tramway SETRAM</a></li>
                        <li><a href="ratp.html">Metro EMA</a></li>
                        <li><a href="etac.html">Télepherique ETAC</a></li>
                        <li><a href="trains.html">Trains SNTF</a></li>
                        <li><a href="#">Bateaux ENTMV</a></li>
                        <li><a href="ratp.html">RATP ELDjazair</a></li>
                        </ul>
                    </li>
                    <li class="list-element"><a href="evenements.html">Evènements</a></li>
                    <li class="list-element"><a href="projet.html">Projets</a></li>
                    <li class="list-element"><a href="contact.html">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container main-content">

        <section class="first-section">
        	<div class="container">
        		<div class="col-md-6">
        			<h4>Contactez Nous</h4>
        			<h5 style="margin-top: 20px;">ADRESSE :</h5>
					AOTU-A <br>
					Chemin de la Wilaya N°13, 
					Quatre Chemins Kouba - Alger <br>
					Tél: +213.21.28.83.28 - Fax: +213.21.28.83.54 <br>
					www.aotu-a.dz
        		</div>
        		<div class="col-md-6">
        			<form action="" method="POST"  style="margin-top: 20px;">
<?php 
$str = "";
if(isset($_POST['email']) == true) {
    $to = $_POST['email'];
    $header = "aotua@mail.fr";
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    mail($to, $objet, $message, $header);

    $str = "<div class='btn btn-success' style='width: 100%; display: block; text-align: center;'> Votre Email est enovyer avec sucess</div>";
}
?>
        				<label for="email">Email : </label><br>
        				<input type="email" name="email"><br>
        				<label for="objet">Objet : </label><br>
        				<input type="text" name="objet"><br>
        				<label for="objet">Message : </label><br>
        				<textarea name="message" id="" cols="30" rows="10"></textarea><br>
        				<input type="submit" value="Enovyer" class="btn btn-primary">
        			</form>
        		</div>
                <?php echo $str; ?>
        	</div>
        </section>

    </div>
    <div class="container">
        <footer>
            <div class="container">
                <nav>
                    <ul class="navbar">
                        <li class="list-element"><a href="index.html">Accueil</a></li>
                        <li class="list-element"><a href="juridique.html">Cadre Juridique</a></li>
                        <li class="list-element">
                        <a href="#">Réseaux Membres</a>
                            <ul>
                            <li><a href="etusa.html">Bus ETUSA</a></li>
                            <li><a href="#">Tramway SETRAM</a></li>
                            <li><a href="ratp.html">Metro EMA</a></li>
                            <li><a href="etac.html">Télepherique ETAC</a></li>
                            <li><a href="trains.html">Trains SNTF</a></li>
                            <li><a href="#">Bateaux ENTMV</a></li>
                            <li><a href="ratp.html">RATP ELDjazair</a></li>
                            </ul>
                        </li>
                        <li class="list-element"><a href="evenements.html">Evènements</a></li>
                        <li class="list-element"><a href="projet.html">Projets</a></li>
                        <li class="list-element"><a href="contact.html">Contacts</a></li>
                    </ul>
                </nav>
                <div class="copyright">
                    AOTU-A-Avril 2017
                </div>              
            </div>

        </footer>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/lightbox.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
