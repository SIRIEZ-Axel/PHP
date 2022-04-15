<h2>exercice 1</h2>
<?php
    $family = array ('maman', 'marraine', 'frere');
    echo '<pre>';
    print_r ($family);
    echo '</pre>';
?>


<h2>exercice 2</h2>
<?php
    $recipe = array ('pizza', 'stoemp', 'spaghetti');
    echo '<pre>';
    print_r ($recipe);
    echo '</pre>';
?>

<h2>exercice 3</h2>
<?php
    $movies = array ('Edward Scissorhands', 'fight club', 'snatch', 'harry potter', 'the mask');
    echo '<pre>';
    print_r ($movies[0]);
    echo '</pre>';
?>

<h2>exercice 4</h2>
<?php
    $mom = array(
        'firstname' => 'Christine',
        'age' => 60,
        'favourite season' => 'summer',
        'play soccer' => false,
        'favourite movies' => array('Dirty dancing', 'mamamia'),
        'Hobbies' => array('Cuddle cats', 'watching series/Movies', 'go shopping'),
    );

    $me = array(
        'firstname' => 'axel',
        'age' => 24,
        'favourite season' => 'summer',
        'play soccer' => true,
        'favourite movies' => array('Harry Potter', 'Edward Scissorhands', 'Trueman show', 'Fight club'),
        'Hobbies' => array('Cuddle my cats', 'watching series/Movies', 'Playing video games'),
        'Mother' => $mom,
        );

    $me['Hobbies'][] = 'taxidemy';

    echo '<pre>';
    print_r ($me);
    echo '</pre>';
?>

<h2>exercice 5</h2>
<?php
    $me2 = array(
        'hobbies' => array(
            'cuddle cats',
            'playing video games',
            'watch anime',
            'watch series & film',
            'listen to music',
            'eat ice cream')
    );
    $soulmate = array(
        'hobbies' => array(
            'cuddle cats',
            'eat vegetables',
            'watch horror movies',
            'listen to music',
            'watch anime')
    );

    // perform array operation
    $possible_hobbies_via_intersection = array_intersect($me2['hobbies'],$soulmate['hobbies']);
    $possible_hobbies_via_merge = array_merge($me2['hobbies'],$soulmate['hobbies']);

    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';
?>

<h2>exercice 6</h2>
<?php
    $web_development = array(
        'frontend' => array(),
        'backend' => array(),
    );
        
    array_push($web_development['frontend'], "xhtml", "CSS", "Javascript");
    array_push($web_development['backend'], "Ruby on Rails", "Flash");

    array_splice($web_development['frontend'], 0, 1, 'html');

    array_pop($web_development['backend']);

    echo '<pre>';
    print_r($web_development);
    echo '</pre>;'

?>