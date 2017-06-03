<!DOCTYPE html>
<html>
<head>
<title>Example formBuilder</title>
<link rel="stylesheet" type="text/css" media="screen" href="http://formbuilder.online/assets/css/form-builder.min.css">
</head>
<body>
  <textarea id="fb-template"></textarea>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="http://formbuilder.online/assets/js/form-builder.min.js"></script>
  <script>
  jQuery(document).ready(function($) {
    'use strict';
    $(document.getElementById('fb-template')).formBuilder();
  });
  </script>
</body>
</html>