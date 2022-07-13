<x-app-layout>
	<div class="flex">
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
			<li class="nav-item active">
				<a class="nav-link" href="/home">
					<i class="fa-solid fa-border-all"></i>
					<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item nav-category">
				<a class="nav-link" href="/admin-staff">
					<i class="fa-solid fa-users"></i>
					<span class="menu-title">Staff</span>
				</a>
			</li>
			</ul>
		</nav>
		<div class="container mx-10side-content">
			<h1>This is the dashboard page</h1>
			<i class="fa fa-copy"></i>
			<i class="fa fa-save"></i>
			<i class="fa fa-trash"></i>

		</div>
	</div>
</x-app-layout>