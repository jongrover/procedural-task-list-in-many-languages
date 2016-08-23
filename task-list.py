# Python v2.7.9

exit = False
tasks = []

def display_tasks():
    print "----------"
    for i, task in enumerate(tasks):
        print "%s.) %s" % (i+1, task)
    print "----------"

def add_task():
    print "Type a new task:"
    task = raw_input()
    tasks.append(task)
    display_tasks()

def remove_task():
    display_tasks()
    print "Type task number to remove:"
    index = int(raw_input()) - 1
    tasks.pop(index)
    display_tasks()

while (exit == False):
    print "Please enter a number from the following choices: 1. Insert a new task, 2. Remove a task, 3. List all tasks, 4. exit this program"
    choice = int(raw_input())
    if (choice == 1):
        add_task()
    elif (choice == 2):
        remove_task()
    elif (choice == 3):
        display_tasks()
    elif (choice == 4):
        print "Exiting..."
        exit = True
    else:
        print "sorry didn't recognize that input"
