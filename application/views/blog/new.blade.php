@layout('layout/default')

@section('content')

	{{ Form::open(URL::to('blog/add')) }}

		@if($errors->has('description'))
			@foreach($errors->get('description', '<div class="error">:message</div>') as $error)
				{{ $error }}
			@endforeach
		@endif
		{{ Form::label('description-label', 'Descrição') }} <br />
		{{ Form::text('description', Input::old('description'), $errors->has('description') ? array('class' => 'error') : array()) }} <br />

		@if($errors->has('content'))
			@foreach($errors->get('content', '<div class="error">:message</div>') as $error)
				{{ $error }}
			@endforeach
		@endif
		{{ Form::label('content-label', 'Conteúdo') }} <br />
		{{ Form::textarea('content', Input::old('content'), $errors->has('content') ? array('class' => 'error') : array()) }} <br />

		<br />
		{{ Form::submit('Enviar', array('id' => 'submit')) }}
	{{ Form::close() }}

@endsection