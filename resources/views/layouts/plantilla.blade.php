<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
	<body class="container">
		<header>
			<h2>Header de la página</h2>
		</header>

		<main>
			<section>
				@yield('section1')
			</section>
			<section>
				@yield('section2')
			</section>
		</main>
		<aside>
			<h2>Menu</h2>
			<ul>
				<li>Opcion 1</li>
				<li>Opcion 2</li>
				<li>Opcion 3</li>
				<li>Opcion 4</li>												
			</ul>
		</aside>
		<footer>
			<h2>Footer</h2>
		</footer>
	</body>
</html>