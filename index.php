<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
<table border="1">
    <tr> 
        <th>ID </th>
        <th> firstname </th>
        <th> lastname </th>
        <th> email </th>
        <th>phone </th>  
    </tr>
    <?php 
    $cnx=new PDO('mysql:host=localhost;dbname=dsi21_g1_2019','root','');
    $rep=$cnx->query('SELECT*from students');
    while($data=$rep->fetch())
    {
        echo '<tr>';
        echo '<td>'.$data ['id'].'</td>';
        echo '<td>'.$data ['firstname'].'</td>';
        echo '<td>'.$data ['lastname'].'</td>';
        echo '<td>'.$data ['email'].'</td>';
        echo '<td>'.$data ['phone'].'</td>';
        echo'<td><a href="update.php">
        <input type="button" type="button" class="btn btn-outline-primary" value="modifier"/></a>';
    
    }
    ?>
    </table>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
