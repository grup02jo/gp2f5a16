<head>
  <title>Examen de protocols</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }

    h1 {
      margin-top: 40px;
      font-size: 32px;
    }

    form {
      display: inline-block;
      text-align: left;
      margin-top: 40px;
      padding: 40px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    p {
      font-size: 18px;
      margin-top: 20px;
    }

    input[type="text"] {
      font-size: 16px;
      padding: 10px;
      width: 300px;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    input[type="submit"] {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Exaamen de protocols</h1>
  <?php
  if (!isset($_POST['nom_estudiant'])) {
  ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Introdueix el teu nom complet:</p>
      <input type="text" name="nom_estudiant">

    <label for="programa">Selecciona un curs:</label>
      <select name="programa" id="programa">
      <option value="ASIX">ASIX</option>
      <option value="DAM">DAM</option>
      <option value="DAW">DAW</option>
    </select>
	<br><br>  1.
      <p>Quin és el port típic de DHCP?</p>
      <input type="radio" name="pregunta1" value="a">a. 80<br>
      <input type="radio" name="pregunta1" value="b">b. 67<br>
      <input type="radio" name="pregunta1" value="c">c. 53<br>
      <input type="radio" name="pregunta1" value="d">d. 68<br>

	  <br> 2.
      <p>Quin és el port típic de DNS?</p>
      <input type="radio" name="pregunta2" value="a">a. 80<br>
      <input type="radio" name="pregunta2" value="b">b. 53<br>
      <input type="radio" name="pregunta2" value="c">c. 22<br>
      <input type="radio" name="pregunta2" value="d">d. 25<br>

	  <br> 3.

      <p>Utilitza UDP o TCP?</p>
      <input type="radio" name="pregunta3" value="a">a. UDP<br>
      <input type="radio" name="pregunta3" value="b">b. TCP<br>

	  <br> 4.

      <p>Quin és el port típic de HTTP?</p>
      <input type="radio" name="pregunta4" value="a">a. 55<br>
      <input type="radio" name="pregunta4" value="b">b. 87<br>
      <input type="radio" name="pregunta4" value="c">c. 80<br>
      <input type="radio" name="pregunta4" value="d">d. 68<br>







	  <br> 5.

       <p>Quin és el port típic del SSH?</p>
      <input type="radio" name="pregunta5" value="a">a. 22<br>
      <input type="radio" name="pregunta5" value="b">b. 47<br>
      <input type="radio" name="pregunta5" value="c">c. 53<br>
      <input type="radio" name="pregunta5" value="d">d. 25<br>



	  <br> 6.

   <p>Que es el FTP?</p>
      <input type="radio" name="pregunta6" value="a">a. Protocol de transferencia de arxius<br>
      <input type="radio" name="pregunta6" value="b">b. Secure Shell<br>
      <input type="radio" name="pregunta6" value="c">c. File Transfer Packs <br>
      <input type="radio" name="pregunta6" value="d">d. Protocol de Datagrama de usuari<br>


	  <br> 7.

   <p>Que significa SMTP</p>
      <input type="radio" name="pregunta7" value="a">a . Protocol ocult de transferencia de correus<br>
      <input type="radio" name="pregunta7" value="b">b. Protocol de transferencia de fitxers<br>
      <input type="radio" name="pregunta7" value="c">c. Sistema de muntatge intern fitxers<br>
      <input type="radio" name="pregunta7" value="d">d. Protocol simple de transferencia de    correu<br>









	  <br> 8.

   <p>En quin àmbit s’utilitza POP3 ?</p>
      <input type="radio" name="pregunta8" value="a">a. Correu electronic<br>
      <input type="radio" name="pregunta8" value="b">b. Navegadors Internet<br>
      <input type="radio" name="pregunta8" value="c">c. Videojocs<br>
      <input type="radio" name="pregunta8" value="d">d. Fitxers<br>

	  <br> 9.

   <p>A quin protocol pertany TELNET ?</p>
      <input type="radio" name="pregunta9" value="a">a. SMTP<br>
      <input type="radio" name="pregunta9" value="b">b. TCP<br>
      <input type="radio" name="pregunta9" value="c">c. UDP<br>
      <input type="radio" name="pregunta9" value="d">d. HTTP<br>


	  <br> 10.

   <p>Que signifiquen les sigles LPD?</p>
      <input type="radio" name="pregunta10" value="a">a. Le Protocol Div <br>
      <input type="radio" name="pregunta10" value="b">b.Less Protocol Down<br>
      <input type="radio" name="pregunta10" value="c">c. Los Angeles Police Department<br>
      <input type="radio" name="pregunta10" value="d">d. Line Printer Daemon<br>


	  <br> 11.

   <p>Que signifiquen les sigles LPDA?</p>
      <input type="radio" name="pregunta11" value="a">a. Protocol lleuger de acces a directoris<br>
      <input type="radio" name="pregunta11" value="b">b. Protocol de datagrama universal<br>
      <input type="radio" name="pregunta11" value="c">c. Acces Directe a fitxers<br>
      <input type="radio" name="pregunta11" value="d">d. Lost directory down access<br>


	  <br> 12.

   <p>Que es el protocol Samba?</p>
      <input type="radio" name="pregunta12" value="a">a. Es un protocol de ball<br>
      <input type="radio" name="pregunta12" value="b">b. Transferencia de missatges buits<br>
      <input type="radio" name="pregunta12" value="c">c. Server Message Block <br>
      <input type="radio" name="pregunta12" value="d">d.Ninguna es correcta<br>

	  <br> 13.

   <p>Quin port utilitza el  NFS?</p>
      <input type="radio" name="pregunta13" value="a">a. 92<br>
      <input type="radio" name="pregunta13" value="b">b. 1034l<br>
      <input type="radio" name="pregunta13" value="c">c. 23 <br>
      <input type="radio" name="pregunta13" value="d">d. 2049<br>
      
	  <br> 14.
   <p>13. Quin port utilitza el TFTP?</p>
      <input type="radio" name="pregunta14" value="a">a. 69<br>
      <input type="radio" name="pregunta14" value="b">b. 22<br>
      <input type="radio" name="pregunta14" value="c">c. 23 <br>
      <input type="radio" name="pregunta14" value="d">d. 777<br>
      
	  <br> 15.
 <p>13. Que es NTP?</p>
      <input type="radio" name="pregunta15" value="a">a. Nice TP<br>
      <input type="radio" name="pregunta15" value="b">b. Network time protocol<br>
      <input type="radio" name="pregunta15" value="c">c. Next time post <br>
      <input type="radio" name="pregunta15" value="d">d. No te preocupes<br>
      
	  <br> 16.
 <p>13. Que son les CUPS?</p>
      <input type="radio" name="pregunta16" value="a">a. sistema de impresión de código abierto y modular<br>
      <input type="radio" name="pregunta16" value="b">b. Son capsules de nespresso<br>
      <input type="radio" name="pregunta16" value="c">c. Corporation Unificated Post Self<br>
      <input type="radio" name="pregunta16" value="d">d. Cap de les 3 respostes<br>
      <input type="submit" value="Envia">

    </form>
  <?php
  } else {
    $nom_estudiant = $_POST['nom_estudiant'];
    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];
    $pregunta4 = $_POST['pregunta4'];
    $pregunta5 = $_POST['pregunta5'];
    $pregunta6 = $_POST['pregunta6'];
    $pregunta7 = $_POST['pregunta7'];
    $pregunta8 = $_POST['pregunta8'];
    $pregunta9 = $_POST['pregunta9'];
    $pregunta10 = $_POST['pregunta10'];
   $pregunta11 = $_POST['pregunta11'];
   $pregunta12 = $_POST['pregunta12'];
   $pregunta13 = $_POST['pregunta13'];
   $pregunta14 = $_POST['pregunta14'];
   $pregunta15 = $_POST['pregunta15'];
   $pregunta16 = $_POST['pregunta16'];
   $puntuacio = 0;
    if ($pregunta1 == "d") {
      $puntuacio++;
    }
    if ($pregunta2 == "b") {
      $puntuacio++;
    }
    if ($pregunta3 == "b") {
      $puntuacio++;
    }
    if ($pregunta4 == "c") {
      $puntuacio++;
    }
      if ($pregunta5 == "a") {
      $puntuacio++;
    }
    if ($pregunta6 == "a") {
      $puntuacio++;
    }
    if ($pregunta7 == "d") {
      $puntuacio++;
    }

 if ($pregunta8 == "a") {
      $puntuacio++;
    }
 if ($pregunta9 == "b") {
      $puntuacio++;
    }
 if ($pregunta10 == "d") {
      $puntuacio++;
    }
 if ($pregunta11 == "a") {
      $puntuacio++;
    }
 if ($pregunta12 == "c") {
      $puntuacio++;
    }
 if ($pregunta13 == "d") {
      $puntuacio++;
    }
  if ($pregunta14 == "a") {
      $puntuacio++;
    }
 if ($pregunta15 == "b") {
      $puntuacio++;
    }
 if ($pregunta16 == "c") {
      $puntuacio++;
    }




    // afegiu més preguntes segons les necessitats
$total_preguntas = 16;
$errors =  $total_preguntas - $puntuacio;
// Calcular la nota
$nota = ($puntuacio /$total_preguntas) * 10;
    echo "Nom de l'estudiant: $nom_estudiant<br>";
    echo "Nota: " . number_format($nota, 2);
    echo "<br>Encertades: $puntuacio<br> ";
    echo "Incorrectes: $errors<br> ";
  }
  ?>
</body>
</html>
