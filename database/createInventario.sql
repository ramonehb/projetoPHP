use projetinho ;
create table inventarios(
	id INT NOT NULL AUTO_INCREMENT
    ,departamento_id INT NOT NULL
    ,nome VARCHAR(100) NOT NULL
    ,quantidade INT NOT NULL
    ,memoria VARCHAR(10) NOT NULL
    ,ssd VARCHAR(15) NOT NULL
    ,observacao VARCHAR(100) NULL 
    ,PRIMARY KEY (id)
    ,FOREIGN KEY (departamento_id) REFERENCES departamentos (id)
);


