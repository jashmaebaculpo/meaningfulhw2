<?php
    function play()
    {
        //make the arrays
        $type = array("human", "orc", "owl");
        
        //shuffle to get random variables
        shuffle($type);
        
        
        $got = $type[2];
        //show the user what they got

        
        echo "<img id = 'type' src='img/$got.jpg' 'width='70' />";
        
        
        sort($type);
        
        $num = rand(0, 3);
        $style;
        switch($num)
        {
            case 0:
                $style = "Rouge";
                break;
            case 1:
                $style = "Warrior";
                break;
            case 2:
                $style = "Cleric";
                break;
            case 3:
                $style = "Wizard";
                break;
        }
        
        echo "<div id = character> 
                <p>Type: ", $got, "</p>",
                "Style: " , $style, " </div> ";
        
        
        
    }

?>