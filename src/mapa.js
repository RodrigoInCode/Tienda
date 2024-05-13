var map = L.map('map').setView([19.27194444, -99.60166667], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var latitud = 19.27194444;
    var longitud = -99.60166667;
    
    
    L.marker([latitud, longitud]).addTo(map)
        .bindPopup('Aqui estamos ubicados')
        .openPopup();