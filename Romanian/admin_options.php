<?php

/* Translation Notice:
	Copyright Kaeden
   Last revision: 25th of February 2012 */
   

// Language definitions used in admin-options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'Eroare HTTP_REFERER. Dacă ai mutat acest forum la o nouă locație sau ai schimbat domeniile, trebuie să actualizezi URL-ul principal manual în baza de date (caută o_base_url în tabela config) și apoi curăță cache ștergând toate fișierele .php din directorul /cache.',
'Must enter title message'			=>	'Trebuie să completezi o denumire pentru forum.',
'Invalid e-mail message'			=>	'Adresa de e-mail completată pentru administrare este nevalidă.',
'Invalid webmaster e-mail message'	=>	'Adresa de e-amil completate pentru webmaster este nevalidă.',
'SMTP passwords did not match'		=>	'Trebuie să completezi parola SMTP de două ori identic pentru modificare.',
'Enter announcement here'			=>	'Completează anunțul tău aici.',
'Enter rules here'					=>	'Completează regulile tale aici.',
'Default maintenance message'		=>	'Forumul este închis momentan pentru întreținere. Te rugăm să revii în câteva minute.',
'Timeout error message'				=>	'Valoarea "Limită temporală vizite" trebuie să fie mai mică decât valoarea "Limită temporală conectare".',
'Options updated redirect'			=>	'Opțiuni actualizate. Redirecționare …',
'Options head'						=>	'Opțiuni',

// Essentials section
'Essentials subhead'				=>	'Esențial',
'Board title label'					=>	'Titlu Forum',
'Board title help'					=>	'Numele sau denumirea acestei comunități (afișare în antetul fiecărei pagini). Acest câmp <strong>nu</strong> poate conține HTML.',
'Board desc label'					=>	'Descriere forum',
'Board desc help'					=>	'O scurtă descriere a acestei comunități (afișare în antetul fiecărei pagini). Acest câmp poate conține HTML.',
'Base URL label'					=>	'URL Principal',
'Base URL help'						=>	'Adresa URL completă a forumului fără slash-ul de închiere (exemplu http://www.mydomain.com/forums). Aceasta <strong>trebuie</strong> să fie adresa corectă pentru ca toate opțiunile de administrare și moderare să funcționeze. Dacă întâlnești "Eroare referer", ai completat cel mai probabil, incorect.',
'Timezone label'					=>	'Fus orar standard',
'Timezone help'						=>	'Fusul orar standard pentru vizitatorii și utilizatorii care încearcă să se înregistreze pe forum.',
'DST label'							=>	'Ajustare Oră de Vară',
'DST help'							=>	'Bifează dacă ora de vară este în efect (devansează ceasul cu o oră).',
'Language label'					=>	'Limbă standard',
'Language help'						=>	'Limba standard pentru vizitatorii și utilizatorii care nu și-au exprimat încă opțiunile de limbă din profilul utilizatorului. Dacă înlături o traducere, această opțiune trebuie actualizată.',
'Default style label'				=>	'Temă grafică standard',
'Default style help'				=>	'Tema grafică implictă afișată vizitatorilor și utilizatorilor care nu și-au exprimat preferințele în panoul utilizatorului.',

