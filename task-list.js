// Browser-side JavaScript (ECMAScript 5)

var exit = false,
    tasks = [];

function display_tasks() {
  var response = "----------\n";
  for(i=0; i < tasks.length; i++) {
    response += (i+1) + ".) " + tasks[i] + "\n";
  }
  response += "----------";
  alert(response);
}

function add_task() {
  var task = prompt("Type a new task:");
  tasks.push(task);
  display_tasks();
}

function remove_task() {
  display_tasks();
  var index = parseInt(prompt("Type task number to remove:")) - 1;
  tasks.splice(index, 1);
  display_tasks();
}

while (exit === false) {
  var choice = parseInt(prompt("Please enter a number from the following choices: 1. Insert a new task, 2. Remove a task, 3. List all tasks, 4. exit this program"));
  if (choice === 1) {
    add_task();
  }
  else if (choice === 2) {
    remove_task();
  }
  else if (choice === 3) {
    display_tasks();
  }
  else if (choice === 4) {
    alert("Exiting...");
    exit = true;
    window.close();
  }
  else {
    alert("sorry didn't recognize that input");
  }
}
