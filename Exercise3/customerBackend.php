<?php
$pet1 = $_POST['pet1'];
$pet2 = $_POST['pet2'];
$pet3 = $_POST['pet3'];
$pet1C = 100;
$pet2C = 190;
$pet3C = 130;
$shipping = $_POST['ship'];
$total = $shipping+$pet1*$pet1C+$pet2*$pet2C+$pet3*$pet3C;
$name = $_POST['username'];
$pass = $_POST['password'];
echo 'Thank You for Your Purchase!<br>';
echo 'Username: ' .$name. '<br>Password: ' .$pass. '<br>';
echo "<table border=\"1\">";
echo '<tr><td></td><td>Coster Per Item</td><td> Quantity</td><td>Sub Total</td></tr>';
echo '<tr><td>Pet Rock 1</td><td>$100</td>$';
echo '<td>' .$pet1.'</td>';
echo '<td>$' .$pet1*$pet1C. '</td></tr>';
echo '<tr><td>Pet Rock 2</td><td>$190</td><td>' .$pet2. '</td><td>$' .$pet2*$pet2C. '</td></tr>';
echo '<tr><td>Pet Rock 3</td><td>$130</td><td>' .$pet3. '</td><td>$' .$pet3*$pet3C. '</td></tr>';
echo '<td>Shipping</td><td>$' .$shipping. '</td></tr>';
echo '<td></td><td></td><td>Total</td><td>$'  .$total. '</td></tr>';
  echo"</table>";
  
  ?>