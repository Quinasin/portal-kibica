# Portal kibica

## Wymagania

- integracja z https://www.api-football.com/ - trzeba założyć darmowe konto na https://dashboard.api-football.com/
- użycie https://tailwindcss.com/
- języki programowania: PHP, JS, HTML, CSS
- baza danych: MySQL, opcjonalnie: Redis
- opcjonalnie: wykorzystanie frameworka Laravel
- opcjonalnie: wykorzystanie Docker

## Opis

Aplikacja ma za zadanie umożliwić użytkownikowi przeglądanie danych związanych z meczami piłkarskimi. Dane pobierane są z https://www.api-football.com/ i zapisywane w bazie danych w celu odciążenia API. Aplikacja ma umożliwiać przeglądanie danych w sposób przyjazny dla użytkownika. 

Dyscyplina do wyboru spośród dostępnych w API:
- football
- baseball
- koszykówka
- formula 1
- piłka ręczna
- hokej na lodzie
- NBA
- NFL
- rugby
- siatkówka

## Funkcjonalności

- skrypt do pobierania wymaganych danych z API i zapisywania do lokalnej bazy danych
- przeglądanie listy lig
- przeglądanie listy meczów w ramach danej ligi
- przeglądanie szczegółów meczu
- przeglądanie listy drużyn
- przeglądanie szczegółów drużyny
- przeglądanie listy zawodników

## Funkcjonalności dodatkowe

- wybór ulubionych drużyn
- wybór ulubionych zawodników
- przeglądanie listy ulubionych drużyn
- przeglądanie listy ulubionych zawodników
- przeglądanie listy meczów ulubionych drużyn
- przeglądanie listy meczów ulubionych zawodników
- mechanizm logowania
- mechanizm rejestracji
