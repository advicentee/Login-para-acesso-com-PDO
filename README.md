# Login-para-acesso-com-PDO

login com acesso via sessão, enquando o usuário estiver logado não pode acessar a área de login e vice-versa.
arquivos:
HTMl
CSS
PHP(PDO)


Banco de dados

CREATE TABLE `dados` (
  `id_dados` int NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `dados` (`id_dados`, `nome`, `email`, `senha`) VALUES
(1, 'johnDoe', 'ad@doe.com', '12345'),
(2, 'janeDoe', 'jane@doe.com', '54321');
