--Code for creating tables just in case
Create TABLE Status(
    ID char (16)          Not Null,
    Date_Updated date,
    Type_of_Process text,
    Process_Status text,
    Primary Key (ID)
);
