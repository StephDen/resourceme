SELECT First_Name, Last_Name, Phone, Email, Sex, Marital_Status, Education_Level, Country_of_Birth, Country_of_Origin, Special_Needs
FROM Personal_Info
WHERE Phone = @phone OR @phone=Null AND
Email = @email OR @email=Null AND
Sex = @sex OR @sex=Null AND
Marital_Status = @marital_status OR @marital_status = Null AND
Education_Level = @education_level OR @education_level = Null AND
Country_of_Birth = @country_of_birth OR @country_of_birth = Null AND
Special_Needs = @special_needs OR @special_needs = Null; 
