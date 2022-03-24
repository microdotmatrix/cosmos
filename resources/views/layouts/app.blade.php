<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>FTW Technologies</title>

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">
	<livewire:styles />
</head>

<body>

	<main class="content">

		@yield('content')

	</main>

	<script src="{{ mix('/js/app.js') }}"></script>
	<livewire:scripts />

</body>
</html>
