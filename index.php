<!--simple card reading-->

<?php
    include 'functions.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url(css/styles.css);
        </style>
        <title>
            Character Maker
        </title>
    </head>
    
    <body>
        <h1>

            <p>Press the button to create your character. </p>
        </h1>
        
        <div id="main">
            <form>
                <input type="submit" value="Choose!" />
            </form>
            
            <?php  play(); ?>
        </div>
    </body>
</html>