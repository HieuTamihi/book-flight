$(document).ready(function () {
    $("#a-collapse1").click(function () {
        $('#collapse1').slideToggle();
    })
})
$(document).ready(function () {
    $("#a-collapse2").click(function () {
        $('#collapse2').slideToggle();
    })
})
$(document).ready(function () {
    $("#a-collapse3").click(function () {
        $('#collapse3').slideToggle();
    })
})
$(document).ready(function () {
    $("#a-collapse4").click(function () {
        $('#collapse4').slideToggle();
    })
})
$(document).ready(function () {
    $("#a-collapse5").click(function () {
        $('#collapse5').slideToggle();
    })
})

const mobile_menu_buttons = document.querySelector('.mobile-menu-buttons');
const mobile_menu_buttons1 = document.querySelector('.mobile-menu-buttons1');
const menu_header_item = document.querySelector('.menu-header-item')

const a_menu_item1 = document.querySelector('#a-menu-item1')
const a_menu_item2 = document.querySelector('#a-menu-item2')
const a_menu_item3 = document.querySelector('#a-menu-item3')
const a_menu_item4 = document.querySelector('#a-menu-item4')
const a_menu_item5 = document.querySelector('#a-menu-item5')

mobile_menu_buttons.onclick = function () {
    menu_header_item.classList.toggle('open');
}
mobile_menu_buttons1.onclick = function () {
    menu_header_item.classList.toggle('open');
}
a_menu_item1.onclick = function () {
    menu_header_item.classList.toggle('open');
}
a_menu_item2.onclick = function () {
    menu_header_item.classList.toggle('open');
}
a_menu_item3.onclick = function () {
    menu_header_item.classList.toggle('open');
}
a_menu_item4.onclick = function () {
    menu_header_item.classList.toggle('open');
}
a_menu_item5.onclick = function () {
    menu_header_item.classList.toggle('open');
}

const btn_formcrm = document.querySelector('.btn-formcrm');
const btn_light = document.querySelector('.btn-light');
const btn_second = document.querySelector('.btn-second');
const FormModalATP = document.querySelector('#FormModalATP');
const close_modal = document.querySelector('.close-modal');

btn_formcrm.onclick = function () {
    FormModalATP.classList.toggle('open-model');
}
btn_light.onclick = function () {
    FormModalATP.classList.toggle('open-model');
}
btn_second.onclick = function () {
    FormModalATP.classList.toggle('open-model');
}
close_modal.onclick = function () {
    FormModalATP.classList.toggle('open-model');
}
const Solution1 = document.querySelector('#Solution1');
const Description = document.querySelector('#Description');
const Personal = document.querySelector('#Personal');
const Feature = document.querySelector('#Feature');
const Vision = document.querySelector('#Vision');
const Gift = document.querySelector('#Gift');
const Price = document.querySelector('#Price');
const Documents = document.querySelector('#Documents');
const ActionWhy = document.querySelector('#ActionWhy');
const Commitment = document.querySelector('#Commitment');
window.onscroll = function () { scrollFunction(), scrollFunction1(), scrollFunction2(), scrollFunction3(), scrollFunction4(), scrollFunction5(), scrollFunction6(), scrollFunction7(), scrollFunction8() };
function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        Description.style.opacity = "1";
        Description.style.visibility = "visible";
        Description.style.transform = "translateY(-50px)";

    }
    else {
        Description.style.visibility = "hidden";
        Description.style.opacity = "0";
        Description.style.transform = "translateY(50px)";
    }
}
function scrollFunction1() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        Personal.style.opacity = "1";
        Personal.style.visibility = "visible";
        Personal.style.transform = "translateY(-50px)";

    }
    else {
        Personal.style.visibility = "hidden";
        Personal.style.opacity = "0";
        Personal.style.transform = "translateY(50px)";
    }
}
function scrollFunction2() {
    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        Feature.style.opacity = "1";
        Feature.style.visibility = "visible";
        Feature.style.transform = "translateY(-50px)";

    }
    else {
        Feature.style.visibility = "hidden";
        Feature.style.opacity = "0";
        Feature.style.transform = "translateY(50px)";
    }
}
function scrollFunction3() {
    if (document.body.scrollTop > 2500 || document.documentElement.scrollTop > 2500) {
        Vision.style.opacity = "1";
        Vision.style.visibility = "visible";
        Vision.style.transform = "translateY(-50px)";

    }
    else {
        Vision.style.visibility = "hidden";
        Vision.style.opacity = "0";
        Vision.style.transform = "translateY(50px)";
    }
}
function scrollFunction4() {
    if (document.body.scrollTop > 2900 || document.documentElement.scrollTop > 2900) {
        Gift.style.opacity = "1";
        Gift.style.visibility = "visible";
        Gift.style.transform = "translateY(-50px)";

    }
    else {
        Gift.style.visibility = "hidden";
        Gift.style.opacity = "0";
        Gift.style.transform = "translateY(50px)";
    }
}
function scrollFunction5() {
    if (document.body.scrollTop > 3800 || document.documentElement.scrollTop > 3800) {
        Price.style.opacity = "1";
        Price.style.visibility = "visible";
        Price.style.transform = "translateY(-50px)";

    }
    else {
        Price.style.visibility = "hidden";
        Price.style.opacity = "0";
        Price.style.transform = "translateY(50px)";
    }
}
function scrollFunction6() {
    if (document.body.scrollTop > 4600 || document.documentElement.scrollTop > 4600) {
        Documents.style.opacity = "1";
        Documents.style.visibility = "visible";
        Documents.style.transform = "translateY(-50px)";

    }
    else {
        Documents.style.visibility = "hidden";
        Documents.style.opacity = "0";
        Documents.style.transform = "translateY(50px)";
    }
}
function scrollFunction7() {
    if (document.body.scrollTop > 5100 || document.documentElement.scrollTop > 5100) {
        ActionWhy.style.opacity = "1";
        ActionWhy.style.visibility = "visible";
        ActionWhy.style.transform = "translateY(-50px)";

    }
    else {
        ActionWhy.style.visibility = "hidden";
        ActionWhy.style.opacity = "0";
        ActionWhy.style.transform = "translateY(50px)";
    }
}
function scrollFunction8() {
    if (document.body.scrollTop > 5500 || document.documentElement.scrollTop > 5500) {
        Commitment.style.opacity = "1";
        Commitment.style.visibility = "visible";
        Commitment.style.transform = "translateY(-50px)";

    }
    else {
        Commitment.style.visibility = "hidden";
        Commitment.style.opacity = "0";
        Commitment.style.transform = "translateY(50px)";
    }
}