@if ($crud->hasAccess('update'))
	<a href="{{ url($crud->route.'/export') }}" class="btn btn-primary" data-style="zoom-in"><span class="ladda-label"><i class="la la-upload"></i> Export </span></a>
@endif