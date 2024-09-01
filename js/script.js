// Função para verificar se o cookie de promoção já existe
function verificarCookiePromocao() {
    var cookiePromocao = getCookie("promocao_exibida");
    if (cookiePromocao === "") {
        // O cookie não existe, então exiba a promoção
        exibirPromocao();
    }
}

// Função para exibir a tela de promoção
function exibirPromocao() {
    var promoPopup = document.getElementById("promo-popup");
    promoPopup.style.display = "block";
}

// Função para fechar a tela de promoção e definir um cookie para que ela não seja exibida novamente
function fecharPromocao() {
    var promoPopup = document.getElementById("promo-popup");
    promoPopup.style.display = "none";

    // Defina um cookie que expira em 7 dias
    setCookie("promocao_exibida", "true");
}

// Função para definir um cookie com expiração em 1 minuto
function setCookie(nome, valor) {
    var data = new Date();
    // Adicione 1 minuto (60 segundos) ao tempo atual
    data.setTime(data.getTime() + 2 * 60 * 1000);
    var expires = "expires=" + data.toUTCString();
    document.cookie = nome + "=" + valor + ";" + expires + ";path=/";
}

// Função para obter o valor de um cookie
function getCookie(nome) {
    var nomeCookie = nome + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(nomeCookie) === 0) {
            return cookie.substring(nomeCookie.length, cookie.length);
        }
    }
    return "";
}

// Verifique se o cookie de promoção já existe ao carregar a página
verificarCookiePromocao();