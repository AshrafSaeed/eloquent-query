@extends('layouts.app')

@section('title', 'Home')

@section('page-title', 'N+1 Problem')

@section('content')
	<!-- This example requires Tailwind CSS v2.0+ -->
	<div class="flex flex-col">
		<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
			<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
				<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
					<table class="min-w-full divide-y divide-gray-200">
						<thead class="bg-gray-50">
							<tr>
								<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Name
								</th>
								<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Title
								</th>
								<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Status
								</th>
								<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
									Role
								</th>
								<th scope="col" class="relative px-6 py-3">
									<span class="sr-only">Edit</span>
								</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-200">
							@forelse ($users as $user)
								<tr>
									<td class="px-6 py-4 whitespace-nowrap">
										Jane Cooper
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										Optimization
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										Active
									</td>
									<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
										Admin
									</td>
									<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
										<a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
									</td>
								</tr>
							@empty
								<tr><td class="px-6 py-4 whitespace-nowrap">there is no user found</td></tr>
							@endforelse
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection