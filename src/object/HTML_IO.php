<?php


namespace J\ClassNotes;


class HTML_IO
{
  public function WriteToFile(string $page, string $path = './html/') : bool
  {
    $filename = $path . $page;

    if(file_put_contents() != false){
      return true;
    }
    return false;
  }
}