// Essentials section timezone options
'UTC-12:00'					=>	'(UTC-12:00) Linia Temporală Internațională de Vest',
'UTC-11:00'					=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'					=>	'(UTC-10:00) Hawaii-Aleutian, Insula Cook',
'UTC-09:30'					=>	'(UTC-09:30) Insulele Marcheze',
'UTC-09:00'					=>	'(UTC-09:00) Alaska, Insula Gambier',
'UTC-08:30'					=>	'(UTC-08:30) Insulele Pitcairn',
'UTC-08:00'					=>	'(UTC-08:00) Pacific',
'UTC-07:00'					=>	'(UTC-07:00) Montan',
'UTC-06:00'					=>	'(UTC-06:00) Central',
'UTC-05:00'					=>	'(UTC-05:00) Estic',
'UTC-04:00'					=>	'(UTC-04:00) Atlantic',
'UTC-03:30'					=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'					=>	'(UTC-03:00) Amazon, Groenlanda Centrală',
'UTC-02:00'					=>	'(UTC-02:00) Atlanticul Central',
'UTC-01:00'					=>	'(UTC-01:00) Azore, Capul Verde, Groenlanda Estică',
'UTC'						=>	'(UTC) Vest-European, Greenwich',
'UTC+01:00'					=>	'(UTC+01:00) Central-European, Vest-African',
'UTC+02:00'					=>	'(UTC+02:00) Est-European, Central-African',
'UTC+03:00'					=>	'(UTC+03:00) Est-African',
'UTC+03:30'					=>	'(UTC+03:30) Iran',
'UTC+04:00'					=>	'(UTC+04:00) Moscova, Golf, Samara',
'UTC+04:30'					=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'					=>	'(UTC+05:00) Pakistan',
'UTC+05:30'					=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'					=>	'(UTC+05:45) Nepal',
'UTC+06:00'					=>	'(UTC+06:00) Bangladeș, Bhutan, Yekaterinburg',
'UTC+06:30'					=>	'(UTC+06:30) Insulele Cocos, Myanmar',
'UTC+07:00'					=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'					=>	'(UTC+08:00) Marea Chină, Vestul Australian, Krasnoyarsk',
'UTC+08:45'					=>	'(UTC+08:45) Vestul Sud-Estic Australian',
'UTC+09:00'					=>	'(UTC+09:00) Japonia, Coreea, Chita, Irkutsk',
'UTC+09:30'					=>	'(UTC+09:30) Central-Australian',
'UTC+10:00'					=>	'(UTC+10:00) Est-Australian',
'UTC+10:30'					=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'					=>	'(UTC+11:00) Insula Solomon, Vladivostok',
'UTC+11:30'					=>	'(UTC+11:30) Insula Norfolk',
'UTC+12:00'					=>	'(UTC+12:00) Noua Zeelandă, Fiji, Magadan',
'UTC+12:45'					=>	'(UTC+12:45) Insulele Chatham',
'UTC+13:00'					=>	'(UTC+13:00) Tonga, Insulele Phoenix, Kamchatka',
'UTC+14:00'					=>	'(UTC+14:00) Insulele Line',

// Timeout Section
'Timeouts subhead'					=>	'Timp și limite temporale',
'Time format label'					=>	'Format timp',
'PHP manual'						=>	'Manualul PHP',
'Time format help'					=>	'[Format actual: %s]. Vezi %s pentru opțiuni formatare.',
'Date format label'					=>	'Format dată',
'Date format help'					=>	'[Format actual: %s]. Vezi %s pentru opțiuni formatare.',
'Visit timeout label'				=>	'Limită temporală vizite',
'Visit timeout help'				=>	'Numărul de secunde pe care un utilizator trebuie să-l petreacă fară nicio activitate înainte de actualizarea datelor privitoare la ultima vizită (afectează în principal notificările pentru mesajele noi)',
'Online timeout label'				=>	'Limită temporală conectare',
'Online timeout help'				=>	'Numărul de secunde pe care un utilizator trebuie să-l petreacă fără nicio activitate înainte de înlăturarea din lista utilizatorilor conectați.',
'Redirect time label'				=>	'Timp redirecționare',
'Redirect time help'				=>	'Numărul de secunde de așteptare la redirecționare. Completat cu 0, nu se va afișa nicio pagină de redirecționare (nerecomandat).',

