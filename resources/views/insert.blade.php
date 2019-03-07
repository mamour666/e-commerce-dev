
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
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Senshopping</a>
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
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/insert">
                  <span data-feather="layers"></span>
                  Ajouter produits
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
         <div class="container admin">
            <div class="row">
            <div class="col-md-12">
                <h1><strong>  Ajouter un produit</strong></h1>
                </div>
                <br>
                <div class="col-md-12">
                <form class="form" action="/insert" role="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                        <span class="help-inline"></span>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
                        <span class="help-inline"></span>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Prix(en fcfa):</label>
                        <input type="number" step="0.01" class="form-control" name="price" placeholder="Prix" required>
                        <span class="help-inline"></span>
                    </div>
                    </div>
                   <div class="col-md-12">
                    <div class="form-group">
                        <label for="category">Catégorie:</label>
                        <input class="form-control" id="category" name="category" required>
                        <span class="help-inline"></span>
                    </div>
                     </div>
                     <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Sélectionner une image:</label>
                        <input type="file" id="image" name="image" required> 
                        <span class="help-inline"></span>
                    </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Ajouter</button>
                        <a class="btn btn-primary" href="/welcomeadmin"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                   </div>
                  </div>
                </form>
            </div>
        </div>   
    </body>
</html>