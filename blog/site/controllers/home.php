<?php

return function($page) {

    // fetch the basic set of pages
    $posts = $page->children()->listed()->flip();
  
    // fetch all tags
    $tags = $posts->pluck('tags', ',', true);
  
    // add the tag filter
    if($tag = param('tag')) {
      $posts = $posts->filterBy('tags', $tag, ',');
    }
  
    return compact('posts', 'tags', 'tag');
  
  };