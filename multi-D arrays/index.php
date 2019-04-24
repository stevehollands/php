<?php 

$soulmate = array (
    'birth' => 1984,
    'first_name' => 'Lien',
    'last_name' => 'Ketels',
    'hobbies' => array ('fietsen', 'zingen')
);

$dad = array (
    'birth' => 1942,
    'first_name' => 'Laurens',
    'last_name' => 'Hollands',
    'hobbies' => array ('kaarten', 'voetbal')
    );
    echo count($dad);
    echo "<br>";
    echo count ( $dad [hobbies]);


    $me = array (
        'birth' => 1982,
        'first_name' => 'Steve',
        'last_name' => 'Hollands',
        'hobbies' => array ('fietsen', 'lopen', 'voetbal'),
        'vader' => $dad,
        'soulmate' => $soulmate,
        );

        array_push($me[hobbies], 'taxidermie');
        $me['last_name'] = 'Peeters';
        echo "<pre>";
        print_r ($me);
        echo "</pre>";

        echo count($me);
        echo "<br>";
        echo count ( $me [hobbies]);
        echo "<br>";
        echo (count( $me [hobbies]) + count( $dad [hobbies]));
        echo "<br>";
        
        array_intersect($soulmate['hobbies'], $me['hobbies']);
        //$result = array_intersect($soulmate['hobbies'], $me['hobbies']);
        //print_r($result);

        echo "<br>";
        array_merge($soulmate['hobbies'], $me['hobbies']);
        //$result = array_merge($soulmate['hobbies'], $me['hobbies']);
        //print_r($result);

        
        $web_development = array (
        'frontend' => array(),
        'backend' => array(),
        );
    
        array_push($web_development['frontend'], 'xhtml');
        array_push($web_development['backend'], 'Ruby on Rails');
        array_push($web_development['frontend'], 'CSS');
        array_push($web_development['backend'], 'Flash');
        array_push($web_development['frontend'], 'javascript');
        array_push($web_development['backend'], 'javascript');

        $web_development['frontend'][0]='html';
       //$web_development['backend'][1]=null; // de index 1 wordt hier behouden maar waarde is null dus flash wordt niet meer weergegeven
        unset($web_development['backend'][1]);
        print_r($web_development);
?>