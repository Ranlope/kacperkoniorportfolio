function liczba()
{
	var liczba=prompt("Podaj liczbe:", " ");
		if (liczba %2==0)
		{
			alert("Liczba "+liczba+" jest parzysta");
		}
		else
			{
				
				alert("Liczba "+liczba+" nie jest parzysta");
				
			}
}
	
	
function haslo()
{
	
		var login=prompt("Podaj login:", " ");
		var passw=prompt("Podaj haslo:", " ");
			if (login=="admin" && passw=="admin1")
			{
				document.write("<img src='jajko.jpg'>");
			}
				else
				{
					alert("blad logowania!");
				}
}


function test()
{
	var tab="";

	var numer=prompt("podaj liczbę","");
	for(i=1;i<=10;i++)
		{
			tab+=i*(numer)+"\n";
		}
alert(tab);
}		

function pierwsza()
{
	var e="";
		for(i=2;i<e;i++)
		if(e%i==1)
			{
			e+=i+"\n";
			}
alert e
}