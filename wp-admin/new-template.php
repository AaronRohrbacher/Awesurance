<?php
  if(isset($_GET['submit'])) {
    $widgets = '';
    $grids = '';
    $template_file = 'template.json';
    $handle = fopen($template_file, 'a') or die('Cannot open file:  '.$template_file);
    if(isset($_GET['body1'])) {
      $widgets .= '
      "widgets": [{
        "filter": "1",
        "text": "edit me",
        "title": "edit or erase me",
        "type": "visual",
        "panels_info": {
          "class": "SiteOrigin_Widget_Editor_Widget",
          "raw": false,
          "grid": 0,
          "cell": 0,
          "id": 0,
          "style": {}
        }
      }],
      ';
      $grids .=   '
          "grids": [{
          "cells": 1,
          "style": {}
        }],
        "grid_cells": [{
          "grid": 0,
          "index": 0,
          "weight": 1,
          "style": {}
        }]
        ';

    };
    $data = '{' . $widgets . $grids . '}';
    fwrite($handle, $data);
    header("Location: /wordpress/wp-admin/template.json");
    die();
    }

?>

<form action = 'new-template.php' method = 'get'>
  <input type='checkbox' id='body1' name = 'body1'>
  <label for='body1'>Body 1</label>

  <button type = 'submit' name= 'submit' value = 'submit'>Submit</button>
</form>
