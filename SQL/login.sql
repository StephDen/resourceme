DECLARE @ID char(16);
DECLARE @Password char (16);
DECLARE @Token varchar(max);

SELECT ID
FROM Personal_Info
WHERE ID=@ID AND Password=@Password;
