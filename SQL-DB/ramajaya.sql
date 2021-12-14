/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : ramajaya

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 14/12/2021 16:55:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `img_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_jenis_brg` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_jenis_brg`(`id_jenis_brg`) USING BTREE,
  CONSTRAINT `fk_jenis_brg` FOREIGN KEY (`id_jenis_brg`) REFERENCES `jenis_barang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES (1, 'Gramoxone', 80000, 'gramoxone.png', 1);
INSERT INTO `barang` VALUES (2, 'Zenus', 70000, 'zenus.png', 1);
INSERT INTO `barang` VALUES (3, 'Abenz', 75000, 'abenz.png', 3);
INSERT INTO `barang` VALUES (4, 'Acrobat', 11000, 'acrobat.png', 2);
INSERT INTO `barang` VALUES (5, 'Amistartop', 100000, 'amistartop.png', 2);
INSERT INTO `barang` VALUES (6, 'Antracol', 35000, 'antracol.png', 2);
INSERT INTO `barang` VALUES (7, 'Basmilang', 100000, 'basmilang.png', 1);
INSERT INTO `barang` VALUES (8, 'Bendas', 65000, 'bendas.png', 2);
INSERT INTO `barang` VALUES (9, 'Bentan', 50000, 'bentan.png', 5);
INSERT INTO `barang` VALUES (10, 'Bestnoid', 55000, 'bestnoid.png', 5);
INSERT INTO `barang` VALUES (11, 'Besvidor', 25000, 'besvidor.png', 3);
INSERT INTO `barang` VALUES (12, 'Akar', 100000, 'bibit-akar.png', 7);
INSERT INTO `barang` VALUES (13, 'Mahar', 50000, 'bibit-mahar.png', 7);
INSERT INTO `barang` VALUES (14, 'Pertiwi', 85000, 'bibit-pertiwi.png', 7);
INSERT INTO `barang` VALUES (15, 'Calaris', 150000, 'calaris.png', 1);
INSERT INTO `barang` VALUES (16, 'Convey', 185000, 'convey.png', 1);
INSERT INTO `barang` VALUES (17, 'Curacron', 35000, 'curacron.png', 3);
INSERT INTO `barang` VALUES (18, 'Demolish', 80000, 'demolish.png', 3);
INSERT INTO `barang` VALUES (19, 'Emacel', 75000, 'emacel.png', 3);
INSERT INTO `barang` VALUES (20, 'Furadan', 40000, 'furadan.png', 3);
INSERT INTO `barang` VALUES (21, 'Gandasil B', 40000, 'gandasilb.png', 6);
INSERT INTO `barang` VALUES (22, 'Gaucho', 35000, 'gaucho.png', 3);
INSERT INTO `barang` VALUES (23, 'Kayabas', 140000, 'kayabas.png', 1);
INSERT INTO `barang` VALUES (24, 'KleenUP', 100000, 'kleenup.png', 1);
INSERT INTO `barang` VALUES (25, 'Kovinplus', 5000, 'kovinplus.png', 4);
INSERT INTO `barang` VALUES (26, 'MKP', 50000, 'mkp.png', 6);
INSERT INTO `barang` VALUES (27, 'Petrokum', 5000, 'petrokum.png', 4);
INSERT INTO `barang` VALUES (28, 'Prevathon', 70000, 'prevathon.png', 3);
INSERT INTO `barang` VALUES (29, 'Roundup', 120000, 'roundup.png', 1);
INSERT INTO `barang` VALUES (30, 'Sidafos', 100000, 'sidafos.png', 1);
INSERT INTO `barang` VALUES (31, 'Sidalaris', 60000, 'sidalaris.png', 1);
INSERT INTO `barang` VALUES (32, 'Sidazeb', 45000, 'sidazeb.png', 2);
INSERT INTO `barang` VALUES (33, 'Alpha', 350000, 'tangki-alpha.png', 8);
INSERT INTO `barang` VALUES (34, 'SWAN', 425000, 'tangki-swan.png', 8);
INSERT INTO `barang` VALUES (35, 'Toxiput', 30000, 'toxiput.png', 5);

-- ----------------------------
-- Table structure for jenis_barang
-- ----------------------------
DROP TABLE IF EXISTS `jenis_barang`;
CREATE TABLE `jenis_barang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_brg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_alt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_barang
-- ----------------------------
INSERT INTO `jenis_barang` VALUES (1, 'Herbisida', 'herbisida');
INSERT INTO `jenis_barang` VALUES (2, 'Fungisida', 'fungisida');
INSERT INTO `jenis_barang` VALUES (3, 'Insektisida', 'insektisida');
INSERT INTO `jenis_barang` VALUES (4, 'Rodentisida', 'rodentisida');
INSERT INTO `jenis_barang` VALUES (5, 'Moluskisida', 'moluskisida');
INSERT INTO `jenis_barang` VALUES (6, 'Pupuk', 'pupuk');
INSERT INTO `jenis_barang` VALUES (7, 'Bibit', 'bibit');
INSERT INTO `jenis_barang` VALUES (8, 'Sprayer', 'sprayer');

SET FOREIGN_KEY_CHECKS = 1;
