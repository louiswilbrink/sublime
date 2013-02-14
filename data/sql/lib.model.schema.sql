
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- problem
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `problem`;

CREATE TABLE `problem`
(
    `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `is_active` INTEGER(1) DEFAULT 1 NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- solution
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `solution`;

CREATE TABLE `solution`
(
    `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
    `problem_id` INTEGER(11) NOT NULL,
    `step` INTEGER(4) NOT NULL,
    `instruction` TEXT NOT NULL,
    `instruction_type_id` INTEGER(4) DEFAULT 10 NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- instruction_type
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `instruction_type`;

CREATE TABLE `instruction_type`
(
    `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `style_class` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
