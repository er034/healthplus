<?php
//Bezahlmethode Auswahl durch Radio Checkbox:
?>
Wähle deine Bezahlmethode:
<br />

    <input type="radio" name="bezahlmethode"
    <?php if (isset($bezahlmethode) && $bezahlmethode=="nachname") echo "checked";?>
    value="nachname">Nachname
    <input type="radio" name="bezahlmethode"
     <?php if (isset($bezahlmethode) && $bezahlmethode=="paypal") echo "checked";?>
           value="paypal">Paypal



