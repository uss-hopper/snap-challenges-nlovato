drop table if exists tasks;

create table tasks(
	taskId binary(20) not null,
	taskTitle varchar(255) not null,
	taskStartDate datetime,
	taskDueDate datetime,
	taskStatus varchar(64) not null,
	taskPriority varchar(64) not null,
	taskDescription varchar(256),
	primary key(taskId)
);

