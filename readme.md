# GRIZZLE: A WP SITE

A functioning WP theme based on a static Grizzly theme by Carmen Tang. 

## Notes & Features:

* Advanced Custom Fields: See Pages > Testing
* Custom Widgets for text editing: See Appearance > Widgets (some are fields unused)
* Simple styled posts & pages are set up to show the WYSIWYG content. A sample post and a sample page are included.
* Original form has been discarded, and the Formidable plugin has replaced it. Entries are located in the Formidable admin instead of sending to email. Form placeholder is now slightly transparent by choice. I felt it was better UX. 
* Instagram script remains the same- could not find an Instagram or carousel plugin that fits the needs of my original build. 

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

This starter kit uses `src`, `build`, and `dist` folders to organize theme development:

* `src`: this directory contains the raw material for your theme: templates (`src/`), PHP includes (`src/inc`), language files (`src/languages`), styles (`src/scss`), scripts (`src/js`), and images (anywhere under `src/`). **Only edit files in this directory!**
* `build`: generated by Gulp, this is a *working copy* of your theme for use in development and testing. 
* `dist`: short for distribution, this will be the final, polished copy of the theme for production. 

