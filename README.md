# HTTPS for Elgg

Forces your site to use https *only*.

** Please be sure that you have https set up before enabling this plugin!! **
** If you do not do this, your site will be inaccessible!! **

## Setup

1. Install your SSL certificate.
   
   Your hosting provider likely has instructions for how to do this.

2. Add the following rules to your .htaccess file just after the line that says `RewriteEngine on`

       RewriteCond %{HTTPS} off
       RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI}
       
   This tells apache to forward all http:// requests to https://
   
3. Enable this plugin.

   This will change your site's url to use https:// so that your users don't constantly experience redirects.
   It will also ensure that all Elgg sessions are secure.
   
4. Modify line 307 of engine/lib/sessions.php to set the secure bit of the elggperm cookie to true.
   
   This is a temporary measure until a patch is submitted that allows plugins to do this.