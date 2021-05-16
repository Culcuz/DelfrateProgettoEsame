-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 16, 2021 alle 16:30
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
  `idCarrello` int(5) NOT NULL,
  `idUtente` int(5) NOT NULL,
  `idProdotto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'scarpa'),
(3, 'tablet');

-- --------------------------------------------------------

--
-- Struttura della tabella `chiave`
--

CREATE TABLE `chiave` (
  `IdChive` int(5) NOT NULL,
  `privata` varchar(900) NOT NULL,
  `pubblica` varchar(900) NOT NULL,
  `IdUtente` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `idProdotto` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `prezzo` int(10) NOT NULL,
  `descrizione` varchar(255) NOT NULL,
  `immagine` varchar(50) NOT NULL,
  `idCategoria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO `prodotto` (`idProdotto`, `nome`, `prezzo`, `descrizione`, `immagine`, `idCategoria`) VALUES
(1, 'Iphone 12', 849, 'iOS 14 processore A14 Dimensioni schermo 6.1\" Capacità memoria interna 128 GB Bluetooth Sì ', './img/prodotti/iphon12.jpg', 1),
(2, 'Samsung A51', 279, '6.5\" Ram 4 GB 128 GB Doppia SIM 4G USB tipo-C Android 10.0 4000 mAh', './img/prodotti/samsungA51.jpg', 1),
(3, 'Huawei p20 pro', 458, 'Huawei P20 Pro Single SIM 4G 128GB Black- Smartphones (15.5 cm (6.1\"), 128 GB, 40 MP, Android, 8.1, Black)', './img/prodotti/P20Pro.jpg', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `idUtente` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`idUtente`, `nome`, `cognome`, `email`, `password`, `isAdmin`) VALUES
(11, 'Admin', 'Admin', 'admin@admin.com', '$6$rounds=5000$K8d6sRt2$CoTVB2swIoLs48.PNBHPQN.e57A4GVUB6ZCAecLQ.E/fSpx6XoHPxnNVRERQOr/olk18nQnMdSzwHP8u8G8lb1', 1),
(36, 'Mario', 'Rossi', 'prova@prova.com', '$6$rounds=5000$K8d6sRt2$um./LVyXN0HH7LJHFxTbSf6ZZQ5afM7S944JOtQpBmf1MuMeXnU2.xT0sRU36.yg/uQv0R7lfnmG1ir6zGSzq/', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`idCarrello`),
  ADD KEY `idProdotto` (`idProdotto`),
  ADD KEY `idUtente` (`idUtente`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indici per le tabelle `chiave`
--
ALTER TABLE `chiave`
  ADD PRIMARY KEY (`IdChive`),
  ADD KEY `idUtente` (`IdUtente`);

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
  ADD PRIMARY KEY (`idUtente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `idCarrello` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `chiave`
--
ALTER TABLE `chiave`
  MODIFY `IdChive` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `idProdotto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `idUtente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `carrello_ibfk_1` FOREIGN KEY (`idProdotto`) REFERENCES `prodotto` (`idProdotto`),
  ADD CONSTRAINT `carrello_ibfk_2` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`idUtente`);

--
-- Limiti per la tabella `chiave`
--
ALTER TABLE `chiave`
  ADD CONSTRAINT `idUtente` FOREIGN KEY (`IdUtente`) REFERENCES `utente` (`idUtente`);

--
-- Limiti per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  ADD CONSTRAINT `idCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
