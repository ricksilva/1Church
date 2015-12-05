drop table events;
drop table event_types;

create table event_types (event_type_code char(1),
                          event_type_name char(30));

INSERT INTO event_types VALUES ('E','Evangelize');
insert into event_types values ('F','Family');
INSERT into event_types values ('M','Mission');
insert into event_types values ('K','Kids');
INSERT INTO event_types VALUES ('I', 'Finance');
insert into event_types values ('L','Leadership');
insert into event_types values ('P','Prayer');
INSERT into event_types values ('O','Other');

Create table events
(event_id int NOT NULL AUTO_INCREMENT,
 start_date datetime NOT NULL,
 short_desc char(100) NOT NULL,
 long_desc text NOT NULL,
 event_url char(100),
 location char(100) NOT NULL,
 event_type_code char(1) NOT NULL,
  CONSTRAINT events_pk PRIMARY KEY (event_id)
);

commit;