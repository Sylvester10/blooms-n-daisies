<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			*{

				box-sizing: border-box;
	    		padding:0;
	    		margin: 0;
	    		font-family: "Montserrat", sans-serif;
	    		font-size: 13px;
  				border-radius: 50px;

		}
		</style>
	</head>
	<body>
		<!--styling the container-->
		<div id="container" style="width: 100%; height: auto; padding: 10px 10px 10px 10px; background-color:rgb(240, 240, 240); position: relative; border-radius:5px; ">
			
			<div id="paymentContainer" style="max-width: 900px; height: auto; background-color: white; margin:auto; position: relative; padding:10px 0px 10px 0px; border-radius:20px; ">
				
				<!--Icon-->
				<div id="icon_cont" style="position: relative; width: 100%;height: 100px;">
					<div id="icon" style="position: relative; width: 100px; height: 100px; margin:auto;">
						<img src="image/shield.svg" style="width:100px;" width="100">
					</div>
				</div>

				<!-- header Messaage -->
				<div id="trans_status" style="margin-top: 10px; text-align: center; color:#0aa063;">
					<p style="font-size: 2em; font-weight: bold;">Password Recovery</p>
				</div>


				<!--Message -->
				<div id="msg" style="position: relative; width: 80%; margin:auto; text-align: center; color: rgb(90,90,90); margin-top: 10px;"><b style="color:rgb(40,40,40); font-size: 1.2em;">Hi '.$y->last_name.', </b> You requested for password reset for your Admin account. Click the link below, then enter your email, reset code and new password to reset your password.

					<table style="position: relative; width: 50%; margin:auto; text-align: center;">
					<tr>
						<td style="background-color: #0e67bf; border-color: #0e67bf; border: 2px solid #0e67bf; padding: 10px; text-align: center;">
							<a style="display: block; color: #ffffff; font-size: 17px; text-decoration: none; text-transform: capitalize;" href="' .$url. '">'
								.$caption.
							'</a>
						</td>
					</tr>
				</table>
				</div>


				<div style="position: relative; width: 100%; margin-top: 20px;padding: 0px 15px;">
					<table id="table" style="position: relative; width: 100%;  table-layout: fixed; border-collapse: collapse;" >

						<tr style="border-bottom:1px solid #0aa06e;">

							<td id="t1" style="width: 20%; font-weight: bold; text-align: left; padding-bottom: 15px; padding-top: 15px;">Reset code:</td>

							<td id="t2" style="width: 80%; text-align: right;  padding-bottom: 15px;padding-top: 15px;word-break: break-all;padding-left: 10px;"><?php echo date('l, d M, Y'); ?></td>
						</tr>
					</table>
				</div>

				<!--Important -->
				<div id="amount" style="position: relative; text-align: center; font-size: 13px; margin-top: 20px;">
					Please, do not disclose your login details to anyone.
				</div>

				<!--Activate -->
				<div id="amount" style="position: relative; text-align: center; font-size: 13px; margin-top: 20px;">
					If you did not make this request, ignore this message. <br> 
		                Please do not reply this message.
				</div>

				<div style="position: relative; width: 100%; margin-top: 30px; margin-bottom:30px; padding: 0px 30px">
					<table id="table2" style="position: relative; width: 100%;  table-layout: fixed; border-collapse: collapse;">
						<tr>
							<td id="trusted" style="width: 15%; padding-right: 10px;"><div><img src="image/logo.png" width="200%"></div></td>

							<td id="lnk" style="width:auto;"><div style="text-align: right;padding-right: 10px;"></td>
						</tr>
					</table>
				</div>
			</div>


			<div id="fooooo" style="width: 100%; text-align: center; margin-top: 20px; color: #494949; margin-bottom: 10px; ">
				<span>&copy;</span>2020 Cryptoma. All rights reserved.
			</div>

		</div>

	</body>
</html>