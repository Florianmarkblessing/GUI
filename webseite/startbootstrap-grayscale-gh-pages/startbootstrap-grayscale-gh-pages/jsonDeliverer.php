
<?php


$namearray = array (
		"Kalender", 
		"User Stories Explorer.docx",
		"Notizen.docx",
		"Projektdokumentation User Experience.docx",
		"ToDo-Liste.xlsx",
		"Pr�sentation User Experience 21.11.16.pptx",
		"Explorer",
		"Beispiele",
		"Anforderungskatalog.xlsx"
		);

$linkarray = array (
		"https://calendar.google.com/calendar/render??hl=de&pli=1#main_7%7Cmonth", 
		"https://docs.google.com/document/d/1GpQvmQHQxT2JunSAgikVFhw7dcFlLMmCgbikWV6Vvf0/edit",
		"https://docs.google.com/document/d/1bkLCvEBX56OBrECe89SFxpaqhlfQfZtOUNHNxM2Rlmc/edit",
		"https://docs.google.com/document/d/1R1VkvcuNqAgvH4NpReUMAcaNfdp92sxxK7GkR1rTMYc/edit#heading=h.gjdgxs",
		"https://docs.google.com/spreadsheets/d/1yvQaaoON5RaQHP-X64vRi5NHW7eZgXBm07IGbOvp1hU/edit#gid=0",
		"https://docs.google.com/presentation/d/15D33bCUltMJGjnlo2bmLP2YpY5zoJFtELeUf5qVLnxM/edit#slide=id.p4",
		"https://drive.google.com/drive/folders/0B5DLVTqFPj3ZTjU0STcxX3c5RFE",		
		"https://drive.google.com/drive/folders/0B5DLVTqFPj3ZOHBNcmpYUjBhWGc",
		"https://docs.google.com/spreadsheets/d/14QGK4LAcajOP0HBXqT4_k7ArSibyWg0u_Gy0p7RbgHQ/edit"	
		);


$randomMumber= rand(1, 4);

$line_chart_data =  '{ "name":"'.$namearray[$randomMumber].'", "prio": '.rand(1, 10).', "link":"'.$linkarray[$randomMumber].' "}';
$line_chart_data = json_encode($line_chart_data);



echo $line_chart_data;


	

?>