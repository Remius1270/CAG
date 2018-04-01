@extends('partials.head')

@extends('partials.sidebar')

<body class="login">
  <div class="col-lg-4 center">
    <div class="card ">
      <div class="card-header">
        <h5 class="card-category" style="color:white;">Cringy Anime Group</h5>
        <h4 class="card-title login-card-category">Ajouter un article</h4>
      </div>
      <div class="card-body">
        <div class="col-sm-12">
          <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group login-form">
              <textarea class="form-control" placeholder="Article..." rows="5"></textarea>
            </div>
          </form>
        </div>
      </div>
      <div class="card-footer">
          <a class="btn btn-primary btn-round" href="{{url('create')}}">Envoyer</a>
      </div>
    </div>
  </div>
      <div class="background-video">

      </div>
    </body>
