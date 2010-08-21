=== Gravatar Box ===
Contributors: Otto
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=otto%40ottodestruct%2ecom
Tags: gravatar, gravbox, otto, javascript, automatic
Requires at least: 2.8
Tested up to: 3.0.1
Stable tag: trunk

Displays a box next to the comments form with an automatically updating gravatar, or a sign up link if no gravatar is found for the user.

== Description ==

Gravatars are great. But many people don't have them. Wouldn't it be nice if, when a user was filling in the comments form, the page could automatically detect and show a users gravatar, if they have one? Or even better, show a sign up link if they don't have one?

Well, here you go.

== Installation ==

1. Upload the files to the `/wp-content/plugins/gravatar-box/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add this to your comments form somewhere: 
if (function_exists('gravbox')) gravbox();
1. Add styling for it into your style.css. 
The gravbox() code adds a div with id of "gravbox". 
The image has the "gravatar" class, and is wrapped inside another div with a class of "gravatar_frame".
The no-gravatar link is inside a p with a class of "nogravatar".
This should be enough for any styling needs. If you wish to further alter the result or the size of the gravatar, edit the gravbox.js file.


== Frequently Asked Questions ==

= How do I make this look like...? =

Consult a quality CSS expert. I added the classes and such for just that reason. With some minor CSS code, you can make it look any way you like.

If you must know, the particular CSS I use is this:
#gravbox {
float:left;
margin-right:6px;
width:96px;
height:96px;
background:url(http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=96.png);
}

#gravbox .avatar {
margin:0;
padding:0;
}

#gravbox .nogravatar {
text-align:center;
font-weight:bold;
}

#gravbox img {
border:1px solid black;
}

This makes the gravatar div into a fixed size of 96 px square, floating to the left of where I placed it (right before the comment form's fields). The background url is the default blank gray man avatar. When the person's actual gravatar loads, it has a 1 pixel solid black border. When there is no gravatar for the person, it shows the link to get one, bolded, centered, over the gray man background. The margin and padding are removed on #gravbox .avatar, because that's what appears for logged in users only, and I wanted a consistent look across the two cases.

So as you can see, styling the gravatar box is fairly easy to do for any way you want to do it.

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

== Screenshots ==

1. Gravatar without any data entry
2. Gravatar shows up when email address is entered
3. Link appears if there is no Gravatar for that email address

== Changelog ==

= 1.0.4 = 
* Modified to use new 3.0 comments form hooks. No need to edit the theme's comments form anymore, if your theme supports it!

= 1.0.3 =
Added support for logged in users. It will display their gravatar in a gravbox div same as non-logged-in users.

= 1.0.2 =
* Add toLowerCase() to gravbox.js, to allow emails with capital letters work correctly.

= 1.0.1 =
* Sorry about that, folks. Version 1.0 had two bugs that my working version did not. Somehow I checked in a version from before I corrected those bugs. 1.0.1 works now.

= 1.0 =
* First version, proof of concept.
