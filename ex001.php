<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Axios CDN  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
</head>

<body class="bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6 mt-5">
        <div class="card shadow border-0">
          <div class="card-body">
            <form action="" method="post">
              <form class="form-inline">
                <div class="form-group">
                  <label for=""> Formulário: </label>
                  <input type="text" name="dado" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
                <button class="btn btn-info"> Enviar <br> dados </button>
              </form>

              <?php
                echo $_POST["dado"]
              ?>

            </form>
          </div>
        </div>
      </div>
    </div>  
  </div>

  <script>
    axios.get('http://localhost:8000')
      .then(console.log(reponse => response.data))
  
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>