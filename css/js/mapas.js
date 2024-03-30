function iniciarMap(){
    var coord = {lat: 10.1429286,lng: -85.4546524};
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 10,
        center: coord
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}