-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2025 a las 00:56:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mizumi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `columns` int(11) NOT NULL,
  `rows` int(11) NOT NULL,
  `objects` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`objects`)),
  `scenario_quantity` int(11) NOT NULL,
  `clue_quantity` int(11) NOT NULL,
  `table_quantity` int(11) NOT NULL,
  `chairs_per_table` int(11) NOT NULL,
  `adult_chair_price` decimal(8,2) NOT NULL,
  `child_chair_price` decimal(8,2) NOT NULL,
  `infant_chair_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `maps`
--

INSERT INTO `maps` (`id`, `name`, `columns`, `rows`, `objects`, `scenario_quantity`, `clue_quantity`, `table_quantity`, `chairs_per_table`, `adult_chair_price`, `child_chair_price`, `infant_chair_price`, `created_at`, `updated_at`) VALUES
(1, '2', 14, 16, '{\"tables\":[{\"id\":1749182771695,\"x\":3,\"y\":3,\"width\":1,\"height\":1,\"label\":\"M2\",\"capacity\":4}],\"chairs\":[{\"x\":1,\"y\":2,\"width\":1,\"height\":1,\"label\":\"E1\",\"type\":\"unknown\"},{\"x\":3,\"y\":4,\"width\":1,\"height\":1,\"label\":\"P1\",\"type\":\"unknown\"},{\"x\":5,\"y\":6,\"width\":1,\"height\":1,\"label\":\"M1\",\"type\":\"unknown\"},{\"x\":14,\"y\":4,\"width\":1,\"height\":1,\"label\":\"M2\",\"type\":\"unknown\"},{\"x\":12,\"y\":4,\"width\":1,\"height\":1,\"label\":\"M3\",\"type\":\"unknown\"}],\"scenarios\":[],\"clues\":[]}', 1, 1, 3, 1, 1.00, 2.00, 3.00, '2025-04-23 07:03:50', '2025-06-06 10:06:38'),
(2, 'Prueba', 10, 10, '\"{\\\"tables\\\":[],\\\"chairs\\\":[{\\\"x\\\":5,\\\"y\\\":5,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"E1\\\",\\\"type\\\":\\\"unknown\\\"},{\\\"x\\\":4,\\\"y\\\":6,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"P1\\\",\\\"type\\\":\\\"unknown\\\"},{\\\"x\\\":2,\\\"y\\\":2,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M1\\\",\\\"type\\\":\\\"unknown\\\"},{\\\"x\\\":3,\\\"y\\\":3,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M2\\\",\\\"type\\\":\\\"unknown\\\"},{\\\"x\\\":1,\\\"y\\\":6,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M3\\\",\\\"type\\\":\\\"unknown\\\"},{\\\"x\\\":1,\\\"y\\\":8,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M4\\\",\\\"type\\\":\\\"unknown\\\"}],\\\"scenarios\\\":[],\\\"clues\\\":[]}\"', 1, 1, 4, 4, 4.00, 4.00, 4.00, '2025-04-23 23:33:44', '2025-04-23 23:33:44'),
(3, 'prueba 3', 21, 21, '{\"tables\":[{\"id\":1749181492346,\"x\":5,\"y\":4,\"width\":1,\"height\":1,\"label\":\"M5\",\"capacity\":4}],\"chairs\":[{\"x\":10,\"y\":10,\"width\":1,\"height\":1,\"label\":\"E1\"},{\"x\":5,\"y\":5,\"width\":1,\"height\":1,\"label\":\"P1\"},{\"x\":7,\"y\":8,\"width\":1,\"height\":1,\"label\":\"M1\",\"type\":\"mesa\"},{\"x\":8,\"y\":9,\"width\":1,\"height\":1,\"label\":\"M2\",\"type\":\"mesa\"},{\"x\":15,\"y\":15,\"width\":1,\"height\":1,\"label\":\"M3\",\"type\":\"unknown\"}],\"scenarios\":[],\"clues\":[]}', 1, 1, 3, 4, 3.00, 3.00, 3.00, '2025-04-30 06:09:32', '2025-06-06 09:50:57'),
(4, 'Tribilin', 20, 20, '\"{\\\"tables\\\":[{\\\"x\\\":3,\\\"y\\\":8,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M1\\\",\\\"type\\\":\\\"Mesas\\\"}],\\\"chairs\\\":[],\\\"scenarios\\\":[{\\\"x\\\":5,\\\"y\\\":4,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"E1\\\",\\\"type\\\":\\\"Escenario\\\"}],\\\"clues\\\":[{\\\"x\\\":1,\\\"y\\\":2,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"P1\\\",\\\"type\\\":\\\"Pista\\\"}]}\"', 1, 1, 1, 8, 1.00, 1.00, 1.00, '2025-04-30 10:31:50', '2025-04-30 10:31:50'),
(5, 'MIERCOLES', 20, 20, '\"{\\\"tables\\\":[{\\\"x\\\":7,\\\"y\\\":5,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M1\\\",\\\"type\\\":\\\"Mesas\\\"},{\\\"x\\\":7,\\\"y\\\":6,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M2\\\",\\\"type\\\":\\\"Mesas\\\"},{\\\"x\\\":7,\\\"y\\\":7,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M3\\\",\\\"type\\\":\\\"Mesas\\\"}],\\\"chairs\\\":[],\\\"scenarios\\\":[{\\\"x\\\":5,\\\"y\\\":5,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"E1\\\",\\\"type\\\":\\\"Escenario\\\"}],\\\"clues\\\":[{\\\"x\\\":5,\\\"y\\\":6,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"P1\\\",\\\"type\\\":\\\"Pista\\\"}]}\"', 1, 1, 3, 5, 5.00, 5.00, 5.00, '2025-05-01 06:01:57', '2025-05-01 06:01:57'),
(6, 'MIzumi', 1, 10, '\"{\\\"tables\\\":[{\\\"x\\\":7,\\\"y\\\":4,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M1\\\",\\\"type\\\":\\\"Mesas\\\"},{\\\"x\\\":7,\\\"y\\\":5,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M2\\\",\\\"type\\\":\\\"Mesas\\\"},{\\\"x\\\":7,\\\"y\\\":6,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M3\\\",\\\"type\\\":\\\"Mesas\\\"},{\\\"x\\\":7,\\\"y\\\":7,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"M4\\\",\\\"type\\\":\\\"Mesas\\\"}],\\\"chairs\\\":[],\\\"scenarios\\\":[{\\\"x\\\":5,\\\"y\\\":5,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"E1\\\",\\\"type\\\":\\\"Escenario\\\"},{\\\"x\\\":5,\\\"y\\\":5,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"E1\\\",\\\"type\\\":\\\"Escenario\\\"}],\\\"clues\\\":[{\\\"x\\\":5,\\\"y\\\":6,\\\"width\\\":1,\\\"height\\\":1,\\\"label\\\":\\\"P1\\\",\\\"type\\\":\\\"Pista\\\"}]}\"', 1, 1, 4, 5, 3.00, 3.00, 3.00, '2025-05-12 05:44:13', '2025-05-12 05:44:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_10_29_025050_create_users_table', 1),
(5, '2024_11_15_001503_create_restaurantes_table', 1),
(6, '2024_12_05_234806_create_mapas_table', 1),
(7, '2024_12_06_023943_add_estatus_and_montaje_to_restaurantes_table', 1),
(8, '2025_03_25_222327_create_reservacions_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacions`
--

