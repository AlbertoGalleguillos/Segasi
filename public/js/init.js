var elem = document.querySelector('.sidenav');
var instance = M.Sidenav.init(elem);
var elem = document.querySelectorAll('.parallax');
var instance = M.Parallax.init(elem);
var elem = document.querySelector('.tooltipped');
var instance = M.Tooltip.init(elem);
var elem = document.querySelectorAll('.materialboxed');
var instance = M.Materialbox.init(elem);
var elem = document.querySelector('.tap-target');
var instance = M.FeatureDiscovery.init(elem);

window.onscroll = function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        // you're at the bottom of the page
        instance.open();
    //} else {
        //instance.close();
    }
};