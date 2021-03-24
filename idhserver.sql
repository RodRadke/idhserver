DROP DATABASE IF EXISTS idhserver;
CREATE DATABASE IF NOT EXISTS idhserver;
USE idhserver;

CREATE TABLE users(
id              int(255) auto_increment not null,
role            varchar(20),
name            varchar(255),
surname         varchar(255),
email           varchar(255),
password        varchar(255),
image           varchar(255),
created_at      datetime,
updated_at      datetime,
remember_token  varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;