CREATE TABLE `reservacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `comida` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `mesa` int(11) NOT NULL,
  `asientos` int(11) NOT NULL,
  `adultos` int(11) NOT NULL,
  `menores` int(11) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `habitacion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_reservacion` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservacions`
--

INSERT INTO `reservacions` (`id`, `fecha`, `comida`, `horario`, `mesa`, `asientos`, `adultos`, `menores`, `nombre_completo`, `telefono`, `email`, `tipo`, `habitacion`, `created_at`, `updated_at`, `id_reservacion`) VALUES
(6, '2025-05-06', 'desayuno', '08:00', 2, 2, 1, 1, 'Aliii', '7445339835', 'aaaa@aaaaa.com', 'visitante', NULL, '2025-04-03 00:53:17', '2025-04-03 00:53:17', 9),
(9, '2025-06-04', 'desayuno', '8:00', 4, 3, 2, 1, 'ali', '56565656', 'eee@eee.ee', 'algo', NULL, '2025-06-05 00:32:33', '2025-06-05 00:32:33', 10),
(10, '2025-06-04', 'desayuno', '8:00', 4, 3, 2, 1, 'ema', '56565656', 'eee@eee.ee', 'algo', NULL, '2025-06-05 00:32:33', '2025-06-05 00:32:33', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reservas` int(11) UNSIGNED NOT NULL,
  `Nombre_Cliente` varchar(255) NOT NULL,
  `Num_Tel` int(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `Tipo_Comida` varchar(15) NOT NULL,
  `hora_reserva` date NOT NULL,
  `mesa_reservada` int(11) NOT NULL,
  `cantidad_persona` int(11) NOT NULL,
  `id_restaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estatus` varchar(255) DEFAULT NULL,
  `montaje` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `nombre`, `descripcion`, `imagen`, `created_at`, `updated_at`, `estatus`, `montaje`) VALUES
(7, 'Marché', 'Disfrute un desayuno de autentico lujo en nuestro restaurante Marché. Aquí nuestros chef de renombre muestran su talento en una cocina abierta y llena de energía, preparando suntuosos y exquisitos buffets internacionales.', 'images/RGCFGgghdTuudqY8PHGkUgPGyVVtGGLSTdn7xsBW.png', '2025-04-30 05:42:15', '2025-05-12 20:06:32', 'Activo: Desayuno 7:00 AM - 12:00 AM, Comida 1:00 PM - 5:00 PM', 'A la carta'),
(8, 'Acua', 'En Acua cada plato se prepara cuidadosamente con ingredientes frescos de temporada y de la región para ofrecer una experiencia gastronómica única de snacks, mariscos, frescas ensaladas y mas. Además, nuestro amables Anfitriones estarán encantados de atender todas sus necesidades, mientras admira nuestra excelente área de albercas.', 'images/jdRswXzXP2qKUqcyYDYsoqUzwM7qzehYrrDXKLqw.png', '2025-04-30 05:43:46', '2025-05-12 20:06:32', 'Activo: Comida 1:00 PM - 5:00 PM', 'A la carta'),
(9, 'Carnivore', 'Nos enorgullecemos de ofrecer los mejores y más jugosos cortes de carne a la parrilla, cuidadosamente seleccionados para garantizar la máxima calidad y sabor. Cada bocado es una experiencia única, llena de sabores intensos y texturas suculentas que te transportarán al paraíso de la carne.', 'images/FQ33m6BHsvpUma0uPxStsdB3TO7BbO0jGIhNwFVE.png', '2025-04-30 05:45:07', '2025-05-12 18:52:25', 'Inactivo por grupo', 'Bufet'),
(10, 'Mizumi', 'Cada plato en Mizumi es una obra maestra culinaria, cuidadosamente diseñada para deleitar tus sentidos y sorprenderte con sabores únicos. Nuestro talentoso equipo de chefs fusiona lo mejor de la cocina asiática y mexicana, creando combinaciones atrevidas y equilibradas que te transportarán a un viaje culinario sin igual.', 'images/0dARFNzDT0L48fdX4RlzMNRoTPAFBe5aSJEFrphl.png', '2025-04-30 05:46:01', '2025-05-12 18:52:25', 'Activo: Cena 6:00 PM - 12:00 AM', 'A la carta'),
(11, 'Mexkalli', 'Un viaje sensorial a través de los sabores y sonidos de México en Mexkalli. Viva la música en directo de mariachis y ritmos latinos mientras se sumerge en una auténtica experiencia gastronómica y cultural. Conozca una variedad de mezcales, una bebida emblemática de México, Mexkalli es el destino perfecto para disfrutar de una deliciosa gama de especialidades mexicanas en un ambiente regional.', 'images/AFqUxGuAgm5u1LFLd3KTxtnvEf6w9LioHL2jnkm0.png', '2025-04-30 05:48:11', '2025-05-12 18:52:25', 'Activo: Comida 1:00 PM - 5:00 PM', 'Bufet'),
(12, 'A Roma', 'Sumérgete en la auténtica experiencia Italiana en A Roma, donde encontrarás una deliciosa selección de platos clásicos y creativos que te transportarán directo al Mediterráneo. En nuestro ambiente vibrante, acogedor y con una memorabilia única crea el escenario perfecto para disfrutar de momentos especiales con amigos y seres queridos. También vive el Brunch dominical donde experimentarás en cada display los sabores de Palacio Mundo Imperial.', 'images/dIz0ojBg0VunOVpV2qPIwLCgtqy2YFBF5zVYxYDI.png', '2025-04-30 05:49:29', '2025-05-12 18:52:25', 'Activo: Desayuno 7:00 AM - 12:00 AM, Cena 6:00 PM - 12:00 AM', 'A la carta'),
(13, 'Club 89', 'Situado en la octava planta con impresionantes vistas de la zona Diamante, el exclusivo Club 89 Lounge abre sus puertas sólo a los huéspedes alojados en las plantas 8 y 9, así como en las suites de Palacio Mundo Imperial. Aquí podrá disfrutar de una experiencia gastronómica excepcional de canapes y bebidas de la casa.', 'images/UKWUfYXeanuh5Axi5ugu1vzPynaxxfKrSIus11n5.png', '2025-04-30 05:50:46', '2025-05-12 18:52:25', 'Activo: Comida 1:00 PM - 5:00 PM', 'A la carta'),
(14, 'Deli Gourmet', 'Descubra un lugar para deleitar un buen libro, disfrutando alguno de nuestros pastelillos, refrigerios o la gran variedad de café en una atmosfera de total calma.', 'images/ZKcBDRYYsqiUW8ec4SssU25EGvjUCEeYSfHmDA93.png', '2025-04-30 05:51:31', '2025-05-12 18:52:25', 'Activo: Desayuno 7:00 AM - 12:00 AM, Comida 1:00 PM - 5:00 PM, Cena 6:00 PM - 12:00 AM', 'Bufet'),
(15, 'Scala Ocean Club', 'Descansa y relájate en nuestro club de playa, el lugar perfecto de experiencias inolvidables donde podrá deleitarse con excelentes opciones de snack, refrescantes bebidas y música mientras admira los espectaculares atardeceres de Pacifico.', 'images/OK6xqS0anVxvJ1eWk4nmC6DFHVYs43PztbGmUOch.png', '2025-04-30 05:52:29', '2025-05-12 18:52:25', 'Inactivo por grupo', 'A la carta'),
(16, 'Blu Bar', 'Vive la experiencia Azul, en nuestro exclusivo Blu bar donde podrás degustar una variedad de cocteles inigualables y disfrutar de nuestras noches de karaoke en un ambiente de confort y excelente música.', 'images/9wmC9lGIWzjsRi66dTlyaF5AEuxc6VolOWlC4HOC.png', '2025-04-30 05:53:30', '2025-05-12 18:52:25', 'Inactivo por grupo', 'A la carta'),
(17, 'Serenity Bar', 'Sumérjase en una experiencia de relajación absoluta mientras saborea un cóctel hecho a su medida. Disfrute de nuestro exclusivo bar situado en una piscina solo para adultos, donde podrá deleitarse con deliciosas bebidas en un ambiente tranquilo y sofisticado. Viva momentos de autentico confort y disfrute en nuestro oasis junto a la piscina.', 'images/sS55pcuykZl6sJYLcnI44DLuv8vKoDYqS3axe4Tt.png', '2025-04-30 23:43:44', '2025-05-12 18:52:25', 'Inactivo por grupo', 'Bufet'),
(18, 'pruebaimagen', 'basbdjasbdkjabsdk', 'images/U3wcBxXIdaVTi3m143ThR9kjdxpUYpUlvbQoH9oV.jpg', '2025-06-06 21:37:40', '2025-06-06 21:37:40', NULL, NULL),
(19, 'chipilan', 'basbdjasbdkjabsdk', 'images/d53ogNf6Mnv651cTPHWp5u9pJTpb1hBswPPOxxdh.jpg', '2025-06-06 21:41:49', '2025-06-06 21:41:49', NULL, NULL),
(20, 'xcbsbjdcgj', 'Disfrute un desayuno de autentico lujo en nuestro restaurante Marché. Aquí nuestros chef de renombre muestran su talento en una cocina abierta y llena de energía, preparando suntuosos y exquisitos buffets internacionales.', 'images/yg5TOVGnCqO6qVVl2ipyV5aJi8VoPm8d8kcxnGd7.jpg', '2025-06-06 21:44:36', '2025-06-06 21:44:36', NULL, NULL),
(21, 'trilins', 'Disfrute un desayuno de autentico lujo en nuestro restaurante Marché. Aquí nuestros chef de renombre muestran su talento en una cocina abierta y llena de energía, preparando suntuosos y exquisitos buffets internacionales.', 'images/aGYiivqyKGpG29DV8nR0zbVA6KJzJ9GYslw50IAe.jpg', '2025-06-06 21:46:36', '2025-06-06 21:46:36', NULL, NULL),
(22, 'yutguh', 'Disfrute un desayuno de autentico lujo en nuestro restaurante Marché. Aquí nuestros chef de renombre muestran su talento en una cocina abierta y llena de energía, preparando suntuosos y exquisitos buffets internacionales.', 'images/mXUM1GCLE1tNY5rT4zT7NPubS3XivYkGXiy0FV5D.jpg', '2025-06-06 21:51:08', '2025-06-06 21:51:08', NULL, NULL),
(23, 'yutguhasdasd', 'Disfrute un desayuno de autentico lujo en nuestro restaurante Marché. Aquí nuestros chef de renombre muestran su talento en una cocina abierta y llena de energía, preparando suntuosos y exquisitos buffets internacionales.', 'images/s4Lv2tQEm3LS5yek3ABnuBO54eovSuk6lfmh4Oir.jpg', '2025-06-06 21:52:54', '2025-06-06 21:52:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `permisos` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indices de la tabla `reservacions`
--
ALTER TABLE `reservacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurante_restaurante_id_reservacion` (`id_reservacion`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservacions`
--
ALTER TABLE `reservacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurantes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reservacions`
--
ALTER TABLE `reservacions`
  ADD CONSTRAINT `restaurante_restaurante_id_reservacion` FOREIGN KEY (`id_reservacion`) REFERENCES `restaurantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
