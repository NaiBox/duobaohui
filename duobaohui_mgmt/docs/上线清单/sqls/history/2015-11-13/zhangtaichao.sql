ALTER TABLE `sh_duobaohui`.`sh_authority` 
DROP FOREIGN KEY `fk_sh_authority_sh_company1`;
ALTER TABLE `sh_duobaohui`.`sh_authority_group` 
DROP FOREIGN KEY `fk_sh_authority_group_sh_company1`;
drop table sh_admin_user_has_sh_authority_group;
drop table sh_alarm;
drop table sh_app_block_model_rel;
drop table sh_app_config;
drop table sh_app_block;
drop table sh_app_model;
drop table sh_app_template;
drop table sh_app_theme;
drop table sh_authority;
drop table sh_authority_group;
drop table sh_authority_group_has_sh_authority;
drop table sh_bad;
drop table sh_brand;
drop table sh_brand_bak;
drop table sh_category_operation;
drop table sh_collection;
drop table sh_district;
drop table sh_gallary;
drop table sh_gallary_pic;
drop table sh_good;
drop table sh_goods_alarm_reason;
drop table sh_goods_attr;
drop table sh_goods_attribute;
drop table sh_goods_cart;
drop table sh_goods_check_log;
drop table sh_goods_comment;
drop table sh_goods_info;
drop table sh_goods_specs;
drop table sh_goods_type;
drop table sh_order_goods;
drop table sh_province;
drop table sh_reject;
drop table sh_return_goods;
drop table sh_score;
drop table sh_sms;
drop table sh_sms_info;
drop table sh_test;
drop table sh_alipay_refund;
drop table sh_device_token;
drop table sh_lottery_code;
drop table sh_notice;
drop table sh_notice_has_sh_user;
drop table sh_push;
drop table sh_push_log;
drop table sh_user_action;
drop table sh_user_config;
drop table sh_user_group;
drop table sh_user_level;
drop table sh_user_mobile;
drop table sh_user_thirdpart_login;
ALTER TABLE `sh_duobaohui`.`sh_user` 
ADD COLUMN `login_sms_code` VARCHAR(6) NOT NULL DEFAULT '' AFTER `is_real`,
ADD COLUMN `login_sms_code_expire` INT(10) UNSIGNED NOT NULL DEFAULT '0' AFTER `login_sms_code`;
