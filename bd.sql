create database estadio_esports;
use Estadio_eSports;

create table Administrador(
cod_adm int primary key not null auto_increment,
nome_adm varchar(50),
idade int,
salario double
);

create table jogo(
cod_jogo int primary key not null auto_increment,
cod_adm int,
cod_plataforma int,
cod_gen int,
nome_jogo varchar(50)
);

create table genero(
cod_gen int primary key auto_increment not null,
nome_gen varchar(50)
);

create table plataforma(
cod_plataforma int primary key not null auto_increment,
nome_plataforma varchar(50)
);

create table evento(
cod_evt int primary key not null auto_increment,
nome_evt varchar(100),
duracaoINICIO datetime,
duracaoFIM datetime,
premiacao double,
exclusivo_arena boolean,
cod_jogo int,
cod_adm int
);

create table historico_eventos(
cod_histo int primary key not null auto_increment,
cod_evt int,
equipe_vcdr int
);

create table espectador(
cod_spec int primary key auto_increment not null,
cpf varchar(30),
idade int,
nome varchar(50)
);

create table ingresso(
cod_ingresso int primary key not null auto_increment,
cod_evento int,
valor double
);

create table Lista_de_EQPS_do_EVT(
cod_evt int,
cod_eqp int
);

create table adm_de_equipe(
cod_adm_eqp int primary key not null auto_increment,
idade int,
nome_adm varchar(50)
);

create table equipe(
cod_eqp int primary key not null auto_increment,
data_criacao datetime,
cod_adm_eqp int,
cod_jogo int,
nome_eqp varchar(50)
);

create table jogador(
cod_jogador int not null primary key auto_increment,
cod_eqp int,
cpf varchar(30),
idade int,
nome varchar(50)
);

create table itens_da_lista(
cod_lista int,
cod_ingresso int,
qtd int
);

create table lista_ingressos(
cod_lista int primary key auto_increment not null,
valorTotal double,
cod_spec int,
data_compra datetime
);

alter table jogo
add constraint FK_ADM foreign key (cod_adm) references administrador (cod_adm);

alter table jogo
add constraint FK_plataforma foreign key (cod_plataforma) references plataforma (cod_plataforma);

alter table jogo
add constraint FK_gen foreign key (cod_gen) references genero (cod_gen);

alter table evento
add constraint FK_admEVT foreign key (cod_adm) references administrador(cod_adm);

alter table evento
add constraint FK_jogoEVT foreign key (cod_jogo) references jogo(cod_jogo);

alter table historico_eventos 
add constraint FK_evtHISTO foreign key (cod_evt) references evento(cod_evt);

alter table historico_eventos
add constraint FK_eqpHISTO foreign key (equipe_vcdr) references equipe(cod_eqp); 

alter table  ingresso
add constraint FK_evtIGS foreign key (cod_evento) references evento(cod_evt);

alter table lista_de_eqps_do_evt
add constraint FK_evtLE foreign key (cod_evt) references evento (cod_evt);

alter table lista_de_eqps_do_evt
add constraint FK_eqpLE foreign key (cod_eqp) references equipe (cod_eqp);

alter table equipe
add constraint FK_admEQP foreign key (cod_adm_eqp) references adm_de_equipe (cod_adm_eqp);

alter table equipe
add constraint FK_jogoEQP foreign key (cod_jogo) references jogo (cod_jogo);

alter table jogador
add constraint FK_eqpJR foreign key (cod_eqp) references equipe (cod_eqp);

alter table itens_da_lista  
add constraint FK_lista foreign key (cod_lista) references  lista_ingressos(cod_lista);

alter table itens_da_lista
add constraint FK_ingresso foreign key (cod_ingresso) references  ingresso(cod_ingresso);

alter table lista_ingressos
add constraint FK_spec foreign key (cod_spec) references espectador (cod_spec);

