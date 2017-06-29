<?php
				$con = mysqli_connect('localhost','root','');
				
				if(!$con) 
				{
					echo 'Not Connected to server';
				}
				
				if(!mysqli_select_db($con,'booksell') )
				{
					echo 'Database Not Selected';
				}
				
				
				$Vorname = $_POST['vorname'];
				$Nachname = $_POST['nachname'];
				
				$Name		= $_POST['name'];
				$Ort		= $_POST['ort'];
				
				$Titel 		= $_POST['titel'];
				$Isbn 		= $_POST['isbn'];
				
				
				
				$sql = "INSERT INTO autor (vorname, nachname) VALUES ('$Vorname' , '$Nachname')	" ;
			
				$autor_id = mysqli_insert_id($con);
			
				 $sql = "INSERT INTO verlag (name, ort) VALUES ('$Name' , '$Ort' ) ";
				 
				 $verlag_id = mysqli_insert_id($con);
				 
				 $sql = "INSERT INTO buch (autor_id, verlag_id, titel, isbn) VALUES ('$autor_id' , '$verlag_id' , '$Titel' , '$Isbn')";
				
				
				if(!mysqli_query($con,$sql)) 
				{		
				 echo 'NOT Inserted';
			}
			else 
			{	
 				echo 'Inserted';
 			//	echo '<pre>' . var_dump($Titel) . '</pre>';
 				
 			}					
		//		header("refresh:2; url=index.html")	;
?>