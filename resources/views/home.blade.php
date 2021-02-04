<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    @extends('layouts.main')

        <main>
		<h2>LE LUNGHE</h2>
		<div class="cards">
			@foreach ($lunghe as $pasta)
				<div class="card">
					<div class="layover">
						{{ $pasta["titolo"] }}
					</div>
					<img src="{{$pasta['src']}}" alt="">
					
				</div>
			@endforeach
		</div>

		<h2>LE CORTE</h2>
		<div class="cards">
			@foreach ($corte as $pasta)
				<div class="card">
					<div class="layover">
						{{ $pasta["titolo"] }}
					</div>
					<img src="{{$pasta['src']}}" alt="">
				</div>
			@endforeach
		</div>

		<h2>LE CORTISSIME</h2>
		<div class="cards">
			@foreach ($cortissime as $pasta)
				<div class="card">
					<div class="layover">
						{{ $pasta["titolo"] }}
					</div>
					<img src="{{$pasta['src']}}" alt="">
				</div>
			@endforeach
		</div>
	</main>
        <footer>
            La Molisana
        </footer>
    </body>
</html>
