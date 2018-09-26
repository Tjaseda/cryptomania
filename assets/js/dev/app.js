import Slider from './modules/slider';
import Popup from './modules/share-popup';
import MobileMenu from './modules/mobile-menu';
import DropLang from './modules/drop-lang'

if(window.location.pathname === "/" || window.location.pathname === "/sl/") {
  var slider = new Slider();
  var popup = new Popup();
}

var mobileMenu = new MobileMenu();
var dropLang = new DropLang();
