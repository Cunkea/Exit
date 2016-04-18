<?php 
include_once 'konfig.php';
?>
<html>
<head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script type="text/javascript" src="script.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Pacifico|Gloria+Hallelujah' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<title>Club EXIT Osijek</title>
</head>
<body>

	<div class="container">
		
		<div id="navbar">
			<ul>
  				<li><a href="index.php">Naslovna</a></li>
 				<li><a class="active" href="ponuda.php">Ponuda</a></li>
 				<li><a href="eventi.php">Eventi</a></li>
  				<li><a href="onama.php">O nama</a></li>
  				<li><a href="q&a.php">Q & A</a></li>
  				<li><a href="prijava.php">Prijava</a></li>
			</ul>
		</div>
		

		<div class="bezalko" id="content">
			<table style="width: 100%;">
				<thead>
					<h3 style="text-align: center">Bezalkoholna pića</h3>
					<tr>
						<th><h4>Naziv</h4></th>
						<th></th>
						<th style="text-align: right;"><h4>Cijena (kn)</h4></th>
					</tr>
				</thead>
				<tbody>
					<?php
					try {
  						$veza = new PDO($dsn, $user, $password);
  						$izraz = $veza->prepare("select id, naziv, alk, cijena, kolicina from pice where alk is FALSE;");
  						$izraz->execute();
  						$rez = $izraz->fetchAll(PDO::FETCH_OBJ);
  						foreach ($rez as $red){
  							?> 
					<tr>
						<td><?php echo $red->naziv;?></td>
						<td><?php echo $red->kolicina;?></td>
						<td style="text-align: right;"><?php echo $red->cijena;?></td>
					</tr>
					<?php 	
  						}
  						$veza=null;
  							} catch (PDOException $e) {
  								include_once 'bazaGreske.php';
  							}
  							?>
				</tbody>
			</table>
		</div>

		<div id="sidebar">
			<div id="calendar">
            	<p id="calendar-day"></p>
            	<p id="calendar-date"></p>
            	<p id="calendar-month-year"></p>
        	</div>
        
		</div>

		<div class="alko "id="content">
			<table style="width: 100%;">
				<thead>
					<h3 style="text-align: center">Alkoholna pića</h3>
					<tr>
						<th><h4>Naziv</h4></th>
						<th></th>
						<th style="text-align: right;"><h4>Cijena (kn)</h4></th>
					</tr>
				</thead>
				<tbody>
					<?php
					try {
  						$veza = new PDO($dsn, $user, $password);
  						$izraz = $veza->prepare("select id, naziv, alk, cijena, kolicina from pice where alk is TRUE;");
  						$izraz->execute();
  						$rez = $izraz->fetchAll(PDO::FETCH_OBJ);
  						foreach ($rez as $red){
  							?>
					<tr>
						<td><?php echo $red->naziv;?></td>
						<td><?php echo $red->kolicina;?></td>
						<td style="text-align: right;"><?php echo $red->cijena;?></td>
					</tr>
					<?php 	
  						}
  						$veza=null;
  							} catch (PDOException $e) {
  								include_once 'bazaGreske.php';
  							}
  							?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>