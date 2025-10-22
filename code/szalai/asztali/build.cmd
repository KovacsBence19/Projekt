@echo off

:: készítsen mappákat, ha nincsen
if not exist bin mkdir bin
if not exist obj mkdir obj

:: készítsen a forráskódból egy objektum (.o) fájlt
g++ -Wall -fexceptions -g -c .\main.cpp -o .\obj\main.o -m64
:: objektum fájl futtatható (.exe) állományává tétele
g++ -o .\bin\test.exe .\obj\main.o
