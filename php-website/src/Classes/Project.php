<?php

    // We create a new blueprint
    // We create a new class called Project
    class Project{
        
        // This class needs variables such as the Project Name, Image Url of the file, Description, and the type of Project
        // We use the publicc access modifier so it's accesible everywhere.
        public $name;
        public $image_url;
        public $description;
        public $type;

        // This is a constructor
        // Constructors allows as to initialize the properties of an object.
        // Like in the projects.php, we assign values to these properties like calling the "property variable name'=>value
        // We use the parameter ($args = []) to support an array type which contains mulitple data.
        public function __construct($args = []){
            $this->name = $args['name'];
            $this->description = $args['description'];
            // $this->image_url = $args['image_url'];
            $this->set_image($args['name']);
            $this->type = $args['type'];
        }


        // This function is called later in the contruct method.
        // This function looks for the project name. If the project name is empty or null, throw an exception saying that it couldn't find the file name base on the name.
        public function set_image($name) {
            try {
                // Creating a loop with condition that check if $this->name is valid.
                // We check if its empty or null
                if($this->name == '' || NULL) {
                    // When empty or null, throw an exception saying can't find file name based on project name.
                    throw new Exception('No file found from project name');
                } else {
                    // If it's valid, we use the function explode() to divide the name text to an array.
                    // Explode divides a string of texts into array values per word.
                    // We then put it in a variable  which we can later concatenate to a root name "-thumb.jpg"
                    $namesplode = explode(" ", $name);
                    // The variable the stores the concatenated strings
                    $name_split = strtolower($namesplode[0]) . "-" . strtolower($namesplode[1]) . '-thumb.jpg';
                    // We then assign that variable to $this->image_url which is the new object that is instantiated/constructed
                    $this->image_url = $name_split; 
                }
                // When exception is caught, store it in variable $e and then display the exception
            }  catch(Exception $e) {
                echo $e;
            }               
        }  
    } 

?>