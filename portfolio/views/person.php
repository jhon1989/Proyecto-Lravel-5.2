<form role='form' entype='multipart/form-data'>
	<div class="form-group col-sm-8">
		<label for="name">Name</label>
		<input type="text" class="form-control" placeholder="Name" required />
	</div>
	<div class="form-group col-sm-4">
		<label>Upload File</label>
		<input type="file" class="form-control" onchange="viewPicture(this.value)" />
	</div>
	<div class="clearfix"></div>
	<div class="form-group col-sm-8" >
		<label for="lasName">Last Name</label>
		<input type="text" class="form-control" placeholder="Last Name" required />
	</div>
	<div class="form-group col-sm-4 pull-right" >
	    <label>View Personal Images</label>
		<img src=" " id="image" class="img-circle " alt="Image Person" width="275px" height="236px">
	</div>
	
	<div class="form-group col-sm-8" >
		<label for="phone">Phone</label>
		<input type="text" class="form-control" placeholder="Phone" required />
	</div>
	
	<div class="form-group col-sm-8">
		<label for="otherPhone">Other Phone</label>
		<input class="form-control" type="text" placeholder="Other Phone" required />
	</div>
	
	<div class="form-group col-sm-8">
		<label for="email">Email</label>
		<input class="form-control" type="email" placeholder="Email" required />
	</div>
	<div class="clearfix"></div>
	<div class="form-group col-sm-8">
		<button type="submit" class="btn btn-primary">Create New Personal Data</button>
	</div>
</form>