<?php
//Bezahlmethode Auswahl durch Radio Checkbox:
?>
Wähle deine Bezahlmethode:
<br />
<br />

    <input type="radio" name="bezahlmethode"
    <?php if (isset($bezahlmethode) && $bezahlmethode=="nachname") echo "checked";?>
    value="nachname">Nachname
    <input type="radio" name="bezahlmethode"
     <?php if (isset($bezahlmethode) && $bezahlmethode=="paypal") echo "checked";?>
           value="paypal">Paypal
<br />

<!-- PayPal Logo --><table border="0" cellpadding="5" cellspacing="0" align="left"><tr><td align="center"></td></tr><tr><td align="left"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=265, height=175'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark"></a></td></tr></table><!-- PayPal Logo -->


