=== List category posts ===
Contributors: fernandobt
Donate Link: http://picandocodigo.net/programacion/wordpress/list-category-posts-wordpress-plugin-english/
Tags: list, categories, posts, cms
Requires at least: 2.8
Tested up to: 3.0
Stable tag: 0.12

== Description ==
List Category Posts is a simple WordPress plugin which allows you to list posts from a category into a post/page using the [catlist] shortcode. This shortcode accepts a category name or id, the order in which you want the posts to display, and the number of posts to display. You can use [catlist] as many times as needed with different arguments.

Great to use WordPress as a CMS, and create pages with several categories posts.

The plugin includes a widget, which works pretty much the same as the plugin. Just add as many widgets as you want, and select all the available options from the Appearence > Widgets page.

Compatible with WordPress 3.0 and default Twenty Ten theme (http://wordpress.org/support/topic/399754)

Usage: [catlist argument1=value1 argument2=value2].

Tell us how you use this plugin!
http://foro.picandocodigo.net/viewtopic.php?f=28&t=261


==Installation==

* Upload listcat directory into you wp-content/plugins/ directory.
* Login to your WordPress Admin menu, go to Plugins, and activate it.
* Edit the default.php file on templates to customize the way the categories are displayed, or use the default one included in the plugin's code. You can use several different templates if you want.
* You can find the ListCategoryPostsWidget in the Appearence > Widgets section on your WordPress Dashboard.

==Other notes==

**Usage**
The arguments you can use are:

* **name** - To display posts from a category using the category's name. Ex: [catlist name=mycategory]

* **id** - To display posts from a category using the category's id. Ex: [catlist id=24]. You can **include several categories**: Ex: [catlist id=17,24,32] or **exclude** a category with the minus (-)
If you use both arguments (wrong!), List Category Posts will show the posts from the category in 'name'.

* **tag** - Tag support, you can display posts from a certain tag.

* **orderby** - To customize the order. Valid values are:
  * **author** - Sort by the numeric author IDs.
  * **category** - Sort by the numeric category IDs.
  * **content** - Sort by content.
  * **date** - Sort by creation date.
  * **ID** - Sort by numeric post ID.
  * **menu_order** - Sort by the menu order. Only useful with pages.
  * **mime_type** - Sort by MIME type. Only useful with attachments.
  * **modified** - Sort by last modified date.
  * **name** - Sort by stub.
  * **parent** - Sort by parent ID.
  * **password** - Sort by password.
  * **rand** - Randomly sort results.
  * **status** - Sort by status.
  * **title** - Sort by title.
  * **type** - Sort by type. Ex: [catlist name=mycategory orderby=date]

* **order** - How to sort **orderby**. Valid values are:
  * **ASC** - Ascending (lowest to highest).
  * **DESC** - Descending (highest to lowest). Ex: [catlist name=mycategory orderby=title order=asc]

* **numberposts** - Number of posts to return. Set to 0 to use the max number of posts per page. Set to -1 to remove the limit. Default: 5. Ex: [catlist name=mycategory numberposts=10]

* **date** - Display post's date next to the title. Default is 'no', use date=yes to activate it.

* **author** - Display the post's author next to the title. Default is 'no', use author=yes to activate it.

* **dateformat** - Format of the date output. Default is get_option('date_format')

* **template** - File name of template from templates directory without extension. Example: For 'template.php' value is only 'template'. Default is 'default' that means template in code of plugin not in template file, that's an unordered list (ul html tag) with a CSS class: 'lcp_catlist'

* **excerpt** - Display the post's excerpt. Default is 'no', use excerpt=yes to activate it.

* **excludeposts** - IDs of posts to exclude from the list. Ex: [catlist excludeposts=12,52,37]

* **offset** - You can displace or pass over one or more initial posts which would normally be collected by your query through the use of the offset parameter.

* **content** - Show the full content of the post. Default is 'no'. Ex: [catlist content=yes]

* **catlink** - Show the title of the category with a link to the category. Use the template system to customize its display using the variable $cat_link_string. Default is 'no'. Ex: [catlist catlink=yes].

* **comments** - Show comments count for each post. Default is 'no'. Ex: [catlist comments=yes].

Your comments and feedback are welcome at: http://foro.picandocodigo.net/viewforum.php?f=28

**New Code is welcome too** :D

== Frequently Asked Questions ==
* **Instructions** on how to use the plugin: http://foro.picandocodigo.net/viewtopic.php?f=28&t=251
* **Template system** how to customize the way the posts are shown: http://foro.picandocodigo.net/viewtopic.php?f=28&t=253
* **Support forum** & **New feature requests**: http://foro.picandocodigo.net/viewforum.php?f=28

== Upgrade Notice ==

= 0.7.2 =
Template system has changed. Now the posts loop must be defined inside the template. Check templates/default.php for an example.

= 0.8 =
Widget built for WordPress 2.8's Widget API, so you need at least WP 2.8 to use the widget.

= 0.9 =
Template system has changed. Custom templates should be stored in wordpress theme folder.

== Changelog ==

= 0.12 =
* Added comments count.
* Updated readme file

= 0.11.2 =
* Another minimal bug fixed with the excerpt...

= 0.11.1 =
* Fixed small bug which made the excerpt show up everytime... (Sorry :S)

= 0.11 =
* Automatic excerpt added in case the user didn't specifically write an excerpt.
* Widget has been finally fixed. The attributes finally save themselves, and the widget works as expected :D


= 0.10.1 =
* Small fix - added ul tags to default template.
* Compatible WordPress 3.0 with Twenty Ten theme (thanks again Doug Joseph :) )

