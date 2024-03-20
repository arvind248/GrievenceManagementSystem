arvndtec_GMSUser
GMS@123
CREATE TABLE studentgrievance(
    grievanceid int PRIMARY key,
    studentname varchar(50),
    email varchar(50),
    gender varchar(15),
    mobileno varchar(15),
    enrollmentno varchar(50),
    regionalcenter varchar(50),
    programme varchar(30),
    address varchar(50),
    state varchar(25),
    city varchar(30),
    pincode varchar(10),
    grievancecategory varchar(30),
    grievancename varchar(30),
    grievancediscription varchar(250),
    solution varchar(250)
)
    
CREATE TABLE users(
    mailid varchar(30) PRIMARY KEY,
    password varchar(30),
    name varchar(30),
    designation varchar(30),
    phoneno varchar (15),
    usertype varchar(30));

CREATE TABLE grievancetype(
    name varchar(50),
    category varchar(50),
    discription varchar(100)
);


CREATE TABLE grievancecommittee(
    grievancename varchar(50),
    committemember varchar(50)
);

        
insert into grievancetype values
        ('Degree/Diploma', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Assignments ', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Study Material' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Learner Support', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Practicals' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Synopsis', 'Academic grievance' ,' ','abhinav@gmail.com'),
		('Projects', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Examination' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Fresh Admission' ,'Academic grievance' ,' ','abhinav@gmail.com'),
		('Re-admission', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Re-Registration', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Credit Transfer ', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Online Admission', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Migration Certificate', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Duplicate ID Card', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Misc.', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Transcript/Genuineness/Verification' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Refund of excess exam fee' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Hall ticket', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Declaration of Term End Examination', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Mark Sheet &amp; Provisional Certificate' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Re-evaluation ' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Answer script photocopy ', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Entrance Test', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Degree verification/Genuineness ', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Official Transcript', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Convocation ' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Others', 'Academic grievance' ,' ','abhinav@gmail.com'),
		('Change of Correspondence Address', 'Academic grievance', ' ','abhinav@gmail.com'),
		('Change of Programme' ,'Academic grievance', ' ','abhinav@gmail.com'),
		('Name Correction', 'Academic grievance', ' ','abhinav@gmail.com'),
        ('transport facility', 'Administrative Decisions, Services or Facilities', ' ','sakshi@gmail.com'),
        ('Hostels', 'Administrative Decisions, Services or Facilities', ' ','sakshi@gmail.com'),
        ('Canteen' ,'Administrative Decisions, Services or Facilities', ' ','sakshi@gmail.com'),
        ('Sports', 'Administrative Decisions, Services or Facilities', ' ','sakshi@gmail.com'),
        ('Post Office & bank (on campus)', 'Administrative Decisions, Services or Facilities', ' ','sakshi@gmail.com'),
        ('other facilities' ,'Administrative Decisions, Services or Facilities', ' ','sakshi@gmail.com'),
        ('Age Discrimination', 'Unfair treatment/ Harassment and Discrimination', '','sumit@gmail.com'),
        ('Disability Discrimination' ,'Unfair treatment/ Harassment and Discrimination', '','sumit@gmail.com'),
        ('Sexual Orientation', 'Unfair treatment/ Harassment and Discrimination', '','sumit@gmail.com'),
        ('Status as a Parent' ,'Unfair treatment/ Harassment and Discrimination', '','sumit@gmail.com'),
        ('Religious Discrimination', 'Unfair treatment/ Harassment and Discrimination' ,'','sumit@gmail.com'),
        ('National Origin', 'Unfair treatment/ Harassment and Discrimination', '','sumit@gmail.com'),
        ('Pregnancy' ,'Unfair treatment/ Harassment and Discrimination', '','sumit@gmail.com'),
        ('Sexual Harassment' ,'Unfair treatment/ Harassment and Discrimination', '','sumit@gmail.com'),
        ('personal'  ,'Student Counseling', '','sumit@gmail.com'),
        ('educational'  ,'Student Counseling', '','sumit@gmail.com'),
        ('social'  ,'Student Counseling', '','sumit@gmail.com'),
        ('psychological  ' ,'Student Counseling', '','sumit@gmail.com');


insert into studentgrievance
(`grievanceid`, `studentname`, `email`, `grievancecategory`, `grievancename`)
 values
 ('101','arvind singh','arvindsingh@gmail.com','Student Counseling','personal' ),
 ('102','sachin','sachin@gmail.com','Student Counseling','psychological  ' ),
  ('103','hariom','hariom@gmail.com', 'Academic grievance' ,'Others') 



insert into users
(`mailid`, `password`, `name`, `designation`, `phoneno`, `usertype`)
values
('sakshi@gmail.com','1234','sakshi','manager','989898989','Facaulty'),
('abhinav@gmail.com','12345','abhinav','manager','989898989','Facaulty'),
('sumit@gmail.com','123443','sumit','manager','989898989','Facaulty')