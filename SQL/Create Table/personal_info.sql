--Code for creating tables just in case
CREATE TABLE Personal_Info(
    ID char(16) Not Null,
    First_Name char(20),
    Last_Name char(20),
    Date_of_Birth Date,
    Sex char(15),
    Marital_Status char(15),
    Religion char(30),
    Citizenship char (40),
    Photograph text,
    Place_of_Birth char(40),
    Occupation char(30),
    Education_Level char(40),
    Ethnic_Origin char(50),
    Last_Updated datetime,
    Updated_By char(50),
    Last_Login datetime,
    Active_Status char(4),
    Primary Key(ID)
);