// Display Section
'Display subhead'					=>	'Afișare',
'Version number label'				=>	'Număr versiune',
'Version number help'				=>	'Afișează versiunea FluxBB în subsolul paginilor.',
'Info in posts label'				=>	'Informații utilizator în mesaje',
'Info in posts help'				=>	'Afișează informații despre autor sub numele de utilizator pe pagina de afișare a subiectelor de discuție. Informațiile se referă la: localizare, dată înregistrare, număr mesaje trimise și adresele de contact (e-mail și website).',
'Post count label'					=>	'Total mesaje utilizator',
'Post count help'					=>	'Afișează numărul de mesaje totale ale utilizatorului (influențează afișarea subiectelor, profilurilor și listei de utilizatori).',
'Smilies label'						=>	'Zâmbăreți în mesaje',
'Smilies help'						=>	'Transformă zâmbăreții în imagini grafice.',
'Smilies sigs label'				=>	'Zâmbăreți în semnături',
'Smilies sigs help'					=>	'Transformă zâmbăreții din semnături în imagini grafice.',
'Clickable links label'				=>	'Accesibilizare hiperlegături',
'Clickable links help'				=>	'Odată activată, FluxBB va detecta automat orice hiperlegătură din mesaje și o va transpune într-o opțiune de navigare.',
'Topic review label'				=>	'Sumar subiect',
'Topic review help'					=>	'Numărul maxim de mesaje afișat în sumarul de subiecte la trimiterea mesajelor (începând cu cel mai recent). Completează 0 pentru dezactivare.',
'Topics per page label'				=>	'Subiecte pe pagină',
'Topics per page help'				=>	'Numărul standard de subiecte afișate pe o pagină în forumuri. Utilizatorii pot personaliza această opțiune.',
'Posts per page label'				=>	'Mesaje pe pagină',
'Posts per page help'				=>	'Numărul standard de mesaje afișate pe o pagină într-un subiect de discuție. Utilizatorii pot personaliza această opțiune.',
'Indent label'						=>	'Dimensiune indentare',
'Indent help'						=>	'Completat cu 8, spațiul definit de tasta TAB va fi folosit la afișarea textului conținut între etichetele [code][/code]. Altfel, aceasta va reprezenta numărul de spații pentru indentarea textului.',
'Quote depth label'					=>	'Adâncime îmbricare [quote] - citare',
'Quote depth help'					=>	'Numărul maxim admis pentru îmbricarea etichetelor de citare [quote]. Îmbricările care depășesc această valoare nu vor fi luate în considerație.',

// Features section
'Features subhead'					=>	'Facilități',
'Quick post label'					=>	'Mesaj rapid',
'Quick post help'					=>	'Odată activată, FluxBB va adăuga un formular de publicare rapidă în subsolul paginii de afișare a subiectelor. În acest mod, utilizatorii pot trimite mesaje direct de pe pagina de afișare.',
'Users online label'				=>	'Utilizatori conectați',
'Users online help'					=>	'Afișează informațiile referitoare la vizitatorii și utilizatorii înregistrați care navighează pe forum pe pagina principală.',
'Censor words label'				=>	'Cenzurare cuvinte',
'Censor words help'					=>	'Activează această opțiune pentru a cenzura anumite cuvinte pe forum. Vezi %s pentru mai multe informații.',
'Signatures label'					=>	'Semnături',
'Signatures help'					=>	'Permite utilizatorilor să își atașeze semnături la mesajele trimise.',
'User ranks label'					=>	'Titulatură utilizatori',
'User ranks help'					=>	'Activează opțiunea pentru a folosi titlurile utilizatorilor. Vezi %s pentru mai multe informații.',
'User has posted label'				=>	'Utilizatorul a scris mai devreme',
'User has posted help'				=>	'Această opțiune afișează un punct înaintea subiectelor de discuție de pe pagina viewforum.php în cazul în care un utilizator a răspuns în acel subiect. Dezactivează dacă sesizezi un consum mare de resurse.',
'Topic views label'					=>	'Vizualizări subiecte',
'Topic views help'					=>	'Ține evidența numărului de vizite/afișări pentru un anumit subiect. Dezactivează dacă sesizezi un consum mare de resurse',
'Quick jump label'					=>	'Salt rapid',
'Quick jump help'					=>	'Activează meniul de selecție rapidă (salt la forum).',
'GZip label'						=>	'Conținut GZip',
'GZip help'							=>	'Dacă este activată, FluxBB va comprima în format gzip conținutul transmis la navigatorul web. Aceasta va reduce lățimea de bandă consumată, dar va spori nivelul CPU. Facilitatea necesită directiva zlib (--with-zlib). Notă: Dacă ai deja unul dintre modulele Apache mod_gzip sau mod_deflate configurate pentru a comprima scripturile PHP, ar trebuie să dezactivezi această opțiune.',
'Search all label'					=>	'Căutare în toate forumurile',
'Search all help'					=>	'Cînd este dezactivată, căutările vor fi permise doar într-un singur forum la un moment dat. Dezactivează dacă sesizezi un consum mare de resurse cauzat de căutarea excesivă.',
'Menu items label'					=>	'Blocuri suplimentare la meniu',
'Menu items help'					=>	'Adăugând hiperlegături HTML în această casetă de text, poți adăuga opțiuni suplimentare în meniul din antetul paginii. Format de adăugare: X = &lt;a href="URL"&gt;LINK&lt;/a&gt; unde X este poziția la care va fi afișată opțiunea (exemplu: 0 pentru început, 2 pentru a afișa după "Listă utilizatori", etc.). Adaugă înregistrările pe câte linie nouă.',

