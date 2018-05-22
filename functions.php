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
        
        //basis
        echo "<div id = 'bodyType'>  Type: ", $got, "</div>"; 
        echo "<div id = 'fightStyle'>Style: " , $style, "</div>";
        
        //story/background
        $chooseStory = rand(0, 2);
        if($chooseStory == 0)
        {
            echo "<div id = 'story'> Make a sad background story </div>";
        }
        
        elseif($chooseStory == 1)
        {
            echo "<div id = 'story'> Make a neutral background story </div>";
        }
        
        else
        {
            echo "<div id = 'story'> Make a happy background story </div>";
        }
    
        $alignment = rand(1,9);
        
        switch($alignment)
        {
            case 9:
                echo "<div id = ali> Your character is <strong> Chaotic Good </strong> </ali>";
                break;
                
            case 8:
                echo "<div id = ali> Your character is <strong> Chaotic Neutral </strong> </ali>";
                break;
            
            case 7:
                echo "<div id = ali> Your character is <strong> Chaotic Evil </strong> </ali>";
                break;
                
            case 6:
                echo "<div id = ali> Your character is <strong> Neutral Good </strong> </ali>";
                break;
                
            case 5:
                echo "<div id = ali> Your character is <strong> True Neutral </strong> </ali>";
                break;
                
            case 4:
                echo "<div id = ali> Your character is <strong> Neutral Evil </strong> </ali>";
                break;
                
            case 3:
                echo "<div id = ali> Your character is <strong> Lawful Good </strong> </ali>";
                break;
                
            case 2:
                echo "<div id = ali> Your character is <strong> Lawful Neutral </strong> </ali>";
                break;
                
            case 1:
                echo "<div id = ali> Your character is <strong> Lawful Evil </strong> </ali>";
                break;
                
        }
        
        //stats
        echo "<div id = 'hp'><p>Health: ", $data[0],  "</p></div>";
        echo "<div id = 'str'><p>Strength: ", $data[1], "</p></div>";
        echo "<div id = 'dex'><p>Dexterity: ", $data[2], "</p></div>";
        echo "<div id = 'con'><p>Constitution: ", $data[3], "</p></div>";
        echo "<div id = 'int'><p>Intelligence: ", $data[4], "</p></div>";
        echo "<div id = 'wis'><p>Wisdom: ", $data[5], "</p></div>";
        echo "<div id = 'cha'><p>Charisma: ", $data[6], "</p></div>";
    }

?>