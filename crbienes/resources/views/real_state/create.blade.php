

{{Form::open(array('real_state', 'method' => 'post'))}}
{{ csrf_field() }}

<div class="form-group">
	{{ Form::input('text','name',null,['class' => 'form-control']) }}
</div>
{{ Form::close() }}