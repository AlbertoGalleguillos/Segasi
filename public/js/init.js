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

function sleep(s) {
    return new Promise(resolve => setTimeout(resolve, s * 1000));
}

async function showPortfolio() {
    await sleep(5);
    instance.open();
}
  
showPortfolio();