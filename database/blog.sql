CREATE DATABASE blog;

CREATE TABLE categories (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL
);
CREATE TABLE subCategories (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  FOREIGN KEY(parent_id) REFERENCES categories(id)
);

CREATE TABLE comments (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  FOREIGN KEY (post_id) REFERENCES posts(id),
  FOREIGN KEY (author_id) REFERENCES users(id),
  comment VARCHAR(500) NOT NULL
);

CREATE TABLE posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  FOREIGN KEY(cat_id) REFERENCES categories(id),
  FOREIGN KEY(sub_cat_id) REFERENCES subCategories(id),
  FOREIGN KEY(author_id) REFERENCES users(id),
  title VARCHAR(100) NOT NULL,
  image VARCHAR(100),
  content VARCHAR(1000) NOT NULL
);


CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  fullname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
);

-- Test data users

INSERT INTO users(username, fullname, email, password) VALUES('am', 'AM', 'am@gmail.com', '12');
INSERT INTO users(username, fullname, email, password) VALUES('dm', 'DM', 'dm@gmail.com', '123');

-- Test data categories
INSERT INTO categories(name) VALUES('Development');
INSERT INTO categories(name) VALUES('E-Commnerce');

-- Test data sub categories
INSERT INTO subCategories(name, parent_id) VALUES('C++', 1);
INSERT INTO subCategories(name, parent_id) VALUES('Javascript', 1;
INSERT INTO subCategories(name, parent_id) VALUES('Amazon', 2);

-- Test data posts
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
2, 3,
'Amazon',
1, 'AM', 'amazon.png',
'The Amazon is a biggest market in the world. There are so many product buy or sell everyday. So many people are working here to make amazon better'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
2, 3,
'Amazon 2',
1, 'AM', 'amazon.png',
'The Amazon is a biggest market in the world. There are so many product buy or sell everyday. So many people are working here to make amazon better'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
2, 3,
'Amazon 2',
1, 'AM', 'amazon.png',
'The Amazon is a biggest market in the world. There are so many product buy or sell everyday. So many people are working here to make amazon better'
);

INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 1,
'C++ programming',
1, 'AM', 'c++.jpg',
'The C++ programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 1,
'C++ programming 2',
1, 'AM', 'c++.jpg',
'The C++ programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 1,
'C++ programming 3',
1, 'AM', 'c++.jpg',
'The C++ programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 1,
'C++ programming 4',
1, 'AM', 'c++.jpg',
'The C++ programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 1,
'C++ programming 5',
1, 'AM', 'c++.jpg',
'The C++ programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 1,
'C++ programming 6',
1, 'AM', 'c++.jpg',
'The C++ programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 1,
'C++ programming 7',
1, 'AM', 'c++.jpg',
'The C++ programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 2,
'Javascript programming',
1, 'AM', 'javascript.jpg',
'The javascript programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);
INSERT INTO posts(cat_id, sub_cat_id, title, author_id, author_name, image, content)
VALUES(
1, 2,
'Javascript programming 2',
1, 'AM', 'javascript.jpg',
'The javascript programming language consists of a vocabulary of commands, that humans can understand and that can be converted into machine language fairly easily and a language structure (or grammar) that allows humans to combine these C++ commands into a program that actually does something (well, maybe does something)'
);