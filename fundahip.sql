-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2019 at 10:39 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundahip`
--

-- --------------------------------------------------------

--
-- Table structure for table `antecedentesdeportivos`
--

DROP TABLE IF EXISTS `antecedentesdeportivos`;
CREATE TABLE IF NOT EXISTS `antecedentesdeportivos` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(20) NOT NULL,
  `FutbolAmericano` char(2) DEFAULT NULL,
  `Basketbol` char(2) DEFAULT NULL,
  `Football` char(2) DEFAULT NULL,
  `Voleibol` char(2) DEFAULT NULL,
  `TaeKuwonDo` char(2) DEFAULT NULL,
  `Karate` char(2) DEFAULT NULL,
  `Natacion` char(2) DEFAULT NULL,
  `Atletismo` char(2) DEFAULT NULL,
  `OtroDeporte` varchar(20) DEFAULT NULL,
  `EdadInicioDeportes` varchar(10) DEFAULT NULL,
  `Suspendido` char(2) DEFAULT NULL,
  `MotivoSuspendido` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antecedentesdeportivos`
--

INSERT INTO `antecedentesdeportivos` (`Id_Registro`, `Id_Paciente`, `FutbolAmericano`, `Basketbol`, `Football`, `Voleibol`, `TaeKuwonDo`, `Karate`, `Natacion`, `Atletismo`, `OtroDeporte`, `EdadInicioDeportes`, `Suspendido`, `MotivoSuspendido`) VALUES
(1, 'Paciente01', 'Si', 'No', 'Si', 'No', 'Si', 'No', 'No', 'No', 'Ciclismo', '6 aÃ±os', 'No', 'Suspencion'),
(2, 'Paciente02', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Otro', 'Ottra', 'No', 'Este');

-- --------------------------------------------------------

--
-- Table structure for table `antecedentesnopatologicos`
--

DROP TABLE IF EXISTS `antecedentesnopatologicos`;
CREATE TABLE IF NOT EXISTS `antecedentesnopatologicos` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(20) NOT NULL,
  `EsquemaCompleto` char(2) NOT NULL,
  `Faltan` char(2) NOT NULL,
  `CualFalta` varchar(20) NOT NULL,
  `Mascotas` char(2) NOT NULL,
  `TIpoMascota` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antecedentesnopatologicos`
--

INSERT INTO `antecedentesnopatologicos` (`Id_Registro`, `Id_Paciente`, `EsquemaCompleto`, `Faltan`, `CualFalta`, `Mascotas`, `TIpoMascota`) VALUES
(1, 'Paciente01', 'No', 'No', 'Todas', 'No', 'Pericos');

-- --------------------------------------------------------

--
-- Table structure for table `antecedentespatologicos`
--

DROP TABLE IF EXISTS `antecedentespatologicos`;
CREATE TABLE IF NOT EXISTS `antecedentespatologicos` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(20) NOT NULL,
  `Alergico` char(2) DEFAULT NULL,
  `AlergicoA` varchar(30) DEFAULT NULL,
  `Sarampion` char(2) NOT NULL,
  `Rubiola` char(2) NOT NULL,
  `Varicela` char(2) NOT NULL,
  `Escarlatina` char(2) NOT NULL,
  `Hepatitis` char(2) NOT NULL,
  `Parotiditis` char(2) NOT NULL,
  `OtraEnferm` varchar(30) NOT NULL,
  `Cirugia` char(2) NOT NULL,
  `CirugiaZon` varchar(20) NOT NULL,
  `Probvisual` char(2) NOT NULL,
  `Probvisualzon` varchar(20) NOT NULL,
  `ProbOido` char(2) NOT NULL,
  `ProbOidozon` varchar(30) NOT NULL,
  `Reflujo` char(2) NOT NULL,
  `Gastritis` char(2) NOT NULL,
  `Colitis` char(2) NOT NULL,
  `Diarrea` char(2) NOT NULL,
  `Estrenimiento` char(2) NOT NULL,
  `OtraEnfGast` varchar(30) NOT NULL,
  `Desmayos` char(2) NOT NULL,
  `Soplos` char(2) NOT NULL,
  `Taquicardias` char(2) NOT NULL,
  `Hipertension` char(2) NOT NULL,
  `OtraEnfCardio` varchar(20) NOT NULL,
  `Bronquitis` char(2) NOT NULL,
  `Asmabronquial` char(2) NOT NULL,
  `Hiperactividad` char(2) NOT NULL,
  `Bronquial` char(2) NOT NULL,
  `OtraEnfBronquial` varchar(30) NOT NULL,
  `Rinon` char(2) NOT NULL,
  `Ureteres` char(2) NOT NULL,
  `Vejiga` char(2) NOT NULL,
  `Uretra` char(2) NOT NULL,
  `Genitales` char(2) NOT NULL,
  `OtraEnfGenital` varchar(30) NOT NULL,
  `Diabetes` char(2) NOT NULL,
  `DiabeteDesde` varchar(20) NOT NULL,
  `TratamientoDia` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antecedentespatologicos`
--

INSERT INTO `antecedentespatologicos` (`Id_Registro`, `Id_Paciente`, `Alergico`, `AlergicoA`, `Sarampion`, `Rubiola`, `Varicela`, `Escarlatina`, `Hepatitis`, `Parotiditis`, `OtraEnferm`, `Cirugia`, `CirugiaZon`, `Probvisual`, `Probvisualzon`, `ProbOido`, `ProbOidozon`, `Reflujo`, `Gastritis`, `Colitis`, `Diarrea`, `Estrenimiento`, `OtraEnfGast`, `Desmayos`, `Soplos`, `Taquicardias`, `Hipertension`, `OtraEnfCardio`, `Bronquitis`, `Asmabronquial`, `Hiperactividad`, `Bronquial`, `OtraEnfBronquial`, `Rinon`, `Ureteres`, `Vejiga`, `Uretra`, `Genitales`, `OtraEnfGenital`, `Diabetes`, `DiabeteDesde`, `TratamientoDia`) VALUES
(2, 'Paciente01', 'No', 'Sandia', 'No', 'No', 'No', 'No', 'No', 'No', 'Nada', 'No', 'Nada', 'No', 'Nada', 'No', 'Nada', 'No', 'No', 'No', 'No', 'No', 'Nada', 'No', 'No', 'No', 'No', 'Nada', 'No', 'No', 'No', 'No', 'Nada', 'No', 'No', 'No', 'No', 'No', 'Nada', 'No', 'Nada', 'Nada'),
(4, 'Paciente02', 'Si', 'Melon', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Ninguna', 'Si', 'Talves', 'Si', 'Como no', 'Si', 'Quizas', 'Si', 'Si', 'Si', 'Si', 'Si', 'A Lo mejor', 'Si', 'Si', 'Si', 'Si', 'Cuando', 'Si', 'Si', 'Si', 'Si', 'Doncde', 'Si', 'Si', 'Si', 'Si', 'Si', 'Aque hora', 'Si', 'No Me digas', 'Anja');

-- --------------------------------------------------------

--
-- Table structure for table `antecedentespatologicos2`
--

DROP TABLE IF EXISTS `antecedentespatologicos2`;
CREATE TABLE IF NOT EXISTS `antecedentespatologicos2` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(20) NOT NULL,
  `Contracturas` char(2) NOT NULL,
  `Regionafect` varchar(20) NOT NULL,
  `Desmuscular` char(2) NOT NULL,
  `Regionmusc` varchar(20) NOT NULL,
  `RupturaMusc` char(2) NOT NULL,
  `RegionRupt` varchar(20) NOT NULL,
  `Fractura` char(2) NOT NULL,
  `Edad` varchar(10) NOT NULL,
  `AreaAfectadaRup` varchar(20) NOT NULL,
  `TratamientoRup` varchar(20) NOT NULL,
  `Luxaciones` char(2) NOT NULL,
  `EdadLux` varchar(10) NOT NULL,
  `AreaAfectada` varchar(20) NOT NULL,
  `Tratamiento` varchar(20) NOT NULL,
  `Hombro` varchar(10) NOT NULL,
  `Codo` varchar(10) NOT NULL,
  `Muneca` varchar(10) NOT NULL,
  `DedosMano` varchar(10) NOT NULL,
  `CualDedo` varchar(20) NOT NULL,
  `Rodilla` varchar(10) NOT NULL,
  `Tobillo` varchar(10) NOT NULL,
  `Pie` varchar(10) NOT NULL,
  `TratamientoPie` varchar(20) NOT NULL,
  `PiePlano` varchar(10) NOT NULL,
  `TratamientoPiePla` varchar(20) NOT NULL,
  `TratamientoDesdPie` varchar(30) NOT NULL,
  `PColumnavertebral` char(2) NOT NULL,
  `EspecificarProb` varchar(20) NOT NULL,
  `ConmocionesCereb` char(2) NOT NULL,
  `TiempoReposoPrCer` varchar(30) NOT NULL,
  `Tatuajes` char(2) NOT NULL,
  `RegionTatuaje` varchar(30) NOT NULL,
  `AlgunaEfermedad` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antecedentespatologicos2`
--

INSERT INTO `antecedentespatologicos2` (`Id_Registro`, `Id_Paciente`, `Contracturas`, `Regionafect`, `Desmuscular`, `Regionmusc`, `RupturaMusc`, `RegionRupt`, `Fractura`, `Edad`, `AreaAfectadaRup`, `TratamientoRup`, `Luxaciones`, `EdadLux`, `AreaAfectada`, `Tratamiento`, `Hombro`, `Codo`, `Muneca`, `DedosMano`, `CualDedo`, `Rodilla`, `Tobillo`, `Pie`, `TratamientoPie`, `PiePlano`, `TratamientoPiePla`, `TratamientoDesdPie`, `PColumnavertebral`, `EspecificarProb`, `ConmocionesCereb`, `TiempoReposoPrCer`, `Tatuajes`, `RegionTatuaje`, `AlgunaEfermedad`) VALUES
(2, 'Paciente02', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '15', 'No', 'No', 'No', 'No', 'No', 'No', 'Derecho', 'Izquierdo', 'Izquierda', 'Ninguna', 'No', 'Izquierda', 'Izquierdo', 'Derecho', 'No', 'Izquierdo', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Hola Cuentame de ti hablame de tu vida que hay de nuevo aqui estamos bien hasta ahora');

-- --------------------------------------------------------

--
-- Table structure for table `aptitudfisica`
--

DROP TABLE IF EXISTS `aptitudfisica`;
CREATE TABLE IF NOT EXISTS `aptitudfisica` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(20) NOT NULL,
  `Estatura` varchar(15) NOT NULL,
  `Pulgada` varchar(15) NOT NULL,
  `Peso` varchar(15) NOT NULL,
  `Libras` varchar(15) NOT NULL,
  `CirMuneca` varchar(20) NOT NULL,
  `CirPulgada` varchar(20) NOT NULL,
  `CirTipoFigura` varchar(20) NOT NULL,
  `CirPesolb` varchar(10) NOT NULL,
  `CirPesoKg` varchar(10) NOT NULL,
  `Sentado` varchar(20) NOT NULL,
  `Depie` varchar(20) NOT NULL,
  `ClasifCardio` varchar(30) NOT NULL,
  `Sistolica` varchar(20) NOT NULL,
  `ClasifSistolica` varchar(20) NOT NULL,
  `Diatolica` varchar(20) NOT NULL,
  `ClasifDiatolica` varchar(20) NOT NULL,
  `Presionpuls` varchar(20) NOT NULL,
  `VarPecho` varchar(20) NOT NULL,
  `VarAbdomen` varchar(20) NOT NULL,
  `VarMuslo` varchar(20) NOT NULL,
  `VarTotal` varchar(20) NOT NULL,
  `MujTriceps` varchar(15) NOT NULL,
  `MujMuslo` varchar(20) NOT NULL,
  `MujCrestalliaca` varchar(20) NOT NULL,
  `MujTotal` varchar(20) NOT NULL,
  `PorcGrasa` varchar(20) NOT NULL,
  `Clasificacionlb` varchar(20) NOT NULL,
  `PGrasalb` varchar(15) NOT NULL,
  `PGrasaKg` varchar(15) NOT NULL,
  `PLisolb` varchar(15) NOT NULL,
  `PLisoKg` varchar(15) NOT NULL,
  `MasaCorporal` varchar(20) NOT NULL,
  `ClasifMasaCorp` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aptitudfisica`
--

INSERT INTO `aptitudfisica` (`Id_Registro`, `Id_Paciente`, `Estatura`, `Pulgada`, `Peso`, `Libras`, `CirMuneca`, `CirPulgada`, `CirTipoFigura`, `CirPesolb`, `CirPesoKg`, `Sentado`, `Depie`, `ClasifCardio`, `Sistolica`, `ClasifSistolica`, `Diatolica`, `ClasifDiatolica`, `Presionpuls`, `VarPecho`, `VarAbdomen`, `VarMuslo`, `VarTotal`, `MujTriceps`, `MujMuslo`, `MujCrestalliaca`, `MujTotal`, `PorcGrasa`, `Clasificacionlb`, `PGrasalb`, `PGrasaKg`, `PLisolb`, `PLisoKg`, `MasaCorporal`, `ClasifMasaCorp`) VALUES
(1, 'Paciente01', '5.10', '168', '158', '98', '12', '15', ' 152', '152', '14', '14', '12', '25', '55', '23', '25 ', '25', '16', '230', '231', '32', '52', '25', '11', '23', '35', '25', '65', '25', '20', '16', '13', '02', '126');

-- --------------------------------------------------------

--
-- Table structure for table `aptitudfisica2`
--

DROP TABLE IF EXISTS `aptitudfisica2`;
CREATE TABLE IF NOT EXISTS `aptitudfisica2` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(20) NOT NULL,
  `Pulso` varchar(15) NOT NULL,
  `Latidos` varchar(15) NOT NULL,
  `VomaxEstimado` varchar(15) NOT NULL,
  `PeUno` varchar(15) NOT NULL,
  `PeDos` varchar(15) NOT NULL,
  `PeTres` varchar(15) NOT NULL,
  `PeCuatro` varchar(15) NOT NULL,
  `DerKG` varchar(20) NOT NULL,
  `ClasificacionDer` varchar(30) NOT NULL,
  `IzqKG` varchar(20) NOT NULL,
  `ClasificacionIzq` varchar(20) NOT NULL,
  `FlexionPiernas` varchar(20) NOT NULL,
  `ClasificacionPier` varchar(30) NOT NULL,
  `FlexionTrunc` varchar(20) NOT NULL,
  `ClasificacionTrunc` varchar(30) NOT NULL,
  `FortalezaTot` varchar(20) NOT NULL,
  `Clasificacionfort` varchar(30) NOT NULL,
  `FortalezaRelat` varchar(20) NOT NULL,
  `ClasificacionRelat` varchar(30) NOT NULL,
  `Lagartijas` varchar(15) NOT NULL,
  `ClasificacionLag` varchar(30) NOT NULL,
  `Abdominales` varchar(15) NOT NULL,
  `ClasificacionAbd` varchar(30) NOT NULL,
  `FlexionTronc` varchar(20) NOT NULL,
  `ClasificacionTroncal` varchar(30) NOT NULL,
  `MasaCorporal` varchar(20) NOT NULL,
  `ClasificacionMasa` varchar(30) NOT NULL,
  `SentadoEstirado` varchar(30) NOT NULL,
  `Imagenes` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aptitudfisica2`
--

INSERT INTO `aptitudfisica2` (`Id_Registro`, `Id_Paciente`, `Pulso`, `Latidos`, `VomaxEstimado`, `PeUno`, `PeDos`, `PeTres`, `PeCuatro`, `DerKG`, `ClasificacionDer`, `IzqKG`, `ClasificacionIzq`, `FlexionPiernas`, `ClasificacionPier`, `FlexionTrunc`, `ClasificacionTrunc`, `FortalezaTot`, `Clasificacionfort`, `FortalezaRelat`, `ClasificacionRelat`, `Lagartijas`, `ClasificacionLag`, `Abdominales`, `ClasificacionAbd`, `FlexionTronc`, `ClasificacionTroncal`, `MasaCorporal`, `ClasificacionMasa`, `SentadoEstirado`, `Imagenes`) VALUES
(6, 'Paciente06', '143', '112', 'vod54', '60', '38', '26', '57', '46', 'bien 49', '28', 'bien 30', 'larga ex', 'Bien mas o menos', '40 pulgada', 'bien de largo ex', '177 cm', 'bien de ancho ex', '1200', 'Bien ex', '13', 'muy mal ex', '22 ex', ' muy mal ex', '58', 'bien ma ex', 'muy gordo revaje', 'rebajar ex', 'lo mismo ex', ''),
(8, 'Paciente07', '128', '226', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', ''),
(9, '2', '2', '3', '4', '5', '6', '7', '8', '9', '1', '2', '3', '4', '5', '6', '7', '8', '9', '1', '2', '3', '4', '5', '6', '7', '8', '9', '1', '2', ''),
(48, 'Pacicente10', '11', '22', '33', '44', '55', '66', '77', '88', '99', '1010', '1111', '11212', '1313', '1414', '1515', '1616', '1717', '18181', '1919', '2020', '2121', '2222', '2323', '24124', '2525', '2626', '2727', '28929', ''),
(67, 'Paciente12', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', ''),
(68, 'Paciente20', '1', '2', '3', '4', '4', '5', '5', '5', '5', '6', '6', '6', '7', '7', '78', '8', '8', '52', '2', '2', '5', '99', '9', '9', '6', '4', '4', '4', ''),
(69, 'Paciente20', '1', '2', '3', '4', '4', '5', '5', '5', '5', '6', '6', '6', '7', '7', '78', '8', '8', '52', '2', '2', '5', '99', '9', '9', '6', '4', '4', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `exploracionfisica`
--

DROP TABLE IF EXISTS `exploracionfisica`;
CREATE TABLE IF NOT EXISTS `exploracionfisica` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(20) NOT NULL,
  `Peso` varchar(10) DEFAULT NULL,
  `Talla` varchar(15) DEFAULT NULL,
  `FrecuenciaCardiaca` varchar(20) DEFAULT NULL,
  `TA` varchar(30) DEFAULT NULL,
  `VisionOD` varchar(20) DEFAULT NULL,
  `VisionOJ` varchar(20) DEFAULT NULL,
  `DientesAusentes` varchar(15) DEFAULT NULL,
  `DientesCaries` varchar(20) DEFAULT NULL,
  `SoposCardiaca` varchar(20) DEFAULT NULL,
  `TipoLocalizacion` varchar(30) DEFAULT NULL,
  `AreaPulmonal` varchar(20) DEFAULT NULL,
  `Abdomen` varchar(20) DEFAULT NULL,
  `MiembroInferiores` varchar(20) DEFAULT NULL,
  `Observaciones` varchar(100) DEFAULT NULL,
  `ElectroCardiograma` varchar(100) DEFAULT NULL,
  `Ecocardiograma` varchar(100) DEFAULT NULL,
  `Expirometria` varchar(100) DEFAULT NULL,
  `AnalisisLaboratorio` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exploracionfisica`
--

INSERT INTO `exploracionfisica` (`Id_Registro`, `Id_Paciente`, `Peso`, `Talla`, `FrecuenciaCardiaca`, `TA`, `VisionOD`, `VisionOJ`, `DientesAusentes`, `DientesCaries`, `SoposCardiaca`, `TipoLocalizacion`, `AreaPulmonal`, `Abdomen`, `MiembroInferiores`, `Observaciones`, `ElectroCardiograma`, `Ecocardiograma`, `Expirometria`, `AnalisisLaboratorio`) VALUES
(3, 'Paciente03', '158', '19.25', '114.8', '1202', '1.78', '1.25', '2', '8', '12', 'centro', 'bien', 'Inchado', 'bien', 'Otros', 'Otras', 'Otres', 'Otris', 'bien');

-- --------------------------------------------------------

--
-- Table structure for table `hclinicamedicodeportivo`
--

DROP TABLE IF EXISTS `hclinicamedicodeportivo`;
CREATE TABLE IF NOT EXISTS `hclinicamedicodeportivo` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(15) NOT NULL,
  `Fecha` date NOT NULL,
  `Categoria` varchar(20) NOT NULL,
  `Nombres` varchar(15) NOT NULL,
  `ApellidoP` varchar(20) NOT NULL,
  `ApellidoM` varchar(20) NOT NULL,
  `Apodo` varchar(15) NOT NULL,
  `Edad` varchar(10) NOT NULL,
  `NomPadre` varchar(15) NOT NULL,
  `NomMadre` varchar(15) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Celular` varchar(15) NOT NULL,
  `CellPadre` varchar(15) NOT NULL,
  `CellMadre` varchar(15) NOT NULL,
  `EstadoCivil` varchar(10) NOT NULL,
  `Hijos` char(2) NOT NULL,
  `CantHijos` varchar(10) NOT NULL,
  `Trabaja` char(2) NOT NULL,
  `LugarTrabajo` varchar(30) NOT NULL,
  `Estudia` char(2) NOT NULL,
  `NivelEstudio` varchar(15) NOT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hclinicamedicodeportivo`
--

INSERT INTO `hclinicamedicodeportivo` (`Id_Registro`, `Id_Paciente`, `Fecha`, `Categoria`, `Nombres`, `ApellidoP`, `ApellidoM`, `Apodo`, `Edad`, `NomPadre`, `NomMadre`, `Telefono`, `Celular`, `CellPadre`, `CellMadre`, `EstadoCivil`, `Hijos`, `CantHijos`, `Trabaja`, `LugarTrabajo`, `Estudia`, `NivelEstudio`) VALUES
(1, 'Paciente01', '2019-04-01', 'Motoclismo', 'Pedro Manuel', 'Garcia', 'Reyes', 'Tito', '34 anos', 'Julio', 'Margara', '8095691107', '8095682222', '8092492006', '8092492007', 'Casado', 'Si', '4 hijos', 'Si', 'Centro jackes', 'Si', '12vo Grados'),
(3, 'Paciente02', '2019-04-23', 'Baskettball', 'Elvin', 'Vicente', 'Gil', 'Chino', '38', 'Jose Abraham', 'Dominga', '8095691107', '8095682222', '8095682222', '8092492007', 'Soltero', 'No', 'No', 'Si', 'Tesoreria Nacional', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `hclinicamedicodeportivo2`
--

DROP TABLE IF EXISTS `hclinicamedicodeportivo2`;
CREATE TABLE IF NOT EXISTS `hclinicamedicodeportivo2` (
  `Id_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paciente` varchar(20) NOT NULL,
  `Diabetes` varchar(20) NOT NULL,
  `DiaQuien` varchar(20) NOT NULL,
  `Hipertencion` varchar(20) NOT NULL,
  `HipQuien` varchar(20) NOT NULL,
  `Obesidad` varchar(20) NOT NULL,
  `OBsQuien` varchar(20) NOT NULL,
  `Infarto` varchar(20) NOT NULL,
  `InfQuien` varchar(20) NOT NULL,
  `MuerteSubita` varchar(20) NOT NULL,
  `MusQuien` varchar(20) NOT NULL,
  `Epilepsia` varchar(20) NOT NULL,
  `EpilQuien` varchar(20) NOT NULL,
  `Cancer` varchar(20) NOT NULL,
  `CancQuien` varchar(20) NOT NULL,
  `Pulmonales` varchar(20) NOT NULL,
  `PulQuien` varchar(20) NOT NULL,
  `OTRACUAL` varchar(20) NOT NULL,
  `OtraQuien` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Registro`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hclinicamedicodeportivo2`
--

INSERT INTO `hclinicamedicodeportivo2` (`Id_Registro`, `Id_Paciente`, `Diabetes`, `DiaQuien`, `Hipertencion`, `HipQuien`, `Obesidad`, `OBsQuien`, `Infarto`, `InfQuien`, `MuerteSubita`, `MusQuien`, `Epilepsia`, `EpilQuien`, `Cancer`, `CancQuien`, `Pulmonales`, `PulQuien`, `OTRACUAL`, `OtraQuien`) VALUES
(5, 'Paciente05', 'Abuelo Padres', 'jajaja', 'Abuela Padre', 'Si', 'Abuela Padre', 'Nose ', 'Abuela Padre', 'Talves', 'Abuela Padre', 'Podria see', 'Abuelo Madre', 'Quisas', '      Abuelo Madre', 'Podria', 'Padre', 'Pueda', 'Nadie', 'Bien');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Usuario` int(11) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contrasena` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
