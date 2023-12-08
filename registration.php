<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> Cadastre-se </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
      <table cellpadding="10" cellspacing="12" align="left	">
     <form action="" method="POST"> 

  <tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Usuário" required=""style="padding: 10px; width: 300%"> <br>  </td>
    </tr>
   
   <tr>	
 <td> <input type="password" name="pass" value="" placeholder="Senha" required="" style="padding: 10px; width: 300%"> <br> </td>
   </tr>

  <tr>  
 <td> <input type="email" name="email" value="" placeholder="Email" required="" style="padding: 10px; width: 300%">  <br> </td>
</tr>
         
      <tr>   
<td align="center"> <input type="submit" name="sb" value="Efetuar Cadastro" style="color: #fff; background-color: #d65106; font-size: 1.5em; font-family: 'Rubik', sans-serif; border: 0; border-radius: 100px; padding: 0px 15px;"> </td>
   </tr>
    	
    </form>
 </table>

					<?php
					if(isset($_POST['sb']))
					{
						
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						include "connect.php";
						mysqli_query($con,"insert into registration(userid, password,email) values('$uid','$pass','$email')");
						echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
						echo "<center>Cadastro Efetuado com Sucesso ... Click aqui para fazer <a href='login.php'>login</a><br></center>";
					}	

					?>


<p>


				</div>
				<p>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>