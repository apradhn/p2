<!DOCTYPE html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project 2</title>
	<link href='http://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
	<link rel="icon" href="images/favicon-green.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php require 'logic.php'; ?>
</head>
<body>
	<div class="container col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
	
		<div class="row">
			<h1 class="title">Project 2</h1>
			<h2 class="subtitle">xkcd Password Generator</h2>
		</div>
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
				<div class="password"><?php echo $password; ?></div>
			</div>
		</div>			
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
					<form role="form" method='GET' action='index.php'>
						<div class="row">
							<label for="number_of_words" class="control-label col-xs-4 col-xs-offset-2"># of Words (Max 9)</label>
							<input class="form-control col-xs-4" maxlength="1" type="text" name="number_of_words" id="number_of_words" value="5"> 
						</div>
						<div class="row">
							<div class="col-xs-6 col-xs-offset-3">
								<div class="checkbox">										
										<input type="checkbox" name="add_number" id="add_number">
										<label for="add_number">Add a number</label>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-6 col-xs-offset-3">
								<div class="checkbox">									
									<input type="checkbox" name="add_symbol" id="add_symbol">
									<label for="add_symbol">Add a symbol</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<input type="submit" class="btn btn-primary" value="Go">
							</div>
						</div>
					</form>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<p>According to the xkcd comic strip <a href="http://xkcd.com/936/" target="_blank">Password Strength</a>, we've trained ourselves to use passwords that are hard for humans to remember but easy for computers to guess. </p>				
				<p>Instead, a string of random common words is a much a better password because it's difficult for computers to guess and easy for humans to remember. A string of 4 common random words is a stronger password because it contains greater "bits of entropy", whatever that means. </p>
				<p>This application generates an xkcd password by generating a number of random words separated by hyphens. The user can select how many words to use, whether to include a number, and whether to include a special symbol.</p>
			</div>
		</div>		

	</div>
</body>
</html>