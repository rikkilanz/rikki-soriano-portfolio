<?php
    // We call the init.php file to import other php documents like the functions and the Class blueprint for the prject object
    require_once(get_path('src/init.php'));


    // We create a new object from the class Project we imported with require()
    $terra_fortuna = new Project([
        // Within the class project, we create a constructor to basically set our own variable names and values.
        // For example: 'name' is a variable we created in Project class using the __construct method.
        // 'name' is assigned to the class property $name where it gets stored, specifically for this object($this).
        'name' => 'Terra Fortuna | Mobile Responsive Landing Page',
        // Same thing here, we assign the value string filename to constructed variable 'image_url
        // 'image_url' => 'terra-fortuna-thumb.jpeg',
        // We assign the value string description to constructed variable 'description'
        'description' => 'A website structured with HTML, styled with CSS, and used JavaScript plugins.',
        // Here, we create an array to support multiple data
        'type' => ['CODING', 'HTML', 'CSS', 'JS', ]
    ]);

    $klin_klothing = new Project([
        'name' => 'klin klothing | Mobile App Prototype',
        'description' => 'A working Adobe XD prototype of a mobile app for a fictional clothing brand.',
        'type' => ['UIUX', 'WIREFRAMING', 'Adobe XD',]
    ]);

    $live_2k = new Project([
        'name' => 'Live 2K | Coded Website Prototype',
        'description' => 'A working website protoype coded with HTML and CSS',
        'type' => ['CODING', 'PHP', 'UIUX']
    ]);

    $fizzy_pop= new Project([
        'name' => 'Fizzy POP | Beverage Branding',
        'description' => 'A branding project for a fictional soda beverage company.',
        'type' => ['GRAPHICS', 'BRANDING', 'PACKAGING']
    ]);

    $weather_now= new Project([
        'name' => 'Weather Now | React.js Web App',
        'description' => 'A weather app using an API call to display the weather forecast using the React.js framework',
        'type' => ['CODING', 'React.js']
    ]);
    $filcoop_bc= new Project([
        'name' => 'FILCOOP BC | Website Redesign',
        'description' => 'A website redesign to support modern web standards, better accesbility and user experience for the webs users of FIL-COOP BC',
        'type' => ['UIUX', 'Figma']
    ]);

    // This is the array that we call in our index.php with a foreach loop so it loops through all the objects and gets displayed in the card with their assigned values in this file.
    $projects = [
        $terra_fortuna,
        $klin_klothing,
        $live_2k,
        $fizzy_pop,
        $weather_now,
        $filcoop_bc,
    ];