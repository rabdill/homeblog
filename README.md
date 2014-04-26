Hello! This is my personal website, but it's also a working example of HomeBlog, the
blogging system you can embed in any website you want, rather than having to set up
a whole new Wordpress site every time you want a blog.

When you get started, you should DEFINITELY add an .htaccess file, and should then
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

## Adding posts
Just go to the page at /blog/admin/add.php and fill everything in! For the time being,
you have to enter dates in the "yyyy-mm-dd" format at the top, but other than that
you can use whatever HTML and CSS styling you want.

## Adding images
When you add a post, you can add a standard-sized image by putting an <img... tag
at the beginning of the post and assign it class "blog-pic" when it's in there.

To actually get the image onto the page, though, you'll need to get it onto your server
first: The easiest way is probably by connecting using something like FileZilla and 
just dragging the photos into the /blog/img directory. If you're using images that are
already online, you can SSH to your server, navigate to the /blog/img directory, and
use the "wget" command to get 'em using something like:
wget https://upload.wikimedia.org/wikipedia/commons/4/48/LADEE_w_flare_-_cropped.jpg 
That'll put it right into your folder, but keep an eye out for using this on files (like the
example above) that are waaaaay bigger than you'd need them to be.

## Editing posts
First, you need to figure out the post's postID. The easiest way to do this without going
into the database itself is to click on the post from the /blog/home.php page—the 
URL's get data contains the postID. From here, you can change the URL to
"/blog/admin/edit.php" and leave the get data at the end—rather than being taken to
the "view the post" page, you'll end up at the "edit the post" page.