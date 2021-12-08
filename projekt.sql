-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 24 Cze 2019, 13:18
-- Wersja serwera: 10.1.40-MariaDB-0ubuntu0.18.04.1
-- Wersja PHP: 5.6.40-8+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykul`
--

CREATE TABLE `artykul` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `artykul`
--

INSERT INTO `artykul` (`id`, `image`) VALUES
(1, 'huawei.jpg'),
(2, 'glass.jpg'),
(3, 'huawei2.jpg'),
(4, 'oneplus.jpg'),
(5, 'motorola.jpg'),
(6, 'asus.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `idKategorii` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `tytul` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `tresc` varchar(10000) COLLATE utf8_polish_ci NOT NULL,
  `wstep` varchar(500) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `idKategorii`, `nazwa`, `tytul`, `tresc`, `wstep`) VALUES
(1, 4, 'Huawei', 'Huawei ma 90 dni na domknięcie formalności i pożegnanie z USA', 'Współpraca Huaweia z Google\'em, Qualcommem i innymi amerykańskimi firmami jednak nie zakończy się z dnia na dzień. Dotychczasowi partnerzy mają trzy miesiące na uporanie się z całym procesem. To żadna tajemnica, że decyzja Trumpa jest nie na rękę nie tylko Chińczykom, ale i amerykańskim firmom, dla których Huawei jest klientem lub/i dostawcą infrastruktury. Straty, które te mogłyby ponieść w skutek nagłego zerwania kontraktów biznesowych, są ciężkie do oszacowania.\r\n\r\nNajpewniej dlatego, a nie z troski o Huaweia, amerykański Departament Handlu postanowił wydłużyć cały proces.\r\n\r\nHuawei ma czas do 19 sierpnia\r\nJak wynika z informacji, do których dotarł Reuters, Huawei dostał czasową licencję na amerykańskie produkty.\r\n\r\nCo to oznacza dla użytkowników? Chociażby to, że Google wciąż może wspierać Huaweia w aktualizowaniu już istniejących smartfonów (przy czym Huawei w oświadczeniu zapewnił, że będzie to robił nawet mimo zakazu współpracy z Google\'em). Amerykańscy dostawcy podzespołów dostali natomiast czas na wywiązanie się z zamówień.\r\n\r\nWciąż jest światełko w tunelu\r\nCo prawda szefostwo Huaweia przekonuje, że żadne zakazy firmy nie zabolą, bo ta przewidziała czarny scenariusz już 15 lat temu, ale nie byłbym tego taki pewien.\r\n\r\nHuawei może dysponować własnym oprogramowaniem, ale bez względu na to, jak cudowne by ono nie było, zachodniemu konsumentowi ciężko będzie wyobrazić sobie telefon z zablokowanym lub ograniczonym dostępem do YouTube\'a, Map czy Google Play.\r\n\r\nDobra wiadomość jest taka, że Google\'owi taki obrót spraw też się nie podoba. W oficjalnym komunikacie firma jasno podkreśla, że jedynie dostosowuje się do wymogów prawnych. Również przedstawiciele Huaweia zauważają, że są skonfliktowani z amerykańskim rządem, nie z firmami. Teraz, gdy partnerzy dostali czas na reakcję, nie będę zaskoczony jeśli Google i jego armia prawników znajdzie sposób na udostępnianie Chińczykom swoich usług okrężną drogą.\r\n\r\nJak będzie naprawdę? Powinniśmy się przekonać do 19 sierpnia.', 'Współpraca Huaweia z Google\'em, Qualcommem i innymi amerykańskimi firmami jednak nie zakończy się z dnia na dzień.'),
(2, 6, 'googleGlass', 'Google Glass doczekały się następcy. Oto Glass Enterprise Edition 2', 'Inteligentne okulary Glass, znane niegdyś jako Google Glass, nie sprawdziły się na rynku konsumenckim. Jak jednak przekonywałem kilka miesięcy temu, produkt całkiem dobrze radzi sobie w branży biznesowej. Na tyle dobrze, że producent postanowił wypuścić drugą generację. Glassy przeszły długą drogę. Projekt został publicznie zademonstrowany w połowie 2012 roku, a w kwietniu 2013 chętni mogli zaopatrzyć się w prototyp. Dopiero 4 lata później prace zostały sfinalizowane, ale producent zmienił grupę docelową. Skupienie się na branży biznesowej okazało się strzałem w 10.\r\n\r\nOkulary Glass Enterprise Edition 2 są szybsze i bardziej funkcjonalne\r\nBiorąc pod uwagę, że od prezentacji pierwszych prototypów do wypuszczenia drugiej generacji gotowego produktu minęło 7 lat, można powiedzieć, że zmieniło się niewiele. Glassy wciąż mają formę przezroczystego wyświetlacza ulokowanego tuż przed jednym z oczu. Urządzenie nie zostało ani zauważalnie zminiaturyzowane, ani nawet upiększone.\r\n\r\nZmieniło się za to wnętrze. Dzięki nowemu, 4-rdzeniowemu układowi i większej ilości pamięci, okulary mają pracować szybciej i lepiej radzić sobie z bardziej wymagającymi operacjami, w tym z uczeniem maszynowym.\r\n\r\nOdświeżony został także aparat. Ten wciąż ma 8 Mpix, ale ma robić lepszej jakości zdjęcia i filmy. Producent zatroszczył się o funkcję strumieniowego przesyłania obrazu, dzięki czemu ktoś inny może w czasie rzeczywistym przechwytywać obraz, pokrywający się z punktem widzenia użytkownika. Nie zabrakło nowych modułów łączności, w tym portu USB-C, mającego zapewnić szybsze ładowanie. Okulary mają mieć też wydajniejszy akumulator.\r\n\r\nOkulary Glass Enterprise Edition 2 są wodoszczelne, a ich wnętrze skrywa:\r\n\r\nekran 640 x 360 pikseli;\r\nukład Snapdragon XR1 (4 x 1,7 GHz);\r\n3 GB pamięci RAM;\r\n32 GB pamięci wewnętrznej;\r\naparat 8 Mpix;\r\nmoduł Bluetooth 5.1\r\ndwuzakresowe Wi-Fi 802.11ac;\r\nbaterię 820 mAh. Kilka lat temu podobnej specyfikacji nie powstydziłby się topowy smartfon. Dziś mówimy o okularach.\r\n\r\nNad całością czuwa Android Oreo, którego zaletą ma być podatność na modyfikacje, aby każde przedsiębiorstwo mogło dostosować Glassy do własnych upodobań. Google przygotował też różne rodzaje oprawek, zaprojektowanych z myślą o różnych stanowiskach.\r\n\r\nLiczby nie kłamią. Inteligentne okulary Glass zwiększają produktywność\r\nW sierpniu 2017 DHL informował o zakończeniu pilotażowego programu “Vision Picking”, który miał na celu sprawdzenie, czy okulary AR są w stanie poprawić komfort i wydajność pracy w jego magazynach. Okazało się, że jak najbardziej  -  uwolnienie rąk pracowników od instrukcji pakowania oraz informacji na temat lokalizacji pojedynczych paczek przełożyło się na 15-procentowy wzrost wydajności. Google chwali się ponad 30 markami korzystającymi z jego okularów, na których liście znajdują takie firmy jak Opel, Samsung czy wspomniany DHL. Okulary zdają ponoć egzamin także w branży medycznej. Przy okazji projekt Glass zmienił właściciela\r\nDawniej urządzenie rozwijane było przez firmę Google X, która — w ramach przejęcia Google\'a przez Alphabet - zmieniła nazwę na X.\r\n\r\nTeraz projekt trafił pod skrzydła zespołu nazwanego Google AR/VR, który zajmuje się opracowywaniem różnych rozwiązań związanych z rozszerzoną i wirtualną rzeczywistością.\r\n\r\nOkulary Glass Enterprise Edition 2 wyceniono na 999 dolarów, czyli równowartość 3850 zł bez podatków. ', 'Inteligentne okulary Glass, znane niegdyś jako Google Glass, nie sprawdziły się na rynku konsumenckim.'),
(3, 4, 'zakazHuawei', 'Zakaz nałożony na Huaweia pokazuje jak przyszłościowo myśli Apple', 'Najpierw padło na chińskie ZTE, a teraz od rozwiązań Google\'a odcięty został Huawei. To samo może przydarzyć się i innym producentom smartfonów. Oprócz jednego - Apple. Producent iPhone\'ów od lat konsekwentnie buduje własny ekosystem. Dominująca pozycja Androida na rynku mobilnym ma wiele negatywnych konsekwencji dla producentów smartfonów. I nie chodzi wcale o to, że decyzje dotyczące rozwoju platformy i stosowanych standardów podejmuje jedna firma. Google promuje własne rozwiązania, ale daje też partnerom sporo swobody.\r\n\r\nGdzie jest problem? Gigant z Mountain View o wiele mocniej stara się przywiązywać producentów do własnych usług niż systemu. Gmail, Mapy, Asystent, Zdjęcia to tylko część produktów Google\'a, które wraz z samą platformą Android tworzą ekosystem, bez którego większość użytkowników nie wyobraża sobie nowoczesnego telefonu. Huawei w tarapatach? Szef giganta zaprzecza\r\nO znaczeniu GMS (Usługi mobilne Google) dość dotkliwie może przekonać się teraz Huawei, który wciągnięty został na czarną listę rządu Stanów Zjednoczonych. Oznacza to brak dostępu do amerykańskich produktów, w tym nie tylko rozwiązań Google\'a, ale i firm Qualcomm, Intel i Broadcom.\r\n\r\nRen Zhengfei przekonuje, że dla giganta nie będzie to wielkim problemem, o czym donosi m.in. Channel News Asia. Założyciel Huaweia miał od 15 lat przygotowywać się na tę chwilę. Przyszłość Huaweia zabezpieczać ma szereg autorskich innowacji i technologii, dzięki którym firma nie odczuje bardzo braku dostępu do produktów z USA. W wielu kwestiach może być to prawdą. Huawei od dawna inwestuje w opracowywanie własnych układów i modemów, dzięki czemu będzie w stanie obejść się bez gotowych innowacji Intela czy Qualcomma. To samo dotyczy też Androida, którego zastąpić może autorska platforma na bazie AOSP (Android Open Source Project).\r\n\r\nFirma ma też własny sklep z aplikacjami (AppGallery), a przekonanie deweloperów do publikowania w nim gier i programów nie będzie problemem. Gorzej sprawa wygląda z usługami Google\'a, z których korzysta masa użytkowników.\r\n\r\nDla Huaweia najdotkliwsze będzie właśnie odcięcie od usług Google\'a\r\nGmail to świetny klient pocztowy, który wzbogacany jest systematycznie o nowe dodatki. Zdjęcia to szalenie użyteczna usługa, która gwarantuje bezproblemową synchronizację treści. Asystent to najszerzej dostępny wirtualny pomocnik. Jest też wyszukiwarka Google\'a, bez której ciężko w ogóle wyobrazić sobie korzystanie z sieci. Huawei może próbować zastępować je własnymi odpowiednikami. Firma robi to już zresztą na macierzystym rynku, ale rozwiązania stworzone z myślą o Chinach niekoniecznie sprawdzą się w innych częściach świata. Opracowanie odpowiednio dopracowanych rozwiązań wymaga czasu, o czym przekonał się choćby Samsung, który próbował błysnąć stworzonym na szybko asystentem Bixby.\r\n\r\nZresztą, dotyczy to nie tylko Huaweia, ale i każdego innego producenta smartfonów z Androidem. Google wraz z platformą dodaje szereg świetnych rozwiązań, co jest bardzo wygodnym rozwiązaniem dla producentów, którzy nie muszą wykładać gigantycznych sum na prace nad aplikacją z mapami czy wirtualnym asystentem. Odcięcie od nich może być bardzo bolesne. Szczególnie, że poszczególne smartfony są zbliżone pod kątem technicznym. Na decyzję o zakupie często wpływają drobiazgi, a to, że w jednym modelu można znaleźć pakiet wykorzystywanych na co dzień usług, a w drugim nie, do małych detali nie należy. To duży problem.\r\n\r\nNajlepiej na wszystkim wyszedł Apple, który od lat działa bardzo konsekwentnie\r\nW przyszłości podobny los, który spotkał Huaweia, może dotknąć potencjalnie każdą firmę, korzystającą z Androida — Samsunga, LG czy Sony. Ale jest jedna firma, której to nie straszne. Apple kompletnie nie musi przejmować się tak systemem Google\'a, jak i jego usługami.\r\n\r\nDlaczego? Ponieważ od dawna ma ich odpowiedniki:\r\n\r\nZdjęcia? Jest iPhoto sprzężone z chmurą Apple\'a;\r\nMapy? Firma z Cupertino ma swoje i z roku na rok są coraz lepsze;\r\nAsystent? Jest — rozwijana od lat Siri.\r\nPrzykładów jest znacznie więcej, ale należy pamiętać też, że ekosystem Apple\'a to też wiele rozwiązań, które nie są dostępne dla innych producentów — zatem będące łakomym kąskiem dla klientów. Co więcej, chodzi są to rzeczy dopracowane oraz dopasowane do autorskiego systemu iOS, które gigant opracowuje od wielu lat. Zresztą system to kolejna przewaga — to Apple decyduje o jego aktualizacji, a nie Google, jak w przypadku telefonów z Androidem. W podobnej sytuacji do Apple\'a mogli być również inni producenci\r\nTo oczywiście pewne uogólnienie, ale w tym momencie jedynym \"zwycięzcą\" na rynku wydaje się Apple, którego ekosystem jest w pełni autorski. Firma przez lata konsekwentnie opracowywała własne usługi i nawet mimo początkowych problemów (jak w przypadku Map Apple\'a) nie szła na łatwiznę poprzez korzystanie z \"gotowców\".\r\n\r\nZ perspektywy czasu dziwić może jedynie, że Samsung nie wykazał się większą cierpliwością i konsekwencją podczas prac nad alternatywami dla usług Google\'a. Tym bardziej, że mogłoby to zwiększyć konkurencyjność na rynku. Szkoda.', 'Najpierw padło na chińskie ZTE, a teraz od rozwiązań Google\'a odcięty został Huawei. To samo może przydarzyć się i innym producentom smartfonów.'),
(4, 2, 'onePlusOficjalnie', 'OnePlus 7 Pro oficjalnie. Ma ekran 90 Hz bez wcięcia, wysuwany aparat i potężną specyfikację', 'Długo oczekiwany OnePlus 7 doczekał się także wariantu Pro, który jest najlepiej wyposażonych, najszybszym, najpłynniejszym i - prawdopodobnie - najładniejszym smartfonem w historii marki. OnePlus przyzwyczaił konsumentów do wypuszczania w półrocznych odstępach pojedynczych flagowców nowej generacji. Nic nie trwa jednak wiecznie.\r\n\r\nOstatecznie również i Chińczyków skusiła moda na warianty plus/pro/premium. Mocniejsza wersja dołączyła do tańszego OnePlusa 7.\r\n\r\nOnePlus 7 Pro ma wysuwany aparat i niczym nieoszpecony wyświetlacz\r\nNajbardziej rzucająca się w oczy zmiana względem podstawowego OnePlusa 7 to wygląd, podyktowany zastosowaniem aż 6,7-calowego ekranu bez żadnych wcięć i otworów. Symetrię zaburza jedynie \"bródka\", znajdująca się w dolnej części. Aby osiągnąć takie wzornictwo, projektanci ukryli aparat do selfie w wysuwanym module. Ten był ponoć testowany 300 000 razy, więc ma się cechować wysoką wytrzymałością. Tylny panel wykonany jest ze szkła i skrywa centralnie ulokowany potrójny aparat. Wersje kolorystyczne to czarna (Mirror Gray), niebieska z gradientem (Nebula Blue) oraz migdałowa (Almond), przy czym ich dostępność uzależniona jest od wariantów pamięciowych.\r\n\r\nCertyfikatu IP świadczącego o wodoszczelności zabrakło, ale producent przekonuje, że OnePlus 7 Pro jest odporny na działanie wody.\r\n\r\nChińczycy chwalą się także zaimplementowaniem nowego, silniejszego silniczka wibracyjnego. Wyświetlacz Fluid AMOLED z odświeżaniem 90 Hz\r\nStandardem w przypadku smartfonów są ekrany 60 Hz, natomiast wyższe wartości zarezerwowane były dotychczas dla garstki smartfonów dla graczy. W OnePlusie 7 Pro znalazł się natomiast panel wyświetlający 90 klatek na sekundę. W przypadku paneli AMOLED to najlepszy wynik na rynku.\r\n\r\nOznacza to, że wszystkie animacje będą dużo płynniejsze niż na zdecydowanej większości dostępnych na rynku smartfonów. Według producenta, to właśnie płynność ma być największym atutem telefonu. Ekran Fluid AMOLED ma proporcje 19,5:9 oraz wspiera standard wysokiej rozpiętości tonalnej HDR10+. Zintegrowany jest ponadto z optycznym czytnikiem linii papilarnych. Ten — według zapewnień producenta — jest najszybszy na rynku, pozwalając odblokować telefon w 0,21 sekundy.\r\n\r\nWarto zauważyć, że OnePlus po raz pierwszy zastosował ekran o rozdzielczości wyższej niż FullHD. Dokładnie 3120 x 1440 pikseli. Multimedialną stronę OnePlusa 7 Pro dopełniają głośniki stereo Dolby Atmos, zastosowane po raz pierwszy w smartfonach tego producenta.\r\n\r\nOnePlus 7 Pro z potrójnym aparatem\r\nKolejny wyróżnik względem tańszego modelu to aparat zbudowany z trzech sensorów, a nie dwóch. Z tyłu obudowy znalazły się:\r\n\r\naparat główny Sony IMX586 48 Mpix z optyką f/1,6 oraz optyczną stabilizacją obrazu;\r\naparat 16 Mpix z ultraszerokokątnym obiektywem (117 stopni) o jasności f/2,2;\r\naparat 8 Mpix z teleobiektywem 3x o jasności f/2,4 i optyczną stabilizacją obrazu.\r\nOnePlus postanowił więc wpisać się w jeden z nowszych fotograficznych trendów i zastosować trzy aparaty z obiektywami o różnych ogniskowych. Cieszy zastosowanie potrójnego, a nie podwójnego przybliżenia w teleobiektywie. OnePlus zastosował także potrójny system autofokusu, a aplikacja aparatu zintegrowana jest z usługą Obiektyw Google, pozwalającą wyszukiwać informacje na temat fotografowanych obiektów.\r\n\r\nAlgorytm UltraShot ma odpowiadać za większą rozpiętość tonalną, a Nightscape 2.0 to udoskonalony tryb nocny, zbierający światło przez kilka sekund w celu poprawy jakości zdjęć robionych w trudnych warunkach.\r\n\r\nOnePlus 7 Pro ma potężną specyfikację\r\nProducent twierdzi, że jego nowy flagowiec będzie rynkowym wzorem wydajności i płynności. Smartfon ma topowego Snapdragona 855, nawet 12 GB pamięci RAM, ultraszybką pamięć UFS 3.0 oraz ekran 90 Hz. To wszystko kontrolowane przez lekkie i zoptymalizowane oprogramowanie OxygenOS 9.5, bazujące na Androidzie 9 Pie. OnePlus chwali się nie tylko dużą ilością RAM-u, ale i ma on być \"inteligentniejszy\". Oprogramowanie ma ładować do pamięci podręcznej najczęściej używane apki, by te uruchamiały się szybciej. Bateria ma sporą pojemność 4000 mAh. Dzięki technologii Warp Charge 3.0, 20 minut ma wystarczyć na naładowanie baterii od 0 do ok. 50 proc. Zabrakło niestety ładowania bezprzewodowego. Nowością w oprogramowaniu jest Zen Mode, który ma pomóc w walce z uzależnieniem od telefonu. Po jego włączeniu przez 20 minut można tylko odbierać pilne powiadomienia oraz robić zdjęcia. Nie zabrakło również dodatków dla graczy, pozwalających m.in. wyciszyć powiadomienia podczas grania.\r\n\r\nOnePlus obiecuje wydawanie dużych aktualizacji Androida przez dwa lata oraz łatek bezpieczeństwa przez trzy lata.\r\n\r\nOnePlus 7 Pro dostępny będzie także w wersji 5G\r\nWariant obsługujący sieć nowej generacji nazywa się po prostu OnePlus 7 Pro 5G. Biorąc pod uwagę, że w naszej części świata 5G dopiero raczkuje, dla nas ten model pozostaje jedynie ciekawostką. Zanim technologia zadomowi się na polskim rynku, OnePlus zdąży wprowadzić na rynek kilka nowych smartfonów.\r\n\r\nOnePlus 7 Pro: ceny i dostępność\r\nCeny — w zależności od wariantu — prezentują się tak:\r\n\r\nOnePlus 7 Pro (6/128 GB) - 719 euro (ok. 3100 zł);\r\nOnePlus 7 Pro (8/256 GB) - 759 euro (ok. 3270 zł);\r\nOnePlus 7 Pro (12/256 GB) - 829 euro (ok. 3970 zł).\r\nCóż, tanio nie jest. To już ceny na poziomie flagowców Samsunga czy Huaweia. Zamówienia będzie można składać od 15 maja o 11:00 czasu polskiego.\r\n\r\nPolska firma NTT System ogłosiła, że podpisała z OnePlusem umowę dystrybucyjną na wyłączność. Wkrótce OnePlus 7 oraz 7 Pro mają być oficjalne dostępne w polskich sklepach z elektroniką, gdzie można je będzie kupić za złotówki.', 'Długo oczekiwany OnePlus 7 doczekał się także wariantu Pro, który jest najlepiej wyposażonych, najszybszym, najpłynniejszym i - prawdopodobnie - najładniejszym smartfonem w historii marki.'),
(5, 5, 'motorolaMotoX', 'Motorola Moto X, czyli \"smartfon zaprojektowany przez ciebie\" [Podróż w czasie]', 'Dziś przypomnimy sobie początek nowej ery w historii Motoroli. Gdy Google przejął Motorolę w połowie 2011 roku, szybko wyszło na jaw, że obaj giganci wspólnie pracują nad smartfonem, który otworzy nowy rozdział w historii kultowej marki. Tajemniczy projekt rozwijany był pod kryptonimem \"X Phone\".\r\n\r\nPierwsze konkrety na temat urządzenia zaczęły wypływać na początku roku 2013. Na jego temat mniej i bardziej oficjalnie wypowiadali się przedstawiciele nie tylko Google\'a i Motoroli, ale nawet amerykańskich operatorów. Padały takie określenia jak \"przełom\" czy \"smartfon, który wywrze presję na Apple\'u i Samsungu\". Mowa była również o \"zmianie reguł gry\".\r\n\r\nSpekulacjom (w dużej mierze nietrafionym) nie było końca, ale w marcu nieco światła na charakter projektu rzucił Guy Kawasaki — legendarny marketingowiec, który wspierał wówczas Google\'a w budowaniu wizerunku Motoroli. Udostępnił on wideo promocyjne personalizowanego porsche, pytając: \"czy nie byłoby wspaniale, gdybyś mógł spersonalizować telefon w taki sposób?\".\r\n\r\nW lipcu Motorola wreszcie oficjalnie zapowiedziała smartfon, który — jak się okazało — został nazwany Moto X. Nieprzypadkowo nastąpiło to tuż przed amerykańskim Dniem Niepodległości. Po pierwsze, miał to być pierwszy telefon zaprojektowany i wyprodukowany w całości w USA. Po drugie, smartfon miał zapewnić rodakom wolność wyboru. Długo oczekiwana premiera odbyła się 1 sierpnia 2013 roku.\r\n\r\nMoto Maker, czyli zaprojektuj sobie telefon sam\r\nMotorola nie kłamała obiecując, że Moto X będzie smartfonem \"zaprojektowanym przez ciebie\". Wraz z urządzeniem klientom udostępniona została strona Moto Maker, która pozwalała spersonalizować telefon w sposób niespotykany nigdy wcześniej (i nigdy później). Za pomocą Moto Makera konsumenci mogli wybrać:\r\nczarny lub biały przód;\r\ntylną pokrywę z plastiku (18 różnych barw i faktur) lub z 4 różnych gatunków drewna;\r\nkolor przycisków i pierścienia dookoła aparatu (7 barw do wyboru);\r\nilość pamięci (16, 32 lub 64 GB);\r\nnapis na tylnej pokrywie;\r\nnapis wyświetlany podczas uruchamiania telefonu;\r\ntapetę.\r\nIstniała nawet opcja przeprowadzenia wstępnej konfiguracji, dzięki czemu telefon już po wyjęciu z pudełka był zalogowany na konto Google i gotowy do działania.\r\n\r\nSamych konfiguracji kolorystycznych i wykończeniowych było ponad 250. Doliczając do tego warianty pamięciowe oraz opcjonalne napisy i animacje, dosłownie każdy sprzedany egzemplarz mógł być jedyny w swoim rodzaju.\r\n\r\nNiestety początkowo Moto Maker (jak i sam smartfon Moto X) zarezerwowany był dla mieszkańców Stanów Zjednoczonych. Na polski rynek trafiła dopiero druga generacja telefonu, choć Moto Maker nie pojawił się u nas nigdy. Moto X był telefonem obsługiwanym bezdotykowo\r\nKolejny wyróżnik to funkcja Touchless Control. Motorola zmodyfikowała układ Qualcomma, dodając dwa autorskie procesory. Jeden odpowiedzialny był za ciągłą pracę mikrofonu przy niskim zużyciu energii, a drugi za kontrolowanie czujników i wykrywanie gestów.\r\n\r\nDzięki temu Moto X wykrywał komendy głosowe i gesty nieustannie, nawet przy wygaszonym ekranie. Wiele operacji można było wykonać głosowo, a aparat uruchomić obracając nadgarstek. Motorola wykorzystała też potencjał ekranu AMOLED. Funkcja Active Display wyświetlała godzinę, datę i powiadomienia na wygaszonym wyświetlaczu, dając szybki wgląd na najważniejsze informacje.\r\n\r\nSpecyfikacja mogła jednak rozczarowywać\r\nObudowa telefonu skrywała:\r\n4,7-calowy ekran AMOLED o rozdzielczości 1280 x 720 (312 ppi);\r\nzmodyfikowany układ Snapdragon S4 Pro (2 x 1,7 GHz);\r\n2 GB pamięci RAM;\r\n16–64 GB pamięci wewnętrznej;\r\naparat 10 Mpix z przysłoną f/2,4;\r\nprzedni aparat 2 Mpix;\r\nniewymienną baterię 2200 mAh.\r\nStandardem były już wówczas ekrany FullHD i 4-rdzeniowe układy, dlatego osoby oczekujące pełnoprawnego flagowca i specyfikacji adekwatnej do ceny nie kryły rozczarowania. Produkcja w USA, komplikujący produkcję i dystrybucję Moto Maker oraz autorskie dodatki sprawiły jednak, że firma musiała gdzieś szukać oszczędności.\r\n\r\nWraz z premierą Moto X Motorola uśmierciła swoją nakładkę Motoblur i postawiła na niemal czystego Androida z garścią autorskich dodatków. Ta polityka nie uległa zmianie do dziś.\r\n\r\nHuczne zapowiedzi zwiastujące wywrócenie rynku do góry nogami okazały się mocno przesadzone. Trzeba jednak przyznać, że Moto X pod wieloma względami faktycznie wyznaczyła kierunek, którego Motorola trzyma się nawet po wykupieniu jej od Google\'a przez Lenovo. Moto Maker nie przetrwał, ale do modeli Moto Z można dokupić magnetyczne klapki, wykonane z różnych materiałów. Niechęć do nakładek i ścisła współpraca z Google\'em wciąż jest jednym z głównych wyróżników modeli z linii Moto. Z kolei głosowa interakcja przy wygaszonym ekranie stała się rynkowym standardem. O wielkiej rewolucji mówić nie można, ale Moto X wywołała na tyle duże zamieszanie, że zasługuje na własny wpis na kartach technologicznej historii.', 'Dziś przypomnimy sobie początek nowej ery w historii Motoroli.'),
(6, 1, 'zenFone6', 'ASUS ZenFone 6 oficjalnie. Nieźle wyceniony flagowiec z obracanym aparatem', 'ZenFone 6 to flagowiec ASUS-a na 2019 rok, który wyróżnia się obracanym aparatem głównym, ale to nie jedyna zaleta tego urządzenia. Oto, co warto wiedzieć na temat nowości tajwańskiej firmy. ASUS w 2018 roku wprowadził flagowe ZenFone\'y 5 i 5Z, których wygląd wyraźnie wzorowany był na modelu iPhone X. W 2019 roku Tajwańczycy zaprezentowali jednak o wiele bardziej oryginalny sprzęt z wyższej półki. Firma już w 2014 roku miała w swojej ofercie model o nazwie ZenFone 6, ale nowością ciężko określić nawet mianem \"duchowego następcy\".\r\n\r\nASUS ZenFone 6, czyli brak wcięcia i przedniego aparatu\r\nZenFone 6 wyraźnie różni się od modeli 5 i 5Z. Producent tym razem zastosował bowiem ekran bez wyraźnego wcięcia, który ma minimalne ramki z trzech stron oraz niewielką \"bródkę\" u dołu. Umożliwiło to nie wykorzystanie wysuwanego modułu czy kamerki w otworze, a rezygnację z tego dodatku. ZenFone 6 wyposażony został za to w obracany podwójny aparat główny o nazwie Flip Camera. Rozwiązanie przypomina nieco to z Galaxy A80. Robienie selfie będzie zajmować oczywiście więcej czasu (konieczność obrócenia modułu), ale jakość zdjęć przechwytywanych przez główny aparat będzie znacznie wyższa niż w przypadku dodatkowej kiepskiej kamerki do selfie.\r\n\r\nFirma przekonuje, że jej zmotoryzowany system obracania ekranu jest bardzo wytrzymały, dzięki wykorzystaniu bardzo wytrzymałego stopu cyrkonu (Liquid Metal). Ma on bez problemu przetrwać ponad 100 tys. cykli złożony/obrócony, co przekłada się na 28 obrotów dziennie przez 5 lat. ASUS ZenFone 6 wyposażony został 6,4-calowy ekran IPS LCD o modnym formacie 19,5:9, rozdzielczości FullHD+ (2340 x 1080 pikseli) oraz jasności na poziomie 600 nitów. Panel — jak wspomniałem — ma bardzo małe ramki, dzięki czemu wypełnia przód w 92 proc. Dodatkową zaletą ekranu jest wsparcie dla trybu HDR10. Firma nie poszła o krok dalej i nie wykorzystała ekranowego czytnika linii papilarnych. Postawiono za to na bardziej tradycyjny skaner na środku tylnego panelu. Ramę wykonano z metalu, przód i tył chronią tafle Gorilla Glass 6.\r\n\r\nASUS umieścił ponadto gniazdo Jack 3,5 mm, a do tego zadbał o złącze USB typu C oraz potrójny slot na karty (na dwie karty SIM i kartę pamięci microSD). Głośniki mogą do tego pracować w trybie stereo, a ten do rozmów został estetycznie wkomponowany w ramkę.\r\n\r\nObracany podwójny aparat ma matrycę 48 Mpix i ultraszerokokątny obiektyw\r\nASUS jest kolejnym producentem, który sięgnął po sensor Sony IMX586 z technologią Quad Bayer, która umożliwia łączenie danych z sąsiadujących pikseli, by poprawić jakość zdjęć w gorszych warunkach (finalne zdjęcia w 12 Mpix). ZenFone 6 wyposażony został w podwójny moduł złożony z:\r\n\r\nsensora głównego 48 Mpix ze standardową optyką o jasności f/1,8 i optyczną stabilizacją obrazu;\r\ndodatkowego sensora 13 Mpix z ultraszerokokątną optyką o kącie widzenia 125 stopni. Rozwiązania to wspiera podwójna dioda doświetlająca i system ostrzenia oparty na detekcji fazy (PDAF) oraz laserowym pomiarze. Aparat na pierwszy rzut oka nie wyróżnia się na tle podobnych rozwiązań, ale ASUS przekonuje, że jego rozwiązanie działa inaczej niż w smartfonach rywali. ZenFone 6 ma jednocześnie robić zdjęcia z wykorzystaniem obu aparatów. Kadr fotografowany jest pod różnymi kątami, a dane z sensorów są następnie łączone w jedno zdjęcie. Aparat 48 Mpix ma być w szczególności wykorzystywany do rejestracji twarzy fotografowanych osób, co gwarantować ma świetną szczegółowość. Dane z dodatkowej matrycy mają umożliwić osiągniecie mniejszego poziomu zniekształceń oraz dobrej jakości zoom cyfrowy. Łączenie danych z obu aparatów usprawnić ma również robienie zdjęć szerokich kadrów oraz w warunkach słabego oświetlenia (tryb Super Night).\r\n\r\nObracany mechanizm jest pomysłowo wykorzystany\r\nNachylenie aparatu można precyzyjnie regulować, co ma ułatwić robienie zdjęć, filmowanie oraz łapanie ciekawych kadrów. ASUS przekonuje, że obrócenie aparatu o 90 stopni ułatwia fotografowanie przy ziemi (np. zwierzaków). Co istotne, interfejs odpowiedzialny za obracanie modułu wyświetlany jest w każdej aplikacji fotograficznej (Instagram, Snapchat itp.).\r\n\r\nW oprogramowaniu zaimplementowany został także tryb automatycznej panoramy. Po jego włączeniu telefon obraca moduł, robiąc jednocześnie serię zdjęć, które są następnie łączone w 180-stopniową panoramę.\r\n\r\nSmart Key ułatwi korzystanie z telefonu\r\nNa bocznej krawędzi urządzenia pojawił się też specjalny przycisk, który służy standardowo do wywoływania Asystenta Google\'a. Użytkownicy po jego wciśnięciu i przytrzymaniu mogą od razu wydawać polecenia głosowe. Do klawisza można przypisać również inne funkcje (np. uruchamianie latarki).\r\n\r\nW aplikacji aparatu przyciski regulacji głośności pozwalają regulować kąt nachylenia aparatu, a Smart Key do wyzwalania spustu migawki.\r\n\r\nASUS ZenFone 6 ma wydajny układem i ogromną baterię\r\nZenFone 6 — jak na flagowca z 2019 roku przystało — oparty jest na układzie Snapdragon 855. Uwagę zwraca jednak nietypowa podwójna płyta główna - jej elementy umieszczone są na dwóch płytkach, które umieszczone są jedna nad drugą, co umożliwiło zaoszczędzenie miejsca w środku.\r\n\r\nTopowa jednostka Qualcomma współpracuje z 6 GB lub 8 GB pamięci RAM LPDDR4X, a wbudowanej pamięci UFS 2.1 jest 64, 128 lub 256 GB.\r\n\r\nUwagę przykuwa bateria o pojemności aż 5000 mAh. ASUS postanowił pokazać więc innym firmom, że można stworzyć flagowy sprzęt z dużym ogniwem. Plusem jest też obsługa szybkiego ładowania w standardzie Quick Charge 4.0.\r\n\r\nInne zalety urządzenia to obsługa dźwięku 24-bit/192 kHz i technology DTS Headphone X czy wsparcie dla kodeka aptX HD. Interfejs ZenUI przypomina stoskowego Androida\r\nZenFone 6 debiutuje z nową nakładką ZenUI 6, która bazuje na Androidzie 9 Pie. Rozwiązanie to ma mieć interfejs zbliżony do przygotowanego przez Google\'a, ale wzbogacone jest o kilka autorskich rozwiązań Tajwańczyków:\r\n\r\nszybkie wybudzanie podwójnym dotknięciem ekranu;\r\ninteligentne zarządzanie głośnością;\r\nciemny motyw graficzny;\r\nfunkcja Splendid do własnej kalibracji ekranu.\r\nASUS chwali się dodatkowo świetną optymalizacją ZenUI 6, dzięki czemu aplikacje jak dialer, galeria czy klawiatura mają otwierać się szybciej niż na innych smartfonach. Firma zapowiada do tego, że ZenFone 6 otrzyma aktualizację nie tylko do Androida Q, ale i kolejnej wersji R.\r\n\r\nASUS ZenFone 6: ceny i dostępność\r\nASUS ZenFone 6 w sprzedaży na rynku europejskim pojawi się 23 maja i będzie dostępny w kolorze czarnym lub srebrnym. Poszczególne warianty pojemnościowe w Polsce zostały wycenione na:\r\n\r\nASUS ZenFone 6 (6 GB/64 GB) - 2199 zł;\r\nASUS ZenFone 6 (6 GB/128 GB) - 2399 zł;\r\nASUS ZenFone 6 (8 GB/256 GB) - 2599 zł.\r\nZenFone 6 jest więc jednym z najtańszych flagowców ze Snapdragonem 855, a do tego kusi wieloma ciekawymi dodatkami.', 'ZenFone 6 to flagowiec ASUS-a na 2019 rok, który wyróżnia się obracanym aparatem głównym, ale to nie jedyna zaleta tego urządzenia.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `COMMENT` text COLLATE utf8_polish_ci NOT NULL,
  `LOGS` datetime NOT NULL,
  `idposta` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`ID`, `NAME`, `COMMENT`, `LOGS`, `idposta`) VALUES
(1, 'misfit', 'qwerty', '2019-05-24 16:30:34', 1),
(2, 'misfit', 'qwertyuiop', '2019-05-24 16:30:48', 1),
(3, 'misfit', 'qwertyuiop', '2019-05-24 16:30:52', 1),
(4, 'misfit', 'qwertyuikh', '2019-05-24 16:34:31', 2),
(5, 'misfit', 'oneplusss', '2019-05-24 16:34:48', 2),
(6, 'Dominik', 'asdfgh', '2019-05-25 16:50:55', 1),
(10, 'misfit', 'ZS', '2019-05-29 10:59:17', 1),
(11, 'misfit', 'hejka', '2019-05-29 10:59:46', 2),
(12, 'misfit', 'Pieknie', '2019-06-24 12:51:02', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(1, 'mi9.jpg', ''),
(2, 'samsungs10.jpg', ''),
(3, 'vivoiqoomonster.jpg', ''),
(4, 'samsungs10plus.jpg', ''),
(5, 'samsungs10v2.jpg', ''),
(6, 'samsungs10e.jpeg', ''),
(7, 'honorv20.jpg', ''),
(8, 'mate20x.jpg', ''),
(9, 'p30pro.jpg', ''),
(10, 'mimix3.jpg', ''),
(11, 'pocof1.png', ''),
(12, 'mi8.jpeg', ''),
(13, 'mi8pro.jpg', ''),
(14, 'op6t.png', ''),
(15, 'rogphone.jpg', ''),
(16, 'zenfone5z.jpg', ''),
(17, 'oneplus6.jpg', ''),
(18, 'mate20.jpg', ''),
(19, 'vivonexs.jpg', ''),
(20, 'mate20pro.jpg', ''),
(21, 'meizu16th.jpg', ''),
(22, 'xperiaxz2.jpg', ''),
(23, 'razerphone2.jpg', ''),
(24, 'note9.jpg', ''),
(25, 'samsungs9plus.jpg', ''),
(26, 'samsungs9.jpg', ''),
(27, 'miblackshark.jpg', ''),
(28, 'pixel3xl.jpg', ''),
(29, 'pixel3.jpg', ''),
(30, 'lgg7thinq.jpg', ''),
(31, 'note9.jpg', ''),
(32, 'samsungs9plus.jpg', ''),
(33, 'samsungs9.jpg', ''),
(34, 'nokia8.jpg', ''),
(35, 'motoz2force.jpeg', ''),
(36, 'p20pro.jpg', ''),
(37, 'pixel2xl.jpg', ''),
(38, 'nova3.jpg', ''),
(39, 'p20.jpg', ''),
(40, 'honorplay.jpg', ''),
(41, 'honorv10.jpeg', ''),
(42, 'mate10pro.jpg', ''),
(43, 'note7pro.jpeg', ''),
(44, 'vivo15pro.jpg', ''),
(45, 'nova4.jpg', ''),
(46, 'honor10.jpg', ''),
(47, 'nokiax7.jpg', ''),
(48, 'mi8se.jpeg', ''),
(49, 'oppof11pro.jpg', ''),
(50, 'vivov15.jpg', ''),
(54, 'oneplus7pro.jpg', ''),
(55, 'miblackshark2.jpeg', ''),
(56, 'oppof7.jpg', ''),
(57, 'oppof9.jpg', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(10) UNSIGNED NOT NULL,
  `idKategorii` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `idKategorii`, `nazwa`) VALUES
(1, 1, 'ASUS'),
(2, 2, 'OnePlus'),
(7, 6, 'google'),
(8, 4, 'huawei'),
(9, 5, 'motorola'),
(10, 3, 'samsung');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phones`
--

