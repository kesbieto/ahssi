<x-app-layout>
	<div class="container flex">
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
			<li class="nav-item active">
				<a class="nav-link" href="/home">
					<i class="fa-solid fa-border-all"></i>
					<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item nav-category">
				<a class="nav-link" href="/staff">
					<i class="fa-solid fa-users"></i>
					<span class="menu-title">Staff</span>
				</a>
			</li>
			</ul>
		</nav>
		<div class="container px-4 mx-9 side-content">
			<h2 class="py-4">STAFF</h2>
			<a href="/addUser" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Create User</a>
			<!--start table -->

			<div class="flex py-4 card">
			<div class="rounded-lg shadow-lg bg-white">
				<h3 class="card-header">Registered Nurse</h3>
				<div class="p-6">
				<!--start table -->
				<div class="flex flex-col">
				<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
					<div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
					<div class="overflow-hidden">
						<table class="min-w-full">
						<thead class="bg-white border-b">
							<tr>
								<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
									#
								</th>
								<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
									Code
								</th>
								<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
									Name
								</th>
								<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
									Email
								</th>
								<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
									Type
								</th>
								<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
									Action
								</th>
							</tr>
						</thead>
						@foreach ($data as $row)
						<tbody>
							<tr class="bg-gray-100 border-b">
							<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"></td>
							<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"></td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
							{{ $row->name }}
							</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
							{{ $row->email }}
							</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
							{{ $row->staffType }}
							</td>
							<td>
							<div class="dropdown relative">
								<button
									class="
									dropdown-toggle
									px-6
									py-2.5
									bg-blue-600
									text-white
									font-medium
									text-xs
									leading-tight
									uppercase
									rounded
									shadow-md
									hover:bg-blue-700 hover:shadow-lg
									focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
									active:bg-blue-800 active:shadow-lg active:text-white
									transition
									duration-150
									ease-in-out
									flex
									items-center
									whitespace-nowrap
									"
									type="button"
									id="dropdownMenuButton1"
									data-bs-toggle="dropdown"
									aria-expanded="false"
								>
									Action
									<svg
									aria-hidden="true"
									focusable="false"
									data-prefix="fas"
									data-icon="caret-down"
									class="w-2 ml-2"
									role="img"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 320 512"
									>
									<path
										fill="currentColor"
										d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
									></path>
									</svg>
								</button>
								<ul
									class="
									dropdown-menu
									min-w-max
									absolute
									hidden
									bg-white
									text-base
									z-50
									float-left
									py-2
									list-none
									text-left
									rounded-lg
									shadow-lg
									mt-1
									hidden
									m-0
									bg-clip-padding
									border-none
									"
									aria-labelledby="dropdownMenuButton1"
								>
									<li>
									<a
										class="
										dropdown-item
										text-sm
										py-2
										px-4
										font-normal
										block
										w-full
										whitespace-nowrap
										bg-transparent
										text-gray-700
										hover:bg-gray-100
										"
										href="#"
										>Action</a
									>
									</li>
									<li>
									<a
										class="
										dropdown-item
										text-sm
										py-2
										px-4
										font-normal
										block
										w-full
										whitespace-nowrap
										bg-transparent
										text-gray-700
										hover:bg-gray-100
										"
										href="#"
										>Another action</a
									>
									</li>
									<li>
									<a
										class="
										dropdown-item
										text-sm
										py-2
										px-4
										font-normal
										block
										w-full
										whitespace-nowrap
										bg-transparent
										text-gray-700
										hover:bg-gray-100
										"
										href="#"
										>Something else here</a
									>
									</li>
								</ul>
								</div>
							</td>
							</tr>

						</tbody>
						@endforeach
						</table>
					</div>
					</div>
				</div>
				</div>

			<!-- end table -->

				</div>
			</div>
			</div>


		</div>
	</div>
</x-app-layout>