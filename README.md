# 'Access Control Allow Origin' for ExpressionEngine

This plug-in lets you set a Access-Control-Allow-Origin header for a specific page template in ExpressionEngine 2.x. This can be useful if you want to grant access to content in a template via a AJAX request from another domain.

BASIC USAGE:

    {exp:np_access-control-allow-origin domain="www.example.com"}

PARAMETERS:

domain = 'www.example.com' (optional)
 - if specified uses the provided domain, otherwise allows all remote hosts.
