CREATE TABLE tareas(
    ID int NOT NULL AUTO_INCREMENT,
    titulo varchar(255),
    description varchar(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID)
);