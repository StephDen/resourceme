--Query for Registrated a new account

DECLARE @ID char(16);
DECLARE @Password char(16);
DECLARE @Token varchar(max);
SET @Password = 'MyPassword';
SET @ID = 'MyUsername';
SET @Token = 'ad1354gdfs2f4se3refaefvsfvgafbgsh';

INSERT INTO Personal_Info (ID, Password, Token)
VALUES(@ID, @Password, @Token)
;
INSERT INTO Location(ID)
VALUES (@ID)
;
INSERT INTO STATUS(ID)
VALUES (@ID)
;
