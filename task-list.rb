@exit = false
@tasks = []

def display_tasks
  puts "----------"
  @tasks.each do |i|
    puts "#{i+1}.) #{@tasks[i]}"
  end
  puts "----------"
end

def add_task
  puts "Type a new task:"
  task = gets.chomp
  @tasks.push task
  display_tasks
end

def remove_task
  display_tasks
  puts "Type task number to remove:"
  index = gets.chomp.to_i - 1
  @tasks.delete_at index
  display_tasks
end

while @exit == false do
  puts "Please enter a number from the following choices: 1. Insert a new task, 2. Remove a task, 3. List all tasks, 4. exit this program"
  choice = gets.chomp.to_i
  if choice == 1
    add_task
  elsif choice == 2
    remove_task
  elsif choice == 3
    display_tasks
  elsif choice == 4
    puts "Exiting..."
    @exit = true
  else
    puts "sorry didn't recognize that input"
  end
end