CREATE TABLE `phones` (
  `id` int(10) UNSIGNED NOT NULL,
  `urzadzenie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `pamiec` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `cpu` int(100) NOT NULL,
  `ux` int(100) NOT NULL,
  `3d` int(100) NOT NULL,
  `wynik` int(100) NOT NULL,
  `ocena` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `phones`
--

INSERT INTO `phones` (`id`, `urzadzenie`, `pamiec`, `cpu`, `ux`, `3d`, `wynik`, `ocena`) VALUES
(3, 'Xiaomi', '3GB + 32GB', 4444, 55555, 666666, 333, 2),
(4, 'samsung', 'fdsa123', 12341, 4124, 234323, 242432, 2),
(5, 'sadfsa', 'sdafas', 15323, 235321, 5253215, 12531532, 4),
(6, 'sda', 'asfdas', 21421, 213421, 4213, 214321, 6),
(7, 'afsd', 'fdasdfas', 2342143, 214321, 2412314, 214321, 2),
(8, 'Doodge', '2GB + 16GB', 12345, 12345, 1234, 12345, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ranking`
--

CREATE TABLE `ranking` (
  `id` int(11) UNSIGNED NOT NULL,
  `urzadzenie` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `pamiec` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `cpu` int(100) NOT NULL,
  `ux` int(100) NOT NULL,
  `3d` int(100) NOT NULL,
  `wynik` int(100) NOT NULL,
  `ocena` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ranking`
--

INSERT INTO `ranking` (`id`, `urzadzenie`, `pamiec`, `cpu`, `ux`, `3d`, `wynik`, `ocena`) VALUES
(1, 'Mi 9', '6GB+128GB', 126380, 77475, 156288, 371423, 6),
(2, 'Samsung S10(SDM855)', '8GB+128GB', 117998, 72531, 156558, 358845, 6),
(3, 'vivo iQOO Monster', '8GB+128GB', 118235, 74564, 150542, 356004, 6),
(4, 'Samsung S10+ (9820)', '8GB+128GB', 101565, 69281, 149076, 332118, 5),
(5, 'Samsung S10 (9820)', '8GB+128GB', 99271, 68634, 148477, 328446, 5),
(6, 'Samsung S10e (9820)', '6GB+128GB', 99176, 68447, 147415, 327205, 4),
(7, 'HONOR V20', '6GB+128GB', 112053, 67086, 109163, 301003, 4),
(8, 'HUAWEI Mate 20X', '6GB+128GB', 111260, 67255, 109286, 300707, 4),
(9, 'HUAWEI P30 Pro', '8GB+256GB', 108285, 64610, 112475, 298572, 5),
(10, 'Mi MIX 3', '6GB+128GB', 95218, 63945, 126985, 296972, 5),
(11, 'Mi POCOPHONE F1', '6GB+64GB', 95203, 64565, 126888, 296368, 3),
(12, 'Mi 8', '6GB+128GB', 95498, 63960, 127000, 296331, 4),
(13, 'Mi 8 Pro', '8GB+128GB', 94865, 64059, 126999, 295582, 4),
(14, 'OnePlus 6T', '8GB+128GB', 92507, 64262, 127977, 295411, 5),
(15, 'ROG Phone', '8GB+128GB', 93317, 63215, 126037, 294930, 5),
(16, 'ZenFone 5Z', '6GB+128GB', 89640, 64804, 127503, 294011, 4),
(17, 'OnePlus 6', '8GB+128GB', 91492, 64047, 127345, 293365, 5),
(18, 'HUWEI Mate 20', '6GB+128GB', 108078, 64804, 105161, 290690, 5),
(19, 'vivo NEX S', '8GB+128GB', 92266, 58781, 125688, 289046, 5),
(20, 'HUAWEI Mate 20 Pro', '6GB+128GB', 106790, 64840, 104207, 288481, 5),
(21, 'Meizu 16th', '6GB+64GB', 92343, 60389, 123110, 286354, 4),
(22, 'Sony Xperia XZ2', '4GB+64GB', 87772, 63411, 124999, 285356, 3),
(23, 'Razer Phone 2', '8GB+64GB', 88478, 60338, 126280, 284439, 5),
(24, 'Samsung Note 9 (SDM845)', '6GB+128GB', 87849, 59378, 127496, 283226, 4),
(25, 'Samsung S9+ (SDM845)', '6GB+64GB', 87431, 59203, 127004, 282383, 4),
(26, 'Samsung S9 (SDM845)', '4GB+64GB', 87496, 59291, 126796, 282210, 4),
(27, 'Mi BlackShark', '8GB+128GB', 87836, 57695, 126332, 282168, 5),
(28, 'Google Pixel 3 XL', '4GB+64GB', 88234, 55975, 121922, 280496, 5),
(29, 'Google Pixel 3', '4GB+64GB', 84971, 54790, 118827, 272202, 5),
(30, 'LG G7 ThinQ', '4GB+64GB', 86588, 57656, 102753, 255555, 4),
(31, 'Samsung Note9 (9810)', '6GB+128GB', 83822, 52296, 105492, 249852, 5),
(32, 'Samsung S9+ (9810)', '6GB+64GB', 85264, 52146, 103631, 249306, 5),
(33, 'Samsung S9 (9810)', '4GB+64GB', 85278, 52164, 99362, 245100, 4),
(34, 'Nokia 8', '4GB+64GB', 71602, 48455, 81482, 210245, 3),
(35, 'Moto Z2 Force', '6GB+64GB', 71134, 44087, 82817, 205737, 4),
(36, 'HUAWEI P20 Pro', '6GB+128GB', 68780, 45091, 77714, 203543, 5),
(37, 'Google Pixel 2 XL', '4GB+64GB', 70312, 43461, 81069, 203004, 4),
(38, 'HUAWEI nova 3', '4GB+128GB', 66176, 44926, 73436, 196575, 3),
(39, 'HUAWEI P20', '4GB+128GB', 67659, 43017, 72247, 194683, 3),
(40, 'HONOR Play', '4GB+64GB', 67286, 44483, 63709, 186685, 3),
(41, 'HONOR V10', '6GB+128GB', 66008, 42888, 63020, 183139, 3),
(42, 'HUAWEI Mate 10 Pro', '6GB+128GB', 62800, 41592, 67091, 182833, 3),
(43, 'Redmi Note 7 Pro', '4GB+64GB', 83900, 47771, 36315, 180794, 2),
(44, 'vivo V15 Pro', '6GB+128GB', 79758, 49196, 36125, 178895, 3),
(45, 'HUAWEI nova 4', '8GB+128GB', 57074, 37784, 67162, 171873, 3),
(46, 'HONOR 10', '4GB+64GB', 62636, 40872, 57325, 171625, 2),
(47, 'Nokia X7', '4GB+64GB', 66783, 46733, 49306, 171055, 2),
(48, 'Mi 8 SE', '6GB+64GB', 67840, 44854, 49050, 170338, 3),
(49, 'OPPO F11 Pro', '6GB+64GB', 63919, 39621, 34472, 148337, 4),
(50, 'vivo V15', '6GB+64GB', 63906, 38796, 33867, 146694, 4),
(54, 'OnePlus 7 PRO', '8GB+256GB', 125019, 77240, 157119, 373953, 6),
(55, 'Xiaomi Black Shark 2', '8GB+128GB', 123759, 72752, 159401, 369224, 5),
(56, 'Oppo F7', '4GB+64GB', 60546, 35276, 29043, 132971, 3),
(57, 'Oppo F9', '6GB+64GB', 61661, 35534, 29024, 134748, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `userType`, `created_at`) VALUES
(1, 'misfit', '$2y$10$pWGUD/3ZlobvgTafpurSdu2EHNCKFPGHwygatZgzlBR1lrNRZ.hDO', 'admin', '2019-05-22 16:59:17'),
(2, 'Dominik', '$2y$10$RMokrTH8mNFD6x8l/oz3i.60d8wSCdP8IMd/cK87BoGc53ylZcPwC', 'user', '2019-05-22 18:13:07');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `artykul`
--
ALTER TABLE `artykul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKategorii` (`idKategorii`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `artykul`
--
ALTER TABLE `artykul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD CONSTRAINT `kategorie_ibfk_1` FOREIGN KEY (`idKategorii`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
