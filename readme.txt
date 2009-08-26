=== Gravatar Box ===
Contributors: Otto
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=otto%40ottodestruct%2ecom
Tags: gravatar, gravbox, otto, javascript, automatic
Requires at least: 2.8
Tested up to: 2.8
Stable tag: 1.0

Displays a box next to the comments form with an automatically updating gravatar, or a sign up link if no gravatar is found for the user.

== Description ==

Gravatars are great. But many people don't have them. Wouldn't it be nice if, when a user was filling in the comments form, the page could automatically detect and show a users gravatar, if they have one? Or even better, show a sign up link if they don't have one?

Well, here you go.

== Installation ==

1. Upload the files to the `/wp-content/plugins/gravatar-box/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add this to your comments form somewhere: 
<?php if (function_exists('gravbox')) gravbox(); ?>
1. Add styling for it into your style.css. 
The gravbox() code adds a div with id of "gravbox". 
The image has the "gravatar" class, and is wrapped inside another div with a class of "gravatar_frame".
The no-gravatar link is inside a p with a class of "nogravatar".
This should be enough for any styling needs. If you wish to further alter the result or the size of the gravatar, edit the gravbox.js file.


== Frequently Asked Questions ==

= How do I make this look like...? =

Consult a quality CSS expert. I added the classes and such for just that reason. With some minor CSS code, you can make it look any way you like.

= I see no gravatar on my page! =

Possible problems: 

- Did you add the gravbox code to your comments form?

- Are you logged in? Most themes don't display the email box when you're logged in. Log out and look at the page.

- Type in an email address for something to actually happen. The div defaults to empty, until it has something to check.

- Email addresses always contain the @ sign. Without an @, it won't bother checking.

- Can you access gravatar.com normally? The request happens in your browser, not from the website.

= Nothing happens when I type in an email! =

Open your browser's error console. Any javascript errors in there? If so, they may have stopped execution of javascript on the page. Solve those errors. This may involve deactivating other plugins which are broken and causing errors on your page.

= The gravatar it displays is wrong! =

No, it's not. Go login to your gravatar account and check.


== Changelog ==

= 1.0 =
* First version, proof of concept.
