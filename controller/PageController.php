<?php

class PageController
{
    public function index()
    {
        // Render the view with the specified content
        $this->renderView('I\'m in the homepage');
    }
    
    public function folder1()
    {
        // Render the view with the specified content
        $this->renderView('I\'m in folder1');
    }
    
    public function folder2()
    {
        // Render the view with the specified content
        $this->renderView('I\'m in folder2');
    }
    
    private function renderView(string $content)
    {
        try {
            // Include the view file and pass the content variable to it
            include __DIR__ . '/../view.php';
        } catch (Exception $e) {
            // Log the error and display a generic error message to the user
            error_log('Error rendering view: ' . $e->getMessage());
            echo 'An error occurred while rendering the view.';
        }
    }
}