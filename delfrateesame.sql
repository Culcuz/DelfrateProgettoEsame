-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 30, 2021 alle 18:09
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delfrateesame`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `idCarrello` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`idCarrello`) VALUES
(1),
(2),
(4),
(5),
(6),
(7),
(8);

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(5) NOT NULL,
  `nomeCat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCat`) VALUES
(1, 'telefono'),
(2, 'cuffia'),
(3, 'zaino');

-- --------------------------------------------------------

--
-- Struttura della tabella `chiave`
--

CREATE TABLE `chiave` (
  `idChiave` int(5) NOT NULL,
  `pubblica` varchar(3000) DEFAULT NULL,
  `privata` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `chiave`
--

INSERT INTO `chiave` (`idChiave`, `pubblica`, `privata`) VALUES
(44, '-----BEGIN PUBLIC KEY-----\r\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAla1VniUuc9/0y2lvguwa\r\nu//15UM8dFT1bE70Aco5a6z8b5kkf69wGxe4kko9uhWlUFUnRQ4kMkzuF50Nq6ZF\r\nkgfMYYMPwVIc9xN0wPuywzc175cn9mtQ3oIJPl8dhvF6aQbdfcNYzvgg4jNLJfiL\r\n2kyjZGZke8G1r9iE0pgQMN4X4s+wuEEB2ETGQQM317MHSjgg1HabvVqpO7D4KaMb\r\nMvHLXu+bm+GgYK1s/MnSM6jBTXeZB1hEqvlHUsBbGIQEaAAc3zA5NvH0ZKJ7WY/f\r\nghSpIrPqDZEZhZvq6rLWF/9mwXdGh40xhYnU9vSAmbJN7YptZRT0o17boD8db273\r\nswIDAQAB\r\n-----END PUBLIC KEY-----', '-----BEGIN RSA PRIVATE KEY-----\r\nMIIEpAIBAAKCAQEAla1VniUuc9/0y2lvguwau//15UM8dFT1bE70Aco5a6z8b5kk\r\nf69wGxe4kko9uhWlUFUnRQ4kMkzuF50Nq6ZFkgfMYYMPwVIc9xN0wPuywzc175cn\r\n9mtQ3oIJPl8dhvF6aQbdfcNYzvgg4jNLJfiL2kyjZGZke8G1r9iE0pgQMN4X4s+w\r\nuEEB2ETGQQM317MHSjgg1HabvVqpO7D4KaMbMvHLXu+bm+GgYK1s/MnSM6jBTXeZ\r\nB1hEqvlHUsBbGIQEaAAc3zA5NvH0ZKJ7WY/fghSpIrPqDZEZhZvq6rLWF/9mwXdG\r\nh40xhYnU9vSAmbJN7YptZRT0o17boD8db273swIDAQABAoIBADZn8S0w+ren+oVN\r\n5/jA9d7MZYdWb00h7KvX7x4PcdvP31p5Yij/jlJqxu52CgXwBE01Brc1MrcN+6Wd\r\nsvBn2fYA26u+RiXRQTIWYmQbmZkYIoTafu41iAm5Xr7LOCJq+EHg+vXR4iApVVqj\r\npndA5yUMon/GMFRDz1UB8RXTrF72bYm7H1O9NT2DtiAxxyvH/n4J9VCWwFsXA2jE\r\neP7R/P7Hq/NWN/WXGdQuU4FU+hHRrGdnYyghbEw55cTlqjsc3HmSrspO2ZxJTse+\r\neKaGKcdPYuEnh7mY9Bam8GSOgD5ZJRAyRpsB4UOzslg8lG+BVS+ks7hID+oi514D\r\n/fUdtaECgYEAxqm4POrLZTrTlRHPBfIK2OtB6x+Avd/n63PJk0QW5fe6gKD8ow9O\r\n3YQ87V6d70L+drrCd/R0CgAgufDOavl21Onh9YJc6lFnCa0DiZIeqQ8oSZZHRtXS\r\n1tp+/fVUBYgfwncuFFdKZIxrlL27Hd0O8OSUTKzSPrQPFu0EGhKrw4sCgYEAwOBG\r\nyhuv7rsiiFak414L+A72AHam+mi6WYqFms7cvkLAtWvNUrwVE/B9kchrxPL9Oriq\r\ne/jFiG6OgoUtgPPW4LeTsZJeIXLj+Ked6JdKLbqAzM/SOWsagriT8PCnYxciTAxO\r\n1wunUbz+HmUJtSOcwfnU7an4Yv4A+zeh9rD0AXkCgYEAjqsp5Y2U3jD96+srKpDl\r\nW1ywLUOleDaJXlz74Sef7i0XIfL7G7sNnyWtf6ZYc5BAIFIFAJJslxX6aq5V/xsC\r\nTOtd26twQNKO1bMLfEuUe0KoYxhqPaOnU6b8VjNN0N8uN8DRNchuY4E4bUxISa0M\r\nYtE080+VeXRj9cnnDTZlZfsCgYEAqNfswGLKeadyTH3k7HFY8vdN3QwBkrZ5Y4dC\r\n/ElYrmnLP0Y2wNWLciAWHLehuBCrI2ujOtGFQrDdql6hfgB3u9KYxVsHciqcbQF2\r\n17URJ8Tbme/X7ZHX7FVelQ5myfTnfkFMBy7Zc1GJ99ulSt/5C0oEX2Vq3mXTQBfs\r\nfgNcJ6kCgYASqllFTOzt7gtUn6FhwFfhVuYW6ZxTEPxq7u2LEyu4YTHkeoC7F9jL\r\n2daj/AATWxQzwZOyRgOu/zZiqe/a9BN5hkWm5OQTVEwV22PhauX6gAxpeZ4IewON\r\nygQvyNqvDrvUbNPQTAbvAAyZKjBKVl1B7ZVvVzQexJJb41uGMi+jOg==\r\n-----END RSA PRIVATE KEY-----');

-- --------------------------------------------------------

--
-- Struttura della tabella `compra`
--

CREATE TABLE `compra` (
  `idCompra` int(5) NOT NULL,
  `idUtente` int(5) NOT NULL,
  `idProdotto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `compra`
