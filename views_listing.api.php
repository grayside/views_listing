<?php
// $Id$

/**
 * Add a Views Listing plugin to query for active Views with a viable path.
 *
 * A views listing plugin is used to filter a listing of Views pages.
 * Think of it as a mechanism to build a SELECT query against the Views objects.
 *
 * A plugin is an array containing one or more multi-dimensional filter sets.
 * A filter set contains a set of filters, of which at least one must be passed.
 * A filter is structured as follows:
 *  'check': (view|display) Start at the root of the View or iterate across each Display.
 *  'key': The array index of the View. can also be the initial string off an object with array elements.
 *  'value': The value you are seeking.
 * Every filter will be AND'd together by the filtering mechanism.
 */
function hook_views_listing_plugin_info_alter(&$plugins) {
  $plugins['my_tag'] = array(
    array(
      array('check' => 'view', 'key' => 'tag', 'value' => 'my_tag')
    )
  );
}

/**
 * Alter the output of one or all Views.
 * @param $links
 *  Array of link arguments for every viable display in the view. See l().
 *  You may also use 'prefix' and 'suffix' to add text for that effect.
 * @param $view
 *  View object associated with the links.
 */
function hook_views_listing_pre_render_alter(&$links, $view) {
  foreach ($links as $key => $args) {
    $args['attributes']['class'] = 'views_listing';
  }
}