CREATE DATABASE `training` /*!40100 DEFAULT CHARACTER SET utf8 */;

create table songs (
	song_id int primary key,
    song_slug varchar(50) not null,
    song_title varchar(50) not null,
    song_album varchar(50) not null,
    song_year int not null
);

insert into songs values(1, 'killing-in-the-name', 'Killing in the Name', 'Rage Against the Machine', 1991);
insert into songs values(2, 'bulls-on-parade', 'Bulls on Parade', 'Evil Empire', 1996);
insert into songs values(3, 'bombtrack', 'Bombtrack', 'Rage Against the Machine', 1991);
insert into songs values(4, 'wake-up', 'Wake Up', 'Rage Against the Machine', 1992);
insert into songs values(5, 'guerilla-radio', 'Guerilla Radio', 'The Battle of Los Angeles', 1999);
