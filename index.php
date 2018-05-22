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
            Simple Card Reading
        </title>
    </head>
    
    <body>
        <h1>
            <p>Hello.</p>
            <p>Think of a question and then press the button to get a card reading.</p>
        </h1>
        
        <div id="main">
            <form>
                <input type="submit" value="Spin!" />
            </form>
            
            <?php  play(); ?>
        </div>
    </body>
</html>