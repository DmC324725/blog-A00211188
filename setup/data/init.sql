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

INSERT INTO blog_posts values ("johndoesasdkj2", "This is post number six", "This is just a sample post content " , "johndoe@gmail.com", now());
INSERT INTO blog_posts values ("johndoe2slugasdascj", "This is post number seven", "This is just a sample post content " , "johndoe@gmail.com", now());
INSERT INTO blog_posts values ("narutoslu21eadg", "This is post number eight",  "This is just a sample post content " ,"naruto@gmail.com", now());
INSERT INTO blog_posts values ("luffyslugsdc2f", "This is post number nine", "This is just a sample post content " , "luffy@gmail.com", now());
INSERT INTO blog_posts values ("luffy2slugcx3fsdv2", "This is post number ten", "This is just a sample post content " , "luffy@gmail.com", now());

INSERT INTO blog_posts values ("johndoeslugzxcq12v", "This is post number eleven", "This is just a sample post content " , "johndoe@gmail.com", now());
INSERT INTO blog_posts values ("johndoe2slugxcza21", "This is post number twelve", "This is just a sample post content " , "johndoe@gmail.com", now());
INSERT INTO blog_posts values ("narutoslugasfsg41", "This is post number thirteen",  "This is just a sample post content " ,"naruto@gmail.com", now());
INSERT INTO blog_posts values ("luffyslugsdvser32", "This is post number fourteen", "This is just a sample post content " , "luffy@gmail.com", now());
INSERT INTO blog_posts values ("luffy2swlugsadq", "This is post number fifteen... I'm tired now!", "This is just a sample post content " , "luffy@gmail.com", now());