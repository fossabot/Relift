/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:3306
 Source Schema         : relift

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 25/03/2018 23:30:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) UNSIGNED NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories_slug_unique`(`slug`) USING BTREE,
  INDEX `categories_parent_id_foreign`(`parent_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 0, 12, '技能介绍', '技能介绍', '2018-03-23 16:23:21', '2018-03-24 23:43:24');
INSERT INTO `categories` VALUES (2, 0, 4, 'Category 2', 'category-2', '2018-03-23 16:23:21', '2018-03-23 16:23:21');
INSERT INTO `categories` VALUES (3, 0, 2, '英雄介绍', '-英雄介绍', '2018-03-24 23:44:58', '2018-03-24 23:44:58');
INSERT INTO `categories` VALUES (4, 0, 3, '公告', '-公告', '2018-03-25 00:00:37', '2018-03-25 00:00:37');

-- ----------------------------
-- Table structure for data_rows
-- ----------------------------
DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE `data_rows`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `data_rows_data_type_id_foreign`(`data_type_id`) USING BTREE,
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_rows
-- ----------------------------
INSERT INTO `data_rows` VALUES (1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1);
INSERT INTO `data_rows` VALUES (2, 1, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '', 2);
INSERT INTO `data_rows` VALUES (3, 1, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, '', 3);
INSERT INTO `data_rows` VALUES (4, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 4);
INSERT INTO `data_rows` VALUES (5, 1, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 5);
INSERT INTO `data_rows` VALUES (6, 1, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 6);
INSERT INTO `data_rows` VALUES (7, 1, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7);
INSERT INTO `data_rows` VALUES (8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 8);
INSERT INTO `data_rows` VALUES (9, 1, 'meta_description', 'text_area', 'meta_description', 1, 0, 1, 1, 1, 1, '', 9);
INSERT INTO `data_rows` VALUES (10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 10);
INSERT INTO `data_rows` VALUES (11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11);
INSERT INTO `data_rows` VALUES (12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 12);
INSERT INTO `data_rows` VALUES (13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 13);
INSERT INTO `data_rows` VALUES (14, 2, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1);
INSERT INTO `data_rows` VALUES (15, 2, 'author_id', 'text', 'author_id', 1, 0, 0, 0, 0, 0, '', 2);
INSERT INTO `data_rows` VALUES (16, 2, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '', 3);
INSERT INTO `data_rows` VALUES (17, 2, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 4);
INSERT INTO `data_rows` VALUES (18, 2, 'body', 'rich_text_box', 'body', 1, 0, 1, 1, 1, 1, '', 5);
INSERT INTO `data_rows` VALUES (19, 2, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"}}', 6);
INSERT INTO `data_rows` VALUES (20, 2, 'meta_description', 'text', 'meta_description', 1, 0, 1, 1, 1, 1, '', 7);
INSERT INTO `data_rows` VALUES (21, 2, 'meta_keywords', 'text', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 8);
INSERT INTO `data_rows` VALUES (22, 2, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9);
INSERT INTO `data_rows` VALUES (23, 2, 'created_at', 'timestamp', 'created_at', 1, 1, 1, 0, 0, 0, '', 10);
INSERT INTO `data_rows` VALUES (24, 2, 'updated_at', 'timestamp', 'updated_at', 1, 0, 0, 0, 0, 0, '', 11);
INSERT INTO `data_rows` VALUES (25, 2, 'image', 'image', 'image', 0, 1, 1, 1, 1, 1, '', 12);
INSERT INTO `data_rows` VALUES (26, 3, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (27, 3, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, NULL, 2);
INSERT INTO `data_rows` VALUES (28, 3, 'email', 'text', 'email', 1, 1, 1, 1, 1, 1, NULL, 3);
INSERT INTO `data_rows` VALUES (29, 3, 'password', 'password', 'password', 1, 0, 0, 1, 1, 0, NULL, 4);
INSERT INTO `data_rows` VALUES (30, 3, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', 10);
INSERT INTO `data_rows` VALUES (31, 3, 'remember_token', 'text', 'remember_token', 0, 0, 0, 0, 0, 0, NULL, 5);
INSERT INTO `data_rows` VALUES (32, 3, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, NULL, 6);
INSERT INTO `data_rows` VALUES (33, 3, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 7);
INSERT INTO `data_rows` VALUES (34, 3, 'avatar', 'image', 'avatar', 0, 1, 1, 1, 1, 1, NULL, 8);
INSERT INTO `data_rows` VALUES (35, 5, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1);
INSERT INTO `data_rows` VALUES (36, 5, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2);
INSERT INTO `data_rows` VALUES (37, 5, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3);
INSERT INTO `data_rows` VALUES (38, 5, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4);
INSERT INTO `data_rows` VALUES (39, 4, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, NULL, 1);
INSERT INTO `data_rows` VALUES (40, 4, 'parent_id', 'select_dropdown', 'parent_id', 0, 0, 1, 1, 1, 1, '{\"default\":0,\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2);
INSERT INTO `data_rows` VALUES (41, 4, 'order', 'text', 'order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3);
INSERT INTO `data_rows` VALUES (42, 4, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, NULL, 4);
INSERT INTO `data_rows` VALUES (43, 4, 'slug', 'text', 'slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5);
INSERT INTO `data_rows` VALUES (44, 4, 'created_at', 'timestamp', 'created_at', 0, 0, 1, 0, 0, 0, NULL, 6);
INSERT INTO `data_rows` VALUES (45, 4, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, NULL, 7);
INSERT INTO `data_rows` VALUES (46, 6, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1);
INSERT INTO `data_rows` VALUES (47, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2);
INSERT INTO `data_rows` VALUES (48, 6, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3);
INSERT INTO `data_rows` VALUES (49, 6, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4);
INSERT INTO `data_rows` VALUES (50, 6, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5);
INSERT INTO `data_rows` VALUES (51, 1, 'seo_title', 'text', 'seo_title', 0, 1, 1, 1, 1, 1, '', 14);
INSERT INTO `data_rows` VALUES (52, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, '', 15);
INSERT INTO `data_rows` VALUES (53, 3, 'role_id', 'text', 'role_id', 0, 1, 1, 1, 1, 1, NULL, 9);
INSERT INTO `data_rows` VALUES (54, 3, 'description', 'text_area', 'Description', 1, 0, 1, 1, 1, 1, NULL, 10);
INSERT INTO `data_rows` VALUES (55, 3, 'background', 'image', 'Background', 1, 0, 1, 1, 1, 1, NULL, 11);
INSERT INTO `data_rows` VALUES (56, 3, 'created_ip', 'text', 'Created Ip', 1, 0, 0, 0, 0, 0, NULL, 12);
INSERT INTO `data_rows` VALUES (57, 3, 'login_ip', 'text', 'Login Ip', 1, 0, 0, 0, 0, 0, NULL, 13);

-- ----------------------------
-- Table structure for data_types
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `model_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `policy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `data_types_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `data_types_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_types
-- ----------------------------
INSERT INTO `data_types` VALUES (1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, '2018-03-23 16:23:12', '2018-03-23 16:23:12');
INSERT INTO `data_types` VALUES (2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, '2018-03-23 16:23:12', '2018-03-23 16:23:12');
INSERT INTO `data_types` VALUES (3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', NULL, NULL, 1, 0, '2018-03-23 16:23:12', '2018-03-24 23:39:56');
INSERT INTO `data_types` VALUES (4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'App\\Models\\Category', NULL, NULL, NULL, 1, 0, '2018-03-23 16:23:12', '2018-03-25 00:03:02');
INSERT INTO `data_types` VALUES (5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, '2018-03-23 16:23:12', '2018-03-23 16:23:12');
INSERT INTO `data_types` VALUES (6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, '2018-03-23 16:23:12', '2018-03-23 16:23:12');

-- ----------------------------
-- Table structure for menu_items
-- ----------------------------
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menu_items_menu_id_foreign`(`menu_id`) USING BTREE,
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu_items
-- ----------------------------
INSERT INTO `menu_items` VALUES (1, 1, '控制面板', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-03-23 16:23:15', '2018-03-23 16:23:15', 'voyager.dashboard', NULL);
INSERT INTO `menu_items` VALUES (2, 1, '媒体库', '', '_self', 'voyager-images', NULL, NULL, 5, '2018-03-23 16:23:15', '2018-03-23 16:23:15', 'voyager.media.index', NULL);
INSERT INTO `menu_items` VALUES (3, 1, '文章', '', '_self', 'voyager-news', NULL, NULL, 6, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.posts.index', NULL);
INSERT INTO `menu_items` VALUES (4, 1, '用户', '', '_self', 'voyager-person', NULL, NULL, 3, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.users.index', NULL);
INSERT INTO `menu_items` VALUES (5, 1, '分类', '', '_self', 'voyager-categories', NULL, NULL, 8, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.categories.index', NULL);
INSERT INTO `menu_items` VALUES (6, 1, '单页', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.pages.index', NULL);
INSERT INTO `menu_items` VALUES (7, 1, '身份管理', '', '_self', 'voyager-lock', NULL, NULL, 2, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.roles.index', NULL);
INSERT INTO `menu_items` VALUES (8, 1, '工具', '', '_self', 'voyager-tools', NULL, NULL, 9, '2018-03-23 16:23:16', '2018-03-23 16:23:16', NULL, NULL);
INSERT INTO `menu_items` VALUES (9, 1, '菜单构造器', '', '_self', 'voyager-list', NULL, 8, 10, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.menus.index', NULL);
INSERT INTO `menu_items` VALUES (10, 1, '数据库工具', '', '_self', 'voyager-data', NULL, 8, 11, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.database.index', NULL);
INSERT INTO `menu_items` VALUES (11, 1, 'voyager指南', '', '_self', 'voyager-compass', NULL, 8, 12, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.compass.index', NULL);
INSERT INTO `menu_items` VALUES (12, 1, '全局设置', '', '_self', 'voyager-settings', NULL, NULL, 14, '2018-03-23 16:23:16', '2018-03-23 16:23:16', 'voyager.settings.index', NULL);
INSERT INTO `menu_items` VALUES (13, 1, '资源钩子', '', '_self', 'voyager-hook', NULL, 8, 13, '2018-03-23 16:23:24', '2018-03-23 16:23:24', 'voyager.hooks', NULL);
INSERT INTO `menu_items` VALUES (16, 1, '主题', '/admin/themes', '_self', 'voyager-paint-bucket', NULL, NULL, 98, '2018-03-24 01:34:14', '2018-03-24 01:34:14', NULL, NULL);

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `menus_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, 'admin', '2018-03-23 16:23:15', '2018-03-23 16:23:15');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2016_01_01_000000_add_voyager_user_fields', 1);
INSERT INTO `migrations` VALUES (4, '2016_01_01_000000_create_data_types_table', 1);
INSERT INTO `migrations` VALUES (5, '2016_01_01_000000_create_pages_table', 1);
INSERT INTO `migrations` VALUES (6, '2016_01_01_000000_create_posts_table', 1);
INSERT INTO `migrations` VALUES (7, '2016_02_15_204651_create_categories_table', 1);
INSERT INTO `migrations` VALUES (8, '2016_05_19_173453_create_menu_table', 1);
INSERT INTO `migrations` VALUES (9, '2016_10_21_190000_create_roles_table', 1);
INSERT INTO `migrations` VALUES (10, '2016_10_21_190000_create_settings_table', 1);
INSERT INTO `migrations` VALUES (11, '2016_11_30_135954_create_permission_table', 1);
INSERT INTO `migrations` VALUES (12, '2016_11_30_141208_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (13, '2016_12_26_201236_data_types__add__server_side', 1);
INSERT INTO `migrations` VALUES (14, '2017_01_13_000000_add_route_to_menu_items_table', 1);
INSERT INTO `migrations` VALUES (15, '2017_01_14_005015_create_translations_table', 1);
INSERT INTO `migrations` VALUES (16, '2017_01_15_000000_add_permission_group_id_to_permissions_table', 1);
INSERT INTO `migrations` VALUES (17, '2017_01_15_000000_create_permission_groups_table', 1);
INSERT INTO `migrations` VALUES (18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1);
INSERT INTO `migrations` VALUES (19, '2017_03_06_000000_add_controller_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (20, '2017_04_11_000000_alter_post_nullable_fields_table', 1);
INSERT INTO `migrations` VALUES (21, '2017_04_21_000000_add_order_to_data_rows_table', 1);
INSERT INTO `migrations` VALUES (22, '2017_07_05_210000_add_policyname_to_data_types_table', 1);
INSERT INTO `migrations` VALUES (23, '2017_08_05_000000_add_group_to_settings_table', 1);

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` enum('ACTIVE','INACTIVE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `pages_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2018-03-23 16:23:22', '2018-03-23 16:23:22');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permission_groups
-- ----------------------------
DROP TABLE IF EXISTS `permission_groups`;
CREATE TABLE `permission_groups`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permission_groups_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `permission_role_permission_id_index`(`permission_id`) USING BTREE,
  INDEX `permission_role_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (1, 1);
INSERT INTO `permission_role` VALUES (2, 1);
INSERT INTO `permission_role` VALUES (3, 1);
INSERT INTO `permission_role` VALUES (4, 1);
INSERT INTO `permission_role` VALUES (5, 1);
INSERT INTO `permission_role` VALUES (6, 1);
INSERT INTO `permission_role` VALUES (7, 1);
INSERT INTO `permission_role` VALUES (8, 1);
INSERT INTO `permission_role` VALUES (9, 1);
INSERT INTO `permission_role` VALUES (10, 1);
INSERT INTO `permission_role` VALUES (11, 1);
INSERT INTO `permission_role` VALUES (12, 1);
INSERT INTO `permission_role` VALUES (13, 1);
INSERT INTO `permission_role` VALUES (14, 1);
INSERT INTO `permission_role` VALUES (15, 1);
INSERT INTO `permission_role` VALUES (16, 1);
INSERT INTO `permission_role` VALUES (17, 1);
INSERT INTO `permission_role` VALUES (18, 1);
INSERT INTO `permission_role` VALUES (19, 1);
INSERT INTO `permission_role` VALUES (20, 1);
INSERT INTO `permission_role` VALUES (21, 1);
INSERT INTO `permission_role` VALUES (22, 1);
INSERT INTO `permission_role` VALUES (23, 1);
INSERT INTO `permission_role` VALUES (24, 1);
INSERT INTO `permission_role` VALUES (25, 1);
INSERT INTO `permission_role` VALUES (26, 1);
INSERT INTO `permission_role` VALUES (27, 1);
INSERT INTO `permission_role` VALUES (28, 1);
INSERT INTO `permission_role` VALUES (29, 1);
INSERT INTO `permission_role` VALUES (30, 1);
INSERT INTO `permission_role` VALUES (31, 1);
INSERT INTO `permission_role` VALUES (32, 1);
INSERT INTO `permission_role` VALUES (33, 1);
INSERT INTO `permission_role` VALUES (34, 1);
INSERT INTO `permission_role` VALUES (35, 1);
INSERT INTO `permission_role` VALUES (36, 1);
INSERT INTO `permission_role` VALUES (37, 1);
INSERT INTO `permission_role` VALUES (38, 1);
INSERT INTO `permission_role` VALUES (39, 1);
INSERT INTO `permission_role` VALUES (40, 1);
INSERT INTO `permission_role` VALUES (41, 1);

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `permission_group_id` int(10) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `permissions_key_index`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'browse_admin', NULL, '2018-03-23 16:23:16', '2018-03-23 16:23:16', NULL);
INSERT INTO `permissions` VALUES (2, 'browse_database', NULL, '2018-03-23 16:23:16', '2018-03-23 16:23:16', NULL);
INSERT INTO `permissions` VALUES (3, 'browse_media', NULL, '2018-03-23 16:23:16', '2018-03-23 16:23:16', NULL);
INSERT INTO `permissions` VALUES (4, 'browse_compass', NULL, '2018-03-23 16:23:16', '2018-03-23 16:23:16', NULL);
INSERT INTO `permissions` VALUES (5, 'browse_menus', 'menus', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (6, 'read_menus', 'menus', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (7, 'edit_menus', 'menus', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (8, 'add_menus', 'menus', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (9, 'delete_menus', 'menus', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (10, 'browse_pages', 'pages', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (11, 'read_pages', 'pages', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (12, 'edit_pages', 'pages', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (13, 'add_pages', 'pages', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (14, 'delete_pages', 'pages', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (15, 'browse_roles', 'roles', '2018-03-23 16:23:17', '2018-03-23 16:23:17', NULL);
INSERT INTO `permissions` VALUES (16, 'read_roles', 'roles', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (17, 'edit_roles', 'roles', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (18, 'add_roles', 'roles', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (19, 'delete_roles', 'roles', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (20, 'browse_users', 'users', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (21, 'read_users', 'users', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (22, 'edit_users', 'users', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (23, 'add_users', 'users', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (24, 'delete_users', 'users', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (25, 'browse_posts', 'posts', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (26, 'read_posts', 'posts', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (27, 'edit_posts', 'posts', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (28, 'add_posts', 'posts', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (29, 'delete_posts', 'posts', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (30, 'browse_categories', 'categories', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (31, 'read_categories', 'categories', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (32, 'edit_categories', 'categories', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (33, 'add_categories', 'categories', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (34, 'delete_categories', 'categories', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (35, 'browse_settings', 'settings', '2018-03-23 16:23:18', '2018-03-23 16:23:18', NULL);
INSERT INTO `permissions` VALUES (36, 'read_settings', 'settings', '2018-03-23 16:23:19', '2018-03-23 16:23:19', NULL);
INSERT INTO `permissions` VALUES (37, 'edit_settings', 'settings', '2018-03-23 16:23:19', '2018-03-23 16:23:19', NULL);
INSERT INTO `permissions` VALUES (38, 'add_settings', 'settings', '2018-03-23 16:23:19', '2018-03-23 16:23:19', NULL);
INSERT INTO `permissions` VALUES (39, 'delete_settings', 'settings', '2018-03-23 16:23:19', '2018-03-23 16:23:19', NULL);
INSERT INTO `permissions` VALUES (40, 'browse_hooks', NULL, '2018-03-23 16:23:24', '2018-03-23 16:23:24', NULL);
INSERT INTO `permissions` VALUES (41, 'browse_themes', 'admin', '2018-03-24 01:06:59', '2018-03-24 01:06:59', NULL);

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `posts_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 1, 1, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>\r\n<p><img src=\"http://relift.tg/storage/posts/March2018/64080523_p0.jpg\" width=\"540\" /></p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-03-23 16:23:22', '2018-03-24 02:17:22');
INSERT INTO `posts` VALUES (2, 1, 1, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `posts` VALUES (3, 1, 1, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `posts` VALUES (4, 1, 1, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `posts` VALUES (5, 1, 2, '使用 PHP 来做 Vue.js 的 SSR 服务端渲染', NULL, '使用 PHP 来做 Vue.js 的 SSR 服务端渲染', '<div id=\"SectionIndex_2\" class=\"translation-item active \" style=\"box-sizing: border-box; padding: 25px 0px; position: relative; border-bottom: 1px solid #eeeeee; min-height: 215px; color: #525252; font-family: \'Helvetica Neue\', NotoSansHans-Regular, AvenirNext-Regular, arial, \'Hiragino Sans GB\', \'Microsoft Yahei\', \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.43; color: inherit; margin-top: 1em; margin-bottom: 16px; font-size: 1.2em; position: relative;\">浏览器的工作</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">在 SPA 被启动并准备使用之前，浏览器需要经过几个步骤。</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 10px 20px 10px 30px; line-height: 30px; color: #7d8688;\">\r\n<li style=\"box-sizing: border-box;\">下载 JavaScript 脚本</li>\r\n<li style=\"box-sizing: border-box;\">解析 JavaScript 脚本</li>\r\n<li style=\"box-sizing: border-box;\">运行 JavaScript 脚本</li>\r\n<li style=\"box-sizing: border-box;\">取回数据（可选，但普遍）</li>\r\n<li style=\"box-sizing: border-box;\">在原本的空容器渲染应用&nbsp;&nbsp;<em style=\"box-sizing: border-box;\">（首次有意义的渲染）</em></li>\r\n<li style=\"box-sizing: border-box;\">准备完成！&nbsp;<em style=\"box-sizing: border-box;\">（可以交互啦）</em></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">用户不会看到任何有意义的内容，直到浏览器完全渲染 App（需要花费一点时间）。这会造成一个明显的延迟，直到&nbsp;<a style=\"box-sizing: border-box; background: transparent; color: #f4645f; text-decoration-line: none;\" href=\"https://developers.google.com/web/tools/lighthouse/audits/first-meaningful-paint\">首次有意义的渲染</a>&nbsp;完成，从而影响了用户体验。</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">这就是为什么服务端渲染（一般被称作 SSR ）登场的原因。SSR 在服务器预渲染初始应用状态。这里是浏览器在使用服务端渲染后需要经过的步骤：</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 10px 20px 10px 30px; line-height: 30px; color: #7d8688;\">\r\n<li style=\"box-sizing: border-box;\">渲染来自服务端的 HTML&nbsp;<em style=\"box-sizing: border-box;\">（首次有意义的渲染）</em></li>\r\n<li style=\"box-sizing: border-box;\">下载 JavaScript 脚本</li>\r\n<li style=\"box-sizing: border-box;\">解析 JavaScript 脚本</li>\r\n<li style=\"box-sizing: border-box;\">运行 JavaScript 脚本</li>\r\n<li style=\"box-sizing: border-box;\">取回数据</li>\r\n<li style=\"box-sizing: border-box;\">使已存在的 HTML 页面可交互</li>\r\n<li style=\"box-sizing: border-box;\">准备完成！&nbsp;<em style=\"box-sizing: border-box;\">(可以交互啦)</em></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">由于服务器提供了 HTML 的预渲染块，因此用户无需等到一切完成后才能看到有意义的内容。注意，虽然&nbsp;<a style=\"box-sizing: border-box; background: transparent; color: #f4645f; text-decoration-line: none;\" href=\"https://developers.google.com/web/tools/lighthouse/audits/time-to-interactive\">交互时间</a>仍然处于最后，但可感知的表现得到了巨大的提升。</p>\r\n<div class=\"postion\" style=\"box-sizing: border-box; top: 0px; left: unset; min-width: 100px; position: absolute; padding: 15px; width: 292px; font-size: 14px; border: 1px solid #d3e0e9; box-shadow: rgba(101, 129, 156, 0.08) 0px 1px 2px 0px; right: -334px;\">\r\n<div class=\"text-center \" style=\"box-sizing: border-box; text-align: center;\"><a style=\"box-sizing: border-box; background: transparent; color: #f4645f; text-decoration-line: none;\" href=\"https://laravel-china.org/users/18396\"><img class=\"img-thumbnail avatar emoji\" style=\"box-sizing: border-box; border: 1px solid #dddddd; vertical-align: middle; padding: 3px; line-height: 1.42857; border-radius: 50%; transition: all 0.2s ease-in-out; display: inline-block; max-width: 100%; height: 52px; width: 52px; margin: 5px;\" src=\"https://lccdn.phphub.org/uploads/avatars/18396_1502963965.jpeg?imageView2/1/w/100/h/100\" /></a>\r\n<div class=\"media-body padding-top-sm\" style=\"box-sizing: border-box; zoom: 1; overflow: hidden; width: 10000px; display: table-cell; vertical-align: top; padding-top: 10px;\"><span class=\"introduction\" style=\"box-sizing: border-box;\">Littlesqx 翻译于&nbsp;<span class=\"popover-with-html\" style=\"box-sizing: border-box;\" title=\"\" data-content=\"2018-03-20 19:29:27\" data-original-title=\"\">4天前</span></span></div>\r\n</div>\r\n<div class=\"translation-operation-wrap\" style=\"box-sizing: border-box;\">\r\n<div class=\"index text-center\" style=\"box-sizing: border-box; text-align: center; font-size: 12px; margin-bottom: 5px; line-height: 20px;\"><a class=\"section-vote btn btn-sm btn-shadow btn-default  popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" data-content=\"多个翻译的情况下，赞数会影响排序\" data-url=\"https://laravel-china.org/translations/sections/2127/vote\" data-original-title=\"\">&nbsp;<span class=\"vote-count\" style=\"box-sizing: border-box;\">1</span></a>&nbsp;<a class=\"no-pjax btn btn-default btn-shadow btn-sm  popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; text-decoration-line: none; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" href=\"https://laravel-china.org/sections/2127/patches/create\" data-content=\"发现错别字？点此可帮助译者改进\" data-original-title=\"\">&nbsp;改进</a>&nbsp;<a class=\"no-pjax btn btn-default btn-shadow btn-sm  no-pjax popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; text-decoration-line: none; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" href=\"https://laravel-china.org/translations/sections/2127\" data-content=\"提交你的译文\" data-original-title=\"\">&nbsp;重译</a></div>\r\n<div class=\"text-center\" style=\"box-sizing: border-box; text-align: center; font-size: 0.9em; margin-top: 12px; color: #a5a5a5;\">&nbsp;由&nbsp;<a style=\"box-sizing: border-box; background: transparent; color: #a5a5a5; text-decoration-line: none;\" href=\"https://laravel-china.org/users/1\">Summer</a>&nbsp;审阅</div>\r\n</div>\r\n</div>\r\n<p class=\"bottom-postion\" style=\"box-sizing: border-box; margin: 0px; position: absolute; right: -176px; bottom: 0px; font-size: 14px; line-height: 2.2;\"><a class=\"expand-translation user-has-done-btn\" style=\"box-sizing: border-box; background: transparent; color: #a1a1a2; margin-top: 12px; display: block;\" data-act=\"view_other_version\">&nbsp;查看其他 1 个版本</a></p>\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n<div id=\"SectionIndex_3\" class=\"translation-item active \" style=\"box-sizing: border-box; padding: 25px 0px; position: relative; border-bottom: 1px solid #eeeeee; min-height: 215px; color: #525252; font-family: \'Helvetica Neue\', NotoSansHans-Regular, AvenirNext-Regular, arial, \'Hiragino Sans GB\', \'Microsoft Yahei\', \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.43; color: inherit; margin-top: 1em; margin-bottom: 16px; font-size: 1.2em; position: relative;\">服务端渲染的优点</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">服务端渲染的主要优点是可以提升用户体验。并且，如果你的网站需要应对不能执行 JavaScript 的老旧爬虫，SSR 将是必须的，这样，爬虫才能索引服务端渲染过后的页面，而不是一个空荡荡的文档。</p>\r\n<h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.225; color: inherit; margin-top: 1em; margin-bottom: 16px; font-size: 1.3em; position: relative; padding-bottom: 0.3em; border-bottom: none !important;\">服务端如何渲染？</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">记住服务端渲染并非微不足道，这一点很重要。当你的 Web 应用同时运行在浏览器和服务器，而你的 Web 应用依赖 DOM 访问，那么你需要确保这些调用不会在服务端触发，因为没有 DOM API 可用。</p>\r\n<h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.43; color: inherit; margin-top: 1em; margin-bottom: 16px; font-size: 1.2em; position: relative;\">基础设施复杂性</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">假设你决定了服务端渲染你的应用端程序，你如果正在阅读这篇文章，很大可能正在使用 PHP 构建应用的大部分（功能）。但是，服务端渲染的 SPA 需要运行在 Node.js 环境，所以将需要维护第二个程序。</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">你需要构建两个应用程序之间的桥梁，以便它们进行通信和共享数据：需要一个 API。构建无状态 API 相比于构建有状态是比较&nbsp;<em style=\"box-sizing: border-box;\">困难</em>&nbsp;的。你需要熟悉一些新概念，例如基于 JWT 或 OAUTH 的验证，CORS，REST ，添加这些到现有应用中是很重要的。</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">有得必有所失，我们已经建立了 SSR 以增加 Web 应用的用户体验，但 SSR 是有成本的。</p>\r\n<div class=\"postion\" style=\"box-sizing: border-box; top: 0px; left: unset; min-width: 100px; position: absolute; padding: 15px; width: 292px; font-size: 14px; border: 1px solid #d3e0e9; box-shadow: rgba(101, 129, 156, 0.08) 0px 1px 2px 0px; right: -334px;\">\r\n<div class=\"text-center \" style=\"box-sizing: border-box; text-align: center;\"><a style=\"box-sizing: border-box; background: transparent; color: #f4645f; text-decoration-line: none;\" href=\"https://laravel-china.org/users/18396\"><img class=\"img-thumbnail avatar emoji\" style=\"box-sizing: border-box; border: 1px solid #dddddd; vertical-align: middle; padding: 3px; line-height: 1.42857; border-radius: 50%; transition: all 0.2s ease-in-out; display: inline-block; max-width: 100%; height: 52px; width: 52px; margin: 5px;\" src=\"https://lccdn.phphub.org/uploads/avatars/18396_1502963965.jpeg?imageView2/1/w/100/h/100\" /></a>\r\n<div class=\"media-body padding-top-sm\" style=\"box-sizing: border-box; zoom: 1; overflow: hidden; width: 10000px; display: table-cell; vertical-align: top; padding-top: 10px;\"><span class=\"introduction\" style=\"box-sizing: border-box;\">Littlesqx 翻译于&nbsp;<span class=\"popover-with-html\" style=\"box-sizing: border-box;\" title=\"\" data-content=\"2018-03-21 23:31:41\" data-original-title=\"\">2天前</span></span></div>\r\n</div>\r\n<div class=\"translation-operation-wrap\" style=\"box-sizing: border-box;\">\r\n<div class=\"index text-center\" style=\"box-sizing: border-box; text-align: center; font-size: 12px; margin-bottom: 5px; line-height: 20px;\"><a class=\"section-vote btn btn-sm btn-shadow btn-default  popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" data-content=\"多个翻译的情况下，赞数会影响排序\" data-url=\"https://laravel-china.org/translations/sections/2150/vote\" data-original-title=\"\">&nbsp;<span class=\"vote-count\" style=\"box-sizing: border-box;\">1</span></a>&nbsp;<a class=\"no-pjax btn btn-default btn-shadow btn-sm  popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; text-decoration-line: none; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" href=\"https://laravel-china.org/sections/2150/patches/create\" data-content=\"发现错别字？点此可帮助译者改进\" data-original-title=\"\">&nbsp;改进</a>&nbsp;<a class=\"no-pjax btn btn-default btn-shadow btn-sm  no-pjax popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; text-decoration-line: none; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" href=\"https://laravel-china.org/translations/sections/2150\" data-content=\"提交你的译文\" data-original-title=\"\">&nbsp;重译</a></div>\r\n<div class=\"text-center\" style=\"box-sizing: border-box; text-align: center; font-size: 0.9em; margin-top: 12px; color: #a5a5a5;\">&nbsp;由&nbsp;<a style=\"box-sizing: border-box; background: transparent; color: #a5a5a5; text-decoration-line: none;\" href=\"https://laravel-china.org/users/1\">Summer</a>&nbsp;审阅</div>\r\n</div>\r\n</div>\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n<div id=\"SectionIndex_4\" class=\"translation-item active \" style=\"box-sizing: border-box; padding: 25px 0px; position: relative; border-bottom: 1px solid #eeeeee; min-height: 215px; color: #525252; font-family: \'Helvetica Neue\', NotoSansHans-Regular, AvenirNext-Regular, arial, \'Hiragino Sans GB\', \'Microsoft Yahei\', \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.43; color: inherit; margin-top: 1em; margin-bottom: 16px; font-size: 1.2em; position: relative;\">服务器端渲染权衡取舍</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">服务器上多了一个额外的操作。一个是服务器增加了负载压力，第二个是页面响应时间也会稍微加长。 不过因为现在服务器返回了有效内容，在用户看来，第二个问题的影响不大。</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">大部分时候你会使用 Node.js 来渲染你的 SPA 代码。如果你的后端代码不是使用 Javascript 编写的话，新加入 Node.js 堆栈将使你的程序架构变得复杂。</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">为了简化基础架构的复杂度， 我们需要找到一个方法，使已有的 PHP 环境作为服务端来渲染客户端应用。</p>\r\n<h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.225; color: inherit; margin-top: 1em; margin-bottom: 16px; font-size: 1.3em; position: relative; padding-bottom: 0.3em; border-bottom: none !important;\">在 PHP 中渲染 JavaScript</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">在服务器端渲染 SPA 需要集齐以下三样东西：</p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; padding: 10px 20px 10px 30px; line-height: 30px; color: #7d8688;\">\r\n<li style=\"box-sizing: border-box;\">一个可以执行 JavaScript 的引擎</li>\r\n<li style=\"box-sizing: border-box;\">一个可以在服务器上渲染应用的脚本</li>\r\n<li style=\"box-sizing: border-box;\">一个可以在客户端渲染和运行应用的脚本</li>\r\n</ul>\r\n<div class=\"postion\" style=\"box-sizing: border-box; top: 0px; left: unset; min-width: 100px; position: absolute; padding: 15px; width: 292px; font-size: 14px; border: 1px solid #d3e0e9; box-shadow: rgba(101, 129, 156, 0.08) 0px 1px 2px 0px; right: -334px;\">\r\n<div class=\"text-center \" style=\"box-sizing: border-box; text-align: center;\"><a style=\"box-sizing: border-box; background: transparent; color: #f4645f; text-decoration-line: none;\" href=\"https://laravel-china.org/users/14564\"><img class=\"img-thumbnail avatar emoji\" style=\"box-sizing: border-box; border: 1px solid #dddddd; vertical-align: middle; padding: 3px; line-height: 1.42857; border-radius: 50%; transition: all 0.2s ease-in-out; display: inline-block; max-width: 100%; height: 52px; width: 52px; margin: 5px;\" src=\"https://lccdn.phphub.org/uploads/avatars/14564_1493099687.jpg?imageView2/1/w/100/h/100\" /></a>\r\n<div class=\"media-body padding-top-sm\" style=\"box-sizing: border-box; zoom: 1; overflow: hidden; width: 10000px; display: table-cell; vertical-align: top; padding-top: 10px;\"><span class=\"introduction\" style=\"box-sizing: border-box;\">BradStev 翻译于&nbsp;<span class=\"popover-with-html\" style=\"box-sizing: border-box;\" title=\"\" data-content=\"2018-03-20 10:33:08\" data-original-title=\"\">4天前</span></span></div>\r\n</div>\r\n<div class=\"translation-operation-wrap\" style=\"box-sizing: border-box;\">\r\n<div class=\"index text-center\" style=\"box-sizing: border-box; text-align: center; font-size: 12px; margin-bottom: 5px; line-height: 20px;\"><a class=\"section-vote btn btn-sm btn-shadow btn-default  popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" data-content=\"多个翻译的情况下，赞数会影响排序\" data-url=\"https://laravel-china.org/translations/sections/2113/vote\" data-original-title=\"\">&nbsp;<span class=\"vote-count\" style=\"box-sizing: border-box;\">0</span></a>&nbsp;<a class=\"no-pjax btn btn-default btn-shadow btn-sm  popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; text-decoration-line: none; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" href=\"https://laravel-china.org/sections/2113/patches/create\" data-content=\"发现错别字？点此可帮助译者改进\" data-original-title=\"\">&nbsp;改进</a>&nbsp;<a class=\"no-pjax btn btn-default btn-shadow btn-sm  no-pjax popover-with-html\" style=\"box-sizing: border-box; background: transparent; color: #909090; text-decoration-line: none; display: inline-block; margin: 13px 5px 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; white-space: nowrap; padding: 5px 10px; line-height: 1.5; border-radius: 3px; user-select: none; box-shadow: #cccccc 0px 0px 5px; border: none !important;\" title=\"\" href=\"https://laravel-china.org/translations/sections/2113\" data-content=\"提交你的译文\" data-original-title=\"\">&nbsp;重译</a></div>\r\n<div class=\"text-center\" style=\"box-sizing: border-box; text-align: center; font-size: 0.9em; margin-top: 12px; color: #a5a5a5;\">&nbsp;由&nbsp;<a style=\"box-sizing: border-box; background: transparent; color: #a5a5a5; text-decoration-line: none;\" href=\"https://laravel-china.org/users/1\">Summer</a>&nbsp;审阅</div>\r\n</div>\r\n</div>\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n<div id=\"SectionIndex_5\" class=\"translation-item active \" style=\"box-sizing: border-box; padding: 25px 0px; position: relative; border-bottom: 1px solid #eeeeee; min-height: 215px; color: #525252; font-family: \'Helvetica Neue\', NotoSansHans-Regular, AvenirNext-Regular, arial, \'Hiragino Sans GB\', \'Microsoft Yahei\', \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.43; color: inherit; margin-top: 1em; margin-bottom: 16px; font-size: 1.2em; position: relative;\">SSR scripts 101</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">The following examples use Vue.js. Don\'t worry if you\'re used to working with other frameworks like React. The core concepts are very similar and everything should look familiar.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">For simplicity\'s sake, we\'re gonna build a classic \"Hello, world!\" example.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">Here\'s what our app looks like without SSR in mind:</p>\r\n<pre class=\"  language-php\" style=\"box-sizing: border-box; overflow: auto; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; font-size: 1em; padding: 1em; line-height: 1.5; word-break: normal; word-wrap: normal; color: #f8f8f2; background: rgba(54, 56, 58, 0.98); border: none; border-radius: 0px; text-shadow: none; word-spacing: normal; tab-size: 4; hyphens: none; margin-top: 1.2em !important; margin-bottom: 1.2em !important;\"><code class=\"  language-php\" style=\"box-sizing: border-box; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; padding: 0px; background: transparent; margin: 0px; border: 0px; max-width: 740px; overflow: initial; text-shadow: none; word-spacing: normal; word-break: normal; word-wrap: normal; line-height: inherit; tab-size: 4; hyphens: none; display: block; border-radius: 4px !important;\"><span class=\"token comment\" style=\"box-sizing: border-box; color: slategray;\" spellcheck=\"true\">// app.js</span>\r\nimport Vue from <span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'vue\'</span>\r\n\r\n<span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">new</span> <span class=\"token class-name\" style=\"box-sizing: border-box;\">Vue</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">{</span>\r\n  template<span class=\"token punctuation\" style=\"box-sizing: border-box;\">:</span> `\r\n    <span class=\"token markup\" style=\"box-sizing: border-box;\"><span class=\"token tag\" style=\"box-sizing: border-box; color: #66d9ef;\"><span class=\"token tag\" style=\"box-sizing: border-box;\"><span class=\"token punctuation\" style=\"box-sizing: border-box; color: #f8f8f2;\">&lt;</span>div</span><span class=\"token punctuation\" style=\"box-sizing: border-box; color: #f8f8f2;\">&gt;</span></span></span>Hello<span class=\"token punctuation\" style=\"box-sizing: border-box;\">,</span> world<span class=\"token operator\" style=\"box-sizing: border-box;\">!</span><span class=\"token markup\" style=\"box-sizing: border-box;\"><span class=\"token tag\" style=\"box-sizing: border-box; color: #66d9ef;\"><span class=\"token tag\" style=\"box-sizing: border-box;\"><span class=\"token punctuation\" style=\"box-sizing: border-box; color: #f8f8f2;\">&lt;/</span>div</span><span class=\"token punctuation\" style=\"box-sizing: border-box; color: #f8f8f2;\">&gt;</span></span></span>\r\n  `<span class=\"token punctuation\" style=\"box-sizing: border-box;\">,</span>\r\n\r\n  el<span class=\"token punctuation\" style=\"box-sizing: border-box;\">:</span> <span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'#app\'</span>\r\n<span class=\"token punctuation\" style=\"box-sizing: border-box;\">}</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span>\r\n</code></pre>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">This instantiates a Vue component with a template and renders the app in a container (an empty&nbsp;<code style=\"box-sizing: border-box; font-family: monaco, Consolas, \'Liberation Mono\', Menlo, Courier, monospace; font-size: 0.9em; padding: 1px 2px; color: #858080; background: #f9fafa; border-radius: 4px; margin: 5px; border: 1px solid #e4e4e4; max-width: 740px; overflow-x: auto;\">div</code>&nbsp;with an&nbsp;<code style=\"box-sizing: border-box; font-family: monaco, Consolas, \'Liberation Mono\', Menlo, Courier, monospace; font-size: 0.9em; padding: 1px 2px; color: #858080; background: #f9fafa; border-radius: 4px; margin: 5px; border: 1px solid #e4e4e4; max-width: 740px; overflow-x: auto;\">app</code>&nbsp;id).</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">If we\'d run this script on the server, it would throw an error. We don\'t have any DOM access, so Vue would try to render the app in an element that can\'t ever exist.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">Let\'s refactor our script to something we&nbsp;<em style=\"box-sizing: border-box;\">can</em>&nbsp;run on the server.</p>\r\n<pre class=\"  language-php\" style=\"box-sizing: border-box; overflow: auto; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; font-size: 1em; padding: 1em; line-height: 1.5; word-break: normal; word-wrap: normal; color: #f8f8f2; background: rgba(54, 56, 58, 0.98); border: none; border-radius: 0px; text-shadow: none; word-spacing: normal; tab-size: 4; hyphens: none; margin-top: 1.2em !important; margin-bottom: 1.2em !important;\"><code class=\"  language-php\" style=\"box-sizing: border-box; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; padding: 0px; background: transparent; margin: 0px; border: 0px; max-width: 740px; overflow: initial; text-shadow: none; word-spacing: normal; word-break: normal; word-wrap: normal; line-height: inherit; tab-size: 4; hyphens: none; display: block; border-radius: 4px !important;\"><span class=\"token comment\" style=\"box-sizing: border-box; color: slategray;\" spellcheck=\"true\">// app.js</span>\r\nimport Vue from <span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'vue\'</span>\r\n\r\nexport <span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">default</span> <span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span> <span class=\"token operator\" style=\"box-sizing: border-box;\">=</span><span class=\"token operator\" style=\"box-sizing: border-box;\">&gt;</span> <span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">new</span> <span class=\"token class-name\" style=\"box-sizing: border-box;\">Vue</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">{</span>\r\n  template<span class=\"token punctuation\" style=\"box-sizing: border-box;\">:</span> `\r\n    <span class=\"token markup\" style=\"box-sizing: border-box;\"><span class=\"token tag\" style=\"box-sizing: border-box; color: #66d9ef;\"><span class=\"token tag\" style=\"box-sizing: border-box;\"><span class=\"token punctuation\" style=\"box-sizing: border-box; color: #f8f8f2;\">&lt;</span>div</span><span class=\"token punctuation\" style=\"box-sizing: border-box; color: #f8f8f2;\">&gt;</span></span></span>Hello<span class=\"token punctuation\" style=\"box-sizing: border-box;\">,</span> world<span class=\"token operator\" style=\"box-sizing: border-box;\">!</span><span class=\"token markup\" style=\"box-sizing: border-box;\"><span class=\"token tag\" style=\"box-sizing: border-box; color: #66d9ef;\"><span class=\"token tag\" style=\"box-sizing: border-box;\"><span class=\"token punctuation\" style=\"box-sizing: border-box; color: #f8f8f2;\">&lt;/</span>div</span><span class=\"token punctuation\" style=\"box-sizing: border-box; color: #f8f8f2;\">&gt;</span></span></span>\r\n  `\r\n<span class=\"token punctuation\" style=\"box-sizing: border-box;\">}</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span>\r\n\r\n<span class=\"token comment\" style=\"box-sizing: border-box; color: slategray;\" spellcheck=\"true\">// entry-client.js</span>\r\nimport createApp from <span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'./app\'</span>\r\n\r\n<span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">const</span> app <span class=\"token operator\" style=\"box-sizing: border-box;\">=</span> <span class=\"token function\" style=\"box-sizing: border-box; color: #e6db74;\">createApp</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span>\r\n\r\napp<span class=\"token punctuation\" style=\"box-sizing: border-box;\">.</span><span class=\"token variable\" style=\"box-sizing: border-box;\">$mount</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'#app\'</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span>\r\n</code></pre>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">We split the previous script in two parts. The&nbsp;<code style=\"box-sizing: border-box; font-family: monaco, Consolas, \'Liberation Mono\', Menlo, Courier, monospace; font-size: 0.9em; padding: 1px 2px; color: #858080; background: #f9fafa; border-radius: 4px; margin: 5px; border: 1px solid #e4e4e4; max-width: 740px; overflow-x: auto;\">app.js</code>&nbsp;file becomes a factory to create new app instances. A second script,&nbsp;<code style=\"box-sizing: border-box; font-family: monaco, Consolas, \'Liberation Mono\', Menlo, Courier, monospace; font-size: 0.9em; padding: 1px 2px; color: #858080; background: #f9fafa; border-radius: 4px; margin: 5px; border: 1px solid #e4e4e4; max-width: 740px; overflow-x: auto;\">entry-client.js</code>, will run in the browser. It creates a new app instance with the factory and mounts it in the DOM.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">Now that we can create an app without a DOM dependency, we can write a second script for the server.</p>\r\n<pre class=\"  language-php\" style=\"box-sizing: border-box; overflow: auto; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; font-size: 1em; padding: 1em; line-height: 1.5; word-break: normal; word-wrap: normal; color: #f8f8f2; background: rgba(54, 56, 58, 0.98); border: none; border-radius: 0px; text-shadow: none; word-spacing: normal; tab-size: 4; hyphens: none; margin-top: 1.2em !important; margin-bottom: 1.2em !important;\"><code class=\"  language-php\" style=\"box-sizing: border-box; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; padding: 0px; background: transparent; margin: 0px; border: 0px; max-width: 740px; overflow: initial; text-shadow: none; word-spacing: normal; word-break: normal; word-wrap: normal; line-height: inherit; tab-size: 4; hyphens: none; display: block; border-radius: 4px !important;\"><span class=\"token comment\" style=\"box-sizing: border-box; color: slategray;\" spellcheck=\"true\">// entry-server.js</span>\r\nimport createApp from <span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'./app\'</span>\r\nimport renderToString from <span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'vue-server-renderer/basic\'</span>\r\n\r\n<span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">const</span> app <span class=\"token operator\" style=\"box-sizing: border-box;\">=</span> <span class=\"token function\" style=\"box-sizing: border-box; color: #e6db74;\">createApp</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span>\r\n\r\n<span class=\"token function\" style=\"box-sizing: border-box; color: #e6db74;\">renderToString</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span>app<span class=\"token punctuation\" style=\"box-sizing: border-box;\">,</span> <span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span>err<span class=\"token punctuation\" style=\"box-sizing: border-box;\">,</span> html<span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span> <span class=\"token operator\" style=\"box-sizing: border-box;\">=</span><span class=\"token operator\" style=\"box-sizing: border-box;\">&gt;</span> <span class=\"token punctuation\" style=\"box-sizing: border-box;\">{</span>\r\n  <span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">if</span> <span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span>err<span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span> <span class=\"token punctuation\" style=\"box-sizing: border-box;\">{</span>\r\n    <span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">throw</span> <span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">new</span> <span class=\"token class-name\" style=\"box-sizing: border-box;\">Error</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span>err<span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span>\r\n  <span class=\"token punctuation\" style=\"box-sizing: border-box;\">}</span>\r\n  <span class=\"token comment\" style=\"box-sizing: border-box; color: slategray;\" spellcheck=\"true\">// Dispatch the HTML string to the client...</span>\r\n<span class=\"token punctuation\" style=\"box-sizing: border-box;\">}</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span>\r\n</code></pre>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">We imported the same app factory, but we\'re using a server renderer to render a plain HTML string. This string will contain a representation of the application\'s initial state.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">We already have two of our three key ingredients: a server script and a client script. Now lets run them in PHP!</p>\r\n<div class=\"postion\" style=\"box-sizing: border-box; top: 0px; left: unset; min-width: 100px; position: absolute; padding: 15px; width: 292px; font-size: 14px; border: 1px solid #d3e0e9; box-shadow: rgba(101, 129, 156, 0.08) 0px 1px 2px 0px; right: -334px;\">\r\n<div class=\"text-center\" style=\"box-sizing: border-box; text-align: center;\"><span style=\"box-sizing: border-box; position: relative;\"><a class=\"btn btn-sm btn-primary no-pjax\" style=\"box-sizing: border-box; color: #ffffff; text-decoration-line: none; display: inline-block; margin-bottom: 0px; vertical-align: middle; touch-action: manipulation; cursor: pointer; background-image: initial; border: 1px solid #f93e38; white-space: nowrap; padding: 5px 10px; font-size: 12px; line-height: 1.5; border-radius: 3px; user-select: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: #f4645f !important;\" href=\"https://laravel-china.org/translations/sections/2102\">&nbsp;我来翻译</a></span></div>\r\n</div>\r\n<div class=\"clearfix\" style=\"box-sizing: border-box;\">&nbsp;</div>\r\n</div>\r\n<div id=\"SectionIndex_6\" class=\"translation-item active \" style=\"box-sizing: border-box; padding: 25px 0px; position: relative; border-bottom: 1px solid #eeeeee; min-height: 215px; color: #525252; font-family: \'Helvetica Neue\', NotoSansHans-Regular, AvenirNext-Regular, arial, \'Hiragino Sans GB\', \'Microsoft Yahei\', \'Hiragino Sans GB\', \'WenQuanYi Micro Hei\', sans-serif; font-size: 16px;\">\r\n<h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 500; line-height: 1.225; color: inherit; margin-top: 1em; margin-bottom: 16px; font-size: 1.3em; position: relative; padding-bottom: 0.3em; border-bottom: none !important;\">执行 JavaScript</h2>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">在 PHP 运行 JavaScript，想到的第一个选择是 V8Js。V8Js 是嵌入在 PHP 扩展的 V8 引擎，它允许我们执行 JavaScript。</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">使用 V8Js 执行脚本非常直接。我们可以用 PHP 中的输出缓冲和 JavaScript 中的&nbsp;<code style=\"box-sizing: border-box; font-family: monaco, Consolas, \'Liberation Mono\', Menlo, Courier, monospace; font-size: 0.9em; padding: 1px 2px; color: #858080; background: #f9fafa; border-radius: 4px; margin: 5px; border: 1px solid #e4e4e4; max-width: 740px; overflow-x: auto;\">print</code>&nbsp;来捕获结果。</p>\r\n<pre class=\"  language-php\" style=\"box-sizing: border-box; overflow: auto; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; font-size: 1em; padding: 1em; line-height: 1.5; word-break: normal; word-wrap: normal; color: #f8f8f2; background: rgba(54, 56, 58, 0.98); border: none; border-radius: 0px; text-shadow: none; word-spacing: normal; tab-size: 4; hyphens: none; margin-top: 1.2em !important; margin-bottom: 1.2em !important;\"><code class=\"  language-php\" style=\"box-sizing: border-box; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; padding: 0px; background: transparent; margin: 0px; border: 0px; max-width: 740px; overflow: initial; text-shadow: none; word-spacing: normal; word-break: normal; word-wrap: normal; line-height: inherit; tab-size: 4; hyphens: none; display: block; border-radius: 4px !important;\"><span class=\"token variable\" style=\"box-sizing: border-box;\">$v8</span> <span class=\"token operator\" style=\"box-sizing: border-box;\">=</span> <span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">new</span> <span class=\"token class-name\" style=\"box-sizing: border-box;\">V8Js</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">;</span>\r\n\r\n<span class=\"token function\" style=\"box-sizing: border-box; color: #e6db74;\">ob_start</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">;</span>\r\n\r\n<span class=\"token comment\" style=\"box-sizing: border-box; color: slategray;\" spellcheck=\"true\">// $script 包含了我们想执行的脚本内容</span>\r\n\r\n<span class=\"token variable\" style=\"box-sizing: border-box;\">$v8</span><span class=\"token operator\" style=\"box-sizing: border-box;\">-</span><span class=\"token operator\" style=\"box-sizing: border-box;\">&gt;</span><span class=\"token function\" style=\"box-sizing: border-box; color: #e6db74;\">executeString</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token variable\" style=\"box-sizing: border-box;\">$script</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">;</span>\r\n\r\n<span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">echo</span> <span class=\"token function\" style=\"box-sizing: border-box; color: #e6db74;\">ob_get_contents</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">;</span>\r\n</code></pre>\r\n<pre class=\"  language-php\" style=\"box-sizing: border-box; overflow: auto; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; font-size: 1em; padding: 1em; line-height: 1.5; word-break: normal; word-wrap: normal; color: #f8f8f2; background: rgba(54, 56, 58, 0.98); border: none; border-radius: 0px; text-shadow: none; word-spacing: normal; tab-size: 4; hyphens: none; margin-top: 1.2em !important; margin-bottom: 1.2em !important;\"><code class=\"  language-php\" style=\"box-sizing: border-box; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; padding: 0px; background: transparent; margin: 0px; border: 0px; max-width: 740px; overflow: initial; text-shadow: none; word-spacing: normal; word-break: normal; word-wrap: normal; line-height: inherit; tab-size: 4; hyphens: none; display: block; border-radius: 4px !important;\"><span class=\"token keyword\" style=\"box-sizing: border-box; color: #66d9ef;\">print</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">(</span><span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'</span></code></pre>\r\n<div>Hello, world!</div>\r\n<pre class=\"  language-php\" style=\"box-sizing: border-box; overflow: auto; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; font-size: 1em; padding: 1em; line-height: 1.5; word-break: normal; word-wrap: normal; color: #f8f8f2; background: rgba(54, 56, 58, 0.98); border: none; border-radius: 0px; text-shadow: none; word-spacing: normal; tab-size: 4; hyphens: none; margin-top: 1.2em !important; margin-bottom: 1.2em !important;\"><code class=\"  language-php\" style=\"box-sizing: border-box; font-family: Consolas, Monaco, \'Andale Mono\', \'Ubuntu Mono\', monospace; padding: 0px; background: transparent; margin: 0px; border: 0px; max-width: 740px; overflow: initial; text-shadow: none; word-spacing: normal; word-break: normal; word-wrap: normal; line-height: inherit; tab-size: 4; hyphens: none; display: block; border-radius: 4px !important;\"><span class=\"token string\" style=\"box-sizing: border-box; color: #a6e22e;\">\'</span><span class=\"token punctuation\" style=\"box-sizing: border-box;\">)</span>\r\n</code></pre>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">这种方法的缺点是需要第三方 PHP 扩展，而扩展可能很难或者不能在你的系统上安装，所以如果有其他（不需要安装扩展的）方法，它会更好的选择。</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; line-height: 2.2;\">这个不一样的方法就是使用 Node.js 运行 JavaScript。我们可以开启一个 Node 进程，它负责运行脚本并且捕获输出。</p>\r\n</div>', 'posts/March2018/345vGcLkso2pSADIRmSv.png', '-php-vue-js-ssr-', '使用 PHP 来做 Vue.js 的 SSR 服务端渲染', 'PHP,Vue.js,SSR,前端,后端', 'PUBLISHED', 0, '2018-03-24 21:59:50', '2018-03-25 16:13:38');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'admin', 'Administrator', '2018-03-23 16:23:16', '2018-03-23 16:23:16');
INSERT INTO `roles` VALUES (2, 'user', 'Normal User', '2018-03-23 16:23:16', '2018-03-23 16:23:16');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `settings_key_unique`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'site.title', 'Site Title', 'Relift社区', '', 'text', 1, 'Site');
INSERT INTO `settings` VALUES (2, 'site.description', 'Site Description', 'Remylift 社区', '', 'text', 2, 'Site');
INSERT INTO `settings` VALUES (3, 'site.logo', 'Site Logo', 'settings/March2018/j1FnVam0XMakvSjc6ZCk.png', '', 'image', 3, 'Site');
INSERT INTO `settings` VALUES (4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site');
INSERT INTO `settings` VALUES (5, 'admin.bg_image', 'Admin Background Image', 'settings/March2018/hKrKULkCOgS3vEtSZVbv.jpg', '', 'image', 5, 'Admin');
INSERT INTO `settings` VALUES (6, 'admin.title', 'Admin Title', 'Re:Admin', '', 'text', 1, 'Admin');
INSERT INTO `settings` VALUES (7, 'admin.description', 'Admin Description', '欢迎回来！', '', 'text', 2, 'Admin');
INSERT INTO `settings` VALUES (8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin');
INSERT INTO `settings` VALUES (9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin');
INSERT INTO `settings` VALUES (10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- ----------------------------
-- Table structure for translations
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `translations_table_name_column_name_foreign_key_locale_unique`(`table_name`, `column_name`, `foreign_key`, `locale`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of translations
-- ----------------------------
INSERT INTO `translations` VALUES (1, 'data_types', 'display_name_singular', 1, 'pt', 'Post', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (2, 'data_types', 'display_name_singular', 2, 'pt', 'Página', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (3, 'data_types', 'display_name_singular', 3, 'pt', 'Utilizador', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (5, 'data_types', 'display_name_singular', 5, 'pt', 'Menu', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (6, 'data_types', 'display_name_singular', 6, 'pt', 'Função', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (7, 'data_types', 'display_name_plural', 1, 'pt', 'Posts', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (8, 'data_types', 'display_name_plural', 2, 'pt', 'Páginas', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (9, 'data_types', 'display_name_plural', 3, 'pt', 'Utilizadores', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (11, 'data_types', 'display_name_plural', 5, 'pt', 'Menus', '2018-03-23 16:23:22', '2018-03-23 16:23:22');
INSERT INTO `translations` VALUES (12, 'data_types', 'display_name_plural', 6, 'pt', 'Funções', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (21, 'menu_items', 'title', 2, 'pt', 'Media', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (22, 'menu_items', 'title', 3, 'pt', 'Publicações', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (23, 'menu_items', 'title', 4, 'pt', 'Utilizadores', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (24, 'menu_items', 'title', 5, 'pt', 'Categorias', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (25, 'menu_items', 'title', 6, 'pt', 'Páginas', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (26, 'menu_items', 'title', 7, 'pt', 'Funções', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (27, 'menu_items', 'title', 8, 'pt', 'Ferramentas', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (28, 'menu_items', 'title', 9, 'pt', 'Menus', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (29, 'menu_items', 'title', 10, 'pt', 'Base de dados', '2018-03-23 16:23:23', '2018-03-23 16:23:23');
INSERT INTO `translations` VALUES (30, 'menu_items', 'title', 12, 'pt', 'Configurações', '2018-03-23 16:23:23', '2018-03-23 16:23:23');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'users/default.png',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `description` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'TA似乎什么都没有写',
  `background` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'themes/March2018/C1cWsIxCWA911RnP1Svg.png',
  `created_ip` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  `login_ip` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'TyrantGenesis', 'genesis489449701@gmail.com', 'users/March2018/dlZnRWB9Hdz3cqEUWMUS.jpg', '$2y$10$mZ18Uole6udBZX30KugCuexBJX7GPm1cSeldWLYYwqxeOaUeKsgHK', 'CU3QwpNOcNkQuJ62puqAKoAvnzYrY8Y3Ar4c9NxwkXKe1t0YZvhrMFFg8Xvi', '2018-03-23 16:23:21', '2018-03-25 00:23:34', 'TA似乎什么都没有写', 'users/March2018/u4DEVEXoLIX9f215II4B.png', '127.0.0.1', '127.0.0.1');
INSERT INTO `users` VALUES (2, 1, 'demo01', 'admin@admin.com', 'users/default.png', '$2y$10$AYgxJvyArTyXWBtVleNJ/.adumtQCVT8OmakPdTPqU1EEMQKAma/u', 'dGE210VFTIlsAbhRhYYyhoiRyyRuq2jz9VRUjewXvQUABk7GyP1C6S1lr6Lr', '2018-03-25 00:32:54', '2018-03-25 00:32:54', 'TA似乎什么都没有写', 'themes/March2018/C1cWsIxCWA911RnP1Svg.png', '127.0.0.1', '127.0.0.1');

-- ----------------------------
-- Table structure for voyager_theme_options
-- ----------------------------
DROP TABLE IF EXISTS `voyager_theme_options`;
CREATE TABLE `voyager_theme_options`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `voyager_theme_id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `voyager_theme_options_voyager_theme_id_index`(`voyager_theme_id`) USING BTREE,
  CONSTRAINT `voyager_theme_options_voyager_theme_id_foreign` FOREIGN KEY (`voyager_theme_id`) REFERENCES `voyager_themes` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of voyager_theme_options
-- ----------------------------
INSERT INTO `voyager_theme_options` VALUES (4, 2, 'home_title', 'Relift 虚荣游戏社区', '2018-03-24 13:38:57', '2018-03-24 18:50:32');
INSERT INTO `voyager_theme_options` VALUES (7, 2, 'home_background', 'themes/March2018/LkYI3jLyNo5W3eezhaBP.png', '2018-03-24 17:51:13', '2018-03-24 18:46:06');
INSERT INTO `voyager_theme_options` VALUES (9, 2, 'auth_background', 'themes/March2018/LWeo7Pc7rQP86sjwm65S.jpg', '2018-03-24 17:51:14', '2018-03-24 17:51:14');
INSERT INTO `voyager_theme_options` VALUES (10, 2, 'carousel_num', '3', '2018-03-24 18:22:11', '2018-03-25 12:17:39');
INSERT INTO `voyager_theme_options` VALUES (12, 2, 'home_carousel_text1', '苟利国家生死以，岂因祸福避趋之。', '2018-03-24 18:38:54', '2018-03-24 18:39:57');
INSERT INTO `voyager_theme_options` VALUES (13, 2, 'home_carousel1', 'themes/March2018/KXowOw8AFiuhvW7fkZLa.png', '2018-03-24 18:40:00', '2018-03-24 18:40:00');
INSERT INTO `voyager_theme_options` VALUES (14, 2, 'home_carousel_text2', '苟利国家生死以，岂因祸福避趋之。', '2018-03-24 18:40:43', '2018-03-24 18:40:43');
INSERT INTO `voyager_theme_options` VALUES (15, 2, 'home_carousel2', 'themes/March2018/0DWwTEdtlf9lypY6EFSc.png', '2018-03-24 18:40:46', '2018-03-24 18:40:46');
INSERT INTO `voyager_theme_options` VALUES (16, 2, 'home_carousel_text3', '苟利国家生死以，岂因祸福避趋之。', '2018-03-24 18:41:07', '2018-03-24 18:41:07');
INSERT INTO `voyager_theme_options` VALUES (17, 2, 'home_carousel3', 'themes/March2018/wLZ9Vxs1UjFAAVjit2FC.png', '2018-03-24 18:41:10', '2018-03-24 18:41:10');
INSERT INTO `voyager_theme_options` VALUES (18, 2, 'home_video', '[{\"download_link\":\"themes\\/March2018\\/9WmYx5HSGkDIP1FXVhXP.mp4\",\"original_name\":\"index.mp4\"}]', '2018-03-24 21:06:33', '2018-03-24 21:06:33');
INSERT INTO `voyager_theme_options` VALUES (19, 2, 'home_video_image', 'themes/March2018/C1cWsIxCWA911RnP1Svg.png', '2018-03-24 21:07:36', '2018-03-24 21:07:36');
INSERT INTO `voyager_theme_options` VALUES (20, 2, 'vg_image', 'themes/March2018/DIKkUouTxfjtzwD0r12B.jpg', '2018-03-25 01:13:27', '2018-03-25 01:13:27');
INSERT INTO `voyager_theme_options` VALUES (21, 2, 'home_carousel_text4', '苟利国家生死以，岂因祸福避趋之。', '2018-03-25 12:14:13', '2018-03-25 12:14:13');
INSERT INTO `voyager_theme_options` VALUES (22, 2, 'home_carousel4', 'themes/March2018/aZvVF89yoTh0dQQBTfKe.jpg', '2018-03-25 12:14:13', '2018-03-25 12:14:13');
INSERT INTO `voyager_theme_options` VALUES (23, 2, 'category_background', 'themes/March2018/OFeStSWYyAWPjcSILUn3.jpg', '2018-03-25 13:06:26', '2018-03-25 13:06:26');

-- ----------------------------
-- Table structure for voyager_themes
-- ----------------------------
DROP TABLE IF EXISTS `voyager_themes`;
CREATE TABLE `voyager_themes`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `version` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `voyager_themes_folder_unique`(`folder`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of voyager_themes
-- ----------------------------
INSERT INTO `voyager_themes` VALUES (2, 'ReLift-Theme', 'relift', 1, '1.0', '2018-03-24 13:35:51', '2018-03-24 13:43:14');

SET FOREIGN_KEY_CHECKS = 1;
