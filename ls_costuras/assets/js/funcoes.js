function calcular() {
    var n1 = parseInt(document.getElementById("service_cost").value, 10);
    var n2 = parseInt(document.getElementById("material_price").value, 10);
    document.getElementById("net_value").value = n1 - n2;
}

/* Máscaras ER ///Begin */
function mascara(o, f) {
    v_obj = o;
    v_fun = f;
    setTimeout("execmascara()", 1);
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value);
}
function mtel(v) {
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id(el) {
    return document.getElementById(el);
}
window.onload = function () {
    id("telephone").onkeyup = function () {
        mascara(this, mtel);
    };
};
/* Máscaras ER ///End */

/* Mascara para dinheiro Início*/
function formatarMoeda(value) {
    var elemento = document.getElementById(value);
    var valor = elemento.value;

    valor = valor + "";
    valor = parseInt(valor.replace(/[\D]+/g, ""));
    valor = valor + "";
    valor = valor.replace(/([0-9]{2})$/g, ",$1");

    if (valor.length > 6) {
        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
    }

    elemento.value = valor;
}
/* Mascara para dinheiro Fim */
