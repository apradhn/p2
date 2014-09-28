<!DOCTYPE html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project 2</title>
	<link href='http://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container col-sm-8 col-sm-offset-2">
	
		<div class="row">
			<h1 class="title">Project 2</h1>
			<h2 class="subtitle">xkcd Password Generator</h2>
		</div>
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
				<div class="password">random password</div>
			</div>
		</div>	
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
					<form class="form-inline" role="form">
						<div class="form-group">
							<label for="number_of_words" class="col-sm-6 control-label"># of Words (Max 9)</label>
							<div class="col-sm-6">
								<input class="form-control" maxlength="1" type="text" name="number_of_words" id="number_of_words" value="5"> 
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="checkbox">
									<label for="add_number">
										<input type="checkbox" name="add_number" id="add_number">Add a number
									</label>
								</div>
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="checkbox">
									<label for="add_symbol">
									<input class="checkbox" type="checkbox" name="add_symbol" id="add_symbol">Add a symbol
									</label>
								</div>
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="submit" class="btn btn-primary" value="Again">
							</div>
						</div>
					</form>
			</div>
		</div>

	</div>
</body>
</html>