document.querySelector('body').insertAdjacentHTML('afterbegin',String.raw`<common class="header"/>`);
document.querySelector('body').insertAdjacentHTML('beforeend', String.raw`<common class="footer"/>`);
function setLegalLink(url) {
    document.getElementById('legal-link').setAttribute('href', url);
}
function setLegalLink(url,text) {
    let a=document.getElementById('legal-link');
    a.setAttribute('href', url);
    a.innerHTML=text;
}
