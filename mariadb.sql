USE loflog;
CREATE TABLE prrecords (id int auto_increment, conid varchar(16) default '', actid varchar(16) default '', setat datetime default '0000-00-00 00:00:00', primary key(id));
DELIMITER //
CREATE OR REPLACE PROCEDURE  insRecord( IN contact varchar(16), IN account varchar(16) )
BEGIN

INSERT INTO prrecords (conid,actid,setat) VALUES ( contact, account, current_timestamp() );

END //
DELIMITER ;