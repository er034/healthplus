
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 25.01.18
 * Time: 14:20
 */
//Error Report




//Bezahlmethode Auswahl durch Radio Checkbox:

    <input type="radio" name="bezahlmethode"
    <?php if (isset($bezahlmethode) && $bezahlmethode=="nachname") echo "checked";?>
    value="nachname">Nachname
    <input type="radio" name="bezahlmethode"
     <?php if (isset($bezahlmethode) && $bezahlmethode=="paypal") echo "checked";?>
           value="paypal">Paypal



