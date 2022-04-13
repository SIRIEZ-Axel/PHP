<html>
    <body>
        <?php 
            $name = 'Axel';
            $age = 24;
            $eyes_color = 'blue';
            $hungry_or_not = true;
            $family = array(
                0 => 'Christine', 
                1 => 'Axel', 
                2 => 'Lempika', 
                3 => 'Prada', 
                4 => 'Oreo', 
                5 => 'Océane',
                6 => 'Virginie',
                7 => 'Jeremy' ); 
        ?>

        <p> Hi! My name is <?php echo $name?></p>
        <p> I'm <?php echo $age?> years old</p>
        <p> My eyes are <?php echo $eyes_color?></p>
        <p> The first person in my family is <?php echo $family[0]?></p>
        <p> Am I hungry? <?php echo $hungry_or_not ?> </p>
    </body>
</html>