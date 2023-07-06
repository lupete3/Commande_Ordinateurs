-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 sep. 2022 à 16:59
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vente`
--
CREATE DATABASE IF NOT EXISTS `vente` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vente`;

-- --------------------------------------------------------

--
-- Structure de la table `approv`
--

CREATE TABLE `approv` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `date_approv` date NOT NULL,
  `nom_four` varchar(255) DEFAULT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `approv`
--

INSERT INTO `approv` (`id`, `quantite`, `prix`, `date_approv`, `nom_four`, `id_prod`) VALUES
(2, 2, '1', '2022-09-02', 'HOME', 8),
(3, 1, '140', '2022-09-04', 'MOUJ', 3),
(4, 2, '120', '2022-09-04', 'SUPPREME', 9),
(5, 1, '200', '2022-09-05', 'MOUJ', 14),
(6, 2, '200', '2022-09-06', 'MOUJ', 14),
(7, 2, '120', '2022-09-15', 'SUPPREMEE', 8),
(8, 1, '35', '2022-09-15', 'GAZA', 27),
(9, 1, '200', '2022-09-17', 'MOUJ', 14),
(10, 1, '200', '2022-09-17', '', 31),
(11, 2, '200', '2022-09-17', '', 32),
(12, 1, '150', '2022-09-17', '', 33),
(13, 1, '200', '2022-09-17', '', 34),
(14, 2, '200', '2022-09-17', '', 35),
(15, 2, '120', '2022-09-17', '', 8),
(16, 1, '200', '2022-09-17', '', 14),
(17, 1, '100', '2022-09-18', '', 36),
(18, 1, '200', '2022-09-18', '', 31),
(19, 3, '120', '2022-09-19', '', 8),
(20, 1, '200', '2022-09-20', '', 19),
(21, 1, '120', '2022-09-20', '', 8),
(22, 2, '200', '2022-09-20', '', 32),
(23, 2, '200', '2022-09-20', '', 14),
(24, 2, '200', '2022-09-20', '', 34),
(25, 1, '180', '2022-09-20', '', 5),
(26, 1, '200', '2022-09-21', '', 43);

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `detail`, `description`, `image`, `date_pub`, `id_admin`) VALUES
(1, 'FASHION NOW', 'Fifth abundantly made Give sixth hath. Cattle creature i be don\'t them behold green moved fowl Moved life us beast good yielding. Have bring.', '<p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: 700;\">Pellentesque habitant morbi tristique</span>&nbsp;senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.&nbsp;<i>Aenean ultricies mi vitae est.</i>&nbsp;Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,&nbsp;<code style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 12.6px; color: rgb(232, 62, 140); overflow-wrap: break-word; border-radius: 0px;\">commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.&nbsp;<a href=\"http://localhost/2022-ecommerce/blog-post.html#\" style=\"color: rgb(79, 191, 168); text-decoration-line: none; display: inline-block; transition: all 0.3s ease 0s !important;\">Donec non enim</a>&nbsp;in turpis pulvinar facilisis. Ut felis.</p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog2.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><h2 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.8rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 2</h2><ol style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ol><blockquote class=\"blockquote\" style=\"margin-bottom: 2rem; font-size: 16px; padding: 0.5rem 1rem; border-left: 5px solid rgb(79, 191, 168); color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote><h3 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.5rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 3</h3><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p><ul style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ul><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>', 'New_Center.jpg', '2022-08-05 12:44:50', 1),
(2, 'WHAT TO DO', 'Fifth abundantly made Give sixth hath. Cattle creature i be don\'t them behold green moved fowl Moved life us beast good yielding. Have bring.', '<p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: 700;\">Pellentesque habitant morbi tristique</span>&nbsp;senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.&nbsp;<i>Aenean ultricies mi vitae est.</i>&nbsp;Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,&nbsp;<code style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 12.6px; color: rgb(232, 62, 140); overflow-wrap: break-word; border-radius: 0px;\">commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.&nbsp;<a href=\"http://localhost/2022-ecommerce/blog-post.html#\" style=\"color: rgb(79, 191, 168); text-decoration-line: none; display: inline-block; transition: all 0.3s ease 0s !important;\">Donec non enim</a>&nbsp;in turpis pulvinar facilisis. Ut felis.</p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog2.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><h2 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.8rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 2</h2><ol style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ol><blockquote class=\"blockquote\" style=\"margin-bottom: 2rem; font-size: 16px; padding: 0.5rem 1rem; border-left: 5px solid rgb(79, 191, 168); color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote><h3 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.5rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 3</h3><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p><ul style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ul><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>', '103807453.jpg', '2022-08-05 12:47:28', 1),
(3, '5 WAYS TO LOOK AWESOME', 'Fifth abundantly made Give sixth hath. Cattle creature i be don\'t them behold green moved fowl Moved life us beast good yielding. Have bring.', '<p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: 700;\">Pellentesque habitant morbi tristique</span>&nbsp;senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.&nbsp;<i>Aenean ultricies mi vitae est.</i>&nbsp;Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,&nbsp;<code style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 12.6px; color: rgb(232, 62, 140); overflow-wrap: break-word; border-radius: 0px;\">commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.&nbsp;<a href=\"http://localhost/2022-ecommerce/blog-post.html#\" style=\"color: rgb(79, 191, 168); text-decoration-line: none; display: inline-block; transition: all 0.3s ease 0s !important;\">Donec non enim</a>&nbsp;in turpis pulvinar facilisis. Ut felis.</p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog2.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><h2 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.8rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 2</h2><ol style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ol><blockquote class=\"blockquote\" style=\"margin-bottom: 2rem; font-size: 16px; padding: 0.5rem 1rem; border-left: 5px solid rgb(79, 191, 168); color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote><h3 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.5rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 3</h3><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p><ul style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ul><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>', '352846646.jpg', '2022-08-05 12:49:34', 1),
(4, 'COMMENT ACTIVER WINDOWS 11', 'Fifth abundantly made Give sixth hath. Cattle creature i be don\'t them behold green moved fowl Moved life us beast good yielding. Have bring.', '<p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: 700;\">Pellentesque habitant morbi tristique</span>&nbsp;senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.&nbsp;<i>Aenean ultricies mi vitae est.</i>&nbsp;Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,&nbsp;<code style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 12.6px; color: rgb(232, 62, 140); overflow-wrap: break-word; border-radius: 0px;\">commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.&nbsp;<a href=\"http://localhost/2022-ecommerce/blog-post.html#\" style=\"color: rgb(79, 191, 168); text-decoration-line: none; display: inline-block; transition: all 0.3s ease 0s !important;\">Donec non enim</a>&nbsp;in turpis pulvinar facilisis. Ut felis.</p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog2.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><h2 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.8rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 2</h2><ol style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ol><blockquote class=\"blockquote\" style=\"margin-bottom: 2rem; font-size: 16px; padding: 0.5rem 1rem; border-left: 5px solid rgb(79, 191, 168); color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote><h3 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.5rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 3</h3><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p><ul style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ul><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>', '12186799.jpg', '2022-08-05 12:50:45', 1),
(5, 'COMMENT FAIRE', 'Fifth abundantly made Give sixth hath. Cattle creature i be don\'t them behold green moved fowl Moved life us beast good yielding. Have bring.', '<p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: 700;\">Pellentesque habitant morbi tristique</span>&nbsp;senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.&nbsp;<i>Aenean ultricies mi vitae est.</i>&nbsp;Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,&nbsp;<code style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 12.6px; color: rgb(232, 62, 140); overflow-wrap: break-word; border-radius: 0px;\">commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.&nbsp;<a href=\"http://localhost/2022-ecommerce/blog-post.html#\" style=\"color: rgb(79, 191, 168); text-decoration-line: none; display: inline-block; transition: all 0.3s ease 0s !important;\">Donec non enim</a>&nbsp;in turpis pulvinar facilisis. Ut felis.</p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog2.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><h2 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.8rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 2</h2><ol style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ol><blockquote class=\"blockquote\" style=\"margin-bottom: 2rem; font-size: 16px; padding: 0.5rem 1rem; border-left: 5px solid rgb(79, 191, 168); color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote><h3 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.5rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 3</h3><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p><ul style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ul><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>', '1682947280.jpg', '2022-08-05 12:52:36', 1),
(6, 'WHAT TO DO', 'Fifth abundantly made Give sixth hath. Cattle creature i be don\'t them behold green moved fowl Moved life us beast good yielding. Have bring.', '<p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><span style=\"font-weight: 700;\">Pellentesque habitant morbi tristique</span>&nbsp;senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.&nbsp;<i>Aenean ultricies mi vitae est.</i>&nbsp;Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed,&nbsp;<code style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 12.6px; color: rgb(232, 62, 140); overflow-wrap: break-word; border-radius: 0px;\">commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.&nbsp;<a href=\"http://localhost/2022-ecommerce/blog-post.html#\" style=\"color: rgb(79, 191, 168); text-decoration-line: none; display: inline-block; transition: all 0.3s ease 0s !important;\">Donec non enim</a>&nbsp;in turpis pulvinar facilisis. Ut felis.</p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog2.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><h2 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.8rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 2</h2><ol style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ol><blockquote class=\"blockquote\" style=\"margin-bottom: 2rem; font-size: 16px; padding: 0.5rem 1rem; border-left: 5px solid rgb(79, 191, 168); color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif;\"><p class=\"text-sm\" style=\"margin-bottom: 1rem; font-size: 0.9rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote><h3 style=\"margin-bottom: 1rem; font-weight: 700; line-height: 1.1; font-size: 1.5rem; font-family: Roboto, Helvetica, Arial, sans-serif; color: rgb(33, 37, 41);\">Header Level 3</h3><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p><ul style=\"color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ul><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\"><img src=\"http://localhost/2022-ecommerce/img/blog.jpg\" alt=\"Example blog post alt\" class=\"img-fluid\"></p><p style=\"margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 16px;\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>', '1543202970.jpg', '2022-08-05 12:53:30', 1);

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `prix_produit` decimal(10,0) NOT NULL,
  `qte_produit` int(11) NOT NULL,
  `img_produit` varchar(255) NOT NULL,
  `prix_tot` decimal(10,0) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `nom_produit`, `prix_produit`, `qte_produit`, `img_produit`, `prix_tot`, `id_produit`, `etat`, `ip`) VALUES
