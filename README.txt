# Views Listing

This is a gnarly API module that facilitates the creation of a listing of Views.

Suppose you want a list of links to all Views tagged "Calendar", or all RSS 
feeds. This is the module for you. It has an oddball query mechanism 
documented in views_listing.api.php.

Only active/enabled Views with viable Drupal paths are included. Block views 
and such are not included.

## Default Plugin
By default, Views Listing ships with a plugin to detect Feeds via the feed 
display plugin, or the views_xhtml or views_xml style plugins from the Views 
Datasource module.

## Warning
This is probably not going to be a well-supported module. I am posting it here 
not because I intend active support, but instead to help others jumpstart on 
similar tasks.

## To-dos

1. Create some (exportable) UI mechanism to override the link attributes 
(title, tooltip, etc.)

2. Create a mechanism to include a View description that makes sense in an 
Index context. Should be attached as another exportable option. Default to 
View description. Can use hook_views_listing_pre_render(). (prefix, suffix)

## Credits
The idea for how this module works traces itself to the Views integration of 
the http://drupal.org/project/syndication module and the fine work of it's 
maintainers.

## Maintainers
Grayside [grayside.org] http://drupal.org/user/346868