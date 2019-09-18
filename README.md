Banco de dados usado  no desenvolvimento MYSQL

---------- SQL DML ----------------------

CREATE DATABASE `cpf`

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `nome` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `idade` int(11) NOT NULL,
  `signo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maeNome` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `clientes` ADD PRIMARY KEY (`id`);


----- Instalação ---------

Primeiro abra o terminal na pasta no qual você vai querer que ele fique.

git clone https://github.com/GustavoLucena/Prova.git

Depois entre na pasta do projeto. Renomeie o arquivo .env.example para .env

No arquivo .env altere os seguites campos

DB_CONNECTION=mysql

DB_DATABASE=cpf

DB_USERNAME=root

DB_PASSWORD=



Agora duas coisas importantes:
1- Digite o commando "composer install". Ele vai instalar todos os pacotes php necessários.
2- Digite o commando "php artisan key:generate". Esse vai gerar uma chave para sua aplicação. Sem isso o Laravel não vai funcionar
