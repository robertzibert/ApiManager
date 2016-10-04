<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.7.0/styles/default.min.css">
    <style type="text/css" media="screen">
        #editor {
            height: 300px;
        }
    </style>
    <title>API Manager</title>
  </head>
  <body>
    @include('admin.layouts.sidenav')

    <main style="padding-left:300px">
      @include('admin.layouts.breadcrumbs')

      @yield('content')
    </main>

  </body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.7.0/highlight.min.js"></script>
  <script src="https://cdn.jsdelivr.net/g/ace@1.2.4(min/ace.js+min/ext-beautify.js+min/ext-chromevox.js+min/mode-javascript.js+min/theme-monokai.js)"></script>

  <script>hljs.initHighlightingOnLoad();</script>
  <script>
      var editor = ace.edit("editor");
      editor.setTheme("ace/theme/monokai");
      editor.getSession().setMode("ace/mode/javascript");
  </script>
  @yield('script')
</html>
