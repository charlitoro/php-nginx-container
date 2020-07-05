CREATE TABLE `User` (
  `id` int PRIMARY KEY,
  `name` varchar(50),
  `username` varchar(50),
  `email` varchar(50),
  `password` varchar(300)
);

CREATE TABLE `Collection` (
  `id` int PRIMARY KEY,
  `name` varchar(50),
  `description` varchar(255),
  `user` int
);

CREATE TABLE `Album` (
  `id` int PRIMARY KEY,
  `title` varchar(50),
  `label` varchar(255),
  `sleeve` varchar(100),
  `formar` int,
  `artist` varchar(50),
  `genre` int,
  `country` int,
  `released` int,
  `added` date,
  `sleeveStatus` int,
  `diskStatus` int,
  `purchasePrice` double,
  `collection` int
);

CREATE TABLE `Article` (
  `id` int PRIMARY KEY,
  `name` varchar(50),
  `description` varchar(255),
  `artist` varchar(255),
  `genre` int,
  `added` date,
  `purchasePrice` double,
  `status` int,
  `collection` int
);

CREATE TABLE `List` (
  `id` int PRIMARY KEY,
  `name` varchar(30),
  `user` int
);

CREATE TABLE `ListoToAlbum` (
  `album` int,
  `list` int
);

CREATE TABLE `Format` (
  `id` int PRIMARY KEY,
  `name` varchar(20),
  `description` varchar(255)
);

CREATE TABLE `Country` (
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `flag` varchar(255)
);

CREATE TABLE `Genre` (
  `id` int PRIMARY KEY,
  `name` varchar(20)
);

CREATE TABLE `Status` (
  `id` int PRIMARY KEY,
  `value` varchar(5),
  `description` varchar(255)
);

ALTER TABLE `Collection` ADD FOREIGN KEY (`user`) REFERENCES `User` (`id`);

ALTER TABLE `Album` ADD FOREIGN KEY (`formar`) REFERENCES `Format` (`id`);

ALTER TABLE `Album` ADD FOREIGN KEY (`genre`) REFERENCES `Genre` (`id`);

ALTER TABLE `Album` ADD FOREIGN KEY (`country`) REFERENCES `Country` (`id`);

ALTER TABLE `Album` ADD FOREIGN KEY (`sleeveStatus`) REFERENCES `Status` (`id`);

ALTER TABLE `Album` ADD FOREIGN KEY (`diskStatus`) REFERENCES `Status` (`id`);

ALTER TABLE `Album` ADD FOREIGN KEY (`collection`) REFERENCES `Collection` (`id`);

ALTER TABLE `Article` ADD FOREIGN KEY (`genre`) REFERENCES `Genre` (`id`);

ALTER TABLE `Article` ADD FOREIGN KEY (`status`) REFERENCES `Status` (`id`);

ALTER TABLE `Article` ADD FOREIGN KEY (`collection`) REFERENCES `Collection` (`id`);

ALTER TABLE `List` ADD FOREIGN KEY (`user`) REFERENCES `User` (`id`);

ALTER TABLE `ListoToAlbum` ADD FOREIGN KEY (`album`) REFERENCES `Album` (`id`);

ALTER TABLE `ListoToAlbum` ADD FOREIGN KEY (`list`) REFERENCES `List` (`id`);
