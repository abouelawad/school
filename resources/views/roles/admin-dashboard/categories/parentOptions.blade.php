@foreach ($categories as $category)
	<option value="{{ $category->id }}">{{ $prefix }} {{$category->name }}</option>
	@if ($category->children)
		@include('roles.admin-dashboard.categories.parentOptions', [
			'categories' => $category->children,
			'prefix' => $prefix.'*',
		])
	@endif
@endforeach

