<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .test{
        width: 80%;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <div class="test">
      <h1>Hello World From test.te</h1>
      <h1> Your Name Is :  {{$nama}} </h1>
      <p>
        Data From Array : {{$data}} {{$data['nama']}}
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </body>
</html>
