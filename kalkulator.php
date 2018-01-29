<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Kalkulator</title>
</head>
<body>
<form> 
          <input type="text" name="num1" placeholder="Prvi broj">
          <input type="text" name="num2" placeholder="Drugi broj">
          <select name="operator">
             <option value=''>Nista</option>
             <option value="+">Sabiranje</option>
             <option value="-">Oduzimanje</option>
             <option value="*">Mnozenje</option>
             <option value="/">Deljenje</option>
          </select>
          <br>
          <button type="sumbit" name="sumbit" value="sumbit">Izracunaj</button>

</form>

<p>Odgovor je:</p>
<?php
     if (isset($_GET['sumbit'])) {
          $result1 = $_GET['num1'];
          $result2 = $_GET['num2'];
          $operator = $_GET['operator'];
          switch ($operator) {
               case "Nista":
               echo "GRESKA!Izaberi operaciju.";
               break;
               case "Sabiranje":
               echo $result1 + $result2;
               break;
               case "Oduzimanje":
               echo $result1 - $result2;
               break;
               case "Mnozenje":
               echo $result1 * $result2;
               break;
               case "Deljenje":
               echo $result1 / $result2;
               break;
          }
        }
?>
</body>
</html>