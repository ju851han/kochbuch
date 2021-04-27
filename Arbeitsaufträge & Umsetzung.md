**Arbeitsauftrag1** <br>
23.04.2020: Abgabe1 beinhaltet ein Dokument mit folgenden Punkten:
* Purpose-Statement-Problem
* Persona
* Product Overview & Main Features
* Scope
* Darstellung 2 Geschäftsprozesse in Wireframes & BPMN, die in der Web-Applikation implementiert werden
* Tabelle mit Bewegungs- und Stammdaten
Deadline: 29.04.2020

**Arbeitsauftrag2**<br>
30.04.2020: Abgabe2 beinhaltet ein Dokument mit folgenden Punkten:
*  Moodboard
*  Style-Title
*  ER-Diagramm

Ebenso musste eine statische mobile friendly Begrüßungswebseite der Webapplikation abgegeben werden.
Deadline: 13.05.2020

**Arbeitsauftrag3**<br>
07.05.2020: <br>
*Teil 1 - Laravel-Projekt erstellen mithilfe der Eingabeaufforderung*
1.  Öffnen der Eingabeaufforderung bzw. cmd
2.  Zum Pfad hin navigieren, in welchen der Projektordner gespeichert werden soll<br>
    *HINWEIS*: Falls das nicht funktioniert und ein WINDOWS-Betriebssystem verwendet wird,<br>
             einfach `cd ~/desktop` eingeben
3.  Laravel-Projekt erzeugen mithilfe des Befehls: `composer create-project --prefer-dist laravel/laravel kochbuch`
4.  Pfad in neuen Projektordner wechseln: `cd kochbuch`
5.  Starten des Entwicklerservers: `php artisan serve`

*Teil 2 - Projekt erstellen in PHPStorm*
1.  Öffnen von PhpStorm
2.  "Create New Project from Existing Files" auswählen<br>
     *HINWEIS*: Diese Option findet man auch im Menüpunkt "Files"
3.  Auswählen der 4. Option "Web server is on remote host, files are accessible via FTP/SFTP/FTPS"
4.  Auf "Next" drücken
5.  Auswahl des Dateipfads zum neu erstellten Projekt
6.  "No server" auswählen
7.  Auf "Finish" drücken

*Teil 3 - Login  & Registrierung Funktionalität herstellen*
Im Terminal (cmd) von PHPStorm folgende Befehle nacheinander ausführen:
1.  `composer require laravel/ui --dev`
2.  `php artisan ui bootstrap --auth`

*Teil 4 - Installieren der SAAS- und CSS-Datei von Bootstrap*
Diese weiteren 2 Befehle ebenso im Terminal (cmd) von PHPStorm ausführen:
1.  `npm install`
2.  `npm run dev`

*Teil 5 - Einpflegen der bisherigen Dateien*
Projekterstellung-Link
Dateien vom [statischen Projekt](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/prototypes/kochbuch) werden ins soeben neu erstellte [dynamische Projekt](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch) eingepflegt.
1.  [welcome.html](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/prototypes/kochbuch/-/blob/master/welcome.html) wurde ins [welcome.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/welcome.blade.php) eingepflegt
2.  [Bilder](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/prototypes/kochbuch/-/tree/master/img) wurden im Ordner [public/img](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/tree/master/public/img) eingefügt
3.  [style.css](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/prototypes/kochbuch/-/tree/master/css) wurde im Ordner [public/css](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/tree/master/public/css) eingefügt
4.  Header, Navbar & Footer wurden auch im [resources/views/layouts/app.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/layouts/app.blade.php[Abgabe2_Kochbuch.pdf](uploads/deb0b3e9c928e0516feda30abb1f9734/Abgabe2_Kochbuch.pdf)[Abgabe1_Kochbuch.pdf](uploads/49a2dd4276972e8c31ebaa932eb87571/Abgabe1_Kochbuch.pdf)) dementsprechend angepasst

