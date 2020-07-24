use database;
CREATE TABLE author (
email varchar(255) primary key
, name varchar(255) not null
, password_hash varchar(255) not null
);

CREATE TABLE blog_posts (
    slug varchar(40) primary key
    , post_name varchar(255)
    , post_content text
    , author_email varchar(255) REFERENCES author(email) 
    , publish_date DATETIME NOT NULL
    -- comments to be added in future

);

-- Insert for Author table
INSERT INTO author values ("johndoe@gmail.com","John Doe", "Password Hash will come here");
INSERT INTO author values ("naruto@gmail.com","Naruto Uzumaki", "Password Hash will come here");
INSERT INTO author values ("luffy@gmail.com","Monkey D. Luffy", "Password Hash will come here");


-- Insert for blog_posts table
INSERT INTO blog_posts values ("johndoeslug", "How to be John Doe", "This is just a sample post content " , "johndoe@gmail.com", now());
INSERT INTO blog_posts values ("johndoe2slug", "How to be John Doe Part 2", "This is just a sample post content " , "johndoe@gmail.com", now());
INSERT INTO blog_posts values ("narutoslug", "How to become a Hokage",  "This is just a sample post content " ,"naruto@gmail.com", now());
INSERT INTO blog_posts values ("luffyslug", "How to become The King of the Pirates", "This is just a sample post content " , "luffy@gmail.com", now());
INSERT INTO blog_posts values ("luffy2slug", "How to season meat", "This is just a sample post content " , "luffy@gmail.com", now());

