@extends('layouts.head')
<div class="form-group" >
 <a href="{{ route('shkolo') }}" class="btn btn-success">Back</a>
</div>
<form  class="form-horizontal" method="post" action="{{route('shkolo.store')}}" id="shkolo">
	@csrf
  <div class="form-group col-sm-10 margin-top-sm" >
    <label for="title" class="control-label col-sm-2">Title:</label>
     <div class="col-sm-8">
    <input type="text" class="form-control" name="title" id="title" placeholder="title">
    </div>
  </div>
  <div class="form-group col-sm-10">
    <label for="link"  class="control-label col-sm-2">Link:</label>
    <div class="col-sm-8">
    <input type="url" class="form-control" id="link"  name="link" placeholder="link">
    </div>
  </div>
  <div class="form-group col-sm-10" >
    <label for="color"  class="control-label col-sm-2">Color</label>
    <div class="col-sm-8">
    <select class="form-control" id="color" name="color">
      <option>-- Color --</option>
          <option id="red" value="Red" {{old('color') == 'Red' ? 'selected' : ''}}>Red</option>
          <option value="Blue" {{old('color') == 'Blue' ? 'selected' : ''}}>Blue</option>
          <option value="Green" {{old('color') == 'Green' ? 'selected' : ''}}>Green</option>
          <option value="Yellow" {{old('color') == 'Yellow' ? 'selected' : ''}}>Yellow</option>
          <option value="Brown" {{old('color') == 'Brown' ? 'selected' : ''}}>Brown</option>
    </select>
     </div>
  </div>
<div class="form-group  mb-3" >
 <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