insert into administrador (cod_adm, nome_adm, idade, salario) values (default, 'João Carlos', 45, 2500.00),
(default, 'José Aparecido', 20, 3000.50), (default, 'Carlos Magno', 60, 2999.99), (default, 'Maria Margarida', 35, 5999.99 ), 
(default, 'Antonieta Francisca', 19, 1999.99),(default, 'Marcos Paulo', 29, 1098.99);

insert into genero (cod_gen, nome_gen) values (default, 'FPS'), (default, 'Battle Royale'),(default, 'Moba'),
(default, 'RPG'), (default, 'MMORPG');

insert into plataforma (cod_plataforma, nome_plataforma) values (default, 'Mobile'), (default, 'Console'), (default, 'Desktop');

insert into jogo (cod_jogo, nome_jogo, cod_adm, cod_plataforma, cod_gen) values (default,'PUBG', 5, 3, 2), (default,'CS:GO', 3, 3, 1),
(default,'Free Fire', 5, 1, 2), (default,'League of Legends', 3, 3, 3), (default,'Call of Duty: Warzone', 3, 2, 2), 
(default,'Overwatch', 2, 3,1 ), (default,'Fortnite', 2, 1, 2), (default,'League of Legends: Wild Rift', 3, 1, 3),
(default,'PUBG: New States', 6, 1, 2), (default,'Rainbow Six Siege', 6, 2, 1);

insert into evento (cod_evt, nome_evt, duracaoINICIO, duracaoFIM, premiacao, exclusivo_arena, cod_adm, cod_jogo) values
(default, '3º edição do Counter Strike para amadores', '2021-11-29 15:00:00', '2021-12-03 22:00:00', 1500.00, true, 3, 2),
(default, 'PUBG para todos', '2021-11-15 18:00', '2021-11-15 23:59', 5000.00, false, 6,1),
(default, 'Tiozão também joga', '2021-12-04 13:00', '2021-12-04 23:59', 50000.00, false, 2, 5),
(default, 'LOL também é jogo', '2021-12-10 23:00', '2021-12-13 01:59', 1000.00, true, 6, 3),
(default, 'Campeonato Profissional de Overwatch', '2021-11-21 11:00', '2021-11-23 15:59', 100000.00, false, 4, 6),
(default, '1º edição do campeonato de talentos do PUBG: New States', '2021-12-10 16:00', '2021-12-15 23:59', 20000.00, false, 3, 1);

insert into ingresso (cod_ingresso, valor, cod_evento) values (default, 10, 1),(default, 20.99, 2), (default, 5.99, 3), 
 (default, 45.99,4), (default, 11.99, 5), (default, 14.99,6);
 
insert into espectador (cod_spec, cpf, idade, nome) values (default, '123.456.789-98', 23,'Abraão Lancaster'), 
(default, '345.234.123-45', 18,'Josefino Finíssimo'), (default, '234.453.234-26', 19,'Gustavo de Queiroz'),
(default, '345.654.234-43', 34,'Lucas Andrade'), (default, '234.523.543-19', 61,'Alfredo Henrique'), (default, '991.213.432-76', 54,'Kelvin Klay'),
(default, '321.434.542-87', 43,'Marcos Andrade'), (default, '111.222.333-44', 55,'André Melo'), (default, '712.321.897-29', 27,'Alberto Braga'),
(default, '789.554.123-91', 17,'Herique José'), (default, '178.198.657-07', 34,'Gustavo Barbosa'), (default, '567.114.782-67', 21,'Maria Souza'),
(default, '745.123.984-64',24,'José de Alencar'), (default, '235.567.981-87', 22,'Guilerme Brito'), (default, '768.984.123-76',25 ,'Antônio Braga'),
(default, '763.123.627-78', 20,'José da Silva'), (default, '745.324.875-45', 30,'Marcos Paulo Venâncio');     

