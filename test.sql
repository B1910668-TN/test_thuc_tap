create database test2;
use test2;

create table test(
	maTK varchar(7) primary key,
    tenDN varchar(30) unique not null,
    tenHienThi varchar(30) not null,
    matkhauTK varchar(255) not null,
    email varchar(255) unique not null, 
    CONSTRAINT valid_email CHECK (email LIKE '%_@__%.%'),
    capTK varchar(7) default 'User' not null
);

DELIMITER $$
CREATE TRIGGER trigger_test BEFORE INSERT ON test
FOR EACH ROW
BEGIN
  DECLARE new_id INT;
  SELECT COUNT(*) INTO new_id FROM test;
  SET new_id = new_id + 1;
  SET NEW.maTK = CONCAT('TK', LPAD(new_id, 4, '0'));
END
$$ DELIMITER ;

insert into test(tenDN, tenHienThi, matkhauTK, email, capTK) values ('Test1', 'Tuyết Nga', '28d1f65bc521fa29e1038e3f6abfc025', 'ngab1910668@student.ctu.edu.vn','Admin');
