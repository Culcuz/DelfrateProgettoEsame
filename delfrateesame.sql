-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2021 alle 08:48
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
(2);

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
  `IdChiave` int(5) NOT NULL,
  `pubblica` varchar(2048) NOT NULL,
  `privata` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 2, 7),
(36, 1, 11),
(37, 2, 5),
(38, 2, 13),
(39, 2, 12),
(40, 1, 3),
(41, 1, 5);

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
(12, 2, 7),
(46, 1, 11),
(47, 2, 5),
(48, 2, 13),
(49, 2, 12),
(50, 1, 3),
(51, 1, 5);

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
  `FragioneSociale` varchar(100) DEFAULT NULL,
  `FpecCod` varchar(100) DEFAULT NULL,
  `FpartitaIva` varchar(100) DEFAULT NULL,
  `Fvia` varchar(100) DEFAULT NULL,
  `Fcap` varchar(5) DEFAULT NULL,
  `FnCiv` varchar(5) DEFAULT NULL,
  `Fcomune` varchar(100) DEFAULT NULL,
  `Fprovincia` varchar(5) DEFAULT NULL,
  `FcodFiscale` varchar(20) DEFAULT NULL,
  `idChiave` int(5) DEFAULT NULL,
  `idCarrello` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`idUtente`, `nome`, `cognome`, `email`, `password`, `isAdmin`, `via`, `cap`, `nCiv`, `comune`, `provincia`, `FragioneSociale`, `FpecCod`, `FpartitaIva`, `Fvia`, `Fcap`, `FnCiv`, `Fcomune`, `Fprovincia`, `FcodFiscale`, `idChiave`, `idCarrello`) VALUES
(1, 'Riccardo', 'Delfrate', 'admin@admin.com', '$6$rounds=5000$K8d6sRt2$CoTVB2swIoLs48.PNBHPQN.e57A4GVUB6ZCAecLQ.E/fSpx6XoHPxnNVRERQOr/olk18nQnMdSzwHP8u8G8lb1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'Riccardo', 'Delfrate', 'prova@prova.com', '$6$rounds=5000$K8d6sRt2$um./LVyXN0HH7LJHFxTbSf6ZZQ5afM7S944JOtQpBmf1MuMeXnU2.xT0sRU36.yg/uQv0R7lfnmG1ir6zGSzq/', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2);

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
  ADD PRIMARY KEY (`IdChiave`);

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
  MODIFY `idCarrello` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `chiave`
--
ALTER TABLE `chiave`
  MODIFY `IdChiave` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT per la tabella `contenuto`
--
ALTER TABLE `contenuto`
  MODIFY `idContenuto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `idProdotto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `idUtente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
