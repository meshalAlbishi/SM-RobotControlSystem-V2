CREATE TABLE `arm` (
  `arm_id` int(11) NOT NULL AUTO_INCREMENT,
  `power` tinyint(4) NOT NULL,
  PRIMARY KEY (`arm_id`)
);

CREATE TABLE `arm_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arm_id` int(11) NOT NULL,
  `power` tinyint(4) NOT NULL,
  `log_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `arm_id_fk_idx` (`arm_id`),
  CONSTRAINT `arm_id_fk_log` FOREIGN KEY (`arm_id`) REFERENCES `arm` (`arm_id`)
)  ;


CREATE TABLE `motors` (
  `motor_id` int(11) NOT NULL,
  `degree` int(11) NOT NULL,
  `arm_id` int(11) NOT NULL,
  PRIMARY KEY (`motor_id`),
  KEY `arm_id_fk_idx` (`arm_id`),
  CONSTRAINT `arm_id_fk` FOREIGN KEY (`arm_id`) REFERENCES `arm` (`arm_id`)
)  ;


CREATE TABLE `motors_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motor_id` int(11) NOT NULL,
  `degree` int(11) NOT NULL,
  `log_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `motor_id_fk_idx` (`motor_id`),
  CONSTRAINT `motor_id_fk` FOREIGN KEY (`motor_id`) REFERENCES `motors` (`motor_id`)
) ;

INSERT INTO `arm_control`.`arm` (`arm_id`,`power`) VALUES (1,0);
INSERT INTO `arm_control`.`motors` (`motor_id`, `degree`, `arm_id`) VALUES (1,0,1);
INSERT INTO `arm_control`.`motors` (`motor_id`, `degree`, `arm_id`) VALUES (2,0,1);
INSERT INTO `arm_control`.`motors` (`motor_id`, `degree`, `arm_id`) VALUES (3,0,1);
INSERT INTO `arm_control`.`motors` (`motor_id`, `degree`, `arm_id`) VALUES (4,0,1);
INSERT INTO `arm_control`.`motors` (`motor_id`, `degree`, `arm_id`) VALUES (5,0,1);
INSERT INTO `arm_control`.`motors` (`motor_id`, `degree`, `arm_id`) VALUES (6,0,1);




