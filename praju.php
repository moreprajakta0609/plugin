<?php
/*
Plugin Name: praju
Plugin URL: http://wordpress.com/
Description: Simple content hello sentence created
Version: 1.0
Author: Er.Prajakta
Author URL: http://wordpress.com/
*/

add_action("admin_menu","addMenu");
function addMenu()
{
    add_menu_page("Example Option ","Example Option", 4, "example-option","exampleMenu");
}


function exampleMenu()
{
    echo "Hii guyss..";
}



