@extends('layouts.app')@section('content')	<div class="col-sm-6">		<input type="text" class="form-control" placeholder="Enter link....." id="url">	</div>	<div class="col-sm-3">		<button id="shortLink" class="btn btn-primary">			<i class="glyphicon glyphicon-resize-small"></i> Short it!		</button>		<div>			<div id="showShortLink">			</div>		</div>	</div>@endsection@section('javascript')	<script>		document.getElementById('shortLink').addEventListener("click", function (event) {			event.preventDefault();			var input = document.getElementById('url').value;			alert(input);		});	</script>@endsection