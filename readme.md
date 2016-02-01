# Wedge WordPress Theme
Contributors: 8api, array, okaythemes
Tags: light, white, gray, two-columns, left-sidebar, responsive-layout, custom-colors, editor-style, featured-images, theme-options, threaded-comments, translation-ready, photoblogging, 
Requires at least: 3.8
Tested up to: 4.4.1
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Screenshot image license: GPLv2 or later

## Description

Wedge is build apon the theme Editor by Array.io. Make sure to check out their nice website [array.io](https://array.io)

Wedge puts bold and beautiful publishing right at your fingertips with comfortable, legible typography and large featured images. Using Featured Posts, you can display your favorite articles or wedgeials in the sidebar for even more exposure.

----------

## Getting started with Wedge WordPress Theme

**Using the Theme Customizer**
You can change Wedge’s theme options via the Customizer.

* To access the theme customizer, click Appearance → Customize in the WordPress admin menu. Wedge’s options are located in the Theme Options tab.
* Logo Upload: Upload your own logo to accentuate your site title and description.
* Logo Top Background: Upload an Image that will be displayed in background at the top of the branding-section of the sidebar.
* Sidebar Featured Post Category: Select a category from the drop down to feature a certain category in your sidebar. Leave this option blank if you don’t want to show the featured post area.
* Sidebar Color: Choose between a light and dark color scheme for your sidebar.
* Sidebar Searchform: Activate an additional tab in mobile view / section in sidebar with a nice search form.
* When you’re finished making changes, click Save & Publish to save the settings. Check out your site to confirm your changes.

----------

### Menu Setup
You’ll need to create at least one new menu for the header.

* WordPress menus can be found under Appearence → Menus.
* If you don’t have a menu already, click create a new menu to create one.
* On the left hand side of the Menu page, select the pages to add to your menu and click Add to Menu. Drag the pages around and arrange them any way you’d like. Create a drop menu by dragging menu items under and to the right of another menu item.
* Now that you have the menu created, you need to assign it to the header in the Theme Locations section.
* Save the menu when finished.

----------

### Partial Jetpack-Support
Jetpack is a WordPress plugin by Automattic, the folks who make WordPress. It’s a toolkit that provides various features and enhancements to your WordPress site. Wedge utilizes several features (infinite scroll, carousel, etc.) of Jetpack.

* Install Jetpack by going to Plugins → Add New and search for “Jetpack”. Install and activate the plugin. Once installed, you can enable Jetpack by
* After activating Jetpack by WordPress.com, you will be asked to connect to WordPress.com to enable the Jetpack features.
* Click the connect button and log in to a WordPress.com account to authorize the Jetpack connection.
If you don’t yet have a WordPress.com account, you can quickly create one after clicking the connect button.
* Once installed, activated, and connected to WordPress.com, you can visit the Jetpack settings page, which is now available at the top of your admin menu. Wedge utilizes the following modules:

Carousel – The Carousel adds a beautiful lightbox carousel to your gallery images. This can be seen on the gallery posts on the homepage of the demo.

Contact Forms – Add a contact form to your posts or pages with the Contact Form module.

Tiled Galleries - With Tiled Galleries you can display your image galleries in three new styles: a rectangular mosaic, a square mosaic, and a circular grid.

Infinite Scroll – Infinite Scroll is a feature that loads the next set of posts automatically when visitors approach the bottom of the home page or posts page.

----------

### Contact Page
Wedge utilizes Jetpack’s contact form module for adding contact forms to your pages.

* Firstly, make sure the Contact Form module is activated on the Jetpack page.
* Go to Pages → Add New to create a new page to use as the contact page.
* To create a contact form, click the contact form icon above the post wedge. Visit the Jetpack Contact Form page (http://jetpack.me/support/contact-form/) for more information on how to create a contact form.
* Publish the page when finished.

----------

### Widgets
The widget section of Wedge is located in the sidebar as last section. You can view your widgets on mobile devices by clicking the folder icon in Wedge’s sidebar top panel.

----------

### Creating Media Posts
Wedge makes it easy to share your images, videos, and quotes.

**Featured Image Posts**

* Create a new post and add a title and description.
* Write your content and add whatever styling you want.
* On the right hand side of your page, you’ll see the Featured Image pane. Click Set Featured Image and upload your image. Once uploaded, scroll down and click Use as featured image. Once set, you can close the image upload window.
* Once you’ve added the featured image and content you can publish and preview your post.

**Quote Post**

* Create a new post and add a title and add your quote to the editor.
* Add a quote citation by adding a name and wrapping it in a tag. See an example.
* On the right hand side of your page, you’ll see the Format pane. Click Quote to set the post format.
* Once you’ve added your quote and selected the Quote format you can publish and preview your post.

----------

### Extra Element Styles
Wedge comes with a few custom element styles, which are used to easily add extra styling to your WordPress posts.

**Pull Quotes**

Pull quotes are similar to block quotes, but are reserved for less text. See Wedge’s Style Guide to see the suggested usage. To use pull quotes you can add a class of pull-left or pull-right to your content. See an example below.

<span class="pull-right">This text will be pulled right.</span>

**Text Highlight**

Text highlight simply adds a yellow background to your text, useful for in-paragraph emphasis. To use the highlight style, you can add a class of highlight to your content. See an example below.

<span class="highlight">This text will be highlighted.</span>

----------

## License Info for fontawesome
Font Awesome - ​http://fontawesome.io
License: SIL OFL 1.1, CSS: MIT License - http://fontawesome.io/license
Copyright: @davegandy


## Installation

1. Sign into your WordPress dashboard, go to Appearance > Themes, and click Add New.
2. Click Add New.
3. Click Upload.
4. Click Choose File and select the theme zip file you downloaded from Github.
5. Click Install Now.
6. Click Add New, then click Upload, then click Choose File.
7. After WordPress installs the theme, click Activate.
8. You've successfully installed your new theme!

## Frequently Asked Questions

### I need help! What should I do?

Leave an issue at the github repo github.de/lionax/wp-wedge.
Or leave a comment at the blog post on 8api.de.
Questions on features before Version 1.0 can be answered by the great people at the support forum of array.is.

## Development

If you want to develop on this theme you need a sass compiler, since this theme uses the sass language for preprocessing the css.

Further I recommend to install the node.js node mq-packer which is a media query merger. Since media queries are nested within the styles for better understanding and logical consistency of the code, not merging them would generate approximately twice the size as necessary.

## Change Log
**1.1.2 - 02.02.2016**
* fixed a bug where the search bar won't display on first use
* added a fix for bug between mqpacker and adaptivestyles, that caused mqpacker to destroy the expected order of media queries
* fixed that pagination had no space bottom on bigger screens
* improvements to responsive layout
* added a new screenshot in complete english

**1.1.1 - 27.01.2016**
* changed the author name in footer

**1.1.0 - 27.01.2016**
* added development information to the readme
* fixed missing logo background option in customizer
* fixed striped theme comment by sass compiler
* replaced the screenshot of editor with one of wedge

**1.0.0 - 26.01.2016**
Initial release of Wedge Wordpress Theme

## Changes from Editor to Wedge
* moved some customizer settings to existing panels and sections
* added new customizer settings for hiding title and description
* renamed everything to the new name wedge so it won't get confusing
* added corporate icons before each link on the page
* implemented a new logo and header background image
* added a new custom searchform to the aside section
* implemented my adaptivestyles lib
* fixed that social icons could disappear on resize
* added a min-width to the site
* improvements on small screens
* started converting px font-sizes to ems.
* converted the css to the mobile first approach
* fixed social icons on dark color profile
* added css files to gitignore - they will be build on release
* moved imports to the top of style.scss
* changed file names of sass files to sass conventions
* added a compass compile config

## Change Log (Prior to Wedge 1.0: Editor)
**1.1.3 - 9/16/15**
* Ported improvements from WordPress.com version of Wedge. Adds accessibility improvements, social links menu (see here for use: https://en.support.wordpress.com/menus/social-links-menu/) and general file cleanup.
* Added link post format.
* Fixed byline appearance on index.

**1.1.2 - 8/15/15**
* General file cleanup.

**1.1.1 - 12/16/14**
* Added fix for animations on Android devices.
* Added link titles for sidebar toggle buttons.

**1.1.0 - 11/17/14**
* Fixed Jetpack Infinite Scroll button style.
* Added screenshot license to readme.txt.

**1.0.8 - 9/4/14**
* Fixed an issue that caused radio buttons to not be shown.

**1.0.7 - 8/31/14**
* Added .pot language file.
* Added Finnish language files.
* Regenerated English language files.

**1.0.6 - 8/27/14**
* Fixed a bug for full screen video in Chrome.

**1.0.5 - 7/11/14**
* Fixed a bug in the mobile navigation menu.

**1.0.4 - 6/25/14**
* Fixed an issue with icon fonts and styles for Internet Explorer not loading in child themes.

**1.0.3 - 6/17/14**
* Added ability to toggle menu open and closed on tablet and mobile.

**1.0.2 - 6/8/14**
* Added fix for multiple scrollbars in Chrome on IE.

**1.0.1 - 6/9/14**
* Added Font Awesome license info.
* Minor maintenance.

**1.0 - 5/21/2014**
* Initial release.