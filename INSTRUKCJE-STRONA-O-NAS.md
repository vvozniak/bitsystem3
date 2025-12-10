# Instrukcje - Strona O nas (About Us)

## Przegląd

Strona "O nas" (`page-aboutus.php`) została zaktualizowana o integrację z Advanced Custom Fields (ACF), co umożliwia edycję wszystkich treści bezpośrednio z panelu WordPress.

## Struktura pól ACF

### 1. Sekcja Hero

**Pola:**
- `aboutus_hero_title_highlight` - Wyróżnione słowo w tytule (domyślnie: "Ludzie")
- `aboutus_hero_title_rest` - Reszta tytułu (domyślnie: ", którzy łączą światy")
- `aboutus_hero_description` - Opis w sekcji hero
- `aboutus_hero_background_image` - Obraz tła (opcjonalnie, domyślnie: `/images/tlo.png`)
- `aboutus_social_links` - Repeater dla linków społecznościowych
  - `icon` - Ikona
  - `link` - URL do profilu
  - `label` - Etykieta (aria-label)

### 2. Sekcja "Kim jesteśmy"

**Pola:**
- `aboutus_kim_title` - Tytuł główny (domyślnie: "Kim jesteśmy")
- `aboutus_kim_subtitle_before` - Tekst przed wyróżnieniem (domyślnie: "Poznaj naszą ")
- `aboutus_kim_subtitle_highlight` - Wyróżnione słowo (domyślnie: "misję")
- `aboutus_kim_description` - Opis sekcji

### 3. Zespół - Osoby

**Pole:**
- `aboutus_team_members` - Repeater dla członków zespołu (maksymalnie 4 osoby)
  - `photo` - Zdjęcie osoby (zalecane: kwadratowe, min. 500x500px)
  - `name` - Imię i nazwisko
  - `description` - Opis osoby
  - `row_class` - Klasa CSS dla rzędu (opcjonalnie, automatycznie przypisywana)

**Automatyczne przypisywanie klas:**
- Osoba 1: `person-1` (zdjęcie po lewej, niebieski pasek z lewej)
- Osoba 2: `person-2` (zdjęcie po prawej, niebieski pasek z prawej)
- Osoba 3: `person-3` (zdjęcie po lewej, niebieski pasek z lewej)
- Osoba 4: `person-4` (zdjęcie po prawej, niebieski pasek z prawej)

**Renderowanie warunkowe:**
- Wyświetlane są tylko osoby, które mają wypełnione pole `name` lub `photo`
- Puste pola nie są wyświetlane na stronie
- Jeśli pole `name` jest puste ale `photo` istnieje, alt obrazu będzie "Team member"

**Kompatybilność wsteczna:**
- Klasy `michal-row` i `dorota-row` nadal działają dla istniejącej treści
- Jeśli repeater jest pusty, wyświetlane są domyślne osoby:
  - Michał Cichoracki (`/images/webp/Component 19.webp`)
  - Dorota Markiewicz (`/images/webp/Component 20.webp`)

### 4. Sekcja "Co robimy?"

**Pola:**
- `aboutus_what_subtitle` - Podtytuł (domyślnie: "Co robimy?")
- `aboutus_what_title_before` - Tekst przed wyróżnieniem
- `aboutus_what_title_highlight` - Wyróżnione słowo (domyślnie: "międzynarodowych")
- `aboutus_what_description` - Opis sekcji
- `aboutus_what_cta_text` - Tekst przycisku CTA (domyślnie: "Poznaj nasze usługi")
- `aboutus_what_cta_link` - Link przycisku CTA (domyślnie: "#oferta")
- `aboutus_what_video_mp4` - Wideo MP4 (opcjonalnie, domyślnie: `/videos/tlov.mp4`)
- `aboutus_what_video_webm` - Wideo WebM (opcjonalnie, domyślnie: `/videos/tlov.webm`)
- `aboutus_what_video_poster` - Plakat wideo (opcjonalnie, domyślnie: `/images/USŁUGI.png`)

### 5. Sekcja Realizacji

**Pola:**
- `aboutus_realizations_subtitle` - Podtytuł (domyślnie: "Z pasją do perfekcji")
- `aboutus_realizations_title_before` - Tekst przed wyróżnieniem (domyślnie: "Nasze ")
- `aboutus_realizations_title_highlight` - Wyróżnione słowo (domyślnie: "Realizacje")
- `aboutus_realizations_cta_text` - Tekst przycisku CTA (domyślnie: "Zobacz wszystkie")
- `aboutus_realizations_cta_link` - Link przycisku CTA (domyślnie: "/realizacje")

