<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Login </h1>
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
<form action="loginck.php" method="post">

  <table border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align="right">	
		     <td> <img src="images/login.png" style="width: 30%"> <br>
		      <a href="registration.php">Não tem Cadastro?</a></td>
		 </tr>
		<tr>
             <td> Digite seu usuário</td>
        <td> <input type="text" name="uid" placeholder="Usuário" style="padding: 10px; width: 150%"> <br>  </td>
		
		</tr>

		<tr>
           <td> Digite sua senha</td>
 <td> <input type="Password" name="pass" placeholder="Senha" style="padding: 10px; width: 150%"> <br>   </td>
		
		</tr>

		<tr>	    
 <td align="right"> <input type="submit" name="" value="Efetuar Login" style="color: #fff; background-color: #d65106; font-size: 1.5em; font-family: 'Rubik', sans-serif; border: 0; border-radius: 100px; padding: 0px 15px;"> </td> 
</tr>
               
              
</form>
		</table>			




				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>