(30, 'Elite Book x 360', '70', 1, '925793215.jfif', '70', 9, 1, '192.168.133.142'),
(31, 'HP Elite Book 1', '255', 1, '1542995302.jfif', '255', 1, 1, '192.168.133.142'),
(44, 'LENOVO', '250', 1, '396471227.jfif', '250', 4, 1, '::1'),
(45, 'TOSHIBA', '200', 1, '493441676.jfif', '200', 5, 1, '::1'),
(47, 'Test7', '20', 1, '1833565973.jfif', '20', 16, 1, '192.168.48.142'),
(48, 'Test prod', '9', 1, '1875874516.jfif', '9', 22, 1, '192.168.48.142'),
(49, 'LENOVO', '250', 1, '396471227.jfif', '250', 4, 1, '192.168.48.63'),
(50, 'LENOVO', '250', 1, '396471227.jfif', '250', 4, 1, '192.168.48.142'),
(51, 'Lecteur pour disques', '10', 1, '1336675117.jpg', '10', 24, 1, '::1'),
(52, 'DE V131', '30', 1, '117372897.jpg', '30', 15, 1, '::1');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `detail`) VALUES
(12, 'ORDINATEURS PORTABLES', 'Computers'),
(13, 'BATTERIE', 'Batterie pour laptop'),
(15, 'ACCESSOIRES', 'Accessoires'),
(16, 'TELEPHONE', 'Smart Phone'),
(17, 'TABLETTE', 'Téléphones tablettes'),
(18, 'Services', 'Des services qu\'offre l\'Ets a part la vente');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom_client` varchar(100) NOT NULL,
  `email_client` varchar(255) DEFAULT NULL,
  `telephone_client` varchar(20) NOT NULL,
  `avenue` varchar(255) NOT NULL,
  `quartier` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `code_postal` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `date_enreg` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom_client`, `email_client`, `telephone_client`, `avenue`, `quartier`, `commune`, `ville`, `province`, `pays`, `code_postal`, `avatar`, `password`, `date_enreg`) VALUES
