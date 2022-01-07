
SELECT inventarios.nome as NOME,
	departamentos.nome as DEPARTAMENTO,
    inventarios.quantidade as 'QUANTIDADE DE MAQUINAS',
    inventarios.ssd AS 'ARMAZENAMENTO SSD',
    inventarios.observacao  as 'OBSERVAÇÂO' 
FROM projetinho.inventarios
INNER JOIN departamentos
ON inventarios.departamento_id = departamentos.id;