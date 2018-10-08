USE db_sispass;

CREATE TABLE tb_encarregados (
	id_encarregado INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    matricula VARCHAR(8) NOT NULL,
    turno VARCHAR(10) NOT NULL,
    setor VARCHAR(16) NOT NULL
)ENGINE=INNODB;

CREATE TABLE tb_passagens_servico (
	id_passagemservico INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    datapassagemservico VARCHAR(30) NOT NULL,
    horapassagemservico VARCHAR(30) NOT NULL,
    observacaogeral VARCHAR(800),
	observacaogeralrecebedor VARCHAR(800),
    id_responsavel INT NOT NULL,
    id_recebedor INT NOT NULL,
    FOREIGN KEY (id_responsavel)
		REFERENCES tb_encarregados(id_encarregado),        
    FOREIGN KEY (id_recebedor)
		REFERENCES tb_encarregados(id_encarregado)
)ENGINE=INNODB;

CREATE TABLE tb_materiais (
	id_material INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nm VARCHAR(11) NOT NULL,
    notafiscal VARCHAR(8) NOT NULL,
    item VARCHAR(8) NOT NULL,
    quantidade FLOAT NOT NULL,
    statusprocesso VARCHAR(18) NOT NULL,
    dataentrega VARCHAR(16) NOT NULL,
    horaentrega VARCHAR(16) NOT NULL,
    datafinalizacao VARCHAR(16) NOT NULL,
    horafinalizacao VARCHAR(16) NOT NULL,
    romaneio VARCHAR(8),
    tipoembalagem VARCHAR(18),
    observacaoitem VARCHAR(200),
    id_passagemservico INT NOT NULL,
    FOREIGN KEY (id_passagemservico)
		REFERENCES tb_passagens_servico(id_passagemservico)
)ENGINE=INNODB;


ALTER TABLE tb_encarregados
	ADD COLUMN telefone VARCHAR(15) AFTER setor;

