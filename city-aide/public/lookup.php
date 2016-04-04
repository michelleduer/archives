<?php

/***********
*
* Allows anybody to lookup an address and get basic results
*
***********/

    // configuration
    require("../includes/config.php"); 
    
    // if address was entered
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // valid submission entered?
        if (empty($_POST["address"]) || ($_POST["address"] == 1))
        {
            apologize("Please enter a valid address.");       //TODO:  add + status, var status explaining the error
        }
        else
        {
            // render results
            echo "render results_form\n";
            render("results_form.php", $address);
        }
    }
    else
    {
        // else render lookup form again
        echo "render lookup_form\n";
        render("lookup_form.php", ["title" => "Address Lookup"]);
    }
?>