## Jak używać

### 1. Przypisanie szablonu do strony

1. W panelu WordPress przejdź do **Strony** → **Wszystkie strony**
2. Znajdź stronę "O nas" lub utwórz nową
3. W **Atrybutach strony** wybierz szablon **page-aboutus.php**
4. Zapisz stronę

### 2. Edycja treści

1. Otwórz stronę "O nas" do edycji
2. Przewiń w dół do sekcji **Strona O nas**
3. Wypełnij pola według potrzeb
4. Kliknij **Aktualizuj**

### 3. Dodawanie członków zespołu

**Limit:** Możesz dodać maksymalnie 4 osoby.

1. W sekcji **Zespół - Osoby** kliknij **Dodaj osobę**
2. Wypełnij wymagane pola:
   - **Zdjęcie** - Prześlij zdjęcie osoby (zalecane: kwadratowe, min. 500x500px)
   - **Imię i nazwisko** - Wpisz pełne imię
   - **Opis** - Wpisz biografię i opis roli w firmie
   - **Klasa CSS** (opcjonalnie) - Zostaw puste, klasa zostanie automatycznie przypisana
3. Kliknij **Dodaj osobę** ponownie, aby dodać kolejną osobę (maks. 4)

**Uwaga:** 
- Jeśli nie wypełnisz pól `name` i `photo`, osoba nie będzie wyświetlana
- Osoby nieparzyste (1, 3) mają zdjęcie po lewej stronie
- Osoby parzyste (2, 4) mają zdjęcie po prawej stronie
- Można dodać tylko wybrane osoby (np. tylko 2 z 4), pozostałe miejsca pozostaną puste i nie będą wyświetlane

### 4. Dodawanie linków społecznościowych

1. W sekcji **Hero - Linki społecznościowe** kliknij **Dodaj link**
2. Wypełnij:
   - **Ikona** - Prześlij ikonę (zalecane: 50x50px, okrągła)
   - **Link** - Wpisz pełny URL do profilu
   - **Etykieta** - Wpisz nazwę platformy (np. "LinkedIn")
3. Kliknij **Dodaj link** ponownie dla kolejnych platform

## Wartości domyślne

Wszystkie pola mają wartości domyślne odpowiadające obecnym hardcoded treściom. Jeśli pole pozostanie puste, strona będzie wyświetlać domyślną wartość.

### Przykład przepływu pracy:

1. **Początek**: Strona wyświetla domyślne treści (hardcoded)
2. **Po edycji pól**: Strona wyświetla nowe treści z ACF
3. **Po usunięciu treści**: Strona wraca do wyświetlania domyślnych wartości

## Zabezpieczenia

Wszystkie dane wyjściowe są chronione funkcjami:
- `esc_html()` - dla tekstu
- `esc_url()` - dla URL-i
- `esc_attr()` - dla atrybutów HTML
- `wp_kses_post()` - dla treści HTML (np. `<br>`)

## Struktura plików

- `acf-page-aboutus.json` - Definicja grup pól ACF
- `page-aboutus.php` - Szablon strony z integracją ACF
- `/images/Component 19.png` - Domyślne zdjęcie Michała Cichorackiego
- `/images/Component 20.png` - Domyślne zdjęcie Doroty Markiewicz
- `/images/tlo.png` - Domyślne tło hero
- `/images/USŁUGI.png` - Domyślny plakat wideo
- `/videos/tlov.mp4` - Domyślne wideo MP4
- `/videos/tlov.webm` - Domyślne wideo WebM

## Zgodność z innymi stronami

Implementacja ACF dla strony "O nas" jest zgodna z:
- `page-offer.php` - używa tego samego wzorca ACF
- `index.php` - używa tego samego wzorca ACF
- Wszystkie strony używają fallback values dla zachowania kompatybilności wstecznej

## Wsparcie

W przypadku problemów lub pytań:
1. Sprawdź czy szablon `page-aboutus.php` jest przypisany do strony
2. Upewnij się, że plugin ACF (Advanced Custom Fields) jest aktywny
3. Zweryfikuj, że plik `acf-page-aboutus.json` istnieje w katalogu motywu
