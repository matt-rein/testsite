$(document).foundation();

window.cookieconsent.initialise({
    container: document.getElementById("content"),
    palette:{
        popup: {background: "#fff"},
        button: {background: "#aa0000"},
    },
    revokable:true,
    onStatusChange: function(status) {
        console.log(this.hasConsented() ?
            'enable cookies' : 'disable cookies');
    },
    law: {
        regionalLaw: false,
    },
    location: true,
});