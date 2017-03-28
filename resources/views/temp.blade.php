


	<br/>

	<form id="forward-to-dean" action="{{ route('collegenewapply') }}" method="POST">
		<input type="hidden" name="_method" value="PUT">
		<input type="text" class="form-control" required id="college_name" name="college_name" value="Bhai Gurdas">
		{{ csrf_field() }}
		<input type="submit" value="submit">
	</form>