DECLARE @ID char(16);
SET @ID='MyUsername';

SELECT Personal_Info.ID,
Date_of_Birth,
Sex, Marital_Status,
Religion, Citizenship,
Photograph,
Place_of_Birth,
Occupation,
Education_Level,
Ethnic_Origin,
Last_Updated,
Updated_By,
Last_Login,
First_Name,
Last_Name,
Active_Status,
Country_of_Birth,
Phone,
Email,
Password,
Token,
Country_of_Origin,
Address_of_Origin,
City_of_Origin,
Special_Needs,
Depature_Date,
Date_Arrived,
Country,
City,
Street_Address
FROM Personal_Info
LEFT JOIN Location
ON Personal_Info.ID =Location.ID
WHERE Personal_Info.ID=@ID;
