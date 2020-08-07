<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Upload File Php Mysql dan Bootstrap PusatKursus.com</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary">
			  <div class="panel-heading">
					<h3 class="panel-title">Form Upload File</h3>
			  </div>
			  <div class="panel-body">
					<form action="upload.php" method="POST" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Pilih Gambar</label>
							<input type="file" name="file">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
			  </div>
			</div>
		</div>
		
	</body>
</html>