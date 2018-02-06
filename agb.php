<!doctype html>
<html lang="en">
<head>
    <!-- Informationen über zusätzliche Angaben -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_index.css">
    <!-- Titel eines Dokumentes -->
    <title>HEALTH PLUS | AGB</title>
</head>

<!-- Beginn Body-Bereich -->
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="index.php">
        <img src="bilder/logo.png" width="250" height="33" alt="HealthPlus">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-4">
            <li class="nav-item">
                <a class="nav-link" id="blog" href="uebersicht.php">PRODUKTE</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ANGEBOTE</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="paket_01.php">Abnehm Paket</a>
                    <a class="dropdown-item" href="paket_02.php">Vegan Paket</a>
                    <a class="dropdown-item" href="paket_03.php">Aufbau Paket</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SALES</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="sales_01.php">Protein Waffeln</a>
                    <a class="dropdown-item" href="sales_02.php">Protein Cookies</a>
                    <a class="dropdown-item" href="sales_03.php">Protein Pudding</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog" href="blog.php">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="blog" href="news.php">NEWS</a>
            </li>
        </ul>
        <div class="form-inline my-2 ml-3" href="warenkorb_uebersicht.php">
            <a href="uebersicht.php"> <img src="bilder/suche_icon.png" width="25" height="25" alt="Suche"></a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3">
            <a href="warenkorb_uebersicht.php"> <img src="bilder/einkaufswagen_icon.png" width="25" height="25" alt="Einkaufswagen"></a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3">
            <a class="nav-link h-75" id="anmelden" href="anmelden.php">ANMELDEN</a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-1">
            <a class="nav-link h-75" id="registrieren" href="registrieren.php">REGISTRIEREN</a>
        </div>
        <div class="form-inline my-2 my-lg-1 ml-3 mt-5" >
            <?php include 'db.php';
            session_start();
            if (isset($_SESSION['username'])) : ?>
                <a><?php echo $_SESSION['username']; ?> &nbsp; <a href="abmelden.php" style="color: #29ABE2; text-decoration: none">ABMELDEN</a> </a>
            <?php endif ?>
        </div>
    </div>
</nav>


<div class="page-header mt-5 text-center">
    <h5>AGB</h5>
</div>
<div align="center">
    <img src="bilder/balken.png" alt="Balken-Icon">
