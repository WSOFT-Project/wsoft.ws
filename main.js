document.querySelector('body').insertAdjacentHTML('afterbegin','<common-header/>');
document.querySelector('body').insertAdjacentHTML('beforeend', '<common-footer/>');
function setLegalLink(url) {
    document.getElementById('legal-link').setAttribute('href', url);
}
function setLegalLink(url,text) {
    let a=document.getElementById('legal-link');
    a.setAttribute('href', url);
    a.innerHTML=text;
}
