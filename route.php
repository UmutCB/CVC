<?php

/**
 * Matches a route against a request URI.
 *
 * @param string $route The route to match.
 * @param string $requestUri The request URI to match against.
 * @return bool True if the route and request URI match, false otherwise.
 */
function matchRoute(string $route, string $requestUri): bool
{
    try {
        // Remove query string from request URI
        $requestUri = strtok($requestUri, '?');
        
        // Add leading slash to route if not present
        if ($route[0] !== '/') {
            $route = '/' . $route;
        }
        
        // Match route against request URI
        return $route === $requestUri;
    } catch (Throwable $e) {
        // Log the exception
        error_log($e);
        
        // Return false to indicate that the route did not match
        return false;
    }
}