-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 05, 2023 alle 10:18
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
(44, '-----BEGIN PUBLIC KEY-----\r\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAla1VniUuc9/0y2lvguwa\r\nu//15UM8dFT1bE70Aco5a6z8b5kkf69wGxe4kko9uhWlUFUnRQ4kMkzuF50Nq6ZF\r\nkgfMYYMPwVIc9xN0wPuywzc175cn9mtQ3oIJPl8dhvF6aQbdfcNYzvgg4jNLJfiL\r\n2kyjZGZke8G1r9iE0pgQMN4X4s+wuEEB2ETGQQM317MHSjgg1HabvVqpO7D4KaMb\r\nMvHLXu+bm+GgYK1s/MnSM6jBTXeZB1hEqvlHUsBbGIQEaAAc3zA5NvH0ZKJ7WY/f\r\nghSpIrPqDZEZhZvq6rLWF/9mwXdGh40xhYnU9vSAmbJN7YptZRT0o17boD8db273\r\nswIDAQAB\r\n-----END PUBLIC KEY-----', '-----BEGIN RSA PRIVATE KEY-----\r\nMIIEpAIBAAKCAQEAla1VniUuc9/0y2lvguwau//15UM8dFT1bE70Aco5a6z8b5kk\r\nf69wGxe4kko9uhWlUFUnRQ4kMkzuF50Nq6ZFkgfMYYMPwVIc9xN0wPuywzc175cn\r\n9mtQ3oIJPl8dhvF6aQbdfcNYzvgg4jNLJfiL2kyjZGZke8G1r9iE0pgQMN4X4s+w\r\nuEEB2ETGQQM317MHSjgg1HabvVqpO7D4KaMbMvHLXu+bm+GgYK1s/MnSM6jBTXeZ\r\nB1hEqvlHUsBbGIQEaAAc3zA5NvH0ZKJ7WY/fghSpIrPqDZEZhZvq6rLWF/9mwXdG\r\nh40xhYnU9vSAmbJN7YptZRT0o17boD8db273swIDAQABAoIBADZn8S0w+ren+oVN\r\n5/jA9d7MZYdWb00h7KvX7x4PcdvP31p5Yij/jlJqxu52CgXwBE01Brc1MrcN+6Wd\r\nsvBn2fYA26u+RiXRQTIWYmQbmZkYIoTafu41iAm5Xr7LOCJq+EHg+vXR4iApVVqj\r\npndA5yUMon/GMFRDz1UB8RXTrF72bYm7H1O9NT2DtiAxxyvH/n4J9VCWwFsXA2jE\r\neP7R/P7Hq/NWN/WXGdQuU4FU+hHRrGdnYyghbEw55cTlqjsc3HmSrspO2ZxJTse+\r\neKaGKcdPYuEnh7mY9Bam8GSOgD5ZJRAyRpsB4UOzslg8lG+BVS+ks7hID+oi514D\r\n/fUdtaECgYEAxqm4POrLZTrTlRHPBfIK2OtB6x+Avd/n63PJk0QW5fe6gKD8ow9O\r\n3YQ87V6d70L+drrCd/R0CgAgufDOavl21Onh9YJc6lFnCa0DiZIeqQ8oSZZHRtXS\r\n1tp+/fVUBYgfwncuFFdKZIxrlL27Hd0O8OSUTKzSPrQPFu0EGhKrw4sCgYEAwOBG\r\nyhuv7rsiiFak414L+A72AHam+mi6WYqFms7cvkLAtWvNUrwVE/B9kchrxPL9Oriq\r\ne/jFiG6OgoUtgPPW4LeTsZJeIXLj+Ked6JdKLbqAzM/SOWsagriT8PCnYxciTAxO\r\n1wunUbz+HmUJtSOcwfnU7an4Yv4A+zeh9rD0AXkCgYEAjqsp5Y2U3jD96+srKpDl\r\nW1ywLUOleDaJXlz74Sef7i0XIfL7G7sNnyWtf6ZYc5BAIFIFAJJslxX6aq5V/xsC\r\nTOtd26twQNKO1bMLfEuUe0KoYxhqPaOnU6b8VjNN0N8uN8DRNchuY4E4bUxISa0M\r\nYtE080+VeXRj9cnnDTZlZfsCgYEAqNfswGLKeadyTH3k7HFY8vdN3QwBkrZ5Y4dC\r\n/ElYrmnLP0Y2wNWLciAWHLehuBCrI2ujOtGFQrDdql6hfgB3u9KYxVsHciqcbQF2\r\n17URJ8Tbme/X7ZHX7FVelQ5myfTnfkFMBy7Zc1GJ99ulSt/5C0oEX2Vq3mXTQBfs\r\nfgNcJ6kCgYASqllFTOzt7gtUn6FhwFfhVuYW6ZxTEPxq7u2LEyu4YTHkeoC7F9jL\r\n2daj/AATWxQzwZOyRgOu/zZiqe/a9BN5hkWm5OQTVEwV22PhauX6gAxpeZ4IewON\r\nygQvyNqvDrvUbNPQTAbvAAyZKjBKVl1B7ZVvVzQexJJb41uGMi+jOg==\r\n-----END RSA PRIVATE KEY-----'),
(45, '-----BEGIN PUBLIC KEY-----\r\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2jN0bTNpUBWBafwgbkLF\r\nay5KjZph3cDK26e+Hc/7dSaXQ7dDjCWjb20+uRSLogc5fskIvMJ4em33ZRUHPCdw\r\nUjeCtmOb0Az7fC6mEnOJdNjTnBy7ZjCNQDbdzLSBF8MEQxuextbFARrB4PK/5Dxv\r\n7UXAreV6egrkVWubzH/ls9Yt8dYn4QxkjvbXs1LAeWxZ9YQNPV1mAup9f4yx5oiS\r\nLTc659VsdL6SRngafp4AcilRkLieP6pntNaBC/J7RxrFvMDFpRnWfqIW6NayNlNT\r\n/ysFRTc8kDdlHgw6lhzgwss98wnAA3WriqCowLD6aTovqiEKMPDMTOvVPpZ0J7iv\r\nOQIDAQAB\r\n-----END PUBLIC KEY-----', '-----BEGIN RSA PRIVATE KEY-----\r\nMIIEowIBAAKCAQEA2jN0bTNpUBWBafwgbkLFay5KjZph3cDK26e+Hc/7dSaXQ7dD\r\njCWjb20+uRSLogc5fskIvMJ4em33ZRUHPCdwUjeCtmOb0Az7fC6mEnOJdNjTnBy7\r\nZjCNQDbdzLSBF8MEQxuextbFARrB4PK/5Dxv7UXAreV6egrkVWubzH/ls9Yt8dYn\r\n4QxkjvbXs1LAeWxZ9YQNPV1mAup9f4yx5oiSLTc659VsdL6SRngafp4AcilRkLie\r\nP6pntNaBC/J7RxrFvMDFpRnWfqIW6NayNlNT/ysFRTc8kDdlHgw6lhzgwss98wnA\r\nA3WriqCowLD6aTovqiEKMPDMTOvVPpZ0J7ivOQIDAQABAoIBAQDPM1dWryBNLO7E\r\nTugY7Az992pSRwyx//ZiWUp+ktZs66VuZyOcfM1S7UFHjUv/I68kRxCl9mFjmPL5\r\nKNvC8oyFdjMIsVPvX7Sbusx27wHTVGa1cs89fdNT7AX48ls3zjdI5nyCwsU2hEsh\r\nKkKwH/gFL1yFhUklhRxIRTQgID9m4bW1ddUPe6pPTJuGDXL2FkvxfmfzOk9rz1q/\r\nGQEdEmI/vZZgh1UUKwDvvEi6UidhOcmtji8qH4fVhoNQ20AVp9RidYaAewIiR8Jg\r\ndUWRgNHZ8oEhpSgByeh7zQIXMr5g7Sh4s9yVoFfUGSa0FboRlRQ2tupkKIB+YF0W\r\nef6fXyrVAoGBAPCCwYd07ESmmg4DkhQJe2K7yy7MonslGZ8chYAloS0eM/bpLu7E\r\nFz9NAXgD2pNrQK3ZHF/8egjULddyK61UgnMuvwSnMYA2cfPG276Ny4Rfw97pqh0U\r\nEGslSGtwUgyyJQ2xpCG1ca5hD9Tp2lcf7+OOs9uhIrNxwUOK2V1GxSJvAoGBAOhA\r\n4gcOAhBBc1CCopQgwg77cw492BvawZ4NhCOfgxA6X+YPkQpRl7u2Eu6eiiQ5MT+k\r\nC/cDnF5YwNBenfDD6yx9mi/FNDe0YSsXc3NZQqb085IIrZOO0etCORmU9lj9ACNr\r\n81NfvtE7UN3J+kXpOKJrQhEsj7qA61AVQj7NtXzXAoGAZMU0Vw/7SoxPcd23H+QV\r\nKXormJEu5s/Vm1/044tgq6nC9gofmvTYFLKsEd/zfd7rO6wDAoijjP1xs5pniHkn\r\nKyGD8WwoBmNJfW1tdrqsces6AzT+DK7ybiIx5KosBpvBgKpUbbc7SWfrnTbaP7Tm\r\n6v5Ih5ZNFshrxGPxzO4w/MsCgYAB/PQyXUNVQkoraULdA77FhA+DErJz4pZ/tNvp\r\ntibYD7fcb0uti+9BkxhsZH0IPFkYk13q2mQPRrE312eAtRyhP93/BLAive+K/+Nk\r\nHGJ+rWAcYuihd7qCSgnVFzpYnqnOo9DsaMhoYBqcG2uCB7INad+h6AC+9vWMtPHh\r\nOb+Q9wKBgEDpn9TP1XVAvf+J9P5oOKAGIpzKw9gfXWn4jYAasiiGu37K5SpLqqZE\r\nHgQ+mt/lmnxz9cceW2TTJpCgAvRm5D8QXeOb8oT6NQvvb726j5LEZmROItcgW7o6\r\niNpE9k/9ATwTPlWf69QonOhTdF1JUsYnSSAJMbvpg6G/z0PRcan/\r\n-----END RSA PRIVATE KEY-----'),
(46, '-----BEGIN PUBLIC KEY-----\r\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAymVRTiJmI1GEQ3KXce0A\r\nIsArrgKRM0t0wjjiTRACDHRwdkZ600Mnb5qnxdBIqBY6VIBUNMQjbGoDERRi2JjA\r\n+gcEm74RF3n2kIiRuP8ZhU3liiwly+nhHSVXmTcZXpOG1SBtZj7wltQTc2vP4aSu\r\n47CGjXQdLNTYr+i7cbSkUc8imUm/SmxwLpC2KChV4rv8KQwtk9km53amWIS05mJi\r\nxLgQjWkfRbc7UBQSXqFsgpLTSlQAa47XRh/cYXpBZ1y3Zpw/FLx+e1s9p0TLFfOY\r\nCCVSH1EqluLYtpOfBz3aItrvLuUOdakz6QxrnDyJof5uZeO6GozxTrUHzPFyA+eO\r\nuQIDAQAB\r\n-----END PUBLIC KEY-----', '-----BEGIN RSA PRIVATE KEY-----\r\nMIIEpQIBAAKCAQEAymVRTiJmI1GEQ3KXce0AIsArrgKRM0t0wjjiTRACDHRwdkZ6\r\n00Mnb5qnxdBIqBY6VIBUNMQjbGoDERRi2JjA+gcEm74RF3n2kIiRuP8ZhU3liiwl\r\ny+nhHSVXmTcZXpOG1SBtZj7wltQTc2vP4aSu47CGjXQdLNTYr+i7cbSkUc8imUm/\r\nSmxwLpC2KChV4rv8KQwtk9km53amWIS05mJixLgQjWkfRbc7UBQSXqFsgpLTSlQA\r\na47XRh/cYXpBZ1y3Zpw/FLx+e1s9p0TLFfOYCCVSH1EqluLYtpOfBz3aItrvLuUO\r\ndakz6QxrnDyJof5uZeO6GozxTrUHzPFyA+eOuQIDAQABAoIBAQDGp+fD71OdOve9\r\nVA5+DgfiFAlLhM2MMXXq5PaKeTnpi6iPDuKj1fgxPPWL3cJS6W5bXpJIMHQsh2l3\r\nLDFRM63GO3k0fLw99MIkX0fY8trT0v+IPYjjuy3v86Ulh8Vo5RikvG1kvEZdZM+q\r\nrJmgeooGhk+rK9svE8OT9bV2B755ZDtz52II8OeBpN40I5IlcU0McVSa7q3tYGlv\r\nb6NKH5qxlY7GvvqXuM8KikIwxR2VfMAVBd9f4mOA6koKdn9vxlOrsdXnyMWSdpaj\r\nAM/VRgX484ugyErxXgmJOVz6qczmfs+NotaSGlSkHSIMFFfR4O2C4Vp0gW0XybYG\r\nomWZgVXhAoGBAPlvhKlLGRy/ZZ6jSk+xIp2I1qazm/Nn6fuom4oo2/lT2NA5vRWH\r\n/3PYmRfslPTizCRoHxqX6gWFXqWAAXxXnO4OEAdZTDazb6YWgoroNzdXLxZJq0wM\r\nHyz7wN7fbrkccJe2N3kJ9wgsNc8miRYn6Fi5lJrvskQ7EvnIrJnYtUmdAoGBAM+4\r\n4rICZu2jefRr+JNoCTjPu8ZcCQwha2q3tPErqA+rX4IuozzOYSEmBKRkSBcU277d\r\n+ved+WIPh8Jb+T5nAG1uFHw1em5nPHKinTIzlizhGDfip2wodg335H/XzjUbCBL0\r\nYeNvfzw+aUV/dS072zP5ui3YXu6YF1J5fn5rFUzNAoGBAJH84AMJjhASQVKgtXyA\r\n6waSsTbuBkdmuT5uR2KMWXrKxSnRsUYpy6wsyCWFdQUCvIJOYm35HaHPlj589eGl\r\nkZaOqnjynbWiPaVSpWLRWIfOQiPkSBqBObnlOtP2p2I2L/vLTRpNZ8TjwzaTkkZi\r\nYw2SyFQKGCbxAEErX0HH4QrNAoGAdbd9IQwjcIC4WD/n+wF2WG/BJkR6DBnUWgIJ\r\n1LK850RjN89eStNaUALPlqoOAKadcaky1Kj97wiGEys0MJ0GrP05NrrHy1FN/FkT\r\nZKO/c2eM5f7Yin7TiE73e0u9XHMZPESqRM2m+WkVF4GH0j6dlvLrA5gfFG+0p9Sa\r\nTuI4i/ECgYEA6FDwobMz9Zv/afZedFEAzGXCB6tbwzKN8LoYk+lQ8rOjDTEJlEQP\r\nq49/JslgmCxRWsaIKKAglitESySlb0q7T+PkonWm+9kI2YYwFrJ5z7793W1Y3NC5\r\nlTSEWe65kMpGQEJU55YXOZ40F5/UGOMCro4b3g379j++9qcdjnAWjNs=\r\n-----END RSA PRIVATE KEY-----'),
(47, '-----BEGIN PUBLIC KEY-----\r\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvfNi4I4XpgWeVjv0LxVv\r\ntUYFdAI31YUbkOmwbnw2/38rQrq1S90NvvaMS4kX2P7NhiQ71m2fFVNWtznmT5Hx\r\nhm5wM6d3mC5rgkDl+v2JJAMsQEztTFSSbzhjryaUA8rwUvGSJVOwvRveuyU03qa/\r\nLM9Jp46CyNsUa9PI5xrRJK4xWHG+LT8XCO4NWhZJQp85O/GJYkA2fqPLWKK3p0Ul\r\nJr2qVVm9OY4r3nGEuzXR9kBiKgmUBXZVpkD+gfowld4/o7LZ57q3Pa0YiYgNXs5k\r\n2/flmyRY5t/nN86vTBcfc0X5KFU9AI842vwfm0Jp1e3424rU0MZe76aArNEXdbXX\r\ntQIDAQAB\r\n-----END PUBLIC KEY-----', '-----BEGIN RSA PRIVATE KEY-----\r\nMIIEowIBAAKCAQEAvfNi4I4XpgWeVjv0LxVvtUYFdAI31YUbkOmwbnw2/38rQrq1\r\nS90NvvaMS4kX2P7NhiQ71m2fFVNWtznmT5Hxhm5wM6d3mC5rgkDl+v2JJAMsQEzt\r\nTFSSbzhjryaUA8rwUvGSJVOwvRveuyU03qa/LM9Jp46CyNsUa9PI5xrRJK4xWHG+\r\nLT8XCO4NWhZJQp85O/GJYkA2fqPLWKK3p0UlJr2qVVm9OY4r3nGEuzXR9kBiKgmU\r\nBXZVpkD+gfowld4/o7LZ57q3Pa0YiYgNXs5k2/flmyRY5t/nN86vTBcfc0X5KFU9\r\nAI842vwfm0Jp1e3424rU0MZe76aArNEXdbXXtQIDAQABAoIBADFbPZUFtuVfzl2v\r\n5GobktQyZpZXQTTNCnWkE0ESK6RF4fLL2vHkdX7qR1gVPkoXI0Y4wgecolqDNiQT\r\n+mEwleaNacAyQqQbY7oLrPaDzI+791KZ6osL6qTVrSlEx+8YW0viE0x5q5Hn3P8Z\r\n0twLzd8R2ZydLiSMsIi4Fhre3/s8iThXw9DlW2oPnOBPP6t4n4RgwmrkQ7iCCyi+\r\ndjd4LQwfp8mNZjJm5Y6V5YBKU1lt3q9lr2a9JpeuQY88j9EaLnCJJAY9kEvQ37EO\r\nCvbMoArBEfLJ6hppYp8hoeulrPKYbfZnA0P+kLUogxh29fu3IH2he3TUy5zLnLSi\r\n9Ef5ef0CgYEA6K3hL3O8urt8AFWX/MC7r5o+dkakTivdkZ5VnXJfP9VEMmnCtcYC\r\ny141adgzd9+9Bm2HCp6O6s2iU15ov7QCl9C6EBlpjndDBqRSCpZl+VmDGSnid4cD\r\nSnVpZoby6RSbyWzEa1qfq3XQqI7zsFYWMh6PG96XXWJIRAIE1kcMQMMCgYEA0P0s\r\nFqEyrhd9s9eG+Srq373eFm94B3XhXYo7FAOVU0BbLYxKtZ0cGhu7Ld7wE7TPJ2bg\r\nF1qZOY4OuOMLPSxVGbg/yBYfJp6ec/FcnaRZdt51Jho3oR4k926Fj0lZa7+fhQDe\r\neGVmnpzCWWcqzblQJNWjWyoSvK0lFp1NncmoficCgYBnSlEtxH4ikvoAF/8ph9GJ\r\nqbpSvRdRUG3Cp/wvsccQyjbE/mgeU3GIICEsBHsMmvkJsnOBRlQBbhnCUqXDfECu\r\nbk06ul0+jjjl6Oo2ov9PyunEsPBEyV2vnyGUDxIkYC6sIymq0ocREXL4cMVDIWQn\r\nCaPT5mNhZDDaZ98H1HBfCwKBgQCRYJwLveS4T+UEdpgQujcan0RfjPkND4ZPAHpq\r\nSLfWar1CaQYLYhgLXWEO3rdYrf0wZpLaDA7sh5JcMKw/yJgGRTIxKJpQziRhePO5\r\nQXtugf8yGyi5bnO+n2ZPL3IBzxHTfrBDRh5llZxofqi65P8IMIjrQNA56aQUICa+\r\n7WnFHwKBgGJ66/pdRhaEofNCASGOzbDakO75gy894HUsbrVh3qDKnob83LHzQIEU\r\nepYFAZLG3poGmvmd6+xXlNC8jP9wEpRM7THrpe/VfKeZOrncha42CvIpK/Q1XbDw\r\n/Ft4S1W4960j0WyqqTu+IHjmALNmNaYCGG5n1uSrFGSOkY6L005g\r\n-----END RSA PRIVATE KEY-----'),
(48, '-----BEGIN PUBLIC KEY-----\r\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvA6RUwMezPbKPgsflGEL\r\n63OV3iXHr6l5bSn4WPVbSuvOFLgulnte2Y/tw7CyKs0OBb7UAcXjan+D0ENKRb9p\r\nuMWUM6BpECPWe2jyNkcLPB+ECR4nNCKVBFtIUUHq+wK74WQpWoDjgdg8KXr8zNOb\r\nSfKd2vWttIncptt5RFQFJn7vLLEYoQoZmS6c1ToomJIDfSHhjA7ip5XFyydOhQZU\r\n5ET6SyZcV+X6XPIDAu902oEGlsCs7XGErjSejP3JsHzcrxJuomcMTeqbKAk+2yI/\r\nvnMfaw6Q4WWRzo6L4hcEtq03GJ88H/299+9b5MV/vU5v+twg+oiney0W0UtBA2Qu\r\niwIDAQAB\r\n-----END PUBLIC KEY-----', '-----BEGIN RSA PRIVATE KEY-----\r\nMIIEogIBAAKCAQEAvA6RUwMezPbKPgsflGEL63OV3iXHr6l5bSn4WPVbSuvOFLgu\r\nlnte2Y/tw7CyKs0OBb7UAcXjan+D0ENKRb9puMWUM6BpECPWe2jyNkcLPB+ECR4n\r\nNCKVBFtIUUHq+wK74WQpWoDjgdg8KXr8zNObSfKd2vWttIncptt5RFQFJn7vLLEY\r\noQoZmS6c1ToomJIDfSHhjA7ip5XFyydOhQZU5ET6SyZcV+X6XPIDAu902oEGlsCs\r\n7XGErjSejP3JsHzcrxJuomcMTeqbKAk+2yI/vnMfaw6Q4WWRzo6L4hcEtq03GJ88\r\nH/299+9b5MV/vU5v+twg+oiney0W0UtBA2QuiwIDAQABAoIBAD/0dFfW59Ks23re\r\nLY84seURGhbConaLHFCTxXH7f2CrcRp6yN1Ed61l1WaH4Q/NTMeHbnJr6jt9wkZB\r\nnDC8OCguiYhFNXXXukmeF0F+R8Pas/yl1I9Wc3dX0/BOiqty8pJkjevJiZXPBCbX\r\nPMIr9NPhPu4IP1r2x6O3YDZsnJPKYi9DwasmEH0p9y/wXN4x+LQPrk+Pn58G20UW\r\nsLTAahLGiiCwx6JrMJ6wv7yXEzOjxarSwgvqGUGnHUQcVVIE5CKJXl5CiSL5sJ+X\r\n4K3Y1pc4JndUlO/3GbrvaLDyRCTivnJCRlxx8BfTuYFI7ZHsZ5k+386iESCm0h+i\r\n4A4ukIECgYEA229YDwf2EOTQsnCy+FoIqaSFoi0qAVfzxKG4GfEpsYn0pmbFYuRX\r\nGu48JBVgwG9Letlp02JPI4/uJ2q+Sw6y9uOLNtcy609cX5MMvPsMq2jEBSaASddJ\r\n2ZRnmu599vIxE5BI/Zw0DrPI2a1pH2FUqge1Lx2LZwxUrCV2l7n3n/cCgYEA22Sz\r\nE7fdIpR0Gj6VYDn0mM/gZrUb1qrlJfawkCaAlG4nkKOQeg7Q/0vG+uR5Y544AwbA\r\nvZ/x/KQ+ZEJ7eyi/Kv5Hb/ENFVppQJ7/E7pNB2C5mruzE1igS2iK36wqus1pK+3F\r\n4Ynw3mJt+3NtexDhZ8qlpXDoTdFCDldri4DBqQ0CgYAeovcKcjQau7efkjiKkBdx\r\nh/TYZbHdqifwphuME62cigRMT0Dzw6mdqvFeoFV3yJIjPsOVrb4a2veHLVIQLKcz\r\n7ST8rSMA0320IlW+9NYaAHCNv4hdxt8ar6ufZ/jSR5IuhxCJyAtEmjlKmvl4ViB5\r\n9MWJJHjYFFKmDjz2hhJalQKBgD7omRDGX/pSZxg/acW12JUYxletBtZ/GkXQfsBW\r\nyffFvkKTJBJbvUH3EI9QhB40eAsmHI5DFrhCwEEvbwjZnjdNwl4u2HmO+y80aB/Y\r\nA85hxdbAi5C4kP4OdAO+8mGuFMIr49nQG+kogDDh4DqxlHCWgvj1bychIbfLCWNv\r\nABjhAoGAY3SZf33Extmlm6TSHA2jT/9GvlPF81/irFVY80k13wLIx90ZA9v16iIv\r\n8yyppFdhEQF+5qcT4ZfyzIElGvtdGzAL7ecOpKuYmAbVSa2dBB8KSiS/JcPRJsB0\r\n/0+G09X9e8x1ZUY/MB2DnIPLJv3pJYWsoFAOTxaQ2rRwGeF94P4=\r\n-----END RSA PRIVATE KEY-----'),
(49, '-----BEGIN PUBLIC KEY-----\r\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvA9SLhOiNRFbmTchncv0\r\nmdH4JkQPHsXkhirax7SxKAder+jWnL2qjIFiu6eZWhix7WzrT1+WkAVQV/DuvEoq\r\nI4mjDrM85QVYEnJPkTzjRXBOJ2O/AFuCCNhQF9AY4Uwh1T3bxPdS85bMdr7EbSRw\r\nWedjfaHOkYQRyP58EjTM75qu4SD3GD6viGljJEb33fF0HwAML5gevFIqU8NvA+01\r\nTnntLay/GYu6+wJZTXv3gH2MqAanQdZmWsqoUbY17qh16/AA0y9C3ci2YId06J7c\r\ngfZ0/doGk0N9jelFiZZTJRi4zBj2QpNK8Eukuoc2MyEx9pOYSDTbxVYzzCzyVnx4\r\nhQIDAQAB\r\n-----END PUBLIC KEY-----', '-----BEGIN RSA PRIVATE KEY-----\r\nMIIEowIBAAKCAQEAvA9SLhOiNRFbmTchncv0mdH4JkQPHsXkhirax7SxKAder+jW\r\nnL2qjIFiu6eZWhix7WzrT1+WkAVQV/DuvEoqI4mjDrM85QVYEnJPkTzjRXBOJ2O/\r\nAFuCCNhQF9AY4Uwh1T3bxPdS85bMdr7EbSRwWedjfaHOkYQRyP58EjTM75qu4SD3\r\nGD6viGljJEb33fF0HwAML5gevFIqU8NvA+01TnntLay/GYu6+wJZTXv3gH2MqAan\r\nQdZmWsqoUbY17qh16/AA0y9C3ci2YId06J7cgfZ0/doGk0N9jelFiZZTJRi4zBj2\r\nQpNK8Eukuoc2MyEx9pOYSDTbxVYzzCzyVnx4hQIDAQABAoIBAH1cXTTX464qdvwI\r\nk0EkH1aWcCvZ/JZP5olFcffkTJ/ZYdYziTSM/m6RJWbgT0qO4bTagXW0y6IP2MH2\r\nmr4rVjHAY1C+TJ6CVHZfewjfJMU6Gu8I/97WITWSNLna/2rYHEmQ5bpEACje4kdZ\r\n3Yi/3KEhrOGnhhLcjhqFAeIFDoO9XaffE6R1kTEyDtOc9us9dq6jz1YQqFRRtNr0\r\nUB5vp2dIPRvm66PtOmWD6SIWSmJT5SbrUK7NQ3Y/7KHRB3KFyxTThR1LIrWSmLbV\r\nHu6DLzpvCp5QgzNVO4OCfylkvibRNuYodZweZaq8YgcJwhu+6NrCy4wzsfS3C4+U\r\n4boDcDUCgYEA4ZK3EuVxRDsyUL21j9yfDxLa22axGmainQMGv6Ifi/h/4JqUs4an\r\nv17ggmcru3cF3e+RXQemtpNMs+oj9YzsFexi40B7e0Jdo5YN5FIvEYATcZQh3bNK\r\ntSwRYMlN1cTI3aA9mqFSBRnVCPMZt8EuSj6aJPB4yePSMmo/ryRjTpcCgYEA1W07\r\ndG4Y4PIZPTn7Qvs4MJnc/0UGsWxwfLLjiptjvU0AZJ/GRgDgCwpZPx4OS+nhlcaz\r\nZSiW45nV5Pig4EzYEK/rAK3cfPpApvMDruijYoE22CLBcE08+xPRs5xkXKhE2lxH\r\n3E8m/5hBMnyItM9cYpWbvN3Rlhs9vnWMhSesMUMCgYAZ0Hx7AR7xPAUKEGvSxuC9\r\nDN9W9G2YI97AMTR4gckyb4HS5l3WHbbcw7LVuZDbp0dYmq38A4AkrL6+aDEtTK9H\r\n4wF+GEcJWBL3QZjdZDpWul1/RgCKKpaGHUDv3pm1uQtzsX7bT1LfmpEysP9kdAsk\r\nG/3v9EUedZ/8fQREutlSiQKBgQDUA2mvdHs0YmteHg4S8NpVtVMLJjfK4o0v4skU\r\n9N30u9xrGSjue4oUjZgwkhvjn5dfoP6uu86AlF4d0jqF9vAgS5EooI3KfRLihcAf\r\n7av4e6HOvV/pvmCYjoyfXvl37hRP0qH0IZD9EPObQojPDLqamEIYMUY1ViRU4hLQ\r\nZ6OvXwKBgD6VPmwO6S6PSwnyfJFdCLKqlWeT1wW7lR+XRqT7gMp12iW9hkkrAfQJ\r\nZImh9hDav8vwXp5DVHg2NzMi7GZB8O24zMQ46DHZruvRKSDLELDKwPKXiBxIHkKV\r\nRCOw9IswlZL63CWTSZBCFMH7Y+RfucdbAhywhCZs2yo9W8Em3zBG\r\n-----END RSA PRIVATE KEY-----'),
(50, '-----BEGIN PUBLIC KEY-----\r\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuLxc0iA2vmgmJM06wqLm\r\nKKuea1WtL3hBGfRWqV1YuaaOA0EXib143VHRfijvKRfDsOiV/HaiFGdrsojYjJdY\r\nOI8QXOmFp2KgtmUUGTyfSHiXAAGStbFPIfjaFKn04/fuLbzUoiz5yl5gGefQaoDX\r\nsiF/rTuF2bc7qxeiORRe95e9NrB6Y/b5LaqmRpPu9pPrimNsCYTIdjKRembQcYwE\r\n3158p1VP7A9dqX0JWT1j0rYF5IQ0MzIH9AA6BeprVahrCouNA6/+tRHaTpzhXy13\r\ncQYAH4PiqolTsNR2Gy1s09EilaumEVnLZKb6Iu2Fuzy9u8A2IQlWxYEXtGHWjL1x\r\nqwIDAQAB\r\n-----END PUBLIC KEY-----', '-----BEGIN RSA PRIVATE KEY-----\r\nMIIEpAIBAAKCAQEAuLxc0iA2vmgmJM06wqLmKKuea1WtL3hBGfRWqV1YuaaOA0EX\r\nib143VHRfijvKRfDsOiV/HaiFGdrsojYjJdYOI8QXOmFp2KgtmUUGTyfSHiXAAGS\r\ntbFPIfjaFKn04/fuLbzUoiz5yl5gGefQaoDXsiF/rTuF2bc7qxeiORRe95e9NrB6\r\nY/b5LaqmRpPu9pPrimNsCYTIdjKRembQcYwE3158p1VP7A9dqX0JWT1j0rYF5IQ0\r\nMzIH9AA6BeprVahrCouNA6/+tRHaTpzhXy13cQYAH4PiqolTsNR2Gy1s09Eilaum\r\nEVnLZKb6Iu2Fuzy9u8A2IQlWxYEXtGHWjL1xqwIDAQABAoIBAA9xt/TdOpZqkJ3N\r\nBpeVFNbbmi/xBryMOi0YT1JzemJy+TZub7BVRdCC8ZexhmUSFosotrlXla9NAiT3\r\n6dq/IGICG+UYpNLcnQECrE570fk2E7Gtb/1+qFX3vwuxNccFSEVMnx470lpHz5L6\r\n3WK6CM5cnJb3/fW4quVf4XESMepTAdk8GqwH14N92bWSqKbnlNWrQwpnbc7QJPVC\r\n2Jnugk68umnIlYoI/Hx9TKYCJx5AXrgEJ3kR/i60gZgjsNR0fbzjo73HB7iBsZT9\r\nCkGl8jLnu4F1CK2h1MJbeR/hFtcYORvbOy2LPI/Umx0Hyd5fp64ZvtXSJ7n2k//c\r\n7QdutakCgYEA46LLaNt3XfFrjtXm15Sl3lRC21s0WlYv8UvRxFnjNzaWqvmn8XCq\r\n0lM8VSDaoaRNDQKLoC8UbgmQSCxI5/W89bm/zjnQLKOqumfFH2rJs5TY/6xJ6NLZ\r\neLHV8+aZO8Acqmz/5TFlj680AppKiqG5w6nB5/+viHQzMCodpppC5N8CgYEAz8Eg\r\nLbONyPZglUtfkOKMvO2bdmQYQhmQiWiTXyGPR+yTP2iqjPF8cUodU9x9PrprK2t8\r\nOSCwWVuGB/eRTSsPYUDYbLjUrVFlKHeQchJIlDVr62pe1bGhQmMcz1R7NSIjwY7u\r\n/MkKPDg4qH50lrqvOMj9p3CYS//Nvh9FsAAiYLUCgYBopX49Ricp2MJJd6wXjw5x\r\nlurlTJhUryp7Ew/r5CbASygYkYzTQahF6F3kBKZ9iLqjMHhfu0T5EQxzIWiiuiWU\r\nEUBL3egFnXfvGaVVPBJdrB/V6a5Qih3PjnF9HpVzEm4bKuC4zGyUEUcnqyZ5dL+h\r\nY3jw3mojoMenbLUU0fXOoQKBgQCjOmZw4cj9Yu4hfnXYXNccvUbO7vfMP0+7Vimr\r\nra9oYCyUvkR5tmYCkKuYLv1MYqU/GRUhwVgs7ObSraVAzxsnWw5v5YxbnD7xW3dm\r\n2IyjvZFMBmf6V7SOd1a0YvjmlysmsYl9nOrow3dokupBXu26nNgGTUWrOJFK1kEn\r\ndgOMnQKBgQCJZNSJHBVKTFUpwsc/XDLju1D9isN7jj2ns1pQTxtZ4BQ6X5R2oTKC\r\n+bZaEdPqyDHswuycc6210wItD/5pHjqiRSW7NjIadTzd80rsqoYXva/96VmAnsCx\r\nQ/NdyL5mNyDPHUEjqUwvZlR2y8EhQ93fHfMuTUu0SWy89FoKkMdEsw==\r\n-----END RSA PRIVATE KEY-----');

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
(74, 2, 7);

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
(84, 2, 7);

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
(1, 'Admin', 'Admin', 'admin@admin.com', '$6$rounds=5000$K8d6sRt2$CoTVB2swIoLs48.PNBHPQN.e57A4GVUB6ZCAecLQ.E/fSpx6XoHPxnNVRERQOr/olk18nQnMdSzwHP8u8G8lb1', 1, 'è', 'è', 'è', 'è', 'ao', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dxD1j+Z/8vcJtO/H136jzejNrrr8vIJCfqVpHIvvKmWy3PM1tjUqObNA4w2+dDRO5uN/3lDcnGz8AmhI1rbuni4IvI5vzzvILYJStRdwOS9jDWSAuMFuSmawW2+m7xBRKlAkl6r0CWdcVuRUKE9OrNjlswrH3KkMrCllyZND9OJy5ycmdNZB3wGRzbMOCP2FfM2EX94tN+maNrgUE38DYuTrSW9mUeKAVw7IQNGWdCRJERnlQfWPJB1Mmb5DnEidh1u/mhDl/VnOYv/9njYwTsbmVOpFkGUezezPIBGhPP+X7iyZZ/0t6JgZW3lAUIYhdNOWK5X9sa4MZBo526kwdA==', 50, 1),
(2, 'Riccardo', 'Delfrate', 'prova@prova.com', '$6$rounds=5000$K8d6sRt2$um./LVyXN0HH7LJHFxTbSf6ZZQ5afM7S944JOtQpBmf1MuMeXnU2.xT0sRU36.yg/uQv0R7lfnmG1ir6zGSzq/', 0, 'y', 'y', 'y', 'y', 'ar', '', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'pc', 'y', NULL, NULL, 2);

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
  MODIFY `idChiave` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT per la tabella `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT per la tabella `contenuto`
--
ALTER TABLE `contenuto`
  MODIFY `idContenuto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `idProdotto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
