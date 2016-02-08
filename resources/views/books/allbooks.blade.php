@extends('main')

@section('content')
	
	<div class="list" >

		<div class="sort">
			Сортировка
			<br>
			<a href="{{url('book')}}">Название</a>
			<a href="{{url('book')}}">Автор</a>
		</div>
	
	@foreach ($books as $book)
	
		<div class="book">
			<a href="{{ url('/book', $book->id) }}">
			<div class="img">
				<img src="{{$book->image}}">
			</div>
			<div class="list-content">
				<div class="title">{{$book->title}}</div>
				<div>Автор: {{$book->author}}</div>
				<div>Год: {{$book->year}}</div>
			</div>
			</a>
		</div>
	@endforeach

	</div>
	{!! $books->render() !!}
@stop