(3, 'Antoine Bulyalugo', NULL, '0999999999', 'Collège Alfajiri', 'Nyalukemba', 'Ibanda', 'Bukavu', NULL, NULL, NULL, NULL, '$2y$10$H3WNwf4RuOzXrxqwWk3KIeCslqhOpKAcKNbTT8S5ZwC8Y5wUC0Qoa', '2022-06-11 22:15:50'),
(4, 'Matat Mponyo', NULL, '0888888888', 'Kimengele', 'Mosala', 'Gombe', 'Kinshasa', NULL, NULL, NULL, NULL, '$2y$10$O.2PR9fpkIfyFUw5nIWW3O8PD8dWD0zwSdxlZQdsWgtr0KQr8RH0O', '2022-07-07 16:10:43'),
(5, 'Marceline Bossa', NULL, '0777777777', 'Majeno', 'Goma', 'Goma', 'Goma', NULL, NULL, NULL, NULL, '$2y$10$XZcQ/NDIXUe1RRVAtOSReuxTDKy6zT.O8ox3rPrJt91By0RS05vPq', '2022-07-07 16:12:25'),
(6, 'JOSEPHAT', NULL, '987945795789', 'MATONGE', 'NDENDERE', 'IBANDA', 'BUKAVU', NULL, NULL, NULL, NULL, '$2y$10$lVfePYWKPDtiiczKAxyEu.QIkxvOLviu2s8zbcqiSDpqgzs6WgAIW', '2022-09-06 08:27:14');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `postnom` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `postnom`, `email`, `objet`, `message`, `date_pub`) VALUES
(1, 'Polo', 'Malolo', 'test]gmail.com', 'Test', 'Test Mail', '2022-08-01 13:18:41'),
(2, 'Serge ', 'Blaise', 'blaise@gmail.com', 'Test2', 'Test m', '2022-08-01 13:18:41'),
(3, 'Sifa', 'Jean', 'sifa.gean@gmail.com', 'Sifa Test', 'je test votre plateforme', '2022-08-01 13:18:41'),
(4, 'Mao', 'Fundi', 'mao@gmail.com', 'Message', 'Superbe plateforme New Technology Center', '2022-08-01 13:18:41');

