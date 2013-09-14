<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Christoffer Rydberg utforskar Jasmine</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,700,900,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-theme.css">
	<link rel="stylesheet" href="/assets/css/main.css">
</head>	
<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h3 class="brand">Christoffer Rydberg utforskar Jasmine!</h3>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row row-margin">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-xs-6">
					<a href="/" class="btn btn-success">hem</a>
					<a href="/frontend/javascript/jasmine" class="btn btn-frontend">tillbaka</a>
				</div>
				<div class="col-xs-6 align-right">
					<a href="/frontend/" class="btn btn-frontend">frontend</a>
					<a href="/backend/" class="btn btn-backend">backend</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row row-margin">
		<div class="content">
			<h1 class="align-center">Hello world med Jasmine</h1>
			<div class="row row-margin">
				<a href="specRunner.html" class="col-md-10 col-md-offset-1 btn btn-success">Run the Spec</a>
			</div>
			<div class="row">
				<h2 class="col-md-10 col-md-offset-1">The Spec</h2>
			</div>
			<div class="row row-margin">
<xmp class="col-sm-10 col-sm-offset-1">describe("hello World", function() {
	it("should return hello World!", function() {
		expect(helloWorld()).toEqual("hello World");
	});
});</xmp>
			</div>
			<div class="row row-margin">
				<div class="col-md-6 col-md-offset-1">
					<p>Enkel introduktionsövning för att se hur en hello world applikation kan tänkas se ut med Jasmine.</p>
				</div>
			</div>
			<div class="row">
				<h2 class="col-md-10 col-md-offset-1">The Script</h2>
			</div>
			<div class="row row-margin">
				<xmp class="col-sm-10 col-sm-offset-1">var helloWorld = function() {
	return 'hello World';
}</xmp>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-1">
					<p>Skrev sedan funktionen Hello World för att se så att den fungerade.</p>
				<p>Misslyckades faktiskt första gången och då insåg jag att specen är så känslig att den gnäller på versaler/gemener. Riktigt snyggt testat!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="../lib/jasmine-1.3.1/jasmine.js"></script>
<script src="../lib/jasmine-1.3.1/jasmine-html.js"></script>

</body>
</html>