<?php


         
         
         
      $pdo = new PDO ( "mysql:host = localhost; dbname=ch35098_myprojec","ch35098_myprojec","m0t0r0la");   
      $statement = $pdo->prepare("SELECT * FROM articles");
      $statement->execute();
      $tasks=$statement->fetchAll(PDO::FETCH_ASSOC);
     
     /* $statement = $pdo->prepare("SELECT COUNT (*) FROM articles");
      $count = $statement->fetch_row($statement);
     $count= 3;*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylescheet" href="css/css.css">
</head>
<body>
	<nav class="navbar navbar-expandet-md navbar-light bg-light " >
	<div class="container-fluid">
		<a href="#" class="navbar-brad"><img srs="img/logo.php"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a href="#" class="nav-link">Главная</a>
			</li>
			<li class="nav-item active">
				<a href="#" class="nav-link">Щ нас</a>
			</li>
			<li class="nav-item active">
				<a href="#" class="nav-link">Контакты</a>
			</li>
			<li class="nav-item active">
				<a href="#" class="nav-link">Команда</a>
			</li>
			<li class="nav-item active">
				<a href="#" class="nav-link">Сервисы</a>
			</li>
		</ul>	
		</div>
		</nav></div>
		<div class="row">
			<div class="col-md-12">
				<h1>All tasks</h1>
				<button type="button" class="btn btn-primary">
  Всего задач <span class="badge badge-light">9<?= $count;?></span>
  <span class="sr-only">unread messages</span>
</button>
				<a href="create.php" class="btn btn-success">Add tasks</a>
				
				
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Actions</th>
								
							
						</tr>
					</thead>
					<tbody>
						<?php foreach($tasks as $task):?>
						<tr>
							<td><?= $task['id'];?></td>
							<td><?= $task['text'];?></td>
							
                            <td><a href="show.php?id=<?= $task['id'];  ?>" class="btn btn-info">Show</a></td>
							<td><a href="edit.php?id=<?= $task['id'];  ?>"class="btn btn-warning">Edit</a></td>
							<td><a onclik="return confirm("a you sore?); href="delete.php?id=<?= $task['id'];  ?>" class="btn btn-danger">Delete</a></td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
	
</body>
</html>