--

INSERT INTO `compra` (`idCompra`, `idUtente`, `idProdotto`) VALUES
(67, 1, 3),
(73, 1, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `contenuto`
--

CREATE TABLE `contenuto` (
  `idContenuto` int(5) NOT NULL,
  `idCarrello` int(5) NOT NULL,
  `idProdotto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `contenuto`
--

INSERT INTO `contenuto` (`idContenuto`, `idCarrello`, `idProdotto`) VALUES
(77, 1, 3),
(83, 1, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `idProdotto` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `prezzo` varchar(100) NOT NULL,
  `descrizione` varchar(1024) NOT NULL,
  `immagine` varchar(100) NOT NULL,
  `idCategoria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO `prodotto` (`idProdotto`, `nome`, `prezzo`, `descrizione`, `immagine`, `idCategoria`) VALUES
(1, 'iPhone 12', '849', 'iOS 14 processore A14 Dimensioni schermo 6.1 Capacità memoria interna 128 GB Bluetooth Sì', './img/prodotti/iphon12.jpg', 1),
(3, 'Samsung A51', '279', '6.5\\\" Ram 4 GB 128 GB Doppia SIM 4G USB tipo-C Android 10.0 4000 mAh', './img/prodotti/samsungA51.jpg', 1),
(4, 'Huawei p20 pro', '458', 'Huawei P20 Pro Single SIM 4G 128GB Black- Smartphones (15.5 cm (6.1\\\"), 128 GB, 40 MP)', './img/prodotti/P20Pro.jpg', 1),
(5, 'Galaxy S9', '225', 'SAMSUNG Galaxy S9 Single SIM 64 GB Android 8.0 Oreo UK Version SIM Free Smartphone Purple', './img/prodotti/galaxy-s9.jpg', 1),
(6, 'DOQAUS C1', '29', 'Bluetooth, 3 EQ Modalita di Suono, Cuffie Over Ear con tempo di riproduzione di 52 ore, Comode Cuffie con Microfono', './img/prodotti/cuffie1.jpg', 2),
(7, 'Bose QuietComfort 35', '207', 'Noise Cancelling Bluetooth Headphones - Cuffie Over-Ear Wireless con Microfono Integrato e Controllo Vocale', './img/prodotti/bose.jpg', 2),
(8, 'Soundcore Anker Q30', '80.56', 'Canc. attiva rumore mod. multiple, suono alta ris, 40 ore di ripr, chiamate chiare, ric. rapida, auricolari morbidi, cuffie Bluetooth', './img/prodotti/Anker.jpg', 2),
(9, 'Sennheiser HD 559', '82', 'Cuffia Aperta Circumaurale, Jack 6.3 mm, Nero/Grigio Jack 6.3', './img/prodotti/Sennheiserr.jpg', 2),
(10, 'Eastpak Padded Pak', '50', '40 cm, 24 L, Azzurro (Brize Pool)', './img/prodotti/eastpak.jpg', 3),
(11, 'Vans Ss20 Old SKOOL III', '81', 'Capacità: 22 l, ampio scomparto principale con cerniera ,tasca frontale con zip e organizer per un accesso rapido', './img/prodotti/vans.jpg', 3),
(12, 'Vaschy Casual', '25', 'Dimensioni esterne: 43x32.5x14cm/16.9x12.9x5.5pollici(HxLxW),Dimensioni Prodotto：32,8 x 14 x 42,9 cm, Capacità: 20Liters; Peso: 0.36KG', './img/prodotti/Vaschy.jpg', 3),
(13, 'Wenig', '26', 'Lo zaino per laptop da viaggio 17.7 x 11.8 x 7.4 pollici si applica a computer fino a 15.6 pollici, nonché 15 pollici, 14 pollici e 13 pollici.', './img/prodotti/Wenig.jpg', 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `idUtente` int(5) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `via` varchar(100) DEFAULT NULL,
  `cap` varchar(5) DEFAULT NULL,
  `nCiv` varchar(5) DEFAULT NULL,
  `comune` varchar(100) DEFAULT NULL,
  `provincia` varchar(5) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  `FragioneSociale` varchar(100) DEFAULT NULL,
  `FpecCod` varchar(100) DEFAULT NULL,
  `FpartitaIva` varchar(100) DEFAULT NULL,
  `Fvia` varchar(100) DEFAULT NULL,
  `Fcap` varchar(5) DEFAULT NULL,
  `FnCiv` varchar(5) DEFAULT NULL,
  `Fcomune` varchar(100) DEFAULT NULL,
  `Fprovincia` varchar(5) DEFAULT NULL,
  `FcodFiscale` varchar(20) DEFAULT NULL,
  `cartaCredito` varchar(500) DEFAULT NULL,
  `idChiave` int(5) DEFAULT NULL,
  `idCarrello` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`idUtente`, `nome`, `cognome`, `email`, `password`, `isAdmin`, `via`, `cap`, `nCiv`, `comune`, `provincia`, `info`, `FragioneSociale`, `FpecCod`, `FpartitaIva`, `Fvia`, `Fcap`, `FnCiv`, `Fcomune`, `Fprovincia`, `FcodFiscale`, `cartaCredito`, `idChiave`, `idCarrello`) VALUES
(1, 'Riccardo', 'Delfrate', 'admin@admin.com', '$6$rounds=5000$K8d6sRt2$CoTVB2swIoLs48.PNBHPQN.e57A4GVUB6ZCAecLQ.E/fSpx6XoHPxnNVRERQOr/olk18nQnMdSzwHP8u8G8lb1', 1, 'qwe', 'qwe', 'qwe', 'qwe', 'ao', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dlE+XpgGWQw+R+Hd/tu4Lthkml/VMvsMK1qmS0ORKsJBKHNxVrFqB+2qchahZsrIn4Dc+ZMvp4Uk7sX/9cs9vOlW4F9dCYvqVMpwK7HW3wMnsQbYQU4aGH059XBFRZpLKbHOwE8YBWollb49kSbFJY436saGDw5YmM2L4qoebOeEC2G+uUvlfENQA1ddosEZeUhq6IALWzK+CZwLa6v9CFHI92l7UQR5WpHf4xViIwCIZzG6dD0j/VPttDxlGGy+ffqjuXyF2lRUhkYXt8mub7D0XjCmA3/BFaTwlLLAiD7fG+YId4H3cy6kQ7aDmcohg4KfzyFZKgU0jQ9xwSBzJQ==', 44, 1),
(2, 'Mario', 'Mario', 'prova@prova.com', '$6$rounds=5000$K8d6sRt2$um./LVyXN0HH7LJHFxTbSf6ZZQ5afM7S944JOtQpBmf1MuMeXnU2.xT0sRU36.yg/uQv0R7lfnmG1ir6zGSzq/', 0, 'y', 'y', 'y', 'y', 'ar', '', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'pc', 'y', NULL, NULL, 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`idCarrello`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indici per le tabelle `chiave`
--
ALTER TABLE `chiave`
  ADD PRIMARY KEY (`idChiave`);

--
-- Indici per le tabelle `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idUtente` (`idUtente`),
  ADD KEY `idProdotto` (`idProdotto`);

--
-- Indici per le tabelle `contenuto`
--
ALTER TABLE `contenuto`
  ADD PRIMARY KEY (`idContenuto`),
  ADD KEY `idProdotto` (`idProdotto`),
  ADD KEY `idCarrello` (`idCarrello`);

--
-- Indici per le tabelle `prodotto`
--
ALTER TABLE `prodotto`
  ADD PRIMARY KEY (`idProdotto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`idUtente`),
  ADD KEY `idChiave` (`idChiave`),
  ADD KEY `idCarrello` (`idCarrello`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `idCarrello` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `chiave`
--
ALTER TABLE `chiave`
  MODIFY `idChiave` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT per la tabella `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT per la tabella `contenuto`
--
ALTER TABLE `contenuto`
  MODIFY `idContenuto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `idProdotto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `idUtente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`idUtente`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`idProdotto`) REFERENCES `prodotto` (`idProdotto`);

--
-- Limiti per la tabella `contenuto`
--
ALTER TABLE `contenuto`
  ADD CONSTRAINT `contenuto_ibfk_1` FOREIGN KEY (`idProdotto`) REFERENCES `prodotto` (`idProdotto`),
  ADD CONSTRAINT `contenuto_ibfk_2` FOREIGN KEY (`idCarrello`) REFERENCES `carrello` (`idCarrello`);

--
-- Limiti per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  ADD CONSTRAINT `idCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Limiti per la tabella `utente`
--
ALTER TABLE `utente`
  ADD CONSTRAINT `idCarrello` FOREIGN KEY (`idCarrello`) REFERENCES `carrello` (`idCarrello`),
  ADD CONSTRAINT `idChiave` FOREIGN KEY (`idChiave`) REFERENCES `chiave` (`IdChiave`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
