<?php
// Reading Files

//Using file_get_contents():
  $file = 'example.txt';
  $content = file_get_contents($file);
  echo $content;
?>

<?php
//Using fread():
  $file = 'example.txt';
  $fp = fopen($file, 'r');
  $content = fread($fp, filesize($file));
  fclose($fp);
  echo $content;
?>

<?php
// Using file():
  $file = 'example.txt';
  $lines = file($file, FILE_IGNORE_NEW_LINES);
  foreach ($lines as $line) {
    echo $line . "\n";
  }
?>

<?php
//Writing Files

//Using file_put_contents():

  $file = 'example.txt';
  $content = 'Hello, World!';
  file_put_contents($file, $content);
?>

<?php
//Using fwrite():
  $file = 'example.txt';
  $fp = fopen($file, 'w');
  $content = 'Hello, World!';
  fwrite($fp, $content);
  fclose($fp);
?>

<?php

//File Manipulation
// Checking if a file exists:

  $file = 'example.txt';
  if (file_exists($file)) {
    echo "File exists";
  } else {
    echo "File does not exist";
  }
?>

<?php
// Checking if a file is a regular file:
  $file = 'example.txt';
  if (is_file($file)) {
    echo "File is a regular file";
  } else {
    echo "File is not a regular file";
  }
?>

<?php
// Creating a new directory:
  $dir = 'newdir';
  mkdir($dir, 0777, true);
?>

<?php
// delete file
  $file = 'example.txt';
  unlink($file);
?>


<?php
// rename file
  $old_file = 'example.txt';
  $new_file = 'newfile.txt';
  rename($old_file, $new_file);
?>
<?php
// copy file
  $source_file = 'example.txt';
  $destination_file = 'newfile.txt';
  copy($source_file, $destination_file);
?>

<?php
// file hnadling
  $file = 'example.txt';
  $fp = fopen($file, 'r');
?>

<?php
// reading from file
  $file = 'example.txt';
  $fp = fopen($file, 'r');
  $content = fread($fp, filesize($file));
  fclose($fp);
  echo $content;
?>


<?php
// writing to a file.
  $file = 'example.txt';
  $fp = fopen($file, 'w');
  $content = 'Hello, World!';
  fwrite($fp, $content);
  fclose($fp);
?>


<?php

//Moving the file pointer:
  $file = 'example.txt';
  $fp = fopen($file, 'r');
  fseek($fp, 5); // Move the file pointer to the 5th byte
  $content = fread($fp, filesize($file));
  fclose($fp);
  echo $content;
?>
