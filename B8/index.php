<!DOCTYPE html>
<html>
    <head>
        <title>Knjiga utisaka</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="validacija.js"></script>
        <meta charset="UTF-8">
    </head>
    
    <body class="body">  
        <?php
            session_start();
            if(isset($_SESSION["poruka"])) {
                echo $_SESSION["poruka"];
                unset($_SESSION["poruka"]);
            }
        ?>
        
     
	 <h1 ><strong> Knjiga utisaka</strong></h1>
        <div class="meni">
		
                       <ul class="zaglavlje">
					   
                <li class="delovizaglavlja" >
                    <a class="a1"href="oautoru.html">O autoru</a>
                </li>
                <li class="delovizaglavlja">
                    <a class="a1" href="index.html">Početna</a>
                </li>
                <li class="delovizaglavlja">
                    <a  class="a1"href="uputstvo.html">Uputstvo</a>
                </li>
               
            </ul>
        </div >
		
			<form name="utisci" method="POST" action="utisci.php"  onsubmit="return Validacija()"  >
                <div class="formparts">
                    <p class="p1">Ime:</p><input type="text" class="inputime"name="ime"id="ime"><br>
                </div>
                <div class="formparts">
                    <p class="p1">Email:</p> <input type="email" class="inputmail" name="email" id="email"><br>
                </div>
                <div class="formparts">
                    <p class="p1"> Komentar:</p><input type="text" rows="20" cols="50" class="inputkom" name="comment" id="comment" >
                </div>
				<p id="greska"></p>
				<input type="submit" class="submit" value="Unesi komentar" >
			</form>
		
	</body>
</html>