-- --------------------------------------------------------

--
-- Structure de la table `creance`
--

CREATE TABLE `creance` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(255) NOT NULL,
  `montant` double NOT NULL,
  `date_credit` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_paye_estim` date NOT NULL,
  `observation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `creance`
--

INSERT INTO `creance` (`id`, `nom_complet`, `montant`, `date_credit`, `date_paye_estim`, `observation`) VALUES
(1, 'Antoine Bulyalugo', 10, '2022-09-19 23:15:57', '2022-09-30', ' Dette Souris Dell'),
(2, 'Placide', 90, '2022-09-19 23:16:34', '2022-10-09', ' test app');

-- --------------------------------------------------------

--
-- Structure de la table `entree_stock_maison`
--

CREATE TABLE `entree_stock_maison` (
  `id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `prix_achat` decimal(10,0) NOT NULL,
  `fournisseur` varchar(255) NOT NULL,
  `date_entree` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entree_stock_maison`
--

INSERT INTO `entree_stock_maison` (`id`, `qte`, `prix_achat`, `fournisseur`, `date_entree`, `id_produit`) VALUES
(1, 11, '200', 'NEW MOUJ', '2022-09-04 11:18:10', 1),
(2, 7, '140', 'MOUJ', '2022-09-04 11:18:31', 5),
(3, 4, '150', 'MOUJ', '2022-09-04 11:28:02', 6),
(4, 5, '150', 'MOUJ', '2022-09-04 11:28:39', 7),
(5, 2, '100', 'SUPPREME', '2022-09-04 11:29:15', 3),
(6, 4, '180', 'MOUJ', '2022-09-04 11:32:12', 4),
(7, 82, '100', 'SUPPREME', '2022-09-04 11:38:28', 2),
(8, 6, '200', 'NEW MOUJ AL BAHIR', '2022-09-14 09:25:47', 8),
(10, 1, '250', 'LUKMAN', '2022-09-14 09:28:51', 10),
(11, 2, '200', 'LUKMAN', '2022-09-14 09:29:15', 11),
(12, 1, '150', 'LUKMAN', '2022-09-14 09:29:48', 13),
(13, 4, '200', 'LUKMAN', '2022-09-14 09:30:17', 14),
(14, 4, '200', 'LUKMAN', '2022-09-14 09:31:01', 15);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `adresse`, `contact_phone`, `contact_email`, `logo`) VALUES
(1, 'New Technology Center', 'Av Kibombo Q. Ndendere C. Ibanda V. Bukavu', '+243912345678', 'info@newtech.com', '1712037152.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `id_cli` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_cli`, `id_pro`) VALUES
(9, 4, 4),
(11, 4, 16),
(13, 3, 18),
(14, 3, 10),
(15, 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `gerant`
--

CREATE TABLE `gerant` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gerant`
--

INSERT INTO `gerant` (`id`, `nom_complet`, `email`, `telephone`, `login`, `password`, `type`) VALUES
(1, 'Frank', 'admin@ntc.com', '0987654321', 'admin', 'admin', 'Admin'),
(2, 'Sys', 'gerant@ntc.com', '0987654321', 'gerant', 'gerant', 'Gérant');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `date_panier` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantite` int(11) NOT NULL,
  `prix_vente` decimal(10,0) NOT NULL,
  `prix_tot` decimal(10,0) NOT NULL,
  `adresse_livraison` varchar(255) NOT NULL,
  `nom_livreur` varchar(50) DEFAULT NULL,
  `remise` decimal(10,0) DEFAULT NULL,
  `telephone_monney` varchar(20) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `designation` varchar(244) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `quantite` int(10) NOT NULL,
  `disponible` varchar(10) NOT NULL,
  `image` text DEFAULT NULL,
  `id_cat` int(11) NOT NULL,
  `date_ajout` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `designation`, `description`, `prix`, `quantite`, `disponible`, `image`, `id_cat`, `date_ajout`) VALUES
(2, 'DELL 3350', '500GB 4RAM ', '150', 2, 'Oui', '1310798991.jpg', 12, '2022-09-02'),
(3, 'DELL 3150', '500GB 4RAM et double processeur 4h Battery', '150', 0, 'Oui', '1777837918.jpg', 12, '2022-09-02'),
(4, 'LENOVO E430C', '320GB 4RAM', '180', 1, 'Oui', '346582485.jpg', 12, '2022-09-02'),
(5, 'LENOVO EDGE', '500GB 4RAM', '180', 2, 'Oui', '1211603079.jpg', 12, '2022-09-02'),
(6, 'LEN T430s', '1TERA', '300', 1, 'Oui', '1361343686.jpg', 12, '2022-09-02'),
(7, 'HP PROBOOK', '320GB', '130', 0, 'Oui', '768584190.jpg', 12, '2022-09-02'),
(8, 'ACER Mini V5', '320GB 4RAM DOUBLE PROCESSEUR 4H', '120', 3, 'Oui', '1754120423.jpg', 12, '2022-09-02'),
(9, 'ASUS MINI', '320GB 4RAM', '120', 2, 'Oui', '1935694821.jpg', 12, '2022-09-02'),
(12, 'MacBook Pro', '720GB 4RAM', '300', 1, 'Oui', '1281425084.jpg', 12, '2022-09-02'),
(14, 'HP 820 g1', '500GB 4RAM i5 CLAVIER LUMINEUX', '250', 2, 'Oui', '522703324.jpg', 12, '2022-09-03'),
(15, 'DE V131', 'Pour DELL VOSTRO V131, V131R V131D 268X5<p>DELL Vostro Inspirons 13Z</p>', '30', 2, 'Oui', '117372897.jpg', 13, '2022-09-04'),
(16, 'HP 8440p', 'HSTNN-UB68, HSTNN-144C-BM, HSTNN-W42C-A, W42C-B pour HP8440P&nbsp;', '30', 0, 'Oui', '913711614.jpg', 13, '2022-09-04'),
(17, 'HP 4530s', 'HSTNN-CB1B,&nbsp; pour HP4530s&nbsp;', '30', 1, 'Oui', '1634638118.jpg', 13, '2022-09-04'),
(18, 'HP 4230s', 'Pour HP4230s&nbsp;', '30', 1, 'Oui', '230581268.jpg', 13, '2022-09-04'),
(19, 'HP 2560p', 'Pour HP2560p ', '30', 1, 'Oui', '1990717513.jpg', 13, '2022-09-04'),
(20, 'AC 765', '', '30', 3, 'Oui', '976631970.jpg', 13, '2022-09-04'),
(21, 'AC E5', 'Pour ACER', '30', 1, 'Oui', '1068380967.jpg', 13, '2022-09-04'),
(22, 'TO 3788', 'Pour TOSHIBA', '30', 1, 'Oui', '9224346.jpg', 13, '2022-09-04'),
(23, 'DE E4300', 'Pour DELL', '30', 2, 'Oui', '1829964347.jpg', 13, '2022-09-04'),
(24, 'Lecteur pour disques', 'Lecteur pour disque dur surtout pour les HP', '10', 5, 'Oui', '1336675117.jpg', 15, '2022-09-06'),
(25, 'LOB480LH', 'Batterie pour lenovo E', '30', 0, 'Oui', '1383694440.jpg', 13, '2022-09-14'),
(26, 'HPP 9470M', 'Batterie pour HP Folio', '50', 1, 'Oui', '1062296548.jpg', 13, '2022-09-14'),
(27, 'HPP PIO6', 'Batterie pour HPP PI06', '35', 1, 'Oui', '386946531.jpg', 13, '2022-09-14'),
(28, 'HPP CQ62', 'Pour HP 2000', '30', 1, 'Oui', '151472279.jpg', 13, '2022-09-14'),
(29, 'HPP HS04', 'Batterie HP Pour HP', '30', 1, 'Oui', '650221730.jpg', 13, '2022-09-14'),
(30, 'HPP RI04', '', '30', 1, 'Oui', '748645793.jpg', 13, '2022-09-14'),
(31, 'Lenovo T43ou', 'ok', '200', 1, 'Oui', '2019914145.jpg', 12, '2022-09-17'),
(32, 'DELL Latitude 3380', 'OK', '200', 2, 'Oui', '2128050580.jpg', 12, '2022-09-17'),
(33, 'HP streambook', '', '150', 1, 'Oui', '1460379209.jpg', 12, '2022-09-17'),
(34, 'Toshiba R700', 'OK', '200', 2, 'Oui', '854846078.jpg', 12, '2022-09-17'),
(35, 'Toshiba Z', '', '200', 1, 'Oui', '1103932104.jpg', 12, '2022-09-17'),
(36, 'HPmini 1101', 'OK', '100', 1, 'Oui', '1582059749.jpg', 12, '2022-09-18'),
(37, 'Lenovo tablette m5', 'OK', '250', 1, 'Oui', '670310730.jpg', 12, '2022-09-18'),
(38, 'iPhone SE 2020', 'ok', '180', 1, 'Oui', '4105067.jpg', 16, '2022-09-18'),
(39, 'Protection Dell 3150', 'Une protection d\'ecran pour Le laptop', '10', 3, 'Oui', '21806398.jpg', 15, '2022-09-19'),
(40, 'Clavier sans fil', 'Clavier sans til et pavé numerique', '25', 2, 'Oui', '2009428662.jpg', 15, '2022-09-19'),
(41, 'clavier iPad', 'Clavier pour ipad', '20', 1, 'Oui', '255612544.jpg', 15, '2022-09-19'),
(43, 'HP EliteBook 2560p', '500Gb 4ram double processeur i5', '200', 1, 'Oui', '1681095562.jpg', 12, '2022-09-21');

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

CREATE TABLE `publicite` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`id`, `titre`, `detail`, `image`) VALUES
(1, 'Multipurpose responsive theme ', 'Business. Corporate. Agency.<p>Portfolio. Blog. E-commerce.</p>', 'template-homepage.png'),
(2, '46 HTML pages full of features', 'Sliders and carousels 4 Header variations Google maps,&nbsp;<p>Forms, Megamenu, CSS3 Animations and much more&nbsp;</p><p>+ 11 extra pages showing template features</p>', 'template-mac.png'),
(3, 'Design', 'Profiter des derniers solde de ce mois\r\nFull width and boxed mode\r\nEasily readable Roboto font and awesome icons\r\n7 preprepared colour variations', 'template-easy-customize.png'),
(4, 'Easy to customize', '7 preprepared colour variations.\r\nEasily to change fonts', 'template-easy-code.png');

