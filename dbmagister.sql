-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2023 a las 00:30:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbmagister`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academicos`
--

CREATE TABLE `academicos` (
  `COD_ACADEMICO` int(11) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `CORREO` varchar(45) DEFAULT NULL,
  `CARGO` varchar(45) DEFAULT NULL,
  `GRADO` text DEFAULT NULL,
  `URL_IMG` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `academicos`
--

INSERT INTO `academicos` (`COD_ACADEMICO`, `NOMBRE`, `CORREO`, `CARGO`, `GRADO`, `URL_IMG`) VALUES
(1, 'JOHN W. CASTRO LLANOS', 'john.castro@uda.cl', 'Coordinador de Magíster', 'Máster en Ingeniería Informática y Telecomunicación con Énfasis en Diseño Avanzado de Software. Escuela Politécnica Superior, Universidad Autónoma de Madrid, Madrid. España. 2009. Calificación Trabajo Fin de Máster: Sobresaliente. Doctor en Ingeniería Informática y Telecomunicación. Escuela Politécnica Superior, Universidad Autónoma de Madrid, Madrid. España. 2014. Calificación: Sobresaliente con Mención de Honor Cum Laude.', NULL),
(2, 'DR. DANTE CARRIZO MORENO', 'dante.carrizo@uda.cl', 'Decano Facultad', 'Licenciado en Ciencias de la Ingeniería, Universidad de Concepción, Concepción, Chile. Master en Ingeniería de Software e Ingeniería del Conocimiento, Universidad Politécnica de Madrid, España. Doctor en Ingeniería de Software, Universidad Politécnica de Madrid, España.\r\n', NULL),
(3, 'DR. HÉCTOR CORNIDE REYES', 'hector.cornide@uda.cl', 'Coordinador de Titulación y Prácticas', 'Doctor en Ingeniería Informática (2021), Pontificia Universidad Católica de Valparaíso, Magíster en Ciencias de la Ingeniería Informática (2018), Pontificia Universidad Católica de Valparaíso, Magíster en Administración de Empresas (2015), Universidad del Mar, Ingeniero Civil en Computación e Informática (2004), Universidad de Atacama, Licenciado en Ciencias de la Ingeniería (2003), Universidad de Atacama.', NULL),
(4, 'DR. VLADIMIR RIFFO BOUFFANAIS', 'vladimir.riffo@uda.cl', 'Director de Investigación', 'Dr. en Cs. de la Ingeniería, Área Ciencias de la Computación, Pontificia Universidad Católica de Chile, 2016, Magíster en Ingeniería, Pontificia Universidad Católica de Chile, 2011, Licenciado en Ciencias de la Ingeniería con Mención en Electrónica, Universidad de Antofagasta, 1998.', NULL),
(5, 'DR. WILSON CASTILLO ROJAS', 'wilson.castillo@uda.cl', 'Coordinador de Aseguramiento de la Calidad', 'Magíster en Ciencias de la Ingeniería, Mención Computación, Pontificia Universidad Católica de Chile, 1999. Doctor en Informática, Universidad Politécnica de Madrid, España, 2016.', NULL),
(6, 'JUAN OLIVARES PACHECO', 'jfolivar@uda.cl', 'Doctor en Estadística', 'Doctor en Estadística. Pontificia Universidad Católica de Chile, Chile. Línea de investigación: Ciencia de Datos.', NULL),
(7, 'KARINA CARVAJAL', NULL, NULL, NULL, NULL),
(8, 'ALEJANDRO CATALDO', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_eventos`
--

CREATE TABLE `calendario_eventos` (
  `ID_EVENTO` int(11) NOT NULL,
  `TITULO` varchar(45) DEFAULT NULL,
  `DESCRIPCION` varchar(45) DEFAULT NULL,
  `FECHA_INICIO` varchar(45) DEFAULT NULL,
  `FECHA_FIN` varchar(45) DEFAULT NULL,
  `UBICACION` varchar(45) DEFAULT NULL,
  `TIPO_EVENTO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exalumnos`
--

CREATE TABLE `exalumnos` (
  `ID_EXLAUMNO` int(11) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `GRADO` varchar(65) DEFAULT NULL,
  `ANO_GRADUACION` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `exalumnos`
--

INSERT INTO `exalumnos` (`ID_EXLAUMNO`, `NOMBRE`, `GRADO`, `ANO_GRADUACION`) VALUES
(101, 'Luis Aguirre Arredondo', 'Magister en Informática y Ciencias de la Computación', '2015'),
(102, 'Cristian Ortiz', 'Magister en Informática y Ciencias de la Computación', '2015'),
(103, 'Jacqueline Manríquez', 'Magíster en Ingeniería Informática y Ciencias de la Computación', '2016'),
(104, 'Andrés Alfaro', 'Magíster en Informática y Ciencias de la Computación', '2017'),
(105, 'Jorge Rojas', 'Magister en Informática y Ciencias de la Computación', '2016'),
(106, 'Iván Quintanilla', 'Magister en Informática y Ciencias de la Computación', NULL),
(107, 'Carlos Moller', 'Magister en Informática y Ciencias de la Computación', NULL),
(108, 'Víctor Urbina', 'Magister en Informática y Ciencias de la Computación', NULL),
(109, 'César Hernández', 'Magister en Informática y Ciencias de la Computación', '2017'),
(110, 'Karina Páez', 'Magister en Informática y Ciencias de la Computación', NULL),
(111, 'Susana Álvarez', 'Magister en Informática y Ciencias de la Computación', '2015'),
(112, 'Rodrigo Oliva', 'Magister en Informática y Ciencias de la Computación', NULL),
(113, 'Cristian Valdivia', 'Magister en Informática y Ciencias de la Computación', NULL),
(114, 'Sebastián Flores', 'Magister en Informática y Ciencias de la Computación', NULL),
(115, 'Iván Godoy', 'Magister en Informática y Ciencias de la Computación', NULL),
(116, 'Carlos Carrasco', 'Magister en Informática y Ciencias de la Computación', NULL),
(117, 'Alejandro Pulgar', 'Magister en Informática y Ciencias de la Computación', NULL),
(118, 'Rodrigo Hidalgo', 'Magister en Informática y Ciencias de la Computación', NULL),
(119, 'David Rojas	', 'Magister en Informática y Ciencias de la Computación', NULL),
(120, 'Manuel Ossa	', 'Magister en Informática y Ciencias de la Computación', NULL),
(121, 'Nataly Gonzalez', 'Magister en Informática y Ciencias de la Computación', NULL),
(122, 'Alejandro Pulgar', 'Magister en Informática y Ciencias de la Computación', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_contacto`
--

CREATE TABLE `formulario_contacto` (
  `RUT` varchar(45) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `GENERO` varchar(45) DEFAULT NULL,
  `CORREO` varchar(45) DEFAULT NULL,
  `TELEFONO` varchar(45) DEFAULT NULL,
  `DIRECCION` varchar(45) DEFAULT NULL,
  `INSTITUCION` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_postulacion`
--

CREATE TABLE `formulario_postulacion` (
  `RUT` varchar(45) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `GENERO` varchar(45) DEFAULT NULL,
  `CORREO` varchar(45) DEFAULT NULL,
  `TELEFONO` varchar(45) DEFAULT NULL,
  `DIRECCION` varchar(45) DEFAULT NULL,
  `INSTITUCION` varchar(45) DEFAULT NULL,
  `GRADO` varchar(45) DEFAULT NULL,
  `ANO_GRADUACION` varchar(45) DEFAULT NULL,
  `CAMPO_ESTUDIO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_clases`
--

CREATE TABLE `horario_clases` (
  `ID_CLASE` int(11) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `DIA` varchar(45) DEFAULT NULL,
  `HORA_INICIO` varchar(45) DEFAULT NULL,
  `HORA_FIN` varchar(45) DEFAULT NULL,
  `NOMBRE_PROFESOR` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `ID_NOTICIA` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL,
  `TITULO` varchar(45) DEFAULT NULL,
  `DESCRIPCION` varchar(45) DEFAULT NULL,
  `URL_IMG` varchar(45) DEFAULT NULL,
  `VISIBILIDAD` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `noticia_importante` (
  `id` int(11) NOT NULL,
  `titulo` varchar(1000) DEFAULT NULL,
  `cuerpo` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `noticia_importante` (`id`, `titulo`, `cuerpo`) VALUES
(1, 'Titulo de la Noticia', 'Cuerpo de la noticia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feedback`
--

CREATE TABLE `feedback` (
  `PREGUNTA_1` varchar(45) DEFAULT NULL,
  `PREGUNTA_2` varchar(45) DEFAULT NULL,
  `PREGUNTA_3` varchar(45) DEFAULT NULL,
  `PREGUNTA_4` varchar(45) DEFAULT NULL,
  `PREGUNTA_5` varchar(45) DEFAULT NULL,
  `PREGUNTA_6` varchar(45) DEFAULT NULL,
  `PREGUNTA_7` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `COD_PROYECTO` int(11) NOT NULL,
  `AREA` varchar(65) DEFAULT NULL,
  `COD_AUTOR` int(11) DEFAULT NULL,
  `TITULO` tinytext DEFAULT NULL,
  `FONDO` varchar(30) DEFAULT NULL,
  `ANO` varchar(45) DEFAULT NULL,
  `URL_PROYECTO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`COD_PROYECTO`, `AREA`, `COD_AUTOR`, `TITULO`, `FONDO`, `ANO`, `URL_PROYECTO`) VALUES
(11, 'Ingeniería de Software', 2, 'Mejora del proceso de educción de requisitos software por medio de evidencia empírica (1º Parte)', 'DIUDA2010', '2010', NULL),
(12, 'Ingeniería de Software', 2, 'Mejora Del Proceso De Educción De Requisitos Software Por Medio De Evidencia Empírica (2ª parte)', 'DIUDA2012', '2012', NULL),
(13, 'Ingeniería de Software', 2, 'Fortalecimiento de Capacidades para la Transferencia Tecnológica de la DIDET de la Universidad de Atacama', 'CORFO OTL', '2015', NULL),
(14, 'Ingeniería de Software	', 2, 'Reducción de brechas entre las propuestas científicas y las prácticas de la industria latinoamericana en Ingeniería de Requisitos', 'DIUDA2014', '2015-2016', NULL),
(15, 'Ingeniería de Software	', 2, 'An ICT platform for sustainable energy ecosystem in smart Cities', 'CONICYT ERANET-LAC	', '2016', NULL),
(16, 'Ingeniería de Software', 3, 'Estudio etnográfico sobre prácticas de la industria desarrolladora de software en Chile	', 'DIUDA2015	', '2016-2017', NULL),
(17, 'Ingeniería de Software', 1, 'Trazabilidad de habilidades en equipos ágiles de ingeniería de software, utilizando técnicas de análisis multimodal de aprendizaje	', 'DIUDA	', '2018', NULL),
(18, 'Gestión de Tecnologías de Información	', NULL, 'Evaluación de la usabilidad de aplicaciones móviles multi-plataforma	', 'DIUDA', '2016', NULL),
(19, 'Inteligencia de Máquinas', 4, 'Factores que afectan la adopción a nivel organizacional de tecnologías de información en pequeñas empresas: un estudio cualitativo exploratorio inicial', 'DIUDA2012', '2013-2014', NULL),
(20, 'Inteligencia de Máquinas	', 4, 'Validación de la detección de objetos peligrosos en imágenes de rayos X usando reconstrucción 3D	', 'DIUDA2014	', '2015-2016', NULL),
(21, 'Inteligencia de Máquinas	', 4, 'Uso de la visión por computador para la detección de desperfectos en objetos	', 'DIUDA', '2017', NULL),
(22, 'Inteligencia de Máquinas', 4, 'Inspección del Desgaste en Contactos Eléctricos Usando Segmentación por Instancias	', 'DIUDA', '2019', NULL),
(23, 'Inteligencia de Máquinas', 4, 'Inspección automática de frutas en centros de empaquetado, usando algoritmos de machine learning y machine vision', 'FONDEF IDEA	', '2022', NULL),
(24, 'Inteligencia de Máquinas	', 5, 'Levantamiento de microclimas aplicando inteligencia artificial y utilizando estación meteorológica portátil mediante tecnología dron en el valle de Copiapó	', 'FIUDA2030	', '2023', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `COD_PUBLICACION` int(11) NOT NULL,
  `AREA` varchar(65) DEFAULT NULL,
  `COD_AUTOR` int(11) DEFAULT NULL,
  `COHORTE` year(4) DEFAULT NULL,
  `COD_ESTUDIANTE` int(11) DEFAULT NULL,
  `TITULO` tinytext DEFAULT NULL,
  `INDEXACION` varchar(50) DEFAULT NULL,
  `FECHA` year(4) DEFAULT NULL,
  `EVENTO` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`COD_PUBLICACION`, `AREA`, `COD_AUTOR`, `COHORTE`, `COD_ESTUDIANTE`, `TITULO`, `INDEXACION`, `FECHA`, `EVENTO`) VALUES
(1, 'Ingeniería de Software	', 2, '2013', 101, 'Information Quality and Quantity-Based Model to Represent the Appropriateness of Software Requirements Elicitation Techniques', 'WoS Scopus', '2017', 'Revista Facultad de Ingeniería, Universidad de Antioquia, no. 84, pp. 72-83, 2017'),
(2, 'Ingeniería de Software	', 2, '2013', 102, 'Ingeniería de Software	', 'Scopus Congreso	', '2020', 'Proceedings of the 8th International Conference in Software Engineering Research and Innovation (CONISOFT), vol. 1, pp. 38-45, Cheturnal, Mexico\r\n'),
(3, 'Ingeniería de Software	', 2, '2013', 102, 'Towards a Context-Based Framework for the Software Requirements Elicitation Process Management [Hacia un Marco basado en Contexto para la Gestión del Proceso de Educción de Requisitos Software]', 'WoS proc Scopus', '2018', '13th Iberian Conference on Information Systems and Tecnologies (CISTI 2018), pp. 1-7, Cáceres, Spain'),
(6, 'Ingeniería de Software	', 2, '2013', 102, 'Models of Requirements Elicitation Process: A Systematic Mapping [Modelos del Proceso de Educción de Requisitos: Un Mapeo Sistemático]', 'SciELO', '2016', 'Revista Ingeniería y Desarrollo. Vol. 34, no. 1, pp. 184-203'),
(7, 'Ingeniería de Software	', 2, '2013', 102, 'Modelos del proceso de educción de requisitos: Un mapeo sistemático.', 'Congreso', '2014', 'Actas V Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2014), Iquique, Chile\r\n'),
(8, 'Ingeniería de Software	', 2, '2014', 105, 'Gap in Requirements Engineering between Scientific Literature and practice of Latin-American Software Industry	', 'Journal WoS	', '2017', 'Interciencia, Vol. 42, no. 10, pp. 676-682\r\n'),
(9, 'Ingeniería de Software	', 2, '2014', 105, 'How Do Software Development Enterprises in Latin America Do Requirements Engineering? An Empirical Study	', 'WoS proc Scopus', '2017', 'Proceedings of 29th International Business Information Management Conference (IBIMA 2017), Viena, Austria\r\n'),
(10, 'Ingeniería de Software	', 2, '2014', 105, 'Práctica Industrial en Ingeniería de Requisitos: Un Estudio Empírico de Empresas Latinoamericanas', 'Congreso', '2016', 'Actas International Conference on Information Systems and Computer Science (INCISCOS 2016), pp. 251-257. Quito, Ecuador\r\n'),
(11, 'Ingeniería de Software	', 2, '2014', 105, 'Methodologies, Techniques and Tools in Requirements Engineering: A Systematic Mapping [Metodologías, Técnicas y Herramientas en Ingeniería de Requisitos: Un Mapeo Sistemático]	', 'Scopus SciELO-Chile', '2018', 'Revista Chilena de Ingeniería, Ingeniare. Vol. 26, no. 4, pp. 473-485'),
(12, 'Ingeniería de Software	', 2, '2014', 105, 'Classification of Requirements Elicitation Practices in Agile Developments: A Systematic Mapping [Clasificación de Prácticas de Educción de Requisitos en Desarrollos Agiles: Un Mapeo Sistemático]	', 'Scopus SciELO-Chile', '2016', 'Revista Chilena de Ingeniería, Ingeniare. Vol. 24, no. 4, pp. 654-662'),
(13, 'Ingeniería de Software	', 2, '2014', 105, 'Clasificación de Prácticas de Educción de Requisitos en Desarrollos Agiles: Un Mapeo Sistemático', 'Congreso	', '2015', 'Actas VI Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2015), Antofagasta, Chile.'),
(14, 'Ingeniería de Software', 2, '2014', 106, 'Prototyping Use as a Software Requirements Elicitation Technique: A Case Study	', 'Scopus WoS proc Congreso', '2018', 'Proceedings 6th World Conference on Information Systems and Technologies, Naples, Italy, 2018. In: Rocha Á., Adeli H., Reis L., Costanzo S. (eds). Trends and Advances in Information Systems and Technologies. WorldCIST\'18 pp. 341-350. Advances in Intelligent Systems and Computing, vol 746. Springer, Cham\r\n'),
(15, 'Ingeniería de Software', 2, '2014', 106, 'Formalizing a Cost Construct Model related to the Software Requirements Elicitation Techniques', 'WoS proc Scopus Congreso', '2018', 'Proceedings International Conference on Software Processes Improvement, Zapatecas, México. In: Mejia J., Muñoz M., Rocha Á., Quiñonez Y., Calvo-Manzano J. (eds). Trends and Applications in Software Engineering. CIMPS pp. 24-34. Advances in Intelligent Systems and Computing, vol 688, pp. 24-34. Springer, Cham'),
(16, 'Ingeniería de Software', 2, '2014', 106, 'Adequacy Profile of Software Requirements Elicitation Techniques [Perfil de Adecuación de las Técnicas de Educción de Requisitos Software]', 'Scopus SciELO-Chile', '2016', 'Revista Chilena de Ingeniería, Ingeniare. Vol. 24,no. 4, pp. 690-702'),
(17, 'Ingeniería de Software', 2, '2014', 106, 'Perfil de Adecuación de las Técnicas de Educción de Requisitos Software	', 'Congreso', '2015', 'Actas VI Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2015), Antofagasta, Chile\r\n'),
(18, 'Ingeniería de Software', 2, '2015', 103, 'Impact of Assessment of Empirical Studies Reliability: A Revisited Study	', 'Scopus WoS proc Congreso', '2018', 'Proceedings of 37th International Conference of the Chilean Computer Science Society (SCCC 2018), Santiago, Chile'),
(19, 'Ingeniería de Software', 2, '2015', 103, 'Evaluación de la Confiabilidad de Estudios Empíricos en Educción de Requisitos Software [Evaluation of the reliability of empirical studies in software requirements education]', 'Scopus Congreso', '2017', 'Proceedings 20th Ibero-American Conference on Software Engineering (CIbSE 2017), Buenos Aires, Argentina, pp.113-126'),
(20, 'Ingeniería de Software', 2, '2015', 103, 'Assessment Method of Empirical Studies in Software Engineering', 'Scopus WoS proc Congreso', '2016', 'Proceedings of 35th International Conference of the Chilean Computer Science Society (SCCC 2016), Valparaiso, Chile\r\n'),
(21, 'Ingeniería de Software', 2, '2015', 103, 'Evaluation of the prediction model of session objectives for capturing software requirements [Evaluación del modelo de predicción de objetivos de sesión de captura de requisitos de software]', 'Scopus Journal', '2020', 'Revista Ibérica De Sistemas e Tecnologias De Informação, RISTI, Vol. 2020, no. E28, pp. 654-667'),
(22, 'Ingeniería de Software', 2, '2015', 103, 'Evaluación de un modelo de progresión de captura de información para requisitos de software', 'SciELO-Chile', '2021', 'Revista Chilena de Ingeniería, Ingeniare, vol. 29, no. 3, pp. 505-516'),
(23, 'Ingeniería de Software	', 2, '2015', 104, 'Practices of the Chilean Software Industry: An Exploratory Study	', 'WOS SciELO', NULL, 'Information and Software Technology'),
(24, 'Ingeniería de Software	', 2, '2015', 104, 'Critical Aspects of the Software Industry in Chile: An Ethnographic Study', 'Scopus Congreso	', '2019', 'Proceedings of 19th International Conference on Computational Science and Its Applications (ICCSA 2019) Saint Petersburg, Russia, pp. 108-113\r\n'),
(25, 'Ingeniería de Software	', 2, '2015', 104, 'Ethnographic study on practices of the software development industry in Chile', 'Scopus WoS proc Congreso', '2018', 'Proceedings of the International Conference on Information Technology & Systems. In: Rocha Á., Guarda T. (eds). Proceedings of the International Conference on Information Technology & Systems. ICITS 2018 pp. 700-709. Advances in Intelligent Systems and Computing, vol 721. Springer, Cham'),
(26, 'Ingeniería de Software	', 2, '2015', 104, 'Methodological Proposal for Ethnographic Research in Software Engineering: A Case Study	', 'Scopus Congreso	', '2017', 'Proceedings of 12th Ibero-American Conference on Software Engineering and Knowledge Engineering (JIISIC 2017), Lacatunga, Ecuador\r\n'),
(27, 'Ingeniería de Software	', 2, '2015', 104, 'Propuesta de un Modelo de Plan de Continuidad: Un Estudio de Caso', 'Scopus Congreso	', '2016', 'Actas XV Conferencia Iberoamericana en Sistemas, Cibernética e Informática (CISCI 2016), Orlando, Florida, EE.UU., pp. 97-102\r\n'),
(28, 'Ingeniería de Software	', 2, '2015', 104, 'Quality Assurance Method in a Software Development Methodology: A Practice Approach [Método de aseguramiento de la calidad en una metodología de desarrollo de software, un enfoque práctico]	', 'Scopus SciELO-Chile	', '2018', '	Revista Chilena de Ingeniería, Ingeniare. Vol. 26, no. 1, pp. 114-129'),
(29, 'Ingeniería de Software	', 2, '2015', 107, 'Estructuras Metodológicas de Revisiones Ssistemáticas de Literatura en Ingeniería de Software: Un Estudio de Mapeo Sistemático [Methodological Structures of Systematic Literature Review in Software Engineering: A Systematic Mapping Study]	', 'Scopus SciELO-Chile	', '2018', 'Revista Chilena de Ingeniería, Ingeniare. Vol. 26, no. especial, pp. 45-54'),
(30, 'Ingeniería de Software	', 2, '2015', 107, 'Revisiones Sistemáticas de Literatura en Ingeniería de Software: Un Estudio de Mapeo Sistemático', 'Congreso', '2017', 'Actas VIII Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2017), Arica, Chile\r\n'),
(31, 'Ingeniería de Software	', 2, '2015', 107, 'Framework for selecting solutions based on Geographic Information Systems [Marco de Selección de Soluciones Basadas en Sistemas de Información Geográficos]	', 'Scopus WoS proc', '2016', 'Proceedings of 11th Iberian Conference on Information Systems and Technologies (CISTI 2016), Las Palmas, Spain\r\n'),
(32, 'Ingeniería de Software	', 2, '2015', 107, 'FASET: Desarrollo de un Asistente Web para el Proceso de Selección de Tecnicas de Educcion de Requisitos', 'Scopus Congreso', '2018', 'Proceedings of 32nd International Business Information Management Conference (IBIMA 2018), Seville, Spain\r\n'),
(33, 'Ingeniería de Software	', 2, '2018', 108, 'Quality Characteristics of Software Requirements: A Systematic Mapping', 'Scopus Congreso', '2019', 'Proceedings of 33rd International Business Information Management Conference (IBIMA 2019), Granada, Spain\r\n'),
(34, 'Ingeniería de Software	', 2, '2015', 109, 'Diseño de prototipo para enchufe inteligente de propósito general	', 'Congreso', '2021', 'Actas de XII Conferencia Internacional de Computación e Informática del Norte de Chile (INFONOR), Arica, Chile'),
(36, 'Gestión de Tecnologías de Información	', 8, '2013', 111, 'Liderazgo en adopción de TI en PYMEs ¿Sólo el involucramiento del propietario importa? [Leadership in IT Adoption in SMEs. Just Owner Involvement is Important?]	', 'Scopus SciELO-Chile', '2014', 'Revista Chilena de Ingeniería, Ingeniare. Vol. 22, no. 3, pp. 421-430'),
(37, 'Gestión de Tecnologías de Información', 8, '2013', 111, 'Liderazgo en Adopción de TI en PYMEs ¿Sólo el Involucramiento del Propietario Importa?	', 'Congreso', '2013', 'Actas IV Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2013), Coquimbo, Chile\r\n'),
(38, 'Gestión de Tecnologías de Información	', 8, '2014', 112, '¿Cómo es la Comunidad de Investigadores Latinoamericanos y Chilenos en SI? Un Análisis de Redes de Coautoría	', 'Congreso', '2014', 'Actas V Congreso Internacional de Computación e Informática del Norte de Chile (INFONOR 2014), Iquique, Chile\r\n'),
(39, 'Gestión de Tecnologías de Información	', 7, '2013', 111, 'Determinación de Factores de Adopción de Internet en PYMES Agrícolas de Atacama, Basado en el Marco TOE	', 'Congreso', '2015', 'Actas II Workshop en Investigación en Sistemas y Tecnologías de Información (WSTI 2015), Chillán, Chile-Jornadas Chilenas de Computación (JCC 2015), Santiago, Chile	'),
(40, 'Gestión de Tecnologías de Información	', 7, '2014', 112, '¿Cómo Influye el Uso de TI en las Pymes Chilenas? - Un Análisis Mediante Clustering	', 'Congreso', '2015', 'Actas II Workshop en Investigación en Sistemas y Tecnologías de Información (WSTI 2015), Chillán, Chile-Jornadas Chilenas de Computación (JCC 2015), Santiago, Chile\r\n'),
(41, 'Gestión de Tecnologías de Información', 7, '2014', 112, 'IT Impact on Small and Medium Enterprises ¿Is Its Effect Moderate by Intensity of IT Use of Industry? [Impacto de TI en las Pequeñas y Medianas Empresas ¿es su Efecto Moderado por la Intensidad de Uso de TI de la Industria?]	', 'Scopus SciELO-Chile', '2018', 'Journal of Technology Management & Innovation. Vol.13, no. 2, pp. 82-93\r\n'),
(42, 'Gestión de Tecnologías de Información	', 5, '2016', 113, 'Desarrollo de un Software de Análisis de RNA con Integración de Mecanismos Interactivos [Development of an Artificial Neural Network (ANN) Analysis Software with Integration of Interactive Mechanisms]	', 'Scopus Congreso', '2019', 'Proceedings of 22nd Ibero-American Conference on Software Engineering (CIbSE 2019), La Habana, Cuba, pp. 293-306\r\n'),
(43, 'Gestión de Tecnologías de Información	', 5, '2019', 109, 'Systematic mapping study on techniques used in stages of a data mining process focused to weather data analysis	', 'Scopus Congreso	', '2020', 'Proceedings of the 8th International Conference in Software Engineering Research and Innovation (CONISOFT), vol. 1, pp. 245-253, Cheturnal, Mexico\r\n'),
(44, 'Gestión de Tecnologías de Información	', 5, '2019', 109, 'Bibliographic Review on Data Mining Techniques Used with Weather Data', 'Journal WoS	', '2021', 'Programming and Computer Software, vol. 47, pp. 817-829\r\n'),
(45, 'Inteligencia de Máquinas', 4, '2013', 114, 'Threat Objects Detection in X-ray Images Using an Active Vision Approach	', 'Journal WoS	', '2017', 'Journal of Nondestructive Evaluation, Vol. 36, article 44\r\n'),
(46, 'Inteligencia de Máquinas', 4, '2014', 115, 'Handgun Detection in Single-Spectrum Multiple X-ray Views Based on 3D Object Recognition	', 'Journal WoS', '2019', 'Journal of Nondestructive Evaluation, Vol. 38, article 66\r\n'),
(47, 'Inteligencia de Máquinas', 4, '2014', 116, 'Objects recognition using tactile sensing in a robotic gripper	', 'Journal WoS	', '2022', 'Journal of Nondestructive Evaluation\r\n'),
(48, 'Inteligencia de Máquinas', 4, '2017', 117, 'Predictive Model of the Percentage of Copper in the Matte of the Teniente Converter Through an Artificial Neural Network', 'Journal WoS', '2022', 'The Journal of The Minerals, Metals & Materials Society (TMS)'),
(49, 'Inteligencia de Máquinas', 4, '2017', 118, 'Active Inspection of Objects to Detect Possible Damage and Measure Their Volume Using 3D Reconstruction	', 'Journal WoS', '2022', 'Measurement, vol. 199, article 111541'),
(50, 'Inteligencia de Máquinas', 4, '2019', 119, 'Inspección del desgaste en contactos eléctricos usando segmentación por instancias	', 'SciELO-Chile	', '2021', 'Revista Chilena de Ingeniería, Ingeniare, vol. 29, no. 3, pp. 495-504\r\n'),
(51, 'Inteligencia de Máquinas', 7, '2013', 120, 'Organizational and Environment Factors that Predict the Use of ICT in Chilean Companies: An Application of Neural Networks [Factores Organizacionales y de Entorno que Predicen el Uso de TIC en Empresas Chilenas: Una Aplicación de Redes Neuronales]', 'Scopus SciELO-Chile', '2018', 'Revista Chilena de Ingeniería, Ingeniare. Vol. 26, no.2, pp. 296-306'),
(52, 'Inteligencia de Máquinas', 7, '2015', 121, 'Prediction of Aquifer Level in Bodega Sector Using Artificial Neural Networks	', 'Scopus Congreso	', '2019', 'Proceedings of 14th Ibero-American Conference on Software Engineering and Knowledge Engineering (JIISIC 2019), Guanacaste, Costa Rica\r\n'),
(53, 'Inteligencia de Máquinas', 7, '2017', 122, 'Modeling of the Teniente Converter Through Artificial Neural Networks	', 'Scopus Congreso', '2018', 'Proceedings of 13th Ibero-American Conference on Software Engineering and Knowledge Engineering (JIISIC 2018), Copiapo, Chile');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academicos`
--
ALTER TABLE `academicos`
  ADD PRIMARY KEY (`COD_ACADEMICO`);

--
-- Indices de la tabla `calendario_eventos`
--
ALTER TABLE `calendario_eventos`
  ADD PRIMARY KEY (`ID_EVENTO`);

--
-- Indices de la tabla `exalumnos`
--
ALTER TABLE `exalumnos`
  ADD PRIMARY KEY (`ID_EXLAUMNO`);

--
-- Indices de la tabla `formulario_contacto`
--
ALTER TABLE `formulario_contacto`
  ADD PRIMARY KEY (`RUT`);

--
-- Indices de la tabla `formulario_postulacion`
--
ALTER TABLE `formulario_postulacion`
  ADD PRIMARY KEY (`RUT`);

--
-- Indices de la tabla `horario_clases`
--
ALTER TABLE `horario_clases`
  ADD PRIMARY KEY (`ID_CLASE`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID_NOTICIA`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`COD_PROYECTO`),
  ADD KEY `fk_cod_autor` (`COD_AUTOR`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`COD_PUBLICACION`),
  ADD KEY `COD_AUTOR_idx` (`COD_AUTOR`),
  ADD KEY `COD_ESTUDIANTE_idx` (`COD_ESTUDIANTE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario_eventos`
--
ALTER TABLE `calendario_eventos`
  MODIFY `ID_EVENTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `exalumnos`
--
ALTER TABLE `exalumnos`
  MODIFY `ID_EXLAUMNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `horario_clases`
--
ALTER TABLE `horario_clases`
  MODIFY `ID_CLASE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `COD_PUBLICACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk_cod_autor` FOREIGN KEY (`COD_AUTOR`) REFERENCES `academicos` (`COD_ACADEMICO`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `COD_AUTOR` FOREIGN KEY (`COD_AUTOR`) REFERENCES `academicos` (`COD_ACADEMICO`),
  ADD CONSTRAINT `COD_ESTUDIANTE` FOREIGN KEY (`COD_ESTUDIANTE`) REFERENCES `exalumnos` (`ID_EXLAUMNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
