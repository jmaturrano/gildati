<?php

/*
    MK System
*/

function get_template_directory_child(){
  $directory_template = get_template_directory_uri();
  $directory_child = str_replace('onetone', '', $directory_template).'mksystem';
  return $directory_child;
}
