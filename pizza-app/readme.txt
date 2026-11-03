Laravel Pizza feladat

Források:
 - Sablon mappa, benne a felhasználandó sablon.html-el, képekkel, assets-el
 - Mintak mappa, benne a segítségként kiadott minta pdf-ek.
 - pizza.sql fájl az adatbázis kialakításához

1. Adatbázis létrehozása
Hozza létre a "pizza" adatbázist és importálja be a mellékelt sql fájlt!

2. A projekt létrehozása
Hozzon létre egy új Laravel projektet pizza-app néven!

3. Weboldal létrehozása
Alakítsa ki a mellékelt sablon segítségével a weboldal kinézetét, oldalszerkezetét!
A böngésző címsorában megjelenő cím és a navbar-brand --> "Laravel Pizza" legyen!

A menü:
 - Laravel Pizza (navbar-brand) --> indexre mutasson
 - Akciós pizzák 		--> indexre mutasson
 - Összes pizza 		--> ~/osszes útvonalra mutasson
 - Nem tudok választani 	--> ~/ajanlat útvonalra mutasson

A footer szöveges tartalma:
	- Készítette: Saját név - osztály
	  pl.: Kiss Béla - 13.AB

4. Adatbázis elérése
Alakítsa ki az adatbázis kapcsolatot a létrehozott adatbázissal!
Hozza létre a szükséges modelleket és controllereket!
Alakítsa ki ezek kapcsolódását egymáshoz és az útvonalakhoz!

5. Útvonalak kialakítása
Alakítsa ki az alábbi útvonalakat és hozzon hozzá létre egy-egy nézetet!
 ~/   			Főoldal útvonala
 ~/adatlap/{id}   	Adatlap útvonala - egy pizza összes adata
 ~/osszes 	  	Összes pizza útvonala
 ~/osszes/{p}		Összes pizza rendezésének útvonala, paraméterben a rendezési feltétel 
		  	(abc, cba, 123 vagy 321)

6. Egyes nézetek részletes kialakítása, adatbázis lekérdezések
 - A Főoldalon készítsen egy három oszlopos gridet, MD törésponttal, amelyben: 
	- Megjeleníti az akciós pizzák adatait
	- A grid celláiban:
		- Az első sor 2-es szintű címsor, mely a pizza nevét tartalmazza
 		- A címsor linkként funkcionál, az ~/adatlap/{id} oldalra mutat
		- A címsor alatti bekezdésben a pizza feltéteit jelenítse meg, alatta sortöréssel az akciós árat
		- Az ár félkövér és piros legyen, Ft-ban megadva, lásd a mintát
		- A következő bekezdésben jobbra igazítva a "További méretek" felirat linkként funkcionál, 
		  az ~/adatlap/{id} oldalra mutat
		- A második bekezdés alatt helyezzen el egy vízszintes elválasztó vonalat

 - Az Adatlap oldalon:
	- Az 1-es szintű címsorban jelenítse meg a pizza nevét
	- A címsor alatti bekezdésben jelenítse meg a pizza feltéteit
	- A második bekezdésben attól fűggően, hogy akciós-e a pizza vagy sem jelenítse meg a 
	  "Ez a pizza nem akciós, lehet később az lesz!" vagy a "Ez a pizza most a készlet erejéig akciós!"
	   szövegeket
	- A második bekezdésben lévő szöveg félkövér
	- A második bekezdés alatt jelenítse meg a pizza árait méretek szerint egy pontozott listában
		- A 24 cm-s pizza árát tartalmazza az adatbázis, a 32 cm-es pizza 25%-al, 
		  a 45 cm-es pizza 50%-al drágább legyen az alapárnál
		- Ha a pizza akicós, akkor az ára félkövér és piros színű legyen

 - Az Összes pizza oldalon:
	- A címsor alatt készítse el a rendezés almenüt egy bekezdésben:
		"Név szerint növekvő" 	~/osszes/abc útvonalra mutasson
		"Név szerint csökkenő" 	~/osszes/cba útvonalra mutasson
		"Ár szerint növekvő"	~/osszes/123 útvonalra mutasson
		"Ár szerint csökkenő" 	~/osszes/321 útvonalra mutasson
		- Az ~/osszes útvonalhoz rendezés nélkül kérje le a pizzák adatait
		- Az "abc", "cba", "123" és "321" paraméterek, melyeket a táblázat rendezéséhez használjon 
	  	  az ~/osszes/{p} útvonallal. A paraméterek segítségével készítse el a név szerint növekvő/csökkenő
	  	  ár szerint növekvő/csökkenő adatbázis lekérdezéseket! 
	  	  A rendezés alapértelmezése az adatbázis szerinti sorrend legyen!
		- Mindkét útvonalhoz ugyanzat a nézetet adja vissza
	- A bekezdés alatt készítse el a csíkozott, keretezett táblázatot:
		- A pizza nevére helyezzen el egy linket, amely a ~/adatlap/{id} útvonalra mutasson
		- A 24 cm-s pizza árát tartalmazza az adatbázis, a 32 cm-es pizza 25%-al, 
		  a 45 cm-es pizza 50%-al drágább legyen az alapárnál
		- Ha a pizza akicós, akkor az ára félkövér és piros színű legyen
		- Ha a pizza akciós, akkor az utolsó osztlopban jelenjen meg az "Akciós!!" felirat, formázása
	  	  ugyanaz, mint az akciós áré

 - Nem tudok választani oldalon:
	- Adja vissza az adatlap nézetét egy az adatbázisból sorsolt random pizza adataival
 	  Újratöltéskor mindig egy új pizzát mutasson


