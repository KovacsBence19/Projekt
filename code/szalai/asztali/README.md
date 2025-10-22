# Asztali alkalmazás forrásfájlai

## Buildelés
> [!WARNING]
> Ez a rész még nincs kész, ezért csak a **3. lépésig** kövesse az utasításokat!!
1. [Telepítse le az MSYS2-t](https://www.msys2.org/)
2. Frissíts mindent benne és telepítsd le a hozzátartozó eszközöket az **MSYS2 UCRT64 parancssorban**:
```
pacman -Syu gcc gdb make mingw-w64-x86_64-toolchain mingw-ucrt-w64-x86_64-toolchain
```
3. Add hozzá az `[MSYS2 telepítési mappa]\usr\bin\` mappát a rendszer `Path` környezeti változójába. Ha nem tudja hogy kell, kövesse az alábbi utasítást:
	- Írja be a Windows keresőbe, hogy **rendszer környezeti változó**. Nyissa meg és utána kattintson a **Környezeti változók...** gombra.
	- A lenti "Rendszerváltozók" részen találja meg a `Path` változót. Duplán kattintson rá, vagy válassza ki és nyomjon a **Szerkesztés...** gombra. Meg fog nyílni mégegy ablak.
	- Abban az ablakban nyomja meg az **Új** gombot, és írja be a mappa elérési útját.
	- Kattintson az **OK** gombra mindenhol, és most már akárhol használhatja az MSYS2 által telepített programokat, beleértve a GCC-t is.
4. Nyisson meg egy parancssor ablakot, és navigáljon a forráskód mappájába.
5. Futtassa le a megadott `build.cmd` parancsfájlt, vagy írja be a benne lévő `g++` (vagy `make`) parancsokat.