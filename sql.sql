CREATE DATABASE afplayers;
afplayers

CREATE TABLE afplayers
(

ID int,
First varchar (35),
Family varchar (35),
bg varchar (50),
bg2 varchar (50),
bg3 varchar (50),
Email varchar (100),
Phone int 
); 

insert into afplayers
  (ID, First, Family, Email, Phone )
  values ('1', 'Luke', 'Sims', 'lukesims45@gmail.com', 
          '07233334');
		  
		  insert into afplayers
  (ID, First, Family, bg, bg2, bg3)
  values ('1', 'Luke', 'Sims', 'Settlers', 'Monopoly', 
          'Trainz');
---------------------------------------------------------  
   
  DELETE FROM afplayers
WHERE ID = '1';

---------------------------------------------------------
  
SELECT * FROM afplayers
WHERE Email='@gmail.com';


UPDATE afplayers
SET First='Luke', family='Sims', Email='lukesims45@gmail.com', Phone='0435355'
WHERE ID='1';

UPDATE afplayers
SET First='Luke', family='Sims', bg='Cards', bg2='Tanks', bg3='Starwars'
WHERE ID='1';

---------------------------------------------------------
  
boardgame :
CREATE TABLE boardgame
(
id int,
numb int,
bg varchar (50)
);

  insert into boardgame
  (id, numb, bg)
  values ('1', '1', 'Settlers');
---------------------------------------------------------  
   
  DELETE FROM boardgame
WHERE id = '1';

---------------------------------------------------------
  
  SELECT * FROM boardgame
WHERE bg ='Settlers';

UPDATE boardgame
SET  numb='4', bg='Tanks'
WHERE ID='1';
---------------------------------------------------------
  


events :
CREATE TABLE events
(
date int,
event varchar(50),
cost int,
location varchar(50)
);


 insert into events
  (date, event, cost, location)
  values ('11052017', 'Championship', 'Club');
---------------------------------------------------------  
   
  DELETE FROM events
WHERE date = '11052017';

---------------------------------------------------------
  
  SELECT * FROM events
WHERE date = '11052017';


UPDATE events
SET  event='finals', cost='32', location='Club'
WHERE date='11052017';
---------------------------------------------------------
  



highscore :
CREATE TABLE highscore
(
score int,
first varchar (35),
family varchar (35),
id int
);


 insert into highscore
  (score, first, family, id)
  values ('1023', 'James', 'Smith', 14);
---------------------------------------------------------  
   
  DELETE FROM highscore
WHERE id = '14';

---------------------------------------------------------
  
  SELECT * FROM highscore
WHERE id = '14';


UPDATE highscore
SET  score='1134', first='James', family='Smith'
WHERE ID='14';
---------------------------------------------------------
  


schedule 
CREATE TABLE schedule
(
daynum int,
day varchar (35),
time int,
venue varchar (35)
);

 insert into schedule
  (daynum, day, time, venue)
  values ('2', 'Tuesday', '7pm', 'Club');
---------------------------------------------------------  
   
  DELETE FROM schedule
WHERE daynum = '2';

---------------------------------------------------------
  
  SELECT * FROM schedule
WHERE daynum = '2';
 
UPDATE schedule
SET  day='Tuesday', time='8pm', venue='Club'
WHERE daynum='2';

---------------------------------------------------------
  