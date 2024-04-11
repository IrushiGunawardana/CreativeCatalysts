function handleSubmit () {
    const companyname = document.getElementById('companyname').value;
    const targetaudience=document.getElementById('targetaudience').value;
    const email = document.getElementById('email').value;
    const ddate=document.getElementById('ddate').value;
   

    sessionStorage.setItem("COMPANYNAME", companyname);
    sessionStorage.setItem("TARGETAUDIENCE",targetaudience);
    sessionStorage.setItem("EMAIL",email);
    sessionStorage.setItem("DDATE",ddate);


    return;
}


  