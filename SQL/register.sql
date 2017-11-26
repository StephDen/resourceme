--Query for Registrated a new account
INSERT INTO Personal_Info (ID,Password)
VALUES(@ID, @Password)
;
INSERT INTO Location(ID)
VALUES (@ID)
;
INSERT INTO STATUS(ID)
VALUES (@ID)
;
