<?PHP
if($config['site']['credits_page'])
{
	$main_content .= '
	<center>
		New Gesior-AAC
	</center>
	<hr>
		<b>Developers</b><br>
		Xart - Official Developer
		<br><br>
		<b>Special Greetings to people</b><br>
		Kowol<br>
		Gesior<br>
	<hr>
		Korzystaj�c z tego oprogramowania zgadzasz si� na nasz� licencj� i termin�w. Ten program nie ma �adnych gwarancji, chodzi jak to jest.
		<br><br>
		Je�li link do tej strony nie jest widoczna na stronie internetowej, prosimy o kontakt z tw�rc�w Gesior-AAC natychmiast. 
	<hr>
	';
}
else
	$main_content .= "Invalid subtopic. Can't load page.";
?>