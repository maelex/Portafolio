create database n260m_21325517_mensajes;
	use mensajes;

	create table Mensaje(
		Id_mensaje int (4) AUTO_INCREMENT,
		Nombre varchar (50),
		Email varchar (50),
		Asunto varchar (50),
		Mensaje varchar (280),
	PRIMARY KEY (Id_mensaje));