-- --------------------------------------------------------

--
-- Structure de la table `sortie_stock_maison`
--

CREATE TABLE `sortie_stock_maison` (
  `id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `date_sortie` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sortie_stock_maison`
--

INSERT INTO `sortie_stock_maison` (`id`, `qte`, `date_sortie`, `id_produit`) VALUES
(1, 1, '2022-09-04 13:10:09', 5),
(2, 2, '2022-09-04 13:10:16', 3),
(3, 1, '2022-09-05 07:29:10', 1),
(4, 2, '2022-09-06 06:54:50', 1),
(5, 2, '2022-09-15 07:20:18', 2),
(6, 2, '2022-09-15 07:20:42', 8),
(7, 1, '2022-09-15 07:28:01', 13),
(8, 1, '2022-09-15 07:32:28', 16),
(9, 2, '2022-09-15 11:41:30', 15),
(10, 1, '2022-09-15 11:42:22', 14),
(11, 1, '2022-09-17 07:58:52', 1),
(12, 1, '2022-09-19 00:36:16', 10),
(13, 3, '2022-09-19 16:26:37', 2),
(14, 1, '2022-09-20 14:22:31', 11),
(15, 1, '2022-09-20 14:24:27', 2),
(16, 2, '2022-09-20 14:25:13', 8),
(17, 2, '2022-09-20 14:26:25', 1),
(18, 2, '2022-09-20 14:27:26', 16),
(19, 1, '2022-09-20 14:28:51', 7);

-- --------------------------------------------------------

--
-- Structure de la table `stock_maison`
--

CREATE TABLE `stock_maison` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `date_entree` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stock_maison`
--

INSERT INTO `stock_maison` (`id`, `libelle`, `stock`, `date_entree`) VALUES
(1, 'HP 820 g1', 5, '2022-09-02 08:42:51'),
(2, 'ACER Mini', 76, '2022-09-03 22:45:17'),
(3, 'ASUS Mini', 0, '2022-09-03 22:45:31'),
(4, 'DELL LATITUDE 3350', 4, '2022-09-03 22:46:02'),
(5, 'DELL LATITUDE 3150', 6, '2022-09-03 22:46:18'),
(6, 'LENOVO E430C', 4, '2022-09-03 22:46:57'),
(7, 'LENOVO EDGE', 4, '2022-09-03 22:47:30'),
(8, 'DELL Latitude 3380 i3', 2, '2022-09-14 08:35:45'),
(10, 'LENOVO MT m-5 Tablette', 0, '2022-09-14 08:51:18'),
(11, 'HP2560p i5', 1, '2022-09-14 09:13:36'),
(12, 'HP2560p i7', 0, '2022-09-14 09:14:00'),
(13, 'STREMBOOK', 0, '2022-09-14 09:14:19'),
(14, 'LENOVO T430u', 3, '2022-09-14 09:22:56'),
(15, 'TOSHIBA ZBOOK i5', 2, '2022-09-14 09:23:39'),
(16, 'TOSHIBA R700 i3', 10, '2022-09-15 07:31:08');

-- --------------------------------------------------------

--
-- Structure de la table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_sous` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `date_sous`) VALUES
(1, 'test@gmail.com', '2022-08-03 23:33:52'),
(2, 'franck@gmail.com', '2022-08-03 23:34:16');

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `nom`, `fonction`, `message`, `image`, `date_pub`) VALUES
(1, 'John McIntyre', 'CEO, TransTech', 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.', '1047026831.jpg', '2022-08-05 08:48:53'),
(2, 'John McIntyre', 'CEO, TransTech', 'The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me? \" he thought. It wasn\'t a dream.', 'avatar.png', '2022-08-05 08:53:35'),
(3, 'John McIntyre', 'CEO, TransTech', 'The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me? \" he thought. It wasn\'t a dream.', 'avatar.png', '2022-08-05 08:56:35'),
(4, 'Lupete Placide', 'CEO Kivu Freelance', 'The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me? \" he thought. It wasn\'t a dream.', '790868471.jpg', '2022-08-05 08:57:40'),
(5, 'Antoine Bulyalugo', 'Compable CADECO', 'The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me? \" he thought. It wasn\'t a dream.', '44697953.jpg', '2022-08-05 08:58:18'),
(6, 'Polo Nkuna', 'CEO Navaga', 'The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. \"What\'s happened to me? \" he thought. It wasn\'t a dream.', '1590217909.jpg', '2022-08-05 08:58:56');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `paye_mode` varchar(255) NOT NULL,
  `produits` text NOT NULL,
  `prix_total` decimal(10,0) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `date_vente` timestamp NOT NULL DEFAULT current_timestamp(),
  `livraison` varchar(25) NOT NULL,
  `num_transaction` varchar(255) DEFAULT NULL,
  `id_cli` int(11) NOT NULL,
  `remise` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`id`, `nom`, `email`, `phone`, `paye_mode`, `produits`, `prix_total`, `adresse`, `date_vente`, `livraison`, `num_transaction`, `id_cli`, `remise`) VALUES
