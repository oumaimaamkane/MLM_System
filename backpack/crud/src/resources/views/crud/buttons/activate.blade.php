@if ($crud->hasAccess('update'))
	<a href="{{ url($crud->route.'/'.$entry->getKey().'/activate') }}" class="btn btn-sm btn-link" data-style="zoom-in"><span class="ladda-label"><i class="la la-check-circle-o"></i> {{ trans('backpack::crud.activate') }}</span></a>
@endif