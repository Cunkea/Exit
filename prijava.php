<?php 
include_once 'konfig.php';

$poruka="";
$ime="";
$prezime="";
$datum="";
$username="";
$sifra="";
$email="";


if(isset($_POST['submit'])){

	$ime=trim($_POST['ime']);
	$prezime=trim($_POST['prezime']);
	$datum=$_POST['godina'].'-'.$_POST['mjesec'].'-'.$_POST['dan'];
	$username=trim($_POST['username']);
	$sifra=trim($_POST['sifra']);
	$email=trim($_POST['email']);

		try {

			$veza = new PDO($dsn, $user, $password);
			$veza->beginTransaction();
			$izraz = $veza->prepare("insert into osoba (ime,prezime,datum,username,sifra,email, kreirano) " .
					" values(:ime, :prezime, :datum, :username, :sifra, :email, now())");

			$izraz->bindValue(":ime",  $ime );
			$izraz->bindValue(":prezime",  $prezime );
			$izraz->bindValue(":datum",  $datum );
			$izraz->bindValue(":username",  $username );
			$izraz->bindValue(":sifra",  $sifra );
			$izraz->bindValue(":email",  $email );

			$izraz->execute();
			
			$veza->commit();
			$veza=null;
			
			header("location: index.php");

		} catch (PDOException $e) {
			print_r($e);
		}	
}

?>
<html>
<head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Club EXIT Osijek</title>
</head>
<body>

	<div class="container">
		
		<div id="navbar">
			<ul>
  				<li><a href="index.php">Naslovna</a></li>
 				<li><a href="ponuda.php">Ponuda</a></li>
 				<li><a href="eventi.php">Eventi</a></li>
  				<li><a href="onama.php">O nama</a></li>
  				<li><a href="q&a.php">Q & A</a></li>
  				<li><a class="active" href="prijava.php">Prijava</a></li>
			</ul>
		</div>
		

		<div style="text-align: center;" id="prijava">
			<form method="post">
				<fieldset>
					<legend>Popuni slijedeća polja:</legend>
					<label for="ime">Ime: </label>
					<br>
					<input type="text" name="ime" value="<?php echo $ime;?>" size="25">
					<br>
					<label for="prezime">Prezime: </label>
					<br>
					<input type="text" name="prezime" value="<?php echo $prezime;?>" size="25">
					<br>
					<label for="datum">Datum Rođenja: </label>
					<br>

					<select id="godina" name="godina">
						<option value="" disabled selected hidden>gggg</option>
						<script>
							var myDate = new Date();
 							var year = myDate.getFullYear();
							for(var i = 1900; i < year+1; i++){
							document.write('<option value="'+i+'">'+i+'</option>');
  							}
  						</script>
					</select>

					<select name="mjesec" id='mjesec' size="1">
						<option value="" disabled selected hidden>mm</option>
						<option value='1'>Janaury</option>
						<option value='2'>February</option>
						<option value='3'>March</option>
    					<option value='4'>April</option>
						<option value='5'>May</option>
						<option value='6'>June</option>
						<option value='7'>July</option>
 						<option value='8'>August</option>
   						<option value='9'>September</option>
 						<option value='10'>October</option>
						<option value='11'>November</option>
 						<option value='12'>December</option>
  					</select>

    				<select name="dan" id="dan" size="1">
    					<option value="" disabled selected hidden>dd</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>

					<br>
					<label for="username">Korisnicko ime: </label>
					<br>
					<input type="text" name="username" value="<?php echo $username;?>" size="25">
					<br>
					<label for="sifra">Lozinka: </label>
					<br>
					<input type="text" name="sifra" value="<?php echo $sifra;?>" size="25">
					<br>
					<label for="email">E-mail: </label>
					<br>
					<input type="text" name="email" value="<?php echo $email;?>" size="25">
					<br><br>
					<input type="submit" name="submit" value="Submit">
				</fieldset>	
			</form>
		</div>
	</div>

	


</body>
</html>