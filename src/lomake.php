<?php

if (isset($_POST["submit"])) {

$nimi = $_POST["nimi"];
$email = $_POST["email"];
$puhelin = $_POST["puhelin"];
$viesti = $_POST["viesti"];


$headers = 'From: linh.vu.xx@gmail.com' . "\r\n" .
    'Reply-To: linh.vu.xx@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

/*
Kerätään lomakkeen tiedot lähettämistä varten muotoon:

Nimi: Etunimi Sukunimi

Sähköposti: linh.vu.xx@gmail.com

Puhelinnumero: +358123456789

Viesti: Viesti tulee tähän

*/

$kokoViesti = "Nimi: $nimi\nSähköposti: $email\nPuhelinnumero: $puhelin\nViesti: $viesti";

mail("linh.vu.xx@gmail.com", "Lomakkeesta", $kokoViesti, $headers);

$sisaltoSivulla = "<h2>Kiitos $nimi viestistäsi</h2>";

}
else {
	$sisaltoSivulla = "<h2>Viestin lähetys epäonnistui. Yritä uudelleen.</h2>";
	}


?>

<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/Pohja.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet'
type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/reset.css" rel="stylesheet">
<link href="css/grid.css" rel="stylesheet">
<link href="css/general.css" rel="stylesheet">
<link href="css/navbar.css" rel="stylesheet">
<link href="css/jumbotron.css" rel="stylesheet">
<link href="css/container.css" rel="stylesheet">
<link href="css/works.css" rel="stylesheet">
<link href="contact.css" rel="stylesheet" type="text/css">
<link href="css/lightbox.css" rel="stylesheet">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Linh Vu</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand">
            <a href="a"></a>
        </div>
        <div class="navbar-links">
            <a href="#front-page">ETUSIVU</a>
            <a href="#me">TIETOA MINUSTA</a>
            <a href="#works">TYÖT</a>
            <a href="#contact">YHTEYSTIEDOT</a>
        </div>
    </div>
</div>
<a name="front-page"></a>
<div class="jumbotron">
    <h1>MINUN PORTFOLIONI</h1>
    <p>Luovia ratkaisuja painoon ja nettiin</p>
    <a href="#works" class="jumbotron-button">KATSO TÄSTÄ TÖITÄNI</a>
</div>
<div class="container" name="me">
    <div class="container-wrapper">
        <div class="container-header">

            <h1 style="color: #333">TIETOA MINUSTA</h1>
        </div>
        <div class="row">
            <div class="column-third">
                <div class="profile-img" style="background-image: url('img/Linh_kolmio.png'); background-size: contain; position: static; margin-left: 60px;"></div>

            </div>
            <div class="column-third">
                <p>Olen Linh Vu, 20-vuotias graafinen suunnittelija Porvoosta.
                    Teen monipuolista graafista suunnittelua yritysilmeistä
                    nettisivuihin. Toteutan projektit joustavasti ja tehokkaasti.
                    Tavoitteeni projekteissa on tehdä töitä, jotka toimivat
                    ja huomataan. Erityisesti painotyöt ovat lähellä sydäntäni.
                </p>

            </div>
            
            <div class="column-third">
              <object id="EdgeID" type="text/html" width="510" height="320" data-dw-widget="Edge" data="edgeanimate_assets/animation_v3/Assets/animation_v3.html">
              </object>
            </div>
            
          </div>  
        </div>
    </div>
</div>
<div class="container alt">
    <div class="container-wrapper">
        <div class="container-header">
            <h1>MITÄ MINÄ TEEN</h1>
        </div>
        <div class="row">

            <div class="column-third center">
                <p><i class="fa fa-print"></i></p>
                <p>
                    <h2>PRINT</h2></p>
                <p>Vahvin osaamiseni painottuu erilaisten painotuotteiden suunnitteluun
                    ja toteutukseen, kuten lehtiin, julisteisiin ja flyereihin.
                    </p>
            </div>

            <div class="column-third center">
                <p><i class="fa fa-laptop"></i></p>
                <p>
                    <h2>WEB</h2></p>
                <p>Suunnittelen ja toteutan www-sivustoista bannereihin. Pyrin suunnittelemaan työt siten, että niitä olisi myös vaivatonta ylläpitää ja päivittää. </p>
            </div>

            <div class="column-third center">
                <p><i class="fa fa-puzzle-piece"></i></p>
                <p>
                    <h2>ILLUSTRATION</h2></p>
                <p>Muotoilemme asiat ymmärrettävästi, mutta yksilöllisesti. Infograafit, logot, </p>
            </div>

        </div>
    </div>
