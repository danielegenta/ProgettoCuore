mod_reslider
=====================
A simple, responsive slider using the jQuery flexslider from http://www.woothemes.com/flexslider/

Features
=====================
+ Support 9 images with captions.
+ Caption can contain HTML.
+ Link slides.


Changelog
=====================
v1.0

+ initial release

v1.1

+ added ability to link slides to menu items

v1.1.1 

+ Fixed link with no caption not working

v1.2

+ Added option to turn links on or off
+ Added option to choose between slide or fade effect on transition
+ Added ability to use custom URLs instead of menu items if you want.

v1.2.1

+ Fixed a bug with the caption when the slides are linked.

v2.0

+ Updated to new Flexslider
+ Added in options for:

    + directional navigatin
    + control blobs
    + keyboard nav
    + slide direction
    + slide speed
    + slide animation speed
    + randomisation

+ Removed some code that was causing issues with Joomla 3.0

v2.0.1 

+ Added support for alt tags
+ Hopefully fixed an issue causing some peoples slider installs to cause PHP errors

v2.0.2

+ Quick fix making image path absolute to base of site

v2.0.3 

+ Another fix making image path absolute to the base of the site not the server.

v2.0.4

+ Replaced PHP short tags

v2.0.5

+ Added JRoute links so they place nice with SEF plugins

v2.0.6

+ Fixed that bug where the captions bleed over into the next slide by putting on box-sizing:border box
+ Removed some default styling that's not really needed.