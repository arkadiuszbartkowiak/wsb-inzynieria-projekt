-- Create the main table
CREATE TABLE Klient (
id INT PRIMARY KEY,
imie VARCHAR(255),
nazwisko VARCHAR(255),
telefon VARCHAR(255),
email VARCHAR(255),
data_utworzenia DATETIME
);

-- Create child table 1
CREATE TABLE Rezerwacja (
id INT PRIMARY KEY,
data_zlozenia DATETIME,
status_rezerwacji VARCHAR(255),
start_rezerwacji DATETIME,
koniec_rezerwacji DATETIME,
status_oplaty VARCHAR(255),
);

-- Create child table 2
CREATE TABLE Pojazdy (
id INT PRIMARY KEY,
marka_pojazdu VARCHAR(255),
model_pojazdu VARCHAR(255),
status_pojazdu VARCHAR(255),
typ_pojazdu VARCHAR(255),
);

-- Create child table 3
CREATE TABLE Stacja_ladowania (
id INT PRIMARY KEY,
lokalizacja VARCHAR(255),
ilosc_pojazdow VARCHAR(255),
ilosc_ladowarek VARCHAR(255),
lista_pojazdow VARCHAR(255),
);