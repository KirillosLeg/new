<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="utf-8">
	<title>Testing</title>
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<script src="{{URL::asset('js/angular.js')}}"></script>
	<script src="{{URL::asset('js/script.js')}}"></script>
</head>
<body>
<div class="main">

	<header>
		<h2><a href={!! (route('book.index')) !!} >Список Книг</a> <a href={!! (route('book.create')) !!} >Добавить новую</a></h2>
	</header>

		@yield('content')

</div>
</body>
</html>

