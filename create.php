<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>exercice 1</title>
</head>
<body>s
    <div class="container">
    <fieldset>
        <legend>gestion des etudients</legend>
        <form action=" store.php" method="post">
        <div class="form-group">
             <label for="id">id</label> 
             <input type="text" name="id" class="form-control"  id="id">
            </div>
            <div class="form-group">
             <label for="firstname">firstname</label> 
             <input type="text" name="firstname" class="form-control" id="firstname">
            </div>
            <div class="form-group">
             <label for="lastname">lastname</label> 
             <input type="text" name="lastname" class="form-control" id="lastname">
            </div>
            <div class="form-group">
             <label for="email">email<label> 
             <input type="text" name="email" class="form-control"  id="email">
            </div>
            <div>
            <div class="form-group">
             <label for="phone">phone<label> 
             <input type="text" name="phone" class="form-control"  id="phone">
            </div>
                <button type="submit" class="btn btn-primary">ajouter</button>
            </div>
        </form>
    </fieldset>
    </div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>