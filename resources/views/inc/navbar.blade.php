<nav class="navbar navbar-expand-lg navbar-light bg-light container" >
<a class="navbar-brand" href="#">{{config('app.name', 'LSAPP')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
        <ul class="nav navbar-nav">
        <li><a class="nav-item nav-link active" href="/testApp/public">Home <span class="sr-only">(current)</span></a></li>
        <li><a class="nav-item nav-link" href="services">Services</a></li>
        <li><a class="nav-item nav-link" href="about">about</a></li>
        <li><a class="nav-item nav-link" href="posts">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
             <li><a href="/posts/create" class="nav-item nav-link">Create Post</a></li>
        </ul>
    </div>
  </nav>