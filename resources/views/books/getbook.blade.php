@extends('main')

@section('content')

	<h2>Описание книги</h2>
	<div ng-app="ang_app" ng-controller="fController">
		<div class="onebook">
			<div class="img">
				<img src="../{{$book->image}}">
			</div>
			<div class="book_content">
				<div class="title">{{$book->title}}</div>
				<div class="author">Автор: {{$book->author}}</div>
				<div class="year">Год: {{$book->year}}</div>
				<div class="description">{{$book->description}}</div>
			</div>			
		</div>

		<div class="x">
			<a  href="{{$book->id}}/edit"><button>Edit</button></a>
			{!! Form::open(['action' => ['BooksController@destroy', $book->id]]) !!}
				<input name="_method" type="hidden" value="DELETE">
				<input type="submit" value="Delete">
			{!! Form::close() !!}
		</div>
	</div>

@stop