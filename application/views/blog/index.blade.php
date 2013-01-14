@layout('layout/default')

@section('content')
<ul>
	@foreach($posts as $item)

	<li>
		<strong>{{$item['name']}}</strong><br />
		{{$item['desc']}}
	</li>

	@endforeach
</ul>
@endsection