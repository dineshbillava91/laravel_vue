@extends ('homelayout')

<style>
.invalid-feedback
{
	display: block !important;
}
</style>

@section ('content')

	<div class="limiter" id="app">
		<example-component></example-component>
		<login-component></login-component>
	</div>

@endsection