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
                $style = "rouge";
                break;
            case 1:
                $style = "warrior";
                break;
            case 2:
                $style = "cleric";
                break;
            case 3:
                $style = "wizard";
                break;
        }
        
        $data = array();
        
        for($i = 0; $i < 7; ++$i)
        {
            $chosenNum = rand(0, 20);
            if($i == 0)
            {
                while($chosenNum < 8)
                {
                    $chosenNum = rand(8, 20);
                }
            }
            if($i > 0)
            {
                while($chosenNum == $data[$i - 1])
                {
                    $chosenNum = rand(0, 20);
                }
            }
            
            array_push($data, $chosenNum);
        }
        
        echo "<div id = 'bodyType'>  Type: ", $got, "</div>", 
                "<div id = 'fightStyle'>Style: " , $style, "</div>";
        echo "<div id = 'hp'><p>Health: ", $data[0],  "</p></div>";
        echo "<div id = 'str'><p>Strength: ", $data[1], "</p></div>";
        echo "<div id = 'dex'><p>Dexterity: ", $data[2], "</p></div>";
        echo "<div id = 'con'><p>Constitution: ", $data[3], "</p></div>";
        echo "<div id = 'int'><p>Intelligence: ", $data[4], "</p></div>";
        echo "<div id = 'wis'><p>Wisdom: ", $data[5], "</p></div>";
        echo "<div id = 'cha'><p>Charisma: ", $data[6], "</p></div>";
    }

?>