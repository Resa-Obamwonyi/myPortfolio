<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<title></title>
</head>
<body>

<div class="container">
  <h2>Hello Theresa,</h2>
</div>

<div class="container">
<h2>You received an email from : {{ $name }}</h2>

<h4>Here are the details:</h4>
<p><b>Name:</b> {{ $name }} <p>
<p><b>Email:</b> {{ $email }}</p>
<p><b>Subject:</b> {{ $subject }}</p>
<p><b>Message:</b> {{ $msg }}</p>
<p>Thank You</p>
</div>

</body>
</html>