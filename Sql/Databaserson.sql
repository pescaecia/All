create table usuario(
id int primary key auto_increment,
nome varchar (50) NOT NULL,
login varchar(20) NOT NULL Unique,
senha varchar(20) NOT NULL,
email varchar(30) NOT NULL Unique
);

create table publicacao(
id int primary key auto_increment,
usuario_id integer references usuario(id),
titulo varchar(50) NOT NULL,
conteudo varchar(250) NOT NULL 
);


create table mensagens(
id int primary key auto_increment,
id_session integer references usuario(id),
id_recebedor integer references usuario(id)
);

create table comentarios(
id int primary key auto_increment,
puclicacao_id integer  references publicacao(id),
usuario_id integer references usuario(id),
comentario varchar(50)
);

create table administrador(
id int primary key auto_increment,
login varchar(30),
senha varchar(30)
);

create table publicacaoAdm(
adm_id integer references administrador(id),
id int primary key auto_increment,
titulo varchar(50) NOT NULL,
conteudo varchar(250) NOT NULL,
img varchar(250)
);

create table curtir(
id_adm integer references administrador(id),
id_usuario integer references usuario(id),
id_publicacao integer references publicacao(id),
id_publicacaoAdm integer references publicacaoAdm(adm_id)
);


select * from administrador;
select * from curtir;
drop table comentarios;
drop table publicacaoAdm;
select * from publicacaoAdm;
insert into usuario values('jooj', 'joojasuid', 'simsim', 'joj@jo');
