CREATE DATABASE blog;

CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  fullname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
);


CREATE TABLE categories (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL
);

CREATE TABLE subCategories (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  parent_id INT UNSIGNED,
  FOREIGN KEY (parent_id) REFERENCES categories(id)
);

CREATE TABLE posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  cat_id INT UNSIGNED,
  sub_cat_id INT UNSIGNED,
  author_id INT UNSIGNED,
  title VARCHAR(100) NOT NULL,
  image VARCHAR(100),
  content VARCHAR(1000) NOT NULL,
  FOREIGN KEY (cat_id) REFERENCES categories(id),
  FOREIGN KEY (sub_cat_id) REFERENCES subCategories(id),
  FOREIGN KEY (author_id) REFERENCES users(id)
);

CREATE TABLE comments (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  comment VARCHAR(500) NOT NULL,
  post_id INT UNSIGNED,
  author_id INT UNSIGNED,
  FOREIGN KEY (post_id) REFERENCES posts(id),
  FOREIGN KEY (author_id) REFERENCES users(id)
);

CREATE TABLE conversations(
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  type INT UNSIGNED
);

CREATE TABLE conversation_group(
  conversation_id INT UNSIGNED,
  text_sender INT UNSIGNED,
  text_receiver INT UNSIGNED,
  FOREIGN KEY (conversation_id) REFERENCES conversations(id),
  FOREIGN KEY (text_sender) REFERENCES users(id),
  FOREIGN KEY (text_receiver) REFERENCES users(id)
);

CREATE TABLE conversation_content(
  conversation_id INT UNSIGNED,
  text TEXT,
  sender INT UNSIGNED,
  time INT,
  FOREIGN KEY (conversation_id) REFERENCES conversations(id),
  FOREIGN KEY (sender) REFERENCES users(id)
);




-- Dommy Data user
INSERT INTO `users` (`username`, `fullname`, `email`, `password`) VALUES
('am', 'AM', 'am@gmail.com', '12'),
('dm', 'DM', 'dm@gmail.com', '123'),
('cm', 'CM', 'cm@gmail.com', '123');

-- Dommy Data categories
INSERT INTO `categories` (`name`) VALUES
('Development'),
('E-Commerce');

INSERT INTO `subCategories` (`name`, `parent_id`) VALUES
('c++', 1),
('Javascript', 1),
('E-bay', 2),
('Amazon', 2);


-- Bommy Data post

INSERT INTO `posts` (`cat_id`, `sub_cat_id`, `author_id`, `title`, `image`, `content`) VALUES
(1, 1, 1, 'C++ 1', 'image-3.jpg', 'C++  is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation.\r\n\r\nIt was designed with a bias toward system programming and embedded, resource-constrained and large systems, with performance, efficiency and flexibility of use as its design highlights.[7] C++ has also been found useful in many other contexts, with key strengths being software infrastructure and resource-constrained applications,[7] including desktop applications, servers (e.g. e-commerce, Web search or SQL servers), and performance-critical applications (e.g. telephone switches or space probes).[8] C++ is a compiled language, with implementations of it available on many platforms. Many vendors provide C++ compilers, including the Free Software Foundation, Microsoft, Intel, and IBM.\r\n\r\nC++ is standardized by the International Organization for Standardization (ISO), with the latest standard version rati'),
(1, 2, 2, 'Javascript 1', 'image-4.png', 'JavaScript, often abbreviated as JS, is a high-level, interpreted programming language that conforms to the ECMAScript specification. It is a programming language that is characterized as dynamic, weakly typed, prototype-based and multi-paradigm');


-- Dommy Data conversation
INSERT INTO conversations(type) VALUES (1),(1);

-- Dommy Data conversation_group
INSERT INTO conversation_group(conversation_id, text_sender, text_receiver) VALUES
(1, 1, 2),
(1, 2, 1),
(2, 2, 3),
(2, 3, 2);