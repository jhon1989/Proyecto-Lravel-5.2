<form role='form' method="POST">
	<div class="form-group col-sm-8">
		<label for="institution">Institution</label>
		<input type="text" class="form-control" placeholder="Institution" required/>
	</div>
	<div class="clearfix"></div>
	<div class="form-group col-sm-4">
		<label for="startDate">Start Date</label>
		<input type="date" class="form-control" required />
	</div>
	<div class="form-group col-sm-4">
		<label for="complationDate">Completion Date</label>
		<input type="date" class="form-control"></input>
	</div>
	<div class="clearfix"></div>
	<div class="form-group col-sm-4">
		<label for="type">Type</label>
		<select class="form-control" required>
			<option>Curse</option>
			<option>Seminar</option>
			<option>Assistant</option>
			<option>Technical</option>
			<option>Technologist</option>
			<option>Professional</option>
		</select>
	</div>
	<div class="form-group col-sm-4">
	    <label for="status">Status</label>
		<select class="form-control" required>
			<option>Finalized</option>
			<option>Postponed</option>
			<option>Coursing</option>
		</select>
	</div>
	<div class="clearfix"></div>
	<div class="form-group col-sm-8">
		<label for="title">Title</label>
		<input class="form-control" type="text" placeholder="Title" required/>
	</div>
	<div class="clearfix"></div>
	<div class="form-group col-sm-8">
		<button class="btn btn-primary" type="submit">Create New Studies</button>
	</div>

</form>