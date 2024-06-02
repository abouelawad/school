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
						<h4>Edit Category</h4>

						<div id='ajax-response'>
						</div>
					</div>

				</div>
			</div>


      <div class="inner-container col-lg-6 offset-lg-3">
        <div class="edit-course-form">
          <form action="">
            <div class="form-group">
              <label for="department name">category</label>
              <input id="department name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
              <label for="parent">Parent</label>
              <input id="parent" class="form-control" type="text" name="parent">
            </div>
            <div class="form-group">
             <select class="custom-select-box">
              <option value="1">category 1</option>
              <option value="2">category 2</option>
              <option value="3">category 3</option>
             </select>
            </div>

          </form>
        </div> 
      </div>


		</div>
	</div>
	<!-- End Manage Cource Section -->


	@include('sweetalert::alert')

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