= 0.10 =
* Code for the_content was fixed so that the content to output filtered content (thanks DougJoseph http://wordpress.org/support/topic/399754)

= 0.9 =
* admin parameter now shows "display name" instead of "user nice name".
* Template system has changed: In older version, custom templates got deleted if an automatic upgrade was done. Now templates are stored in the theme folder. (Thanks Paul Clark)
* Added tag support - http://foro.picandocodigo.net/viewtopic.php?f=28&t=240

= 0.8.1 =
* Fixed bug for 'content'.
* There's new stuff on the widget options. I'm still working on it, so some bugs may appear.

= 0.8 =
* Widget implements WP 2.8 Widget API, so at least 2.8 is required. Now you can use as many widgets as necessary, with new params.
* Updated readme file.

= 0.7.2 =
* Fixed link to category.
* Improved template system.

= 0.7.1 =
* Fixed uber stupid bug with offset... Sorry about that!

= 0.7 =
* Exclude posts. Contribution by acub.
* Offset parameter on shortcode to start listing posts with an offset. Contribution by Levi Vasquez
* Content of the post can now be displayed. Contribution by Lang Zerner.
* Link to the category available. By request on the plugin's forum.
* Fixed small bug when using category name.

= 0.6 =
* Minor fix for unclosed ul if not using templates.
* Added option to list posts from many categories at once.
* Added option to exclude categories.

= 0.5 =
* Readme.txt validation.
* Added 'excerpt' parameter. You can now show the excerpt for each post.
* Added 'dateformat' parameter. Format of the date output. Default is get_option('date_format') - by Verex
* Added 'template' parameter. Now you can choose template for output of the plugin. File name of template from templates directory without extension. Example: For 'template.php' value is only 'template'. Default is 'default' that means template in code of plugin not in template file -by Verex

= 0.4.1 =

* Fixed some code to enable PHP 4 compatibility. Shouldn't hosting services update to PHP 5?

 = 0.4 =

* Added 'date' parameter. Now you can show the post's date when listed.
* Added 'author' parameter. You can also show the post's author.
* Sidebar Widget now allows you to add a title in h2 tags.
* Changed some variable names, to keep better compatibility with other plugins/wordpress variables.
* Tested with Wordpress 2.7.

 = 0.3 =

* Broke backwards compatibility. Users of version 0.1 should update their pages and posts for the new shortcode formatting.
* Option to pass arguments to the plugin, in order to use name of category instead of ID, orderby, order and number of posts are passed through parameters.

 = 0.2 =

* Added experimental sidebar widget (use at your own risk, not ready for prime-time yet since it hasn't been tested :P )

 = 0.1.1 =

* Fixed major bug, which gave 404 error when trying to use "Options" page.

 = 0.1 =

* Option page to limit number of posts.
* Working using [category=ID] for posts and pages, with several categories support.
