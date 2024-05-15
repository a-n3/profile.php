<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('Document')
    </title>
</head>
<body>
    @yield <div class="header">
    <a href="#default" class="logo"><img src="./img/Code typing-bro.png" alt=""width="100px" style="filter:drop-shadow(10px 7px 10px #4fb2ae ) "></a>
        <div class="header-right">
          <a class="active" href="{{URL::to('/')}}">Home</a>
          <a href="{{URL::to('/2')}}">Skills</a>
          <a href="{{URL::to('/3')}}">Project</a>
        </div>
    </div>
</body>
</html>