</div>
<div class="container" name="works">
    <div class="container-wrapper">
        <div class="container-header">

            <h1>TYÖT</h1>
        </div>
        <div class="row works">

        <a href="img/work_2.jpg" data-lightbox="img/work_2.jpg" </a>
            <div class="column-quarter">
                <div class="works-background">
                    <div class="works-image" style="background-image: url('img/work_2.jpg')"></div>
                    <div class="works-text">ILLUSTRATION</div>
                </div>
            </div>

             <a href="img/work_6_big.jpg" data-lightbox="work_6.jpg" </a>
             
            <div class="column-quarter">
                <div class="works-background">
                    <div class="works-image" style="background-image: url('img/work_6.jpg')"></div>
                    <div class="works-text">WEB</div>
                </div>
            </div>

            <a href="img/work_3_big.jpg" data-lightbox="img/work_3.jpg" </a>
            <div class="column-quarter">
                <div class="works-background">
                    <div class="works-image" style="background-image: url('img/work_3.jpg')"></div>
                    <div class="works-text">PRINT</div>
                </div>
            </div>

            <a href="img/work_5_big.jpg" data-lightbox="img/work_5.jpg" </a>
            <div class="column-quarter">
                <div class="works-background">
                    <div class="works-image" style="background-image: url('img/work_5.jpg')"></div>
                    <div class="works-text">ILLUSTRATION</div>
                </div>
            </div>

        </div>
        <div class="row works">

            <a href="img/work_1_big.jpg" data-lightbox="img/work_1.jpg" </a>
            <div class="column-quarter">
                <div class="works-background">
                    <div class="works-image" style="background-image: url('img/work_1.jpg')"></div>
                    <div class="works-text">ILLUSTRATION</div>
                </div>
            </div>

            <a href="img/work_7_big.jpg" data-lightbox="img/work_7.jpg" </a>
            <div class="column-quarter">
                <div class="works-background">
                    <div class="works-image" style="background-image: url('img/work_7.jpg')"></div>
                    <div class="works-text">PRINT</div>
                </div>
            </div>

            <a href="img/work_4_big.jpg" data-lightbox="img/work_4.jpg" </a>
            <div class="column-quarter">
                <div class="works-background">
                    <div class="works-image" style="background-image: url('img/work_4.jpg')"></div>
                    <div class="works-text">PRINT</div>
                </div>
            </div>

            <a href="img/work_8_big.jpg" data-lightbox="img/work_8.jpg" </a>
            <div class="column-quarter">
                <div class="works-background">
                    <div class="works-image" style="background-image: url('img/work_8.jpg')"></div>
                    <div class="works-text">WEB</div>
                    
                    <div class="works-button">NÄYTÄ LISÄÄ</div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="contact alt" name="contact">
    <div class="contact-wrapper">
        <div class="contact-header">
            <h1>OTA YHTEYTTÄ</h1>
            
 
            <div class="column-third center">
        <h2>Ota yheyttä</h2>
        
              <form action="otayhteytta.php" method="post" name="lomake" id="lomake">
              <p>
               <label for="nimi">Nimi</label>
             <br>
              <input name="nimi" type="text" required id="nimi" placeholder="Etunimi Sukunimi">
              </p>
              <p>
              <label for="email">
              Sähköposti</label>
              <br>
              			<input name="email" type="email" required id=email= placeholder="nimi@domain.fi">
              </p>
              <p>
              		<label for="puhelin">
                    Puhelin</label>
                    <br>
                    <input name="puhelin" type="tel" id="puhelin" placeholder="+358123456789">
                    </p>
                    <label for="viesti">Viesti</label>
             <br>
              <input name="viesti" type="text" required id="viesti">
                    <p>
                    <input type="submit">
              </form>
            
              <p>&nbsp;</p>
          </div>
            
       

            <div class="column-third center">
                <div class="contact-box">

                    <i class="fa fa-envelope"></i> SÄHKÖPOSTI linh.vu@taskut.fi
                    <br/>
                    <br/>

                    <i class="fa fa-phone"></i> PUHELINNUMERO 0449864445
                    <br/>
                    <br/>

                    <i class="fa fa-instagram"></i> INSTAGRAM linkkio
                    <br/>
                    <br/>

                    <i class="fa fa-facebook"></i> FACEBOOK Linh Vu
                </div>
            </div>

            <div class="column-third center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.1720022009838!2d25.6645682!3d60.39283689999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4691f42e9464915d%3A0xed1286af9480b7e7!2s06100+Porvoo!5e0!3m2!1sfi!2sfi!4v1437723188840"
                width="360" height="360" frameborder="0" style="border:0"
                allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
(function() {

    $('a[href*=#]').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("[name=" +  e.target.hash.substr(1) + "]").offset().top - 50
        }, 500);
    });

})();
</script>

<script src="js/lightbox.js"></script>


</body>

<!-- InstanceEnd --></html>