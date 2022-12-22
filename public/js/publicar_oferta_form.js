const planA = document.getElementById("plan");
const planB = document.getElementById("tiempo");

if (document.getElementById("main-form").getAttribute('new')===''){
    document.getElementById("planA").addEventListener("click", () => {
        planA.disabled = false;
        planB.disabled = true;
    });
    
    document.getElementById("planB").addEventListener("click", () => {
        planA.disabled = true;
        planB.disabled = false;
    });
}else{
    planA.disabled = true;
    planB.disabled = true;
}

document.querySelector('input[type=file]').addEventListener('change',(element) => {
    if (FileReader && element.target.files && element.target.files.length) {
        let fr = new FileReader();
        fr.onload = () => {
            document.getElementById('logoImg').src = fr.result;
        }
        fr.readAsDataURL(element.target.files[0]);
    }
    element.target
});

function buttonNext() {
    if(validarFormulario()){
        if(!document.getElementsByTagName("fieldset")[0].classList.contains("hidden")){
            document.getElementsByTagName("fieldset")[0].classList.toggle("hidden");
            document.getElementsByTagName("fieldset")[1].classList.toggle("hidden");
            document.getElementById("formButton").innerHTML = "Publicar";
        }else {
            document.getElementById("main-form").submit();
        }
    }
    
}

function validarFormulario() {
    let returnValue = true;
    document.querySelectorAll('form#main-form fieldset:not(.hidden) input[type=text]').forEach((element) => {
        returnValue = returnValue && !!element.value && !/[^a-zA-Z0-9.,:;_ -]/.test(element.value);
        if(!element.value || /[^a-zA-Z0-9.,:;_ -]/.test(element.value)){
            element.value = '';
            element.placeholder = 'Dato no valido';
            element.classList.add('invalid');
        }
    });
    return returnValue;
}
