drop table if exists task;

create table task(
	taskId binary(20) not null,
	taskTitle varchar(255) not null,
	taskStartDate datetime null,
	taskDueDate datetime null,
	taskStatus varchar(64),
	taskPriority varchar(64),
	taskDescription varchar(256),
	primary key(taskId)
);