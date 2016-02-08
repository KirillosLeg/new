@extends('main')

@section('content')

	<h2>Create</h2>
	{!! Form::open(['name' => 'FormSave',  'action' => 'BooksController@store', 'files' => 'true']) !!}
		<div class="onebook" ng-app>
			<div class="img">
				
				<input type="file" name="image">
			</div>
			<div class="book_content">
				<div class="title">
					<input type="text" name="title" ng-model="title" placeholder="Name" ng-maxlength="150" required>
					<div style="color:red;" ng-show="FormSave.title.$dirty && FormSave.title.$invalid">
						<span ng-show="FormSave.title.$error.required">Заполните поле</span>
						<span ng-show="FormSave.title.$error.maxlength">Максимуми 150 символов</span>
					</div>
				</div>
				<div class="author">
					<input type="text" name="author" ng-model="author" placeholder="Author" ng-maxlength="100" required>
					<div style="color:red;" ng-show="FormSave.author.$dirty && FormSave.author.$invalid">
						<span ng-show="FormSave.author.$error.required">Заполните поле</span>
						<span ng-show="FormSave.author.$error.maxlength">Максимуми 100 символов</span>
					</div>
				</div>
				<div class="year">
					<input type="number" name="year" ng-model="year" placeholder="Year" integer>
					<div style="color:red;" ng-show="FormSave.year.$dirty && FormSave.year.$invalid">
						<span ng-show="FormSave.year.$error.integer">Только число</span>
					</div>
				</div>
			<div class="description">
				<textarea name="description" ng-model="description" ng-maxlength="2000" required></textarea>
				<div style="color:red;" ng-show="FormSave.description.$dirty && FormSave.description.$invalid">
					<span ng-show="FormSave.description.$error.required">Заполните поле</span>
					<span ng-show="FormSave.description.$error.maxlength">Максимуми 2000 символов</span>
				</div>
			</div>
				<input type="Submit" value="Create" ng-disabled="FormSave.title.$invalid || FormSave.author.$invalid || FormSave.description.$invalid">
			</div>
		</div>
	{!! Form::close() !!}

@stop