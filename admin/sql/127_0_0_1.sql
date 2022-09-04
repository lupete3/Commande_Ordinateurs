-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 sep. 2022 à 19:40
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
(2, 2, '1', '2022-09-02', 'HOME', 8);

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
(50, 'LENOVO', '250', 1, '396471227.jfif', '250', 4, 0, '192.168.48.142');

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
(11, 'MacBook Pro', 'mac'),
(12, 'ORDINATEURS PRORTABLES', 'Computers'),
(13, 'BATTERIE', 'Batterie pour laptop'),
(14, 'MacBook Air', 'MAC');

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
(5, 'Marceline Bossa', NULL, '0777777777', 'Majeno', 'Goma', 'Goma', 'Goma', NULL, NULL, NULL, NULL, '$2y$10$XZcQ/NDIXUe1RRVAtOSReuxTDKy6zT.O8ox3rPrJt91By0RS05vPq', '2022-07-07 16:12:25');

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gerant`
--

INSERT INTO `gerant` (`id`, `nom_complet`, `email`, `telephone`, `login`, `password`) VALUES
(1, 'Frank', 'admin@ntc.com', '0987654321', 'admin', 'admin');

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
(3, 'DELL 3150', '500GB 4RAM et double processeur 4h Battery', '150', 2, 'Oui', '1777837918.jpg', 12, '2022-09-02'),
(4, 'LENOVO E430C', '320GB 4RAM', '180', 1, 'Oui', '346582485.jpg', 12, '2022-09-02'),
(5, 'LENOVO EDGE', '500GB 4RAM', '180', 2, 'Oui', '1211603079.jpg', 12, '2022-09-02'),
(6, 'LEN T430s', '1TERA', '300', 1, 'Oui', '1361343686.jpg', 12, '2022-09-02'),
(7, 'HP PROBOOK', '320GB', '130', 1, 'Oui', '768584190.jpg', 12, '2022-09-02'),
(8, 'ACER Mini V5', '320GB 4RAM DOUBLE PROCESSEUR 4H', '120', 4, 'Oui', '1754120423.jpg', 12, '2022-09-02'),
(9, 'ASUS MINI', '320GB 4RAM', '120', 1, 'Oui', '1935694821.jpg', 12, '2022-09-02'),
(12, 'MacBook Pro', '720GB 4RAM', '300', 1, 'Oui', '1281425084.jpg', 11, '2022-09-02'),
(14, 'HP 820 g1', '500GB 4RAM i5 CLAVIER LUMINEUX', '250', 1, 'Oui', '522703324.jpg', 12, '2022-09-03');

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
(1, 'HP 820 g1', 0, '2022-09-02 08:42:51');

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
(2, 1, '140', '2022-09-02', 3, 'AMANI BASHONGA');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `entree_stock_maison`
--
ALTER TABLE `entree_stock_maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sortie_stock_maison`
--
ALTER TABLE `sortie_stock_maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stock_maison`
--
ALTER TABLE `stock_maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vente_admin`
--
ALTER TABLE `vente_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
