SELECT First_Name, Last_Name, Phone, Email, Sex, Marital_Status, Education_Level, Country_of_Birth, Country_of_Origin, Special_Needs
FROM Personal_Info
WHERE Phone = @phone AND
Email = @email AND
Sex = @sex AND
Marital_Status = @marital_status AND
Education_Level = @education_level AND
Country_of_Birth = @country_of_birth AND
Special_Needs = @special_needs; 
