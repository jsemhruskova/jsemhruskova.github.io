const btn = document.querySelectorAll('.tlacitko');

btn.forEach(function(tlacitko){
    tlacitko.addEventListener('click', function(){
        // Pro každou dočasnou proměnnou tlačítko se nám nastavé event listener onClick
        alert('Kliknul jsi na tlačítko!');
    })
})