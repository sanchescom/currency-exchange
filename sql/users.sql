create table users
(
    id         bigint unsigned auto_increment
        primary key,
    first_name varchar(255) null,
    last_name  varchar(255) null,
    birthday   date         null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (1, 'Aleks', 'Aleks', '1988-11-17');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (332, 'Adell', 'Botsford', '2013-08-03');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (333, 'Misty', 'Skiles', '2007-02-20');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (334, 'Ari', 'Renner', '2014-06-24');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (335, 'Jamaal', 'Hirthe', '2015-09-21');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (336, 'Leone', 'Emmerich', '2005-05-19');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (337, 'Burnice', 'Yost', '2013-08-19');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (338, 'Anita', 'Wiza', '2016-11-11');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (339, 'Adrianna', 'Wolff', '2010-04-09');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (340, 'Garland', 'Christiansen', '2008-09-02');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (341, 'Brandon', 'Schinner', '2012-02-17');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (342, 'Aisha', 'Kassulke', '2014-06-02');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (343, 'Maymie', 'Goyette', '2017-04-07');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (344, 'Edmund', 'Schneider', '2015-07-11');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (345, 'Van', 'Leannon', '2019-10-07');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (346, 'Nicholaus', 'Veum', '2013-09-15');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (347, 'Christelle', 'Harber', '2017-11-16');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (348, 'Kamron', 'Ruecker', '2015-09-10');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (349, 'Fatima', 'Feil', '2012-08-21');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (350, 'Lonie', 'Bahringer', '2017-01-05');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (351, 'Bernard', 'Sauer', '2009-05-18');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (352, 'Allie', 'Kuvalis', '2011-12-20');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (353, 'Emmalee', 'Waters', '2008-11-01');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (354, 'Tressie', 'Hintz', '2015-08-22');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (355, 'Rosanna', 'Lebsack', '2015-05-31');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (356, 'Jimmie', 'Murazik', '2010-06-17');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (357, 'Hester', 'Mertz', '2005-02-20');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (358, 'Jovani', 'Kuhn', '2013-03-29');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (359, 'Mayra', 'Schamberger', '2005-06-26');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (360, 'Brant', 'Maggio', '2017-08-18');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (361, 'Jane', 'Koch', '2009-10-13');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (362, 'Brandi', 'Tromp', '2015-10-18');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (363, 'Kathleen', 'Sanford', '2009-10-23');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (364, 'Baron', 'Flatley', '2014-11-01');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (365, 'Odessa', 'Stamm', '2004-02-14');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (366, 'Maye', 'Murazik', '2010-06-11');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (367, 'Jack', 'Howell', '2016-02-22');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (368, 'Shemar', 'Rippin', '2015-02-04');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (369, 'Oleta', 'Sanford', '2010-05-31');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (370, 'Alyce', 'Klein', '2018-08-30');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (371, 'Cortez', 'Leannon', '2007-04-19');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (372, 'Pinkie', 'Jerde', '2019-03-24');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (373, 'Wayne', 'Willms', '2007-05-16');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (374, 'Timmy', 'Auer', '2013-04-21');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (375, 'Lucy', 'Schmitt', '2014-09-03');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (376, 'Hobart', 'Crist', '2017-01-22');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (377, 'Fredy', 'Klein', '2018-06-09');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (378, 'Braden', 'Aufderhar', '2010-06-07');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (379, 'Jack', 'Koepp', '2004-01-06');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (380, 'Jameson', 'Cummerata', '2010-08-10');
INSERT INTO laravel.users (id, first_name, last_name, birthday) VALUES (381, 'Trevion', 'Kuphal', '2015-11-29');
