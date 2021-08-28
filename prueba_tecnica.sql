-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2021 a las 00:42:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_tecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `users_id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pedro Gongora Villanueva', '928039404', 'admin@demo.com', '2021-08-29 01:18:58', '2021-08-29 01:18:58'),
(2, 1, 'Angel Reyes Perez', '823923829', 'hola@gmail.com', '2021-08-29 01:19:11', '2021-08-29 01:19:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insureds`
--

CREATE TABLE `insureds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `insureds`
--

INSERT INTO `insureds` (`id`, `name`, `year`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Jaylin Jones PhD', 75, '2021-08-29 01:17:52', '2021-08-29 01:17:52'),
(2, 'Ms. Kelsie Gibson', 63, '2021-08-29 01:17:52', '2021-08-29 01:17:52'),
(3, 'Leora Lueilwitz', 78, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(4, 'Ms. Astrid Reinger II', 26, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(5, 'Daphney Hilpert', 31, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(6, 'Cristian Hirthe', 10, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(7, 'Andres Stanton', 50, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(8, 'Prof. Julian Koelpin MD', 53, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(9, 'Vella Vandervort', 96, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(10, 'Jared Kunze', 76, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(11, 'Clyde Beier MD', 87, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(12, 'Rhiannon Marks', 38, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(13, 'Jabari Feil MD', 71, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(14, 'Gudrun Klocko', 29, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(15, 'Devan Weimann Sr.', 23, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(16, 'Kristin Lindgren', 63, '2021-08-29 01:17:53', '2021-08-29 01:17:53'),
(17, 'Meagan Greenholt MD', 92, '2021-08-29 01:17:53', '2021-08-29 01:17:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_agente_table', 1),
(42, '2014_10_12_000000_create_users_table', 2),
(43, '2014_10_12_100000_create_password_resets_table', 2),
(44, '2019_08_19_000000_create_failed_jobs_table', 2),
(45, '2021_08_26_181849_create_customers_table', 2),
(46, '2021_08_27_152213_create_insureds_table', 2),
(47, '2021_08_27_172355_create_policies_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `num_poliza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `customers_id` bigint(20) UNSIGNED NOT NULL,
  `insureds_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aseguradora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_poliza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `policies`
--

INSERT INTO `policies` (`id`, `users_id`, `num_poliza`, `fecha_inicio`, `fecha_final`, `customers_id`, `insureds_id`, `aseguradora`, `tipo_poliza`, `precio`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '1457854', '2021-08-02', '2021-08-03', 2, 'Leora Lueilwitz,Ms. Astrid Reinger II,Daphney Hilpert', 'Seguro Dorado', '0', '400', 0, '2021-08-29 02:34:12', '2021-08-29 03:42:04'),
(2, 1, '8293394', '2021-08-02', '2021-08-13', 1, 'Ms. Astrid Reinger II,Cristian Hirthe,Andres Stanton', 'ljflsf', '1', '600', 1, '2021-08-29 03:41:02', '2021-08-29 03:41:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Antony Rebolledo Matus', 'admin@dev.com', NULL, '$2y$10$aEpFskuzPwpQhfwCFvENt.GvNRsD2dX80K0YQKwAHuI8AtNIykKi6', NULL, '2021-08-29 01:18:35', '2021-08-29 01:18:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_users_id_foreign` (`users_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insureds`
--
ALTER TABLE `insureds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `policies_users_id_foreign` (`users_id`),
  ADD KEY `policies_customers_id_foreign` (`customers_id`);

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
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `insureds`
--
ALTER TABLE `insureds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `policies`
--
ALTER TABLE `policies`
  ADD CONSTRAINT `policies_customers_id_foreign` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `policies_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
