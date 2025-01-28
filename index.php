<?php
require_once('./vendor/autoload.php'); // Ensure Composer's autoloader is included
use Smarty\Smarty;

try {
    $smarty = new Smarty();

    // Use setter methods to configure Smarty directories
    $smarty->setTemplateDir('templates');
    $smarty->setCompileDir('templates_c');
    $smarty->setCacheDir('cache');
    $smarty->setConfigDir('configs');

    // Assign variables to the template
    $smarty->assign('greeting', 'Hello');
    
    // Display the template
    $smarty->display('index.tpl');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

/**
 Create admin panel to manage quiz questions. 
Features to be included:
1. Add Questions
2. Add Dynamic number of options
3. Select only one option as correct with radio button
4. Display All Questions With Columns, No., Questions, Options, Correct Option. All options should be shown in drop down list.
5. Include search for Questions
6. include Crud operation.
7. Proper UI Design
8. Handle with API
9. Use MVC.
10. Use PHP smarty
*/