<!DOCTYPE html>
<head>
    <title></title>
    <div class="welcome">
    <h1>Welcome to my new Company
    </h1>
    </div>
    {!! HTML::style('css/app.css') !!}
    
</head>
<body>
<!--<img src="/logo/signage.png" />-->

        <div class="links">
       <!-- <a href="location">Location </a>-->
        <a href="login">Login</a>
        <a href="register">Register</a>
       <!-- <a href="language">Language</a>
        <a href="maps">Map</a>
        <a href="home">About us</a>
        <a href="verification">Contact us</a>-->
        </div>
      <!-- {!!HTML::script('js/watch.js')!!}-->
       <script src="{{asset('js/watch.js')}}" defer></script>
        <span id="watch"></span>
        <!--
        <div class="toyota">
        <table>
        <tr>
            <td><img src="/TOYOTA/dusty.jpg"></td>
            <td> <img src="/TOYOTA/kenny.jpg"></td>
            <td><img src="/TOYOTA/kyle.jpg"></td>
            </tr>
            <tr>
            <td><img src="/TOYOTA/ladimir.jpg"></td>
            <td><img src="/TOYOTA/lukasz.jpg"> </td>
            <td><img src="/TOYOTA/lukaszn.jpg"> </td>
            </tr>
            <tr>
            <td><img src="/TOYOTA/tim.jpg"> </td>
            <td> <img src="/TOYOTA/vlad.jpg"> </td>
            <td><img src="/TOYOTA/xavier.jpg"> </td>
            </tr>
            </table>
            
        </div>
        -->
    <footer>
<h2>Hello {{$name}}</h2>
<h3>You're one step to a {{$Occupation}}</h3>
<p>Feel exited</p>
</footer>
    </body>
</html>