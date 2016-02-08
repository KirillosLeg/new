@extends('main')

@section('content')

	<h2>Update</h2>
	{!! Form::model($book, ['name' => 'FormUp', 'method' => 'PATCH', 'action' => ['BooksController@update', $book->id], 'files' => 'true']) !!}
		<div class="onebook">
			<div class="img">
				<input type="file" name="image">
			</div>
			<div class="book_content">
			<div class="title">
				<input type="text" name="title" placeholder="Name" ng-model="title" ng-maxlength="150" ng-init="title='{{$book->title}}'" value="{{$book->title}}" required>
				<div style="color:red;" ng-show="FormUp.title.$dirty && FormUp.title.$invalid">
					<span ng-show="FormUp.title.$error.required">Заполните поле</span>
					<span ng-show="FormUp.title.$error.maxlength">Максимуми 150 символов</span>
				</div>
			</div>
			<div class="author">
				<input type="text" name="author" ng-model="author" placeholder="Author" ng-maxlength="100" ng-init="author='{{$book->author}}'" value="{{$book->author}}" required>
				<div style="color:red;" ng-show="FormUp.author.$dirty && FormUp.author.$invalid">
					<span ng-show="FormUp.author.$error.required">Заполните поле</span>
					<span ng-show="FormUp.author.$error.maxlength">Максимуми 100 символов</span>
				</div>
			</div>
			<div class="year">
				<input type="number" name="year" placeholder="Year" value="{{$book->year}}">
			</div>
			<div class="description">
				<textarea name="description" ng-model="description" ng-maxlength="2000" required ng-init="description='{{$book->description}}'">{{$book->description}}</textarea>
				<div style="color:red;" ng-show="FormUp.description.$dirty && FormUp.description.$invalid">
					<span ng-show="FormUp.description.$error.required">Заполните поле</span>
					<span ng-show="FormUp.description.$error.maxlength">Максимуми 2000 символов</span>
				</div>
			</div>
			<input type="Submit" ng-click="edit({{$book->id}})" value="Update" ng-disabled="FormUp.title.$dirty && FormUp.title.$invalid || FormUp.author.$dirty && FormUp.author.$invalid || FormUp.description.$dirty && FormUp.description.$invalid">
		</div>
	{!! Form::close() !!}

@stop