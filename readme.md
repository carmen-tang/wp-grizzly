# GRIZZLE: A WP SITE

A functioning WP theme based on a static Grizzly theme by Carmen Tang. 

## Notes & Features:

* Advanced Custom Fields: See Pages > Testing
* Custom Widgets for text editing on homepage: See Appearance > Widgets (some are fields unused)
* Simple styled posts & pages are set up to show the WYSIWYG content. A sample post and a sample page are included. Post includes the title; pages do not. This was on purpose. But very easy to implement the title if desired.
* Original form has been discarded, and the Formidable plugin has replaced it. Entries are located in the Formidable admin instead of sending to email. Form placeholder is now slightly transparent by choice. I felt it was better UX. 
* Instagram script remains the same- could not find an Instagram or carousel plugin that fit the needs of my original build. I've worked with clients who wanted an instagram feed before and this implementation, I think is fine because the client doesn't really need to change anything with the code. They just add the images to the feed. 
* A few small adjustments were made to fit the needs of WordPress. For example, the footer is now permanently at the bottom of the view. Pages or posts that do not have long enough content will have the footer at the bottom instead of being relative to the content. Logo leads to the WordPress homepage now. 
* I used a base/barebones WordPress build with gulp simply so that I did not have to reinvent the wheel and build every single file by scratch. But I modified it to fit the needs of this project, and knowing how to is the important part, I think! 
* The most basic required WordPress files are used, and the auxillary ones might not be included because I did not need them. I did not use sidebar.php or comments.php for example. 
* Everything should function as intended! Enjoy! 

## INSTALLATION

### REQUIRED

* Install [npm](http://blog.npmjs.org/post/85484771375/how-to-install-npm).
* Install [Gulp](http://gulpjs.com/): `npm install -g gulp`.
* Install [JSHint](http://jshint.com/): `npm install -g jshint`.


## SETUP

* `npm install` to install packages
* If all is successful, run `gulp`

IMPORTANT:

* The script variable and enqueuing functions in `src/inc/assets.php`; these are tightly coupled with the output of the build process.
* `functions.php` includes `assets.php` as well as some other WP functions for this theme.


## ORGANIZATION

* `src`: this directory contains the raw material for the theme: templates (`src/`), PHP includes (`src/inc`), language files (`src/languages`), styles (`src/scss`), scripts (`src/js`), and images (anywhere under `src/`).