// Feeds section
'Feed subhead'						=>	'Fluxuri informații',
'Default feed label'				=>	'Tip standard flux',
'Default feed help'					=>	'Selectează timpul standard de afișare pentru fluxuri. Notă: Deselectarea oricărei opțiuni nu va dezactiva fluxurile, doar le va ascunde.',
'None'								=>	'Niciunul',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Durata seturilor cache pentru flux',
'Feed TTL help'						=>	'Fluxurile pot fi salvate în memoria cache pentru a coborî nivelul de resurse utilizate.',
'No cache'							=>	'Nu salva în cache',
'Minutes'							=>	'%d minute',

// Reports section
'Reports subhead'					=>	'Reportări',
'Reporting method label'			=>	'Metodă raportare',
'Internal'							=>	'Internă',
'By e-mail'							=>	'E-mail',
'Both'								=>	'Ambele',
'Reporting method help'				=>	'Selectează metoda standard pentru preluarea raportărilor subiectelor de discuție sau mesajelor. Poți alege o metodă internă, buletin de informații pe e-mail (vezi mai jos) sau ambele.',
'Mailing list label'				=>	'Buletin informații',
'Mailing list help'					=>	'O listă cu abonați separați prin virgulă. Utilizatorii de pe această listă vor fi destinatarii raportărilor.',

// Avatars section
'Avatars subhead'					=>	'Avatare',
'Use avatars label'					=>	'Utilizare Avatare',
'Use avatars help'					=>	'Odată activată, utilizatorii vor putea încărca un avatar ce va fi afișat sub titulatura lor.',
'Upload directory label'			=>	'Director încărcare',
'Upload directory help'				=>	'Directorul de încărcare pentru avatare (relativ la directorul principal FluxBB). PHP trebuie să poată suprascrie acest director.',
'Max width label'					=>	'Lățime maximă',
'Max width help'					=>	'Lățimea maximă admisă a unui avatar în pixeli (recomandat: 60).',
'Max height label'					=>	'Înălțime maximă',
'Max height help'					=>	'Înălțimea maximă admisă a unui avatar în pixeli (recomandat: 60).',
'Max size label'					=>	'Dimensiune maximă',
'Max size help'						=>	'Dimensiunea maximă admisă a unui avatar în baiți (recomandat: 10240).',

// E-mail section
'E-mail subhead'					=>	'E-mail',
'Admin e-mail label'				=>	'E-mail Administrator',
'Admin e-mail help'					=>	'Adresa de e-mail a Administratorului forumului.',
'Webmaster e-mail label'			=>	'E-mail Webmaster',
'Webmaster e-mail help'				=>	'Aceasta este adresa de e-mail stabilită ca adresă expeditoare pentru toate e-mail-urile trimise de forum.',
'Forum subscriptions label'			=>	'Abonamente forum',
'Forum subscriptions help'			=>	'Permite utilizatorilor să se aboneze la forumuri (să primească e-mail la subiectele nou deschise).',
'Topic subscriptions label'			=>	'Abonamente subiecte',
'Topic subscriptions help'			=>	'permite utilizatorilor să se aboneze la subiecte (să primească e-mail la răspunsurile nou trimise).',
'SMTP address label'				=>	'Adresă server SMTP',
'SMTP address help'					=>	'Adresa unui server SMTP extern prin care se trimite e-mail. Poți specifica un port personalizat dacă numărul portului serverului nu este cel standard 25 (exemplu: 3580). Lasă liber pentru suportul e-mail standard.',
'SMTP username label'				=>	'Nume utilizator SMTP',
'SMTP username help'				=>	'Nume utilizator pentru serverul SMTP. Completează utilizatorul doar dacă este solicitat de serverul SMTP (majoritatea serverelor <strong>nu necesită</strong> autentificare).',
'SMTP password label'				=>	'Parolă SMTP',
'SMTP change password help'			=>	'Bifează această opțiune dacă dorești să modifici sau să ștergi parola salvată.',
'SMTP password help'				=>	'Parola pentru serverul SMTP. Completează parola doar dacă este solicitată de serverul SMTP (majoritatea serverelor <strong>nu necesită</strong> autentificare). Te rugăm să completezi aceeași parolă de 2 ori pentru confirmare.',
'SMTP SSL label'					=>	'Criptare SMTP folosind SSL',
'SMTP SSL help'						=>	'Criptează conexiunea la serverul SMTP utilizând SSL. Ar trebui folosită doar dacă serverul face această solicitare și versiunea ta PHP suportă SSL.',

