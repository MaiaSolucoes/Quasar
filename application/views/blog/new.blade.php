@layout('layout/default')

@section('content')


<div class="container">

<?php
	echo Form::open(URL::to('blog/add'), 'POST', array('class' => 'form-signin'));
		echo '<h2 class="form-signin-heading">Por favor, efetue a autenticação</h2>';
		echo Form::text('email', null, array('class' => 'input-block-level', 'placeholder' => 'E-mail'));
		echo Form::password('password', array('class' => 'input-block-level', 'placeholder' => 'Senha'));
		echo Form::submit('Autenticar', array('class' => 'btn btn-large btn-primary'));
	echo Form::close();
?>
</div>
@endsection