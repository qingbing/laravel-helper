
CREATE TABLE `zf_platform` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `key` varchar(32) NOT NULL COMMENT '项目平台代码',
  `name` varchar(100) NOT NULL COMMENT '平台名称',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '平台描述',
  `is_enable` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '启用状态[1:未启用,2:已启用]',
  `sort_order` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '显示排序',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_key` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='平台(项目)';

insert into `zf_platform` ( `key`, `name`, `description`, `is_enable`, `sort_order`) values ( 'admin', '管理后台', '后台管理平台', '1', '2');
insert into `zf_platform` ( `key`, `name`, `description`, `is_enable`, `sort_order`) values ( 'member', '会员平台', '会员管理平台', '1', '3');
insert into `zf_platform` ( `key`, `name`, `description`, `is_enable`, `sort_order`) values ( 'program', '程序后台', '程序员程序代码管理平台', '1', '1');