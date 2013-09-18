<?php
/**
 * Method to cause automatic download of audio mpeg files
 *
 * @package LifePointe
 * @since 0.7.7
 */

// Define the path to file
$file = $_GET['file'];
$filename = basename ($file);

if(!file) {
  // File doesn't exist, output error
  die('file not found');
}
else {
  // Set headers
  header("Cache-Control: public");
  header("Content-Description: File Transfer");
  header("Content-Disposition: attachment; filename=$filename");
  header("Content-Type: audio/mpeg");
  header("Content-Transfer-Encoding: binary");
  
  // Read the file from disk
  readfile($file);
}
?>