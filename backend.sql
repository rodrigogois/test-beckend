/*
 Navicat Premium Data Transfer

 Source Server         : mariadb
 Source Server Type    : MariaDB
 Source Server Version : 100214
 Source Host           : localhost:3306
 Source Schema         : backend

 Target Server Type    : MariaDB
 Target Server Version : 100214
 File Encoding         : 65001

 Date: 24/05/2018 16:14:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `number` int(11) NULL DEFAULT NULL,
  `neighborhood` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES (1, 'Av. Barão Homem de Melo', 329, 'Nova Granada', 'Belo Horizonte');

-- ----------------------------
-- Table structure for consultant
-- ----------------------------
DROP TABLE IF EXISTS `consultant`;
CREATE TABLE `consultant`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of consultant
-- ----------------------------
INSERT INTO `consultant` VALUES (1, 'https://randomuser.me/api/portraits/women/86.jpg', 'Melinda Perez');
INSERT INTO `consultant` VALUES (2, 'https://randomuser.me/api/portraits/women/85.jpg', 'Daniela Barbosa Martins');
INSERT INTO `consultant` VALUES (3, 'https://randomuser.me/api/portraits/women/84.jpg', 'Virgínia Figueiredo');
INSERT INTO `consultant` VALUES (4, 'https://randomuser.me/api/portraits/women/80.jpg', 'Elaine Rodrigues Gomes');

-- ----------------------------
-- Table structure for cursos
-- ----------------------------
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL,
  `start` datetime(0) NULL DEFAULT NULL,
  `finish` datetime(0) NULL DEFAULT NULL,
  `address_id` int(11) NULL DEFAULT NULL,
  `consultant_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cursos
-- ----------------------------
INSERT INTO `cursos` VALUES (1, 'Consultoria Presencial de Marketing', 'Mercado e vendas', 'Se você possui um pequeno negócio e deseja melhorar o desempenho da sua gestão, planejar estratégias para vencer a atual crise econômica e está em busca de um trabalho personalizado, conheça a Consultoria Empresarial do Sebrae.', 150.00, '2018-05-24 13:00:00', '2018-05-24 16:00:00', 1, 1);
INSERT INTO `cursos` VALUES (2, 'Oficina MEI - Aprenda a administrar o seu negócio', 'Finanças', 'As Oficinas SEI do Sebrae ensinam os principais pontos para a gestão de um negócio eficiente e lucrativo para o Microempreendedor Individual.', 30.00, '2018-05-24 09:00:00', '2018-05-24 11:30:00', 1, 2);
INSERT INTO `cursos` VALUES (3, 'Curso Empretec', 'Mercado e vendas', 'O Empretec é uma metodologia da Organização das Nações Unidas - ONU voltada para o desenvolvimento de características de comportamento empreendedor e para a identificação de novas oportunidades de negócios, promovido em cerca de 34 países.', 1680.00, '2018-05-24 08:00:00', '2018-07-24 12:00:00', 1, 3);
INSERT INTO `cursos` VALUES (4, 'Oficina Como ser MEI na Prática', 'Empreendedorismo', 'Sensibilizar o potencial empresário para os benefícios e deveres fa formalização e orientar sobre a prática do preenchimento dos formulários ideal para pessoas que são formalizadas na condição de Microempreendedor Individual ', 0.00, '2018-05-24 09:41:56', '2018-05-24 09:42:00', 1, 4);

SET FOREIGN_KEY_CHECKS = 1;
