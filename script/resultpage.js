window.addEventListener('load', () => {

   
    const companyname = sessionStorage.getItem('COMPANYNAME');
    const targetaudience = sessionStorage.getItem('TARGETAUDIENCE');
    const email = sessionStorage.getItem('EMAIL');
    const ddate = sessionStorage.getItem('DDATE');

    document.getElementById('result-companyname').innerHTML = companyname;
    document.getElementById('result-targetaudience').innerHTML = targetaudience;
    document.getElementById('result-email').innerHTML = email;
    document.getElementById('result-ddate').innerHTML = ddate;



})