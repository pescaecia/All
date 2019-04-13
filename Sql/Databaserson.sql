create table usuario(
id int primary key auto_increment,
nome varchar (50) NOT NULL,
login varchar(20) NOT NULL Unique,
senha varchar(20) NOT NULL,
email varchar(30) NOT NULL Unique
);

create table publicacao(usuario_id int, foreign key (id) references usuario(id),
id int primary key auto_increment,
titulo varchar(50) NOT NULL,
conteudo varchar(250) NOT NULL
);

create table mensagens(id int primary key auto_increment,
id_session int, foreign key (id) references usuario(id),
id_recebedor int, foreign key (id) references usuario(id),
conteudo varchar(200)
);

create table comentarios(id int primary key auto_increment,
puclicacao_id int, foreign key (id) references publicacao(id),
usuario_id int, foreign key (id) references usuario(id),
comentario varchar(50)
);

create table administrador(id int primary key auto_increment,
login varchar(30),
senha varchar(30)
);

create table publicacaoAdm(adm_id int, foreign key (id) references administrador(id),
id int primary key auto_increment,
titulo varchar(50) NOT NULL,
conteudo varchar(250) NOT NULL
);


