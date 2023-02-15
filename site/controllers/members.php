<?php return function($page) {

  // fetch the basic set of pages
  $allitems = $page->children()->listed();

  $items = $allitems->sortBy('order', 'asc');

  // add the tag filter
    if($tag = param('tag')) {
        //Used for multiple words categories
        $tag = urldecode(param('tag'));
        $items = $items->filterBy('tag', $tag, ',');
    }
    if($location = param('location')) {
        //Used for multiple words categories
        $location = urldecode(param('location'));
        $items = $items->filterBy('location', $location, ',');
    }

    $tags = $items->pluck('tag', ',', true);
    $locations = $items->pluck('location', ',', true);

  return compact('tag', 'tags', 'location', 'locations', 'items', 'allitems');

};
?>