<?php 
	include_once "include/header.inc.php";
?>	
	
<article>
	<h2>Tu veux participer au sondage? Connecte toi !</h2>

	<form action="traitement1.php" method="post">
		<fieldset style="background-color:#EEE8AA">
			<legend>Identifiants</legend>
	
			<p>	
				<label for="log"> Login :</label>
				<input type="text" name="log" id="log" />
	
				<label for="pass"> Password :</label>
				<input type="password" name="pass" id="pass" />
				<br/><br/>
				<input type="submit" value="Connexion"/>
			</p>
		</fieldset>
	</form>
</article>


<?php
	include_once ("include/footer.inc.php");
?>