<x-layout>
	@if(session('success'))
		<div>
			{{ session('success') }}
		</div>
	@endif;

	<table>
		<thead>
			<tr>
				<th>Category</th>
				<th>Description</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->category_name }}</td>
					<td>{{ $category->description }}</td>
					<td>{{ $category->total }}</td>
					<td>Edit</td>
				</tr>
			@endforeach 
			<tr>
				<form action="{{ route('admin.category.store') }}" method="post">
					@csrf

					{{-- CATEGORY NAME --}}
					<td>
						<input type="text" name="category_name" placeholder="Category Name">
					</td>

					{{-- CATEGORY DESCRIPTION --}}
					<td>
						<input type="text" name="description" placeholder="Category Description">
					</td>
					<td colspan="2">
						<button type="submit">ADD</button>
					</td>
				</form>
			</tr>
		</tbody>
	</table>
</x-layout>