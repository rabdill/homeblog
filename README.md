Hello! This is my personal website, but it's also a working example of HomeBlog, the
blogging system you can embed in any website you want, rather than having to set up
a whole new Wordpress site every time you want a blog.

The only tricky part to change is the .htaccess file, which you should DEFINITELY
put into the /blog/admin directory, to protect your CMS admin pages with a password.
To set it up, place a text file called .htaccess (without any file extension) in the admin
directory, and paste this into it:

AuthName "NICE TRY, JERKNACHO."
AuthType Basic
AuthUserFile /var/www/.htpasswd
AuthGroupFile /dev/null
<Files *>
require valid-user
</Files>

That line with the "AuthUserFile" should point to the directory where you place your
usernames and passwords—it's probably best to put the .htpassword file somewhere
outside of your web root, so your server can see the file but browser users can't. To
set THAT file up, go here:
http://www.tools.dynamicdrive.com/password/#.U1cTdfldXn8

And enter your usernames and passwords. The tool will not only generate a file for
you, but also encrypt your passwords so you don't have to store any in plain text.