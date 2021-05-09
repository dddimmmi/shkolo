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

      <form  class="form-horizontal" method="post" action="{{route('shkolo.update', $shkolo->id)}}" id="shkolo">
      @csrf
      @method('PUT')
      <div class="form-group col-sm-10 margin-top-sm" >
        <label for="title" class="control-label col-sm-2">Title:</label>
         <div class="col-sm-8">
        <input type="text" class="form-control" name="title" id="title" value="{{$shkolo->title}}" placeholder="title">
        </div>
      </div>
      <div class="form-group col-sm-10">
        <label for="link"  class="control-label col-sm-2">Link:</label>
        <div class="col-sm-8">
        <input type="url" class="form-control" id="link"  name="link"  value="{{$shkolo->link}}" placeholder="link">
        </div>
      </div>
      <div class="form-group col-sm-10" >
        <label for="color"  class="control-label col-sm-2">Color</label>
        <div class="col-sm-8">
        <select class="form-control" id="color" name="color">
          <option>-- Color --</option>
          <option value="Red" {{ $shkolo->color == 'Red' ? 'selected' : ''}}>Red</option>
          <option value="Blue" {{ $shkolo->color == 'Blue' ? 'selected' : ''}}>Blue</option>
          <option value="Green" {{ $shkolo->color == 'Green' ? 'selected' : ''}}>Green</option>
          <option value="Yellow" {{ $shkolo->color == 'Yellow' ? 'selected' : ''}}>Yellow</option>
          <option value="Brown" {{ $shkolo->color == 'Brown' ? 'selected' : ''}}>Brown</option>
           
        </select>
         </div>
      </div>
      <div class="form-group  col-sm-8" >
      <button type="submit" class="btn btn-primary pull-right">Update</button>
      </div>
      </form>
</div>
</body>
</html>