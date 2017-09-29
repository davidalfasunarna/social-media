<html>    
    <head>
    	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    </head>
    <body style="background-color: #FFFCE6 !important;font-family: 'Inconsolata', monospace;font-size: 16px;color: #666666;">
    	<div style="background-color: #FFFCE6;padding: 20px;">
    		<center>
		        <h4>Thanks for registering on Retro.</h4>
		        <h4>Activate your account to rock.</h4>
		        <br>
		        <button style="background-color: #F24D16;font-size: 16px;text-transform: uppercase;border: none;position: relative;padding: 6px 16px;color: #ffffff;border-radius: 3px;">
		        	<a style="color: #ffffff;text-decoration: none;" href="<?= base_url('register/activate/'.$username.'/'.$token.'') ?>">Activate Account</a>
		        </button>
	    	</center>
    	</div>
    </body>
</html>