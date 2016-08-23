<?php
# PHP v5.4.45

$exit = false;
$tasks = array();

function display_tasks() {
  global $tasks;
  echo "----------\r\n";
  for($i=0; $i < count($tasks); $i++) {
    $task = $tasks[$i];
    $num = $i + 1;
    echo "$num.) $task\r\n";
  }
  echo "----------\r\n";
}

function add_task() {
  global $tasks;
  echo "Type a new task:";
  $task = trim(fgets(STDIN));
  array_push($tasks, $task);
  display_tasks();
}

function remove_task() {
  global $tasks;
  display_tasks();
  echo "Type task number to remove:";
  $index = trim(fgets(STDIN));
  $index = (int)$index - 1;
  unset($tasks[$index]);
  display_tasks();
}

while ($exit == false) {
  global $exit, $tasks;
  echo "Please enter a number from the following choices: 1. Insert a new task, 2. Remove a task, 3. List all tasks, 4. exit this program\r\n";
  $choice = trim(fgets(STDIN));
  $choice = (int)$choice;
  if ($choice == 1) {
    add_task();
  }
  elseif ($choice == 2) {
    remove_task();
  }
  elseif ($choice == 3) {
    display_tasks();
  }
  elseif ($choice == 4) {
    echo "Exiting...";
    $exit = true;
  }
  else {
    echo "sorry didn't recognize that input";
  }
}

?>
