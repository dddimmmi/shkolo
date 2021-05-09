<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
@extends('layouts.head')
</head>
<body>
<div class="wrapper">
		<section class="center">
			<header>
				<h2>SHKOLO</h2>
				<div class="clearfix" style="">
					 <a href="{{ route('shkolo.create') }}" class="btn btn-success" style="border: 1px solid; float: right; margin-right: 15%;">Create</a>
				</div>
                
			</header>
		</section>
		<section class="main">
			       <section id="shkolo_left" >
			       	 @foreach($shkolos as $shkolo)
			       	    <div> <a href="{{ route('shkolo.view', $shkolo->id) }}" class="color-{{$shkolo->color}}">{{ $shkolo->color }}</a></div>
			       	 @endforeach
			       </section>
        </section>
   

</div>
</body>
</html>
