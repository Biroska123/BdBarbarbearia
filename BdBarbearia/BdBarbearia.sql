create database BdBarbearia;

create table tbCliente
(
    codCli int primary key AUTO_INCREMENT,
    nomeCli varchar(50),
    telefoneCli char(10),
    celularCli char(11),
    EmailCli varchar(50)
);

create table tbBarbeiro
(
	codBarbeiro int primary key AUTO_INCREMENT,
	nomeBarbeiro varchar(50)
);

create table tbAtendimento
(
	codAtentimento int primary key AUTO_INCREMENT,
	dataAtendimento date,
	horaAtendimento time,
	codCliente int,
	codBarbeiro int,
	FOREIGN KEY(codCliente) REFERENCES tbCliente(codCli),
	FOREIGN KEY(codBarbeiro) REFERENCES tbBarbeiro(codBarbeiro)
);