
CREATE TABLE tb_usuarios(
	
	id_usuario INT IDENTITY(1,1) PRIMARY KEY,
	nombres VARCHAR(255),
	email VARCHAR(255) ,
	password_user TEXT ,
	token VARCHAR(100),
	fyh_creacion DATETIME,
	fyh_actualizacion DATETIME,
)