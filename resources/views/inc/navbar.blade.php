<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" name="button" name="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Acme</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
        <li class="{{Request::is('contact') ? 'active' : ''}}" ><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- <nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="#">WebSiteName</a>
   </div>
   <ul class="nav navbar-nav">
     <li class="active"><a href="#">Home</a></li>
     <li><a href="#">Page 1</a></li>
     <li><a href="#">Page 2</a></li>
     <li><a href="#">Page 3</a></li>
   </ul>
 </div>
</nav> -->
