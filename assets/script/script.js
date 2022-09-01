const BTN_CAD = document.getElementById("btn_cad");
const BTN_LIST = document.getElementById("btn_list");
const MENU_ITENS_CAD = document.getElementById("menu-itens-cad");
const MENU_ITENS_LIST = document.getElementById("menu-itens-list");
const MENU = document.getElementById("menu-hamburguer");
const CONTAINER_MENU = document.getElementById("container-menu");

var contMenu = 0;
var contMenuCad = 0;
var contMenuList = 0;

function openMenu() {
    if (contMenu == 0) {
        CONTAINER_MENU.style.display = "flex";
        CONTAINER_MENU.style.position = "absolute";
        contMenu++;
    } else {
        CONTAINER_MENU.style.display = "none";
        MENU_ITENS_CAD.style.display = "none";
        MENU_ITENS_LIST.style.display = "none";
        contMenu = 0;
    }
}

function openMenuCad() {
    if (contMenuCad == 0) {
        MENU_ITENS_CAD.style.display = "block";
        MENU_ITENS_LIST.style.display = "none";
        contMenuCad++;
    } else {
        MENU_ITENS_CAD.style.display = "none";
        contMenuCad = 0;
    }
}

function openMenuList() {
    if (contMenuList == 0) {
        MENU_ITENS_LIST.style.display = "block";
        MENU_ITENS_CAD.style.display = "none";
        contMenuList++;
    } else {
        MENU_ITENS_LIST.style.display = "none";
        contMenuList = 0;
    }
}

MENU.addEventListener("click", openMenu);
BTN_CAD.addEventListener("click", openMenuCad);
BTN_LIST.addEventListener("click", openMenuList);


