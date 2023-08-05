-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema attendance
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema attendance
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `attendance` DEFAULT CHARACTER SET latin1 ;
USE `attendance` ;

-- -----------------------------------------------------
-- Table `attendance`.`course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `attendance`.`course` (
  `course_id` VARCHAR(100) NOT NULL,
  `course_name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`course_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `attendance`.`lecturer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `attendance`.`lecturer` (
  `lecturer_id` VARCHAR(100) NOT NULL,
  `lecturer_name` VARCHAR(100) NOT NULL,
  `gender` VARCHAR(100) NOT NULL,
  `phone_number` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`lecturer_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `attendance`.`lecture`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `attendance`.`lecture` (
  `lecture_id` VARCHAR(100) NOT NULL,
  `time` DATE NOT NULL,
  `lecturer_id` VARCHAR(100) NOT NULL,
  `course_id` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`lecture_id`),
  
  
  CONSTRAINT `lecture_ibfk_2`
    FOREIGN KEY (`lecturer_id`)
    REFERENCES `attendance`.`lecturer` (`lecturer_id`),
  CONSTRAINT `lecture_ibfk_3`
    FOREIGN KEY (`course_id`)
    REFERENCES `attendance`.`course` (`course_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `attendance`.`programme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `attendance`.`programme` (
  `programme_id` VARCHAR(100) NOT NULL,
  `programme_name` VARCHAR(100) NOT NULL,
  `description` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`programme_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `attendance`.`student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `attendance`.`student` (
  `student_id` VARCHAR(100) NOT NULL,
  `student_name` VARCHAR(30) NOT NULL,
  `gender` VARCHAR(10) NULL DEFAULT NULL,
  `programme_id` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`student_id`),
  
  CONSTRAINT `student_ibfk_1`
    FOREIGN KEY (`programme_id`)
    REFERENCES `attendance`.`programme` (`programme_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `attendance`.`programme_structure`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `attendance`.`programme_structure` (
  `programme_programme_id` VARCHAR(100) NOT NULL,
  `course_course_id` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`programme_programme_id`, `course_course_id`),
  
  
  CONSTRAINT `fk_programme_structure_programme1`
    FOREIGN KEY (`programme_programme_id`)
    REFERENCES `attendance`.`programme` (`programme_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_programme_structure_course1`
    FOREIGN KEY (`course_course_id`)
    REFERENCES `attendance`.`course` (`course_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `attendance`.`attendance`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `attendance`.`attendance` (
  `attendance` VARCHAR(100) NOT NULL,
  `student` VARCHAR(100) NOT NULL,
  `lecture` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`student`, `lecture`),
  
  CONSTRAINT `fk_attendance_student1`
    FOREIGN KEY (`student`)
    REFERENCES `attendance`.`student` (`student_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_attendance_lecture1`
    FOREIGN KEY (`lecture`)
    REFERENCES `attendance`.`lecture` (`lecture_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
