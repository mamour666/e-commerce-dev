<!DOCTYPE html>
<html>
<head>
  <meta name="wiewport" content="width=device-width,initial-scale=1">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<title>SEN Shopping</title>
<link href="{{ asset('css/main.css') }}" rel="stylesheet" />
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <i class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Senshopping</i>
      <i class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Deconnexion</i>
      <ul class="navbar-nav px-3">
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Tableau de Bord <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <span data-feather="file"></span>
                  Page D'accueuil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/edit">
                  <span data-feather="shopping-cart"></span>
                 Modifier produit
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Supprimer produit
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Voir Produit
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/insert">
                  <span data-feather="bar-chart-2"></span>
                  Ajouter Produit
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tableau de Bord</h1>
            <h1>Liste des Produits</h1>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->category}}</td>
                  <td style=><img src="css/image/{{$product->image}}" style="width:50px; height:50px; " alt=""></td>
                  <td width=300>
                  <a class="btn btn-default" href="/view/{{ $product->id }}"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                  <a class="btn btn-primary" href="{{route('edit',$product['id']) }}"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                    {{" "}}
                  <a class="btn btn-danger" href="/delete/{{ $product->id }}"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                  </td>
                </tr>
            @endforeach    
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    
  </body>
</html>