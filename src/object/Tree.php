<?php

namespace J;

class Tree
{
  /**
   * Creates a tree-structured array of directories and files from a given root folder.
   *
   * Gleaned from: http://stackoverflow.com/questions/952263/deep-recursive-array-of-directory-structure-in-php
   *
   * @param string $dir
   * @param string $regex
   * @param boolean $ignoreEmpty Do not add empty directories to the tree
   * @return array
   */
  public function dirtree($dir, $regex='', $ignoreEmpty=false)
  {
    if (!$dir instanceof \DirectoryIterator) {
      $dir = new \DirectoryIterator((string)$dir);
    }
    $dirs  = array();
    $files = array();
    foreach ($dir as $node) {
      if ($node->isDir() && !$node->isDot()) {
        $tree = $this->dirtree($node->getPathname(), $regex, $ignoreEmpty);
        if (!$ignoreEmpty || count($tree)) {
          $dirs[$node->getFilename()] = $tree;
        }
      } elseif ($node->isFile()) {
        $name = $node->getFilename();
        if ('' == $regex || preg_match($regex, $name)) {
          $files[] = $name;
        }
      }
    }
    asort($dirs);
    sort($files);
    return array_merge($dirs, $files);
  }
}