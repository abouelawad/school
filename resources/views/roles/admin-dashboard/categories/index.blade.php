@extends('admin-panel.app')


@section('content')
	<!-- Manage Cource Section -->
	<div class="manage-cource-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">

					<div class="form-group">
						@if ($errors->any())
							<ul>
								<div class="alert alert-danger" role="alert">
									@foreach ($errors->all() as $error)
										<li> {{ $error }}</li>
									@endforeach
								</div>
							</ul>
						@endif
					</div>

					<div class="pull-left">
						<h4>Manage Courses</h4>
						<div id='ajax-response' >

						</div>
					</div>
					<div class="pull-right">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory">
							Add new category
						</button>
					</div>
				</div>
			</div>
			<div class="inner-container">
				<div class="container-content">
					<!-- Title Box -->
					<div class="title-box clearfix">
						<!-- Title Column -->
						<div class="title-column">
							<h6>Title</h6>
						</div>
						<!-- Title Column -->
						<div class="title-column">
							<h6>Publish Date</h6>
						</div>
						<!-- Title Column -->
						<div class="title-column">
							<h6>Sales</h6>
						</div>
						<!-- Title Column -->
						<div class="title-column">
							<h6>Category</h6>
						</div>
						<!-- Title Column -->
						<div class="title-column">
							<h6>Action</h6>
						</div>
					</div>
					<table class="table">
						<thead>

						</thead>
						<tbody>

							<tr>
								<th class="title" scope="col">01. Learn IOS Development</th>
								<th class="post-date" scope="col">01 Jan 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">02. Build Responsive Real world</th>
								<th class="post-date" scope="col">12 Mar 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">03. Master in website design</th>
								<th class="post-date" scope="col">12 Mar 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">04. Learn IOS Development</th>
								<th class="post-date" scope="col">01 Jan 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">05. Build Responsive Real world</th>
								<th class="post-date" scope="col">12 Mar 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">06. Master in website design</th>
								<th class="post-date" scope="col">12 Mar 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">07. Learn IOS Development</th>
								<th class="post-date" scope="col">01 Jan 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">08. Build Responsive Real world</th>
								<th class="post-date" scope="col">12 Mar 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">09. Master in website design</th>
								<th class="post-date" scope="col">12 Mar 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">10. Learn IOS Development</th>
								<th class="post-date" scope="col">01 Jan 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">11. Build Responsive Real world</th>
								<th class="post-date" scope="col">12 Mar 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

							<tr>
								<th class="title" scope="col">12. Master in website design</th>
								<th class="post-date" scope="col">12 Mar 20</th>
								<th class="sales" scope="col">36 Sales</th>
								<th class="category" scope="col">Development</th>
								<th class="actions" scope="col"><a href="#" class="flaticon-edit-2"></a><a href="#"
										class="flaticon-trash"></a></th>
							</tr>

						</tbody>
					</table>
				</div>
			</div>

			<!-- Post Share Options -->
			<div class="styled-pagination margin-top text-center">
				<ul class="clearfix">
					<li class="arrow"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
					<li class="prev"><a href="#">Prev</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li class="active"><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li class="next"><a href="#">Next</a></li>
					<li class="arrow"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
				</ul>
			</div>

		</div>
	</div>
	<!-- End Manage Cource Section -->

	<!-- Modal -->
	<div class="modal fade" id="addCategory" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Add new Category</h5>
          
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

          <form id="addCategoryForm" action="javascript:void(0)" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Category Name</label>
              <input  class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
              <label for="name" >Diverted from</label>
              <select name="parent" class="form-control">
								<option value="" selected disabled>Nothing</option>
								@foreach ($categories as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
									@if($category->children->isNotEmpty())
									@include('roles.admin-dashboard.categories.parentOptions',['categories'=>$category->children , 'prefix' =>'*'])
									@endif
								@endforeach
							</select>
            </div>


          </form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" form="addCategoryForm" class="btn btn-primary">confirm</button>
				</div>
			</div>
		</div>
	</div>
@endsection


@section('scripts')
		<script>
			$(document).on('submit','#addCategoryForm',function(event){
				event.preventDefault();
					$.ajax({
						headers:{
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						},
						type :'POST',
						url:'{{ route("category.store") }}',
						data:new FormData(document.getElementById("addCategoryForm")),
						contentType:false,
						processData:false,
							success:function(data){
								$("#ajax-response").html(data);
								$("#addCategory").modal('hide');
							}
					})
			});
		</script>
	@endsection
