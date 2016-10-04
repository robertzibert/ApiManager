<ul id="slide-out" class="side-nav fixed">
@foreach($models as $model)
  <li><a href="/dashboard/{{$model}}">{{$model}}</a></li>
@endforeach
</ul>
