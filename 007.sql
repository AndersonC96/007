-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Nov-2021 às 18:57
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `007`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `films`
--

CREATE TABLE `films` (
  `_id` int(32) NOT NULL,
  `filmname` varchar(256) DEFAULT NULL,
  `imdb_id` varchar(256) DEFAULT NULL,
  `year` varchar(255) NOT NULL,
  `poster` varchar(256) DEFAULT NULL,
  `trailer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `films`
--

INSERT INTO `films` (`_id`, `filmname`, `imdb_id`, `year`, `poster`, `trailer`) VALUES
(1, 'Dr. No (007 contra o Satânico Dr. No)', 'tt0055928', '1962', '007_1.jpg', '007_1.mp4'),
(2, 'From Russia with Love (Moscou contra 007)', 'tt0057076', '1963', '007_2.jpg', '007_2.mp4'),
(3, 'Goldfinger (007 contra Goldfinger)', 'tt0058150', '1964', '007_3.jpg', '007_3.mp4'),
(4, 'Thunderball (007 contra a Chantagem Atômica)', 'tt0059800', '1965', '007_4.jpg', '007_4.mp4'),
(5, 'You Only Live Twice (Com 007 só se Vive Duas Vezes)', 'tt0062512', '1967', '007_5.jpg', '007_5.mp4'),
(6, 'On Her Majesty\'s Secret Service (007 - A Serviço Secreto de Sua Majestade)', 'tt0064757', '1969', '007_6.jpg', '007_6.mp4'),
(7, 'Diamonds Are Forever (007 - Os Diamantes São Eternos)', 'tt0066995', '1971', '007_7.jpg', '007_7.mp4'),
(8, 'Live and Let Die (Com 007 Viva e Deixe Morrer)', 'tt0070328', '1973', '007_8.jpg', '007_8.mp4'),
(9, 'The Man with the Golden Gun (007 Contra o Homem com a Pistola de Ouro)', 'tt0071807', '1974', '007_9.jpg', '007_9.mp4'),
(10, 'The Spy Who Loved Me (007: O Espião que me Amava)', 'tt0076752', '1977', '007_10.jpg', '007_10.mp4'),
(11, 'Moonraker (007 Contra o Foguete da Morte)', 'tt0079574', '1979', '007_11.jpg', '007_11.mp4'),
(12, 'For Your Eyes Only (007 - Somente para Seus Olhos)', 'tt0082398', '1981', '007_12.jpg', '007_12.mp4'),
(13, 'Octopussy (007 Contra Octopussy)', 'tt0086034', '1983', '007_13.jpg', '007_13.mp4'),
(14, 'A View to a Kill (007 - Na Mira Dos Assassinos)', 'tt0090264', '1985', '007_14.jpg', '007_14.mp4'),
(15, 'The Living Daylights (007 Marcado para a Morte)', 'tt0093428', '1987', '007_15.jpg', '007_15.mp4'),
(16, 'Licence to Kill (007 - Permissão para Matar)', 'tt0097742', '1989', '007_16.jpg', '007_16.mp4'),
(17, 'GoldenEye (007 Contra GoldenEye)', 'tt0113189', '1995', '007_17.jpg', '007_17.mp4'),
(18, 'Tomorrow Never Dies (007 - O Amanhã Nunca Morre)', 'tt0120347', '1997', '007_18.jpg', '007_18.mp4'),
(19, 'The World Is Not Enough (007 - O Mundo Não é o Bastante)', 'tt0143145', '1999', '007_19.jpg', '007_19.mp4'),
(20, 'Die Another Day (007 - Um Novo Dia Para Morrer)', 'tt0246460', '2002', '007_20.jpg', '007_20.mp4'),
(21, 'Casino Royale (007: Cassino Royale)', 'tt0381061', '2006', '007_21.jpg', '007_21.mp4'),
(22, 'Quantum of Solace (007 - Quantum of Solace)', 'tt0830515', '2008', '007_22.jpg', '007_22.mp4'),
(23, 'Skyfall (007 - Operação Skyfall)', 'tt1074638', '2012', '007_23.jpg', '007_23.mp4'),
(24, 'Spectre (007 - Contra Spectre)', 'tt2379713', '2015', '007_24.jpg', '007_24.mp4'),
(25, 'No Time to Die (007 - Sem Tempo para Morrer)', 'tt2382320', '2021', '007_25.jpg', '007_25.mp4');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `films`
--
ALTER TABLE `films`
  MODIFY `_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
