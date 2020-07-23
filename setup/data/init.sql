use database;
CREATE TABLE author (
email varchar(255) primary key
, name varchar(255) not null
, password_hash varchar(255) not null
);

CREATE TABLE blog_list (
    slug varchar(40) PRIMARY KEY
    , post_name varchar(255)
    , author_email varchar(255) REFERENCES author(email)
    , publish_date DATETIME NOT NULL
);
CREATE TABLE blog_post (
    slug varchar(40) primary key REFERENCES blog_list(slug)
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


--Insert for BlogList Table
INSERT INTO blog_list values ("johndoeslug", "How to be John Doe", 
"ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 "
,"johndoe@gmail.com", now());
INSERT INTO blog_list values ("johndoe2slug", "How to be John Doe Part 2", 
"ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ", "johndoe@gmail.com", now());
INSERT INTO blog_list values ("narutoslug", "How to become a Hokage", 
"ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ", "naruto@gmail.com", now());
INSERT INTO blog_list values ("luffyslug", "How to become The King of the Pirates", 
"ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ", "luffy@gmail.com", now());
INSERT INTO blog_list values ("luffy2slug", "How to season meat", 
"ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ScriptParseInfo scriptParseInfo, Int32 startLine, Int32 startColumn) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\ScriptDocumentInfo.cs:line 158
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.GetDefinition(TextDocumentPosition textDocumentPosition, ScriptFile scriptFile, ConnectionInfo connInfo) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 1343
   at Microsoft.SqlTools.ServiceLayer.LanguageServices.LanguageService.HandleDefinitionRequest(TextDocumentPosition textDocumentPosition, RequestContext`1 requestContext) in D:\a\1\s\src\Microsoft.SqlTools.ServiceLayer\LanguageServices\LanguageService.cs:line 515
  Code: 0 ", "luffy@gmail.com", now());


-- Insert for blog_post table
INSERT INTO blog_list values ("johndoeslug", "How to be John Doe", "johndoe@gmail.com", now());
INSERT INTO blog_list values ("johndoe2slug", "How to be John Doe Part 2", "johndoe@gmail.com", now());
INSERT INTO blog_list values ("narutoslug", "How to become a Hokage", "naruto@gmail.com", now());
INSERT INTO blog_list values ("luffyslug", "How to become The King of the Pirates", "luffy@gmail.com", now());
INSERT INTO blog_list values ("luffy2slug", "How to season meat", "luffy@gmail.com", now());



------ Blog Post Fields
-- slug = post_name varchar(40)
-- post_name varchar(255)
-- post_content text
-- author (FK -> author table) varchar(255)
-- publication_date date