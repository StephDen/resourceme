--Code for creating tables just in case
CREATE TABLE Location(
    ID char(16)     Not Null,
    Date_Arrived Date,
    Country char(30),
    City char(30),
    Street_Address text,
    Foreign Key(ID) References Personal_Info(ID)
);