(1, 'JOSEPHAT', '', '987945795789', 'Livraison', 'LENOVO(1), Lecteur pour disques(1), DE V131(1)', '290', 'MATONGE NDENDERE IBANDA BUKAVU', '2022-09-06 08:28:22', 'livre', NULL, 6, '0');

-- --------------------------------------------------------

--
-- Structure de la table `vente_admin`
--

CREATE TABLE `vente_admin` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `date_vente` date NOT NULL,
  `id_prod` int(11) NOT NULL,
  `client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vente_admin`
--

INSERT INTO `vente_admin` (`id`, `quantite`, `prix`, `date_vente`, `id_prod`, `client`) VALUES
(1, 1, '115', '2022-09-02', 8, 'CHRISTIAN'),
(2, 1, '140', '2022-09-02', 3, 'AMANI BASHONGA'),
(3, 1, '145', '2022-09-04', 3, 'X'),
(4, 1, '190', '2022-09-06', 14, 'SERGE GADAS'),
(5, 1, '190', '2022-09-06', 14, 'SEBASTIEN'),
(7, 1, '180', '2022-09-15', 2, 'BOSCO'),
(8, 1, '115', '2022-09-15', 8, 'AUDRY'),
(9, 1, '100', '2022-09-15', 8, 'CHRISTIAN BARH'),
(10, 1, '160', '2022-09-15', 5, 'X'),
(11, 2, '10', '2022-09-15', 24, 'FISTON'),
(12, 1, '30', '2022-09-15', 27, 'JULIENNE'),
(13, 1, '120', '2022-09-15', 8, 'X'),
(14, 1, '25', '2022-09-16', 25, 'OXO'),
(15, 1, '180', '2022-09-16', 14, 'RAIS M'),
(16, 1, '110', '2022-09-18', 9, 'HONORE KQUPI'),
(17, 1, '200', '2022-09-18', 32, 'KYANGA M'),
(18, 1, '180', '2022-09-18', 14, 'RAIS M'),
(19, 1, '215', '2022-09-18', 31, 'ROSINE'),
(20, 3, '300', '2022-09-18', 8, 'X'),
(21, 1, '115', '2022-09-18', 7, 'ELONGA'),
(22, 1, '110', '2022-09-19', 8, 'ALPHA'),
(23, 1, '100', '2022-09-19', 8, 'AMISI'),
(24, 1, '200', '2022-09-19', 14, 'David GADAS'),
(25, 1, '100', '2022-09-20', 8, 'ROBERT'),
(26, 1, '200', '2022-09-20', 16, 'LUCAS'),
(27, 1, '200', '2022-09-20', 14, 'LUCAS BASHENGEZI'),
(28, 1, '135', '2022-09-21', 3, 'Lushinga'),
(29, 1, '190', '2022-09-21', 35, 'LEBON'),
(30, 1, '140', '2022-09-21', 3, 'AHADI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `approv`
--
ALTER TABLE `approv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `creance`
--
ALTER TABLE `creance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entree_stock_maison`
--
ALTER TABLE `entree_stock_maison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cli` (`id_cli`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Index pour la table `gerant`
--
ALTER TABLE `gerant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panier_ibfk_1` (`id_produit`),
  ADD KEY `panier_ibfk_2` (`id_client`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Index pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sortie_stock_maison`
--
ALTER TABLE `sortie_stock_maison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `stock_maison`
--
ALTER TABLE `stock_maison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Index pour la table `vente_admin`
--
ALTER TABLE `vente_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod` (`id_prod`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `approv`
--
ALTER TABLE `approv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `creance`
--
ALTER TABLE `creance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `entree_stock_maison`
--
ALTER TABLE `entree_stock_maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `gerant`
--
ALTER TABLE `gerant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sortie_stock_maison`
--
ALTER TABLE `sortie_stock_maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `stock_maison`
--
ALTER TABLE `stock_maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vente_admin`
--
ALTER TABLE `vente_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `approv`
--
ALTER TABLE `approv`
  ADD CONSTRAINT `approv_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `gerant` (`id`);

--
-- Contraintes pour la table `entree_stock_maison`
--
ALTER TABLE `entree_stock_maison`
  ADD CONSTRAINT `entree_stock_maison_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `stock_maison` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sortie_stock_maison`
--
ALTER TABLE `sortie_stock_maison`
  ADD CONSTRAINT `sortie_stock_maison_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `stock_maison` (`id`);

--
-- Contraintes pour la table `vente_admin`
--
ALTER TABLE `vente_admin`
  ADD CONSTRAINT `vente_admin_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
