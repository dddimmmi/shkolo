<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
@extends('layouts.show')
</head>
<body>
<div class="wrapper">
		<section class="center">
			<header>
				<h2>SHKOLO</h2>
				<div class="clearfix" style="">
					 <a href="{{ route('shkolo') }}" class="btn btn-info" style="border: 1px solid; float: left; margin-left: 15%;">Back</a>
				</div>
                
			</header>
		</section>
		<section class="main col-sm-6">
			<div class="card" style="width: 28rem; margin-left: 25%;">
			<div class="card-body">
			<h5 class="card-title">{{$shkolo->title}}</h5>
			<select class="form-select" aria-label="Default select example">
				<option selected>Open this select menu</option>
				<option value="1">{{$shkolo->color}}</option>
            </select>
			<div class="btn-group" role="group" aria-label="Basic mixed styles example">
			<a href="{{$shkolo->link}}" class="btn btn-primary">{{$shkolo->link}}</a>
			</div>

			<div class="btn-group" role="group" aria-label="Basic mixed styles example">
					<a href="{{route('shkolo.edit', $shkolo->id)}}" type="button"  class="btn btn-warning">Edit</a>
			        <a href="{{route('shkolo.delete', $shkolo->id)}}" type="button" class="btn btn-danger">Delete</a>
            </div>
			</div>
			</div>
        </section>
      
</div>
</body>
</html>