// Registration Section
'Registration subhead'				=>	'Înregistrare',
'Allow new label'					=>	'Permite înregistrări noi',
'Allow new help'					=>	'Controlează accesul la înregistrarea conturilor noi. Dezactivează doar în circumstanțe excepționale.',
'Verify label'						=>	'Verificarea înregistrărilor',
'Verify help'						=>	'Odată activată, utilizatorii vor primi pe e-mail o parolă aleatorie la înregistrarea pe forum. Aceasta poate fi modificată după autentificare, dacă se dorește acest lucru. Această facilitate necesită, de asemenea, ca utilizatorii să confirme noua adresă e-mail aleasă pentru cont la modificarea celei anterioare. Modalitatea aceasta de verificare este eficientă pentru a preveni înregistrările abuzive și pentru a stabili dacă utilizatorii au adrese de e-mail "corecte" în profil.',
'Report new label'					=>	'Notificare înregistrări noi',
'Report new help'					=>	'Odată activată, FluxBB va notifica utilizatorii abonați la notificări (verifică mai sus pe pagină) referitor la noile conturi înregistrate pe forum.',
'Use rules label'					=>	'Acord Regulament Forum',
'Use rules help'					=>	'Odată activată, utilizatorii trebuie să se declare de acord cu un set de reguli la înregistrare (completează regulamentul dedesubt). Regulile vor fi întotdeauna disponibile printr-o opțiune afișată în meniul din antetul paginilor.',
'Rules label'						=>	'Completează regulile tale aici.',
'Rules help'						=>	'Aici poți completa reguli sau alte informații pe care utilizatorii trebuie să le parcurgă și să le accepte la înregistrare. Dacă ai activat opțiunea anterioară, trebuie să completezi setul de reguli aici, altfel va fi dezactivată automat. Textul poate conține etichete HTML.',
'E-mail default label'				=>	'Configurație standard e-mail',
'E-mail default help'				=>	'Stabilește setările de intimitate la înregistrarea utilizatorilor.',
'Display e-mail label'				=>	'Afișează adresa e-mail.',
'Hide allow form label'				=>	'Ascunde adresa e-mail, dar permite trimiterea de mesaje prin formularul e-mail.',
'Hide both label'					=>	'Ascunde adresa e-mail și dezactivează trimiterea de mesaje prin formularul e-mail.',

// Announcement Section
'Announcement subhead'				=>	'Anunțuri',
'Display announcement label'		=>	'Afișare anunț',
'Display announcement help'			=>	'Activează pentru a afișa mesajul de mai jos pe forum.',
'Announcement message label'		=>	'Mesaj anunț',
'Announcement message help'			=>	'Acest text poate conține etichete HTML.',

// Maintenance Section
'Maintenance subhead'				=>	'Întreținere',
'Maintenance mode label'			=>	'Mod Întreținere',
'Maintenance mode help'				=>	'Odată activat, forumul va fi disponibil doar administratorilor. Această opțiune ar trebui folosită atunci când sistemul trebuie închis temporar pentru actualizări. <strong>ATENȚIE! Nu te deconecta când forumul este în mod întreținere.</strong> Nu vei mai avea posibilitatea să te autentifici.',
'Maintenance message label'			=>	'Mesaj Întreținere',
'Maintenance message help'			=>	'Mesajul care va fi afișat utilizatorilor când forumul este închis pentru întreținere. Lăsat liber, mesajul standard va fi afișat. Se pot folosi etichete HTML în acest mesaj.',

);
