<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Title</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
    <div class="container">

        <h1 class="text-center">Body</h1>
        <form action="/posts" method="post" role="form">
            <legend>Form Title</legend>

            <div class="form-group">
                <label for=""></label>
                <input type="text" class="form-control" name="title" id="" placeholder="Input title">
            </div>
            <div class="form-group">
                <label for=""></label>
                <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>