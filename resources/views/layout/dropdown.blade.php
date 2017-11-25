<div class="row">
	<div class="col-md-4" style="float:right; margin-bottom:10px; margin-right:120px; background-color: #414141; border-radius: 10px;">
		<form action="timkiem" method="GET" class="navbar-form navbar-left" role="search">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<input type="text" size="40" name="tukhoa" class="form-control" placeholder="Tìm Kiếm">
			</div>
			<button type="submit" class="btn btn-default">Tìm</button>
		</form>
	</div>
</div>