</div>
<div class="page-content mt-5 text-center">
    <div class="container">
        Allgemeine Geschäftsbedingungen der Firma Health Plus GmbH<br />

        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§1 Geltung gegenüber Unternehmern und Begriffsdefinitionen</p>
        (1) Die nachfolgenden Allgemeinen Geschäftbedingungen gelten für alle Lieferungen zwischen uns und einem Verbraucher
        in ihrer zum Zeitpunkt der Bestellung gültigen Fassung.<br />
        <br />
        Verbraucher ist jede natürliche Person, die ein Rechtsgeschäft zu Zwecken abschließt, die überwiegend weder
        ihrer gewerblichen noch ihrer selbständigen beruflichen Tätigkeit zugerechnet werden können (§ 13 BGB).
        <br />

        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§2 Zustandekommen eines Vertrages, Speicherung des Vertragstextes</p>
        (1) Die folgenden Regelungen über den Vertragsabschluss gelten für Bestellungen über unseren Internetshop https://mars.iuk.hdm-stuttgart.de/~er034/index.php .<br />
        <br />
        <b>(2) Im Falle des Vertragsschlusses kommt der Vertrag mit<br />

            <div style="font-weight: bold; margin-left: 20px;" >
                <br />
                Health Plus GmbH<br />
                Eileen Röhm, Marc Lunardi & Cedric Tippl <br />
                Nobelstraße 10 <br />
                D-70569 Stuttgart<br />
                Registernummer SD 345489 <br />
                Registergericht  Landesgericht Stuttgart <br />
                <br />
            </div>
            zustande.<br /></b>
        <br />
        (3) Die Präsentation der Waren in unserem Internetshop stellen kein rechtlich bindendes Vertragsangebot unsererseits dar,
        sondern sind nur eine unverbindliche Aufforderungen an den Verbraucher, Waren zu bestellen. Mit der Bestellung der gewünschten Ware gibt der Verbraucher ein für
        ihn verbindliches Angebot auf Abschluss eines Kaufvertrages ab.<br />
        (4) Bei Eingang einer Bestellung in unserem Internetshop gelten folgende Regelungen:
        Der Verbraucher gibt ein bindendes Vertragsangebot ab, indem er die in unserem Internetshop vorgesehene Bestellprozedur erfolgreich durchläuft.<br />
        <br />
        Die Bestellung erfolgt in folgenden Schritten:<br />
        <br />
        <div class="ml20">

            1) Auswahl der gewünschten Ware<br />

            2) Bestätigen durch Anklicken der Buttons „Bestellen“ <br />

            3) Prüfung der Angaben im Warenkorb<br />

            4) Betätigung des Buttons „zur Kasse“ <br />

            5) Anmeldung im Internetshop nach Registrierung und Eingabe der Anmelderangaben (E-Mail-Adresse und Passwort). <br />

            6) Nochmalige Prüfung bzw. Berichtigung der jeweiligen eingegebenen Daten.<br />

            7) Verbindliche Absendung der Bestellung durch Anklicken des Buttons „kostenpflichtig bestellen“ bzw. „kaufen“<br />

            <br />
        </div>
        Der Verbraucher kann vor dem verbindlichen Absenden der Bestellung durch Betätigen der in dem von ihm verwendeten Internet-Browser enthaltenen „Zurück“-Taste nach
        Kontrolle seiner Angaben wieder zu der Internetseite gelangen, auf der die Angaben des Kunden erfasst werden und Eingabefehler berichtigen bzw. durch Schließen des
        Internetbrowsers den Bestellvorgang abbrechen.
        Wir bestätigen den Eingang der Bestellung unmittelbar durch eine automatisch generierte E-Mail („Auftragsbestätigung“). Mit dieser nehmen wir Ihr Angebot an.
        <br />
        <br />
        (5) Speicherung des Vertragstextes bei Bestellungen über unseren Internetshop : Wir senden Ihnen die Bestelldaten und unsere AGB per
        E-Mail zu. Die AGB können Sie jederzeit auch unter https://mars.iuk.hdm-stuttgart.de/~er034/agb.php  einsehen.

        Ihre Bestelldaten sind aus Sicherheitsgründen nicht mehr über das Internet zugänglich.
        <br />


        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§3 Preise, Versandkosten, Zahlung, Fälligkeit</p>
        (1) Die angegebenen Preise enthalten die gesetzliche Umsatzsteuer und sonstige Preisbestandteile. Hinzu kommen etwaige Versandkosten.<br />
        <br />
        (2) Der Verbraucher hat die Möglichkeit der Zahlung per
        PayPal,




        Kreditkarte(
        Visa,
        Mastercard
        )




        .<br />
        <br />


        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§4 Lieferung</p>
        (1) Sofern wir dies in der Produktbeschreibung nicht deutlich anders angegeben haben, sind alle von uns angebotenen Artikel sofort versandfertig.
        Die Lieferung erfolgt hier spätesten innerhalb von 4 Werktagen.
        Dabei beginnt die Frist für die Lieferung im Falle der Zahlung per Vorkasse am Tag nach
        Zahlungsauftrag an die mit der Überweisung beauftragte Bank und bei allen anderen Zahlungsarten am Tag nach Vertragsschluss zu laufen.
        Fällt das Fristende auf einen Samstag, Sonntag oder gesetzlichen Feiertag am Lieferort, so endet die Frist am nächsten Werktag.
        <br /><br />

        (2) Die Gefahr des zufälligen Untergangs und der zufälligen Verschlechterung der
        verkauften Sache geht auch beim Versendungskauf erst mit der Übergabe der Sache an den Käufer auf diesen über.  <br />


        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§5 Eigentumsvorbehalt</p>
        Wir behalten uns das Eigentum an der Ware bis zur vollständigen Bezahlung des Kaufpreises vor. <br />



        <br />

        ****************************************************************************************************
        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§6 Widerrufsrecht des Kunden als Verbraucher:
        </p>

        <b>
            Widerrufsrecht für Verbraucher</b><br />
        <br />
        Verbrauchern steht ein Widerrufsrecht nach folgender Maßgabe zu, wobei Verbraucher jede natürliche Person ist, die ein Rechtsgeschäft zu Zwecken abschließt,
        die überwiegend weder ihrer gewerblichen noch ihrer selbständigen beruflichen Tätigkeit zugerechnet werden können:

        <br />
        <br />

        <p style="font-weight: bold; padding-bottom: 1px; text-align: center;">Widerrufsbelehrung</p>
        <br />
        <b>Widerrufsrecht</b><br />
        <br />
        Sie haben das Recht, binnen vierzehn Tagen ohne Angabe von Gründen diesen Vertrag zu widerrufen.
        <br />
        <br />
        Die Widerrufsfrist beträgt vierzehn Tage, ab dem Tag, an dem Sie oder ein von Ihnen benannter Dritter,
        der nicht der Beförderer ist, die Waren in Besitz genommen haben bzw. hat.

        <br /><br />
        Um Ihr Widerrufsrecht auszuüben, müssen Sie uns<br />
        <div style="margin-left:20px; margin-top: 5px; margin-bottom:5px;">
            Health Plus GmbH<br />
            Eileen Röhm, Marc Lunardi & Cedric Tippl <br />
            Nobelstraße 10 <br />
            D-70569 Stuttgart<br />
            E-Mail healthplus@web.de<br />
        </div>
        mittels einer eindeutigen Erklärung (z.B. ein mit der Post versandter Brief, Telefax oder E-Mail) über Ihren Entschluss,
        diesen Vertrag zu widerrufen, informieren. Sie können dafür das beigefügte Muster-Widerrufsformular verwenden, das jedoch nicht vorgeschrieben ist.
        <br />
        <br />

        <b>Widerrufsfolgen</b>
        <br /><br />
        Wenn Sie diesen Vertrag widerrufen, haben wir Ihnen alle Zahlungen, die wir von Ihnen erhalten haben, einschließlich der
        Lieferkosten (mit Ausnahme der zusätzlichen Kosten, die sich daraus ergeben, dass Sie eine andere Art der Lieferung als
        die von uns angebotene, günstigste Standardlieferung gewählt haben), unverzüglich und spätestens binnen vierzehn Tagen
        ab dem Tag zurückzuzahlen, an dem die Mitteilung über Ihren Widerruf dieses Vertrags bei uns eingegangen ist.
        Für diese Rückzahlung verwenden wir dasselbe Zahlungsmittel, das Sie bei der ursprünglichen Transaktion eingesetzt haben,
        es sei denn, mit Ihnen wurde ausdrücklich etwas anderes vereinbart; in keinem Fall werden Ihnen wegen dieser Rückzahlung Entgelte berechnet.
        <br />
        <br />

        Wir können die Rückzahlung verweigern, bis wir die Waren wieder zurückerhalten haben oder bis Sie den Nachweis erbracht haben,
        dass Sie die Waren zurückgesandt haben, je nachdem, welches der frühere Zeitpunkt ist.
        <br />
        <br />

        Sie haben die Waren unverzüglich und in jedem Fall spätestens binnen vierzehn Tagen ab dem Tag, an dem Sie uns über den
        Widerruf dieses Vertrages unterrichten, an uns zurückzusenden oder zu übergeben. Die Frist ist gewahrt,
        wenn Sie die Waren vor Ablauf der Frist von vierzehn Tagen absenden.
        <br />
        <br />

        Sie tragen die unmittelbaren Kosten der Rücksendung der Waren.<br />
        <br />


        <b>Ende der Widerrufsbelehrung</b>
        <br />
        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§8 Gewährleistung
        </p>

        Es gelten die gesetzlichen Gewährleistungsregelungen.
        <br />

        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§9 Verhaltenskodex</p>
        Wir haben uns den Verhaltenskodizes der folgenden Einrichtungen unterworfen:
        <br />
        <p style="margin-left: 20px;margin-top: 20px;">
            Euro-Label Germany<br />
            EHI-EuroHandelsinstitut GmbH<br />
            Spichernstraße 55<br />
            50672 Köln<br />
        </p>
        Den Euro-Label Verhaltenskodex können Sie durch Anklicken des auf unserer Webseite angebrachten Euro-Label-Siegels oder unter http://www.euro-label.com abrufen.<br />

        <br />
        <p style="font-weight: bold; padding-bottom: 10px;">§10 Vertragssprache</p>
        Als Vertragssprache steht ausschließlich Deutsch zur Verfügung.<br />

        <br />
        <br />
        <p>Stand der AGB Feb.2018</p>

        <p><i><a href="http://www.agb.de">Gratis AGB</a> erstellt von agb.de</i></p>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<div class="col-xs-12" style="height:100px;"></div>
<footer>
    <nav class="footernav footernav-expand-lg footernav-light form-inline mx-auto mt-5">
        <div class="footer mx-auto text-center" id="footeritem">
            <a href="impressum.php">IMPRESSUM</a>
            <a href="datenschutz.php">DATENSCHUTZ</a>
            <a href="agb.php">AGB</a>
            <a href="kontakt.php">KONTAKT</a><br>
            <a href="https://www.facebook.com/Healthplusblog-126934821455800/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/HealthPlusBlog" class="fa fa-twitter "></a>
            <a href="https://www.instagram.com/healthplusblog/" class="fa fa-instagram"></a>
        </div>
        <!-- Social Media Buttons-->

    </nav>
</footer>
</html>