<!DOCTYPE html>
<html>
<head>
  <meta name="wiewport" content="width=device-width,initial-scale=1">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="css/image/owl.theme.default.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<title>SEN Shopping</title>
<link href="{{ asset('../css/main.css') }}" rel="stylesheet" />
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  </head>
<body>
         <div class="container admin">
            <div class="row">
               <div class="col-sm-6">
                    <h1><strong>Voir un produit</strong></h1>
                    <br>
                    <form>
                      <div class="form-group">
                        <label>Nom:</label> {{$product->name}}
                      </div>
                      <div class="form-group">
                        <label>Description:</label> {{$product->description}}
                      </div>
                      <div class="form-group">
                        <label>Prix:</label> {{$product->price}}
                      </div>
                      <div class="form-group">
                        <label>Catégorie:</label> {{$product->category}}
                      </div>
                      <div class="form-group">
                        <label>Image:</label> {{$product->image}}
                      </div>
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="/welcomeadmin"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </div> 
                <div class="col-sm-4 site">
                    <div class="thumbnail">
                        <img src="{{'../css/image/'.$product->image}}" alt="...">
                        <div class="price"></div>
                          <div class="caption">
                            <h4></h4>
                            <p></p>
                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>

