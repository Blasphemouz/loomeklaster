<?php return function($page) {

  // fetch the basic set of pages
  $members = $page->children()->listed();

  // fetch all tags
  $tags = $members->pluck('tags', ',', true);

  // add the tag filter
  if($tag = urldecode(param('tag'))) {
    $members = $members->filterBy('tags', $tag, ',');
  }

  return compact('members', 'tags', 'tag');

};
?>