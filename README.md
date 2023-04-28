# CVC
Code Structure:
The code is structured into the following files:

index.php: This file is the entry point of the application. It contains the routing logic that determines which controller method to call based on the requested URI.

route.php: This file contains a function matchRoute that checks if the requested URI matches a given route.

controller/PageController.php: This file contains the PageController class, which implements the controller part of the MVC pattern. It contains methods that handle different requests and call the appropriate view.

view.php: This file is the view part of the MVC pattern. It contains the HTML template that is rendered by the PageController.

Error Handling:
The code includes try-catch blocks in appropriate places to catch any potential exceptions that may occur during execution. These blocks handle exceptions by logging the error message and displaying a user-friendly error message to the user.

Usage:
To use this code, simply upload it to a web server with PHP installed and navigate to the root directory in a web browser. The index.php file will be executed and the appropriate controller method will be called based on the requested URI.




