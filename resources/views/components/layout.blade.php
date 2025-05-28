<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>

	@vite(['resources/css/app.css', 'resources/js/app.js'])

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="flex h-screen p-[20px] ">
	<nav class="w-[250px] border-none rounded-xl overflow-hidden">
		<ul class="py-2 flex flex-col gap-[12px]">
			
			{{-- DASHBOARD --}}
			<li>
				<a href="">
					<div class="icon-container">
						<i class="fa-solid fa-boxes-stacked"></i>	
					</div>
					<label class="">Dashboard</label>
				</a>
			</li>

			{{-- INVENTORY --}}
			<li>
				<button id="inventory-button" >
					<i class="fa-solid fa-boxes-stacked"></i> <label class="">Inventory</label>
				</button>

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

			{{-- SUPPLIERS --}}
			<li>
				<button id="supplier-button" >
					<div class="icon-container">
						<i class="fa-solid fa-truck"></i>	
					</div> 
					<label class="">Supplier</label>
				</button>

				<div class="supplier-list-container">
					<ul>
						<li><a href="">Products</a></li>
						<li><a href="{{ route('admin.category') }}">Categories</a></li>
						<li><a href="">Stock In</a></li>
						<li><a href="">Stock Out</a></li>
						<li><a href="">Stock Adjustments</a></li>
					</ul>
				</div>
			</li>

			{{-- USERS --}}
			<li>
				<a href="">
					<div class="icon-container">
						<i class="fa-solid fa-users"></i>	
					</div> 
					<label class="">Users</label>
				</a>
			</li>

			{{-- SUBSCRIPTION MANAGEMENT --}}
			<li>
				<a href="">
					<div class="icon-container">
						<i class="fa-solid fa-file-invoice-dollar"></i>	
					</div> 
					<label class="">Subscription Management</label>
				</a>
			</li>
			
			{{-- REPORTS --}}
			<li>
				<a href="">
					<div class="icon-container">
						<i class="fa-solid fa-chart-line"></i>	
					</div> 
					<label class="">Reports</label>
				</a>
			</li>

			{{-- SYSTEM SETTINGS --}}
			<li>
				<a href="">
					<div class="icon-container">
						<i class="fa-solid fa-cogs"></i>	
					</div> 
					<label class="">System Settings</label>
				</a>
			</li>

			{{-- ACCOUNT --}}
			<li>
				<a href="">
					<div class="icon-container">
						<i class="fa-solid fa-user-circle"></i>	
					</div>  
					<label class="">Account</label>
				</a>
			</li>
		</ul>
	</nav>

	{{-- SIDEBAR NAVIGATION --}}
	<main class="">
		
		<section>
			{{ $slot }}
		</section>
	</main>
</body>
</html>



<ul>
  <li></i> Dashboard</li>
  <li></li>
  <li><i class="fa-solid fa-boxes"></i> Inventory</li>
  <li><i class="fa-solid fa-truck"></i> Suppliers</li>
  <li><i class="fa-solid fa-users"></i> Users</li>
  <li><i class="fa-solid fa-file-invoice-dollar"></i> Subscription Management</li>
  <li><i class="fa-solid fa-chart-line"></i> Reports</li>
  <li><i class="fa-solid fa-cogs"></i> System Settings</li>
  <li><i class="fa-solid fa-user-circle"></i> Accounts</li>
</ul>