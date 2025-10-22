try{
const res = await fetch('/login', {
method: 'POST',
headers: { 'Content-Type': 'application/json' },
body: JSON.stringify({ username, password })
});
if(!res.ok){
const body = await res.json().catch(()=>({message:'Ismeretlen hiba'}));
showMessage(body.message || 'Hiba a bejelentkezés során', 'error');
return;
}
const body = await res.json();
showMessage('Sikeres bejelentkezés! Üdv, ' + (body.user?.username || username), 'success');
}catch(err){
showMessage('Nem sikerült elérni a szervert: ' + err.message, 'error');
}



demoBtn.addEventListener('click', ()=>{
form.username.value = demoCreds.username;
form.password.value = demoCreds.password;
form.requestSubmit();
});