**Arbeitsauftrag4**<br>
14.05.2020: Erstellung der benötigten Views & RAW-DB-Access in Views<br>
Es wurden folgende Views erstellt: users.blade.php, kochbuch.blade.php, rezepte.blade.php, zutaten.blade.php.
Die Schritte werden am Beispiel der [users.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/8073512db4e6e4955336f5f6da35b24ec3da0763/resources/views/users.blade.php) erklärt:
1.  Einbinden des PHP-Codes, um alle Daten aus der gewünschten DB-Tabelle zu holen
```php
        @php
            $rows = DB::select('SELECT name,email FROM USERS');
        @endphp
```
2.  Um alle Userdaten in einer Tabelle darzustellen, musste folgender Code eingebunden werden
```php
 @foreach ($rows as $u)
                <tr>
                    <td> {{  $u->name }} </td>
                    <td> {{  $u->email }}</td>
                </tr>
            @endforeach
```
3. Route einrichten in [web.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/routes/web.php)
```php
Route::get('/users',function(){
    return view('users');
});
```

**Arbeitsauftrag5**<br>
28.05.2020: Auslagern des RAW-DB-Access von View in die Controller bei Kernobjekten des Projekts.
1. Erstellen der Views:
*  Ordner wurde erstellt und mit dem Objektname (z.B. [Rezepte](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/tree/master/resources/views/rezepte)) benannt
*  Darin wurden folgende Views erstellt:
o [create.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/create.blade.php) : Fürs Erzeugen eines Rezept<br>
o [edit.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/edit.blade.php) : Zum Bearbeiten eines Rezepts<br>
o [index.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/index.blade.php) : Zum Anzeigen eines spezifischen Rezepts<br>
o [show.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/show.blade.php) : Zum Anzeigen *aller* vorhandenen Rezepte<br>
*Hinweise:*<br>

a. Für edit und create wurde jeweils ein Formular implementiert. Bei beiden Views wurde das Attribut `"method="post""` bei `<form>` gesetzt. Nachdem öffneten `form`-Tag wurde ein `@csrf` eingefügt. Ebenso wichtig ist, dass die Werte bei `<label for="">` und `<input name="">` gleich sind und dieser Wert gleich der DB-Tabellenspaltenamens ist, in dem die Daten später gepostet werden sollen. Die Formulare enthalten auch ein `<input>`-Element mit Attribut `type="submit"`. Wenn der User dieses Element betätigt werden die Daten z.B. in die DB eingefügt. Ein Unterschied bei den beiden Views ist beim `<form>`-Element im Attribut `action` zu sehen (z.B. bei create `action="/rezepte"`: Nach Drücken des Submit-Buttons wird die Route vom  `action` im [web.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/routes/web.php) `Route::post('/rezepte','RezeptController@store')->name('rezepte.store');` nachgeschlagen und anschließend die entsprechende Methode (in diesem Fall store()) im RezeptController ausgeführt)<br>

b. Die bereits vorhandenen Views (z.B. rezept.blade.php) wurden verschoben, unbenannt in show.blade.php und angepasst (rauslöschen des RAW-DB Access in View und ändern der Bedinung der foreach-Schleife zu `$rezepte as $r)`). Für index und show wurde eine Tabelle implementiert (wie bereits im vorherigen Arbeitsauftrag geschildert). Allerdings benötigt man beim Index kein foreach, da man in dieser Ansicht nur ein einzelnes Rezept sehen will.


