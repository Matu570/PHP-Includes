<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>
    <!-- There is the header here, from includes folder or directory-->
    <?php
        include 'includes/header.php';
        //Also of "includes", i can use include_once 'file', and also require 'file', or require_once 'once'. These are safer.
    ?>
    <div>
        <h2>This is the Home page</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At deleniti necessitatibus libero fuga esse enim? Ex, rerum id temporibus, voluptatem vel, facere voluptates repudiandae minima numquam cupiditate praesentium laboriosam reiciendis.</p>
    </div>
    <hr>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>