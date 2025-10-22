@echo off

:: készítsen mappákat, ha nincsen
if not exist mkdir bin
if not exist mkdir obj

:: készítsen a forráskódból egy objektum (.o) fájlt
g++ -Wall -fexceptions -g -c .\main.cpp -o .\obj\main.o -m64
:: objektum fájl futtatható (.exe) állományává tétele
g++ -o .\bin\test.exe .\obj\main.o