2. Erstellen der dazugehörigen Methoden im jeweiligen [Controller](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/tree/master/app/Http/Controllers)<br>
(z.B. Bei [RezeptController](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Http/Controllers/RezeptController.php) wurden folgende Methoden implementiert:
* index(): Zum Anzeigen eines spezifischen Rezepts
* create(): Zum Anzeigen der View[create.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/create.blade.php)
* store(): Zum Einfügen der vom User eingegebenen Daten im [create.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/create.blade.php) in den entsprechenden DB-Table
* show():  Zum Anzeigen *aller* vorhandenen Rezepte
3. Routen dementsprechend in [web.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/routes/web.php) eingetragen
```php
// Show all Rezepte
Route::get('/rezepte','RezeptController@index')->name('rezepte.index');

// Add Rezept
Route::get('/rezepte/create','RezeptController@create')->name('rezepte.create');
Route::post('/rezepte','RezeptController@store')->name('rezepte.store');

//Show Rezept
Route::get('/rezepte/{rID}','RezeptController@show')->name('rezepte.show');

//Update Rezept
Route::get('rezepte/{rID}/edit','RezeptController@edit')->name('rezepte.edit');
Route::post('/rezepte/{rID}/update','RezeptController@update')->name('rezepte.update');
```
4. Anschließend wurde die Funktionalität der Views geprüft.

**Arbeitsauftrag6**<br>
04.06.2020:<br>
*TEIL 1 - SAAS *
1. [variables_.scss](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/sass/_variables.scss) anpassen: Variablen für primary & secondary Farben einfügen
2. Befehl im Terminal (cmd) ausführen:
```
npm run dev
```
3. CSS in [app.scss](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/sass/app.scss) einfügen und dementsprechend anpassen
4. Befehl im Terminal (cmd) ausführen:
```
npm run production
```
*TEIL 2 - Bootstrap*
Einbinden von Bootstrap für Elemente in Formulare, Breadcrumbs, Tabellen sowie für dessen Positionierung.
1.  Grid System:<br>
    a. `<div class="container">...</div>` wurden eingefügt,<br>
    b. ebenso wurden Elemente mit der Klasse `"rows"` ergänzt und<br>
    c. Klassen für für Smartphones `col-xs-...` und für Laptops `col-md-...` wurden in alle vorhandenen Views eingebunden<br>
2. Formulare: Bei den create und edit Views wurde das `<input>`-Element mit dem Attribut `class="form-control"`  versehen. Die zusammengehörigen Paare von `<label>-` und `<input>`-Elementen wurden jeweils mit `<div class="form group">` umschlossen.
3. Position:<br>
   a. Im Footer von [layouts/app.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/layouts/app.blade.php) wurde das Attribut `class="fixed-bottom"` hinzugefügt, damit der Footer immer am unteren Rand des Displays erscheint<br>
   b. Die Navbar wurde ebenso um die Klasse `sticky-top` erweitert, d.h. wenn der User auf dem Bildschrim weiterscrollt, befindet sich die Navbar am obersten Rand des Displays bzw. Monitors.

*TEIL 3 - Eloquent*: Ersetzen des RAW-DB-Access mit Eloquent Access.<br>
1. Erstellung des Models und Ressource-Controllers:<br>
	a. Dafür muss folgenden Befehl ins Terminal ausgeführt werden.<br>
	```
	php artisan make:model Kochbuch -rmc
	```
	b. In die erzeugte Klasse (Model) [app/Kochbuch.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Kochbuch.php) die benötigte Attribute & Primary Key einfügen
	HINWEIS: Primary Key muss gesetzt werden, wenn dieser nicht `id` ist, damit die im Controller verwendete `find()`-Methode auf diesen Primary Key zugreifen kann.<br>
	c. In der *Migration *[create_kochbuches_table.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/database/migrations/2020_06_17_145715_create_kochbuches_table.php) wird die `function up()` mit den Attributen (Spaltennamen) und dessen Datentypen ergänzt.<br>
	d. Nun werden im [KochbuchController](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Http/Controllers/KochbuchController.php) die Methodenrümpfe ergänzt. Diese Methoden greifen nun auf die Model-Klassen zu.<br> 
	e. Anschließend im Terminal den Befehl fürs Erstellen der Tabellen in der DB ausführen:<br>        `php artisan migrate`<br>
       f. Relationen eintragen in Models (z.B. bei [Kochbuch.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Kochbuch.php) wurde in der `function users()` eine N:1-Beziehung zu [User.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/User.php) erstellt und `users_id` im Array von `$fillable` sowie in [kochbuch-migration](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/database/migrations/2020_06_17_145715_create_kochbuches_table.php) eingetragen. Auch wurde auch eine N:M-Beziehung zu [Rezept.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Rezept.php) erstellt. Dafür musste zuvor `php artisan make:migration create_kochbuch_rezept_table --create=category_product` im Terminal ausgeführt werden. Anschließend wurden [darin](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/database/migrations/2020_06_22_144740_create_kochbuch_rezept-table.php) die Spalten `id`,`kochbuch_kID` sowie `rezept_rID`angelegt.<br>
      g. Da Änderungen im Model gemacht wurden, muss nun anschließend der Befehl `php artisan migrate:fresh` durchgeführt werden.<br>
Diese Schritt 1.a bis 1.e wurde ebenso für Rezept und Zutat wiederholt.<br>
2.  Anpassen des Users Hinzufügen der Spalte Rolle<br> 
```
php artisan make:migration add_roles_to_users_table --table=users
```
3. Erstellung der *Seeders *zum Befüllen der DB<br>
	a. Dafür muss folgender Befehl im Terminal ausgeführt werden:<br>
	```
	php artisan make:seeder KochbuchesTableSeeder
	```
	b. Anschließend den erstellten Seeder (in diesem Fall [KochbuchesTableSeeder ](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/database/seeds/KochbuchesTableSeeder.php) öffnen und INSERT-Statements hinzufügen<br>
	c. Zum Neuerstellen des Composers muss nun der folgende Befehl im Terminal ausgeführt werden:<br>
	```
	composer dump-autoload
	```
	d. Anschließend muss der Befehl zum Befüllen der DB eingegeben werden:<br>
	```
	php artisan db:seed
	```
**Arbeitsauftrag7**<br>
18.06.2020:<br>
*TEIl 1 - Erstellung des mehrstufigen Prozesses(mithilfe von Session)*
1. Erstellung der benötigten Views
2. Anpassung der Routen in [web.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/routes/web.php)
3. Bearbeitung der create- & store-Funktionen im Controller sowie hinzufügen von weiterer Funktionen
4. Bei Funktion destroy wurde eine Flash-Message erstellt. Damit jeder, der gerade an der Web-App angemeldet ist, benachrichtigt, dass ein Kochbuch bzw. Rezept gelöscht wurde.
```php
Session::flash('alert-success', 'Kochbuch ' . $kochbuch->kName . ' wurde erfolgreich gelöscht.');
````
5. Um diese Flash-Message anzeigen zu können, wurde in [app.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/layouts/app.blade.php) folgende Zeilen eingefügt:
```php
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if (Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }} col-12 col-md-8 offset-md-2">{{ Session::get('alert-' . $msg) }}</div>
        @endif
    @endforeach
```

*TEIL 2 - Hinzufügen der Authorisierung-Überprüfungen*
Dabei wurde bei allen selbst erstellten Controller (z.B. [RezeptController](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Http/Controllers/RezeptController.php)) folgende Funktion hinzugefügt:
```php
 public function __construct()
    {
        $this->middleware('auth');
    }
```
Da jeder Nutzer (außer Admin) nur seine eigenen Kochbücher sieht, wurde bei der Methode `show` im [KochbuchController](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Http/Controllers/KochbuchController.php) dementsprechende Anpassungen vorgenommen: 
```php
if ($kochbuch->users_id == AUTH::user()->id || AUTH::user()->hasRole('admin')) {
...
}
```
Ebenso wurden Funktionen eingeschränkt mittels folgender Wenn-Anweisung (z.B. li-Elemente in Navbar in [app.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/layouts/app.blade.php)):
```php
@if (Auth::user()->hasRole('admin'))
               ...
@endif
```
**Arbeitsauftrag8**<br>
18.06.2020: Java Script bzw. JQuery Funktionen schreiben<br>
1. CookieConsent<br>
a) Hierfür wurde ein JS File namens [cookieconsent.js](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/js/cookieconsent.js) angelegt<br>
b) [app.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/layouts/app.blade.php) wurde erweitert um:
```html
<div class="modal fade cookieModal" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="cookieModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="cookieModalLabel">Cookie Information and Consent Request</h2>
            </div>
            <div class="modal-body">
                <h4>Einstellung zu Cookies</h4>
                <p>Wenn Sie über 16 Jahre sind, klicken Sie auf „Ich bin einverstanden“, um allen Verarbeitungszwecken
                    zuzustimmen. Bei der Benutzung unserer Seite stimmen Sie der Verarbeitung von Cookies zu.</p>
                <p>
                    <a href="/datenschutz" target="_blank">Klicken Sie hier, um die Datenschutz-Einstellungen anzusehen</a>
                </p>
            </div>
            <div class="modal-footer">
                <button id="cookieModalConsent" type="button" class="btn btn-primary btn-lg btn-block"
                        data-dismiss="modal">Ich bin einverstanden
                </button>
            </div>
        </div>
    </div>
</div>
```
c) Im File [/resources/js/app.js](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/js/app.js) wurde die Zeile `require('./cookieconsent');` hinzugefügt
d) Anschließend wurde laravel mix mittels `npm run dev` im Terminal ausgeführt

2. Details aufklappen 
a) [rezepte.js](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/js/rezepte.js) wurde die show_details() sowie hide_details() erstellt und im module.exports hinzugefügt
b) Die [rezepte/index.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/index.blade.php) wurden aufgesplittet in  [rezepte/index_tbody.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/index_tbody.blade.php) und in [rezepte/index.blade.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/rezepte/index.blade.php), worin mittels `@include()` die Rezeptdaten hineingezogen werden. Im index_tbody.blade.php wurde  das onkeyup - Attribut hinzugefügt
```html
<button id="btn_{{$r->rID}}" class="btn-primary" onclick="rezepte.show_details({{$r->rID}});">+
            </button>
```
c) Hierzu wurde die `indexJson()`-Methode  im [ZutatController ](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Http/Controllers/ZutatController.php)erstellt
d) Ebenfalls wurde in [web.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/routes/web.php) die benötigte Route eingefügt:
```php
//API for AJAX
Route::get('/api/v1/zutaten/{rID}', 'ZutatController@indexJson')->name('zutaten.indexJson');
```
e) Auch im[ bootstrap.js](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/1ee83e316531f3d7a2d16ea8cbacc5c01efd4799/resources/js/bootstrap.js) musste ein Verweis eingetragen werden:
```window.rezepte=require('./rezepte');```
f) Anschließend wurde `npm run dev` ausgeführt

**Arbeitsauftrag9**<br>
02.07.2020:<br>
*Teil 1: AJAX für Suche (nach Rezeptname)*
a) Dafür wurde die `filter()`- sowie `filerAjax()`-Methode im [RezeptController](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/app/Http/Controllers/RezeptController.php) angelegt
b)In [web.php](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/routes/web.php) die benötigte Route eingefügt:
```php
Route::get('/rezepte_ajax','RezeptController@filterAjax');
```
c) Dann wurde noch das `onkeyup` attribut zur Rezeptsuche-Inputfeld hinzugefügt:
```html
<input class="form-control" id="filter" name="filter" onkeyup="rezepte.filterAJAX();" placeholder="Suche Rezeptname"
                               type="text">
```
d) Im [rezepte.js](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/js/rezepte.js) wurde die filterAjax()-Funktion erstellt sowie folgendes hinzugefügt:
```
 module.exports =  {
    filterAJAX : filterAJAX
};

```
*Teil2: Validierung*
Die Validierung wurde auf den Controller sowie auch auf den Formularen vorgenommen.

**Arbeitsauftrag10**<br>
09.07.2020:<br>
*Teil 1 - Live gehen*
1. In PHP Form mit der rechten Maustaste auf das Projekt klicken / New File / Name: Procfile
2. Ins Procfile folgenden Inhalt schreiben:
```
web: vendor/bin/heroku-php-apache2 public/
```
3. Beim Cloud-Provider [Heroku](www.heroku.com) sich registrieren
4. Terminal (cmd) öffnen
  a.  mittels `cd` IN den Projektordner navigieren und anschließend folgende Befehle nacheinander ausführen:
  b. `heroku login`, eine Taste drücken und sich einloggen
  c. `create projektname` 
  d. `heroku buildpacks:set` 
  e. `git push heroku master`
5.  Beim [Dashboard von Heroku](https://dashboard.heroku.com/apps) das Projekt auswählen / Settings / Config Vars -> auf den Button "Reveal Config Vars" klicken und folgendes ausfüllen
```
DB_HOST
DB_DATABASE
DB_USERNAME
DB_PASSWORD
DB_DEBUG    true
APP_NAME
ASSET_URL
APP_KEY
```
Der APP_KEY wird mittels cmd-Befehl `php artisan --no-ansi key:generate -show`erstellt und muss mittels copy-paste in Heroku eingefügt werden 
6. Nun müssen folgende Befehle im Terminal ausführt werden
a. `git push heroku master`
b. `heroku open`
c. `heroku run "php artisan migrate:fresh --seed"`
*Teil 2 - Search Engine Optimization (SEO)*
Dabei wurde auf der View [welcome.blade.php ](https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/welcome.blade.php) versucht in den Headings sowie in den ersten 100 Wörtern die Suchbegriffe wie "Rezept", "Kochbuch", "Kochplan" etc. einzubauen, um von Suchmaschinen besser gefunden zu werden. Zusätzlich wurden entsprechende `<meta>`-Tags in [layouts/app_unlogged.blade.php]( https://gitlab.in.htwg-konstanz.de/lehre/meiglspe/sose20/wete/projects/kochbuch/-/blob/master/resources/views/layouts/app_unlogged.blade.php) angelegt, z.B.:
```php
  <meta name="keywords" content="Kochbuch, Rezepte, Rezeptsuche, Einkaufsliste, Wochenkochplan, Kochplan">
 
```
Mitdessen Hilfe können Informationen zur Web-Applikation an die Suchmaschine übermittelt werden.
