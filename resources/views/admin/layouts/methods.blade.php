<div class="col s12">
  <ul class="tabs">
    @foreach($methods as $method)
      <li class="tab col s3"><a href="#{{$method}}">{{$method}}</a></li>
    @endforeach
      <li class="tab col s3"><a href="#add">+</a></li>
  </ul>
</div>

@foreach($methods as $method)
  <div id="{{$method}}" class="col s12">
    @include('admin.layouts.routing')
  </div>
@endforeach
<div id="add" class="col s12">Add new method</div>
