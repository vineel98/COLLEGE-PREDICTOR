select * from STUDENT ;
create table details(colg_id integer(5), colg_name varchar(20), est_yr integer(4),rank integer(5),affli varchar(3),zip integer(5),city varchar(20),land_mark varchar(20),no_branches integer(10),landarea integer(10),hstl char(1),coed_girl char(1),avg_sal_pk integer(10));
select * from branch;
select * from details;
create table branch(colg_id integer(5),branch varchar(10),accr varchar(5),no_sec integer(2),firsr_rnk integer(5),last_rnk integer(5),yr integer(4),no_staff integer(3),branch_id integer(5));
select * from branch;
create table placement(colg_id integer(5),std_name  varchar(5),branch_id integer(5),company varchar(10),package integer(10),yr_recru integer(4));
select * from placement;
create  table student(std_name varchar(10),mobile varchar(10),email varchar(20),rank integer(5),dob varchar(15),usr_id varchar(10),pwd varchar(16));
select * from student;
alter table branch add constraint branch_colgid_fk foreign key(colg_id) references details(colg_id);
alter table details add constraint details_colgid_pk primary key(colg_id);
insert into student  values('vineel','7396568331','vineel@','2265','13-08-1999','vineel','vineel');
insert into student values($name,$mobile_number,$email,$rank,$dob,$username,$pwd)
delete from student;
alter table student modify email varchar(30);
alter table details add column img varchar(50);
alter table details add column main_img varchar(50);
insert into details(colg_id, colg_name ,img) values(111,'cbit','images\\cbit.png');
insert into details( colg_id,colg_name ,img) values(222,'vasavi','images\vasavi.jpg');
insert into details(colg_id, colg_name ,img) values(333,'OU','images\osmania.png');
insert into details( colg_id,colg_name ,img) values(444,'JNTU','images\jntu.jpg');
update details set img='images\\jntu.jpg' where colg_name='JNTU';
update details set colg_name='CHAITANYA_BHARATHI_INSTITUTE_OF_TECHNOLOGY' where colg_id=111;
alter table details modify affli varchar(50);
desc details;
affli,zip,city,land_mark,no_branches,landarea,hstl,coed_girl,avg_sal_pkg,img,
update details 
set avg_sal_pk=600000


 where colg_id=111;
insert into branch values(111,'mechanical_engineering','A+',2,2043,6253,1980,47,5);
desc branch;
alter table branch modify branch varchar(50);
select * from details;select * from details;

alter table branch change  firsr_rnk  first_rnk int(5);
alter table student add column img varchar(50);
delete from student where  email='vineel@gmail.com';
select * from student;
update student set img="studentimages\\vineel.jpg" where std_name='vineel';
insert into details(colg_id,colg_name,img) values(555,'iit bombay','images//vineel.jpeg');
delete from details where colg_id in(555,666,777,888,999);
delete from student where pwd='radha';
update  student set img='studentimages/vineel.jpg' where std_name='vineel';
alter table student add column gender varchar(10);
delete from student;
insert into student(rank) values(254);
alter table details  modify coed_girl varchar(5);
select * from branch;
delete from details;
select * from details;
delete from branch;
select distinct branch from branch;
select * from branch;
select colg_name from details;
select * from student;
select branch from branch where colg_id=(select colg_id from details where colg_name='JawaharlalNehruCollegeOfEngineering') and (2265 between first_rnk and last_rnk or 2265<first_rnk);
select colg_name from details where colg_id in(select colg_id from branch where branch='ece' and (2265 between first_rnk and last_rnk or 2265<first_rnk));
select colg_id from branch where branch='mech' and( 2265 between first_rnk and  last_rnk or 2265<first_rnk);
delete from student where rank=254;
insert into student values('admin','9553650810','admin@gmail.com',null,null,'admin@123','admin@123','studentimages/admin1.jpeg',null);
delete from student where std_name='admin';
update details set img='images/jntu.jpg',main_img='images/jntumain.jpg' where colg_id=222;
delete from branch where colg_id=111;
insert into branch values(111,'cse','A+',3,1096,2308,1982,57,11);
insert into branch values(111,'ece','A',3,1297,2528,1984,69,22);
insert into branch values(111,'civ','A+',2,2096,4308,1978,49,44);
delete from student where std_name='aaaaa';
delete from branch where first_rnk=3017;
select * from student;
insert into details values(444,'OsmaniaUniversity','1916',108,null,50321,'hyderabad','amberpet',null,59,'yes','coed',10,'images/osmania.png','images/osmaniamain.jpg');
insert into details values(555,'MallareddyCollegeOfEngineering','2001',301,'Jawaharlal_Nehru_Technological_University',50421,'hyderabad','dullapally',null,46,'yes','coed',3,'images/mallareddy.jpeg','images/mallareddymain.jpeg');
insert into details values(666,'VardhamanCollegeOfEngineering','1997',2065,'Osmania_University',50341,'hyderabad','shamshabhad',null,95,'yes','coed',10,'images/vardhaman.jpeg','images/vardhamanmain.jpeg');
insert into branch values(666,'cse','A','2',4284,5872,2001,64,11);
select * from student
;
delete from details where colg_name='vineelvineel';
select * from details;
create table emp(name varchar(20));
select * from emp;