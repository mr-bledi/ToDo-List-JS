<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todo List app</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app/resources/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="app/resources/css/style.css">
  </head>
  <body>

    <header>
      <input type="text" placeholder="Enter an activity.." id="item">
      <button id="add">
         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"> <path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1 s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/> </svg>
      </button>
    </header>
    <div class="container">
      <ul class="todo" id="todo"></ul>

      <ul class="todo" id="completed"></ul>
    </div>

    <script src="app/resources/js/main.js" charset="utf-8"></script>
  </body>
</html>