insert into lista_ingressos (cod_lista, ValorTotal, data_compra, cod_spec) values (default, 30, '2021-11-20 17:59',3), (default,23.98 , '2021-11-27 10:30',10),
 (default, 59.96, '2021-11-30 13:00',15), (default, 275.94, '2021-11-28 12:00',11), (default, 89.94, '2021-11-30 14:27',10), (default, 146.93, '2021-11-15 20:02',4), (default, 95.92, '2021-12-01 18:10', 17),
 (default, 137.97, '2021-11-20 14:00',15), (default, 59.96, '2021-11-19 08:23',13), (default, 10, '2021-11-19 12:51',16), (default, 137.97, '2021-11-25 21:21',09);
 
 insert into adm_de_equipe (cod_adm_eqp, nome_adm, idade) values (default,'José Francisco',45), (default,'Maurício Gomes',30), (default,'Marcos Antônio',49),
 (default,'Carlos Abreu', 37),(default,'Maria Antonieta',23), (default,'Raquel Silva', 22),(default,'Thiago Samuel', 25);
 
 insert into equipe (cod_eqp, data_criacao, nome_eqp, cod_jogo, cod_adm_eqp) values (default, '2021-10-21 21:00','Black Dragons', 4,1), 
 (default, '2021-11-23 11:00', 'INTZ', 1,2), (default, '2021-10-16 15:00', 'Alpha7', 1,3), (default, '2021-12-01 08:00', 'Team Solid', 5,4), 
 (default, '2021-11-09 15:00', 'B4', 5,5), (default, '2021-07-12 21:00', 'Influence Rage', 6,6), (default, '2021-10-12 15:00', 'Storm', 2,7);
 
 insert into jogador (cod_jogador, nome, cod_eqp, cpf, idade) values  (default, 'Luiz Guilerme', 1, '123.432.434-45',23),
 (default, 'João Antônio', 1, '546.342.491-12',21),(default, 'Marcos Vale', 1, '536.123.431-87',45),
 (default, 'Joana Pereira', 1, '324.531.287-23',20),(default, 'Davi Nascimento', 2, '213.123.432-12',17),
 (default, 'Lucas do Anjos', 2, '654.123.876-90',27),(default, 'Larissa Gonsalvez',2 , '923.463.091-78',20),
 (default, 'Hamilton Cristovão', 2, '347.125.934-09',22),(default, 'Manoela Silva', 3, '621.324.847-98',23),
 (default, 'Cristovão Colombo', 3, '612.832.921-91',30),(default, 'Franciele Costa', 3, '634.543.091-29',60),
 (default, 'Francisca Pereira', 3, '627.439.029-01',24),(default, 'José Alencar', 4, '623.721.392-21',24),
 (default, 'Alessandra Barbosa', 4, '634.213.321-89',26),(default, 'Josefina Finíssima', 4, '562.212.213-89',21),
 (default, 'Francisneide Francesa', 4, '561.314.781-87',30),(default, 'Carine Silva',5 , '541.321.981-89',19),
 (default, 'Débora Braga', 5, '152.321.438-198',21),(default, 'Ana Braga', 5, '672.123.432-89',29),
 (default, 'Carlos Barbosa', 5, '654.324.234-71',26);
 
 insert into lista_de_eqps_do_evt (cod_evt, cod_eqp) values (1,1), (1,2), (1,3), (1,4), (2,5), (2,1), (2,7), 
 (2,4), (3,7), (3,4), (3,3), (3,5), (4,3), (4,6), (4,1), (4,2), (5,1), (5,6), (5,2), (5,3), (6,2), (6,4), (6,5), (6,6);
 
 insert into historico_eventos (cod_histo, cod_evt, equipe_vcdr) values (default, 3,4), (default, 1,3),  
 (default, 6,6),  (default, 5,1);    
 
  insert into itens_da_lista (cod_lista, cod_ingresso, qtd) values (1,1,3), (2,5,2),  (3,6,4),  (4,4,6),  (5,6,4),  (6,2,7),  (7,5,8),  (8,4,3),
 (9,6,4),  (10,4,5),  (11,1,1);