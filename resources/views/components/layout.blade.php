<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

	{{-- SIDEBAR NAVIGATION --}}
	<main class="flex h-screen">
		<nav class="w-[250px]">
			<ul class="flex flex-col gap-[12px]">
				<li class="h-[40px]"><a href="">Dashboard</a></li>
				<li>
					<button id="inventory-button" >Inventory</button>

					<div class="inventory-list-container">
						<ul>
							<li><a href="">Products</a></li>
							<li><a href="{{ route('admin.category') }}">Categories</a></li>
							<li><a href="">Stock In</a></li>
							<li><a href="">Stock Out</a></li>
							<li><a href="">Stock Adjustments</a></li>
						</ul>
					</div>
				</li>
				<li><a href="">Suppliers</a></li>
				<li><a href="">Users</a></li>
				<li><a href="">Subscription Management</a></li>
				<li><a href="">Reports</a></li>
				<li><a href="">System Settings</a></li>
				<li><a href="">Account</a></li>
			</ul>
		</nav>
		<section>
			{{ $slot }}
		</section>
	</main>
</body>
</html>