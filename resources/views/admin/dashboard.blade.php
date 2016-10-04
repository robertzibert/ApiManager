@extends('admin.main')
@section('content')
  @include('admin.layouts.methods')
  <!-- Routing -->
  <div class="row">
    Middlewares
    <div class="col s12">

      <input type="checkbox" id="auth" />
      <label for="auth">auth</label>

      <input type="checkbox" id="ratelimit" />
      <label for="ratelimit">ratelimit</label>
    </div>
  </div>
  <div class="row">
    Response
    <div class="col s12">
      <input class="with-gap" name="group3" type="radio" id="text" checked />
      <label for="text">Text</label>


      <input class="with-gap" name="group3" type="radio" id="json" checked />
      <label for="json">JSON</label>

      <input class="with-gap" name="group3" type="radio" id="file" checked />
      <label for="file">File</label>
    </div>
  </div>
  <div class="row">
    Documentation
      <div id="editor" class="col s12">
          //body
      </div>
  </div>

  <div class="row">
    Validations
    <div class="input-field col s12">
     <input type="text" >
     <label class="active" for="first_name2">Title</label>
   </div>
   <div class="input-field col s12">
    <input type="text" >
    <label class="active" for="first_name2">Body</label>
  </div>
  </div>
@endsection

@section('script')
<script>
  $(document).ready(function() {
    $('select').material_select();
  });

</script>
@endsection
