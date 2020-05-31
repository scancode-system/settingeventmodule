{{ Form::model($event_setting->configurable, ['route' => ['settingevent.update', $event_setting->configurable], 'method' => 'put']) }}
<div class="form-group">
	{{ Form::label('title', 'Nome do Evento') }}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
<fieldset class="form-group">
	{{ Form::label('start_end_date', 'Data do Evento') }}
	<div class="input-group">
		<span class="input-group-prepend">
			<span class="input-group-text">
				<i class="fa fa-calendar"></i>
			</span>
		</span>
		{{ Form::text('start_end_date', null, ['class' => 'form-control']) }}
	</div>
</fieldset>
<div class="form-group">
	{{ Form::label('goal', 'Meta Geral') }}
	{{ Form::number('goal', null, ['class' => 'form-control', 'step' => '0.01']) }}
</div>

{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
{{ Form::close() }}

<h4 class="mt-3">Eventos Anteriores</h4>
<hr>
{{ Form::open(['route' => ['settingevent.pastevent.store', $event_setting->event]]) }}
<div class="row">
	<div class="col-md-5">
		{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título+Data (Evento Anterior)']) }}
	</div>
	<div class="col-md-5">
		{{ Form::number('total', null, ['class' => 'form-control', 'step' => '0.0.1', 'placeholder' => 'Total vendido']) }}
	</div>
	<div class="col-md-2">
		{{ Form::button('<i class="fa fa-save float-left"></i><span>Salvar</span>', ['class' => 'w-100 btn btn-brand btn-primary', 'type' => 'submit']) }}
	</div>
</div>
{{ Form::close() }}
<hr>
<table class="table table-responsive-sm bg-white table-hover border">
	<thead>
		<tr>
			<th>Evento</th>
			<th>Total</th>
			<th class="text-right">Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach($past_events as $past_event)
		<tr>
			<td class="align-middle">{{ $past_event->title }}</td>
			<td class="align-middle">@currency($past_event->total)</td>
			<td class="text-right align-middle">
				<div class="btn-group" role="group" aria-label="Basic example">
					{{ Form::open(['route' => ['settingevent.pastevent.destroy', $past_event], 'method' => 'delete']) }}
					{{ Form::button('<i class="fa fa-trash-o"></i><span>Excluir</span>', ['class' => 'btn btn-brand btn-danger', 'type' => 'submit']) }}
					{{ Form::close() }}
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@push('styles')
{{ Html::style('modules/portal/coreui/vendors/bootstrap-daterangepicker/css/daterangepicker.min.css') }} 
@endpush


@push('scripts')
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js') }}
{{ Html::script('modules/portal/coreui/node_modules/bootstrap-daterangepicker/daterangepicker.js') }}


<script>
	$('input[name="start_end_date"]').daterangepicker({
		opens: 'left',
		locale: {
			format: 'D/M/Y'
		},
		ranges: {
			Today: [moment(), moment()],
			Yesterday: [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			'This Month': [moment().startOf('month'), moment().endOf('month')],
			'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		}
	});

</script>

@endpush