<?php
include './components/connection.php';
//include './graph.php';

?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="public/style.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/src/public/css/main.css" >
    
        <title>Weekly Retention curves chart</title>
    </head>
    
    <body>
    	<div class="col-md-6 offset-md-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                    	<h1>
                    		<span>Weekly Retention Matrix</span>
                    	</h1>
                	</div>
                </div>
            </div>
		</div>

        <div class="container">
            <table class="simple_zebra"> 
                    <thead> 
                            <tr> 
                                <th>Retention Matrix</th>
                                <th>NEW USER</th> 
                                <th>week 1 </th> 
                                <th>week 2 </th> 
                                <th>week 3 </th> 
                                <th>week 4 </th> 
                                <th>week 5 </th> 
                                <th>week 6 </th>
                            </tr> 
                    </thead> 
                    <tbody> 
                    <?php
                        include './components/table.php';
                        ?>
                    </tbody> 
            </table> 
        </div>
    
        
    </body>
</html>


