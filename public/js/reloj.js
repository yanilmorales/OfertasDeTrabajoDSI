function getDate(){
    let date = new Date();
    let temp = {
        year: date.getFullYear(),
        month: date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1): (date.getMonth()+1),
        day: date.getDate(),
    }
    return temp.day+'/'+temp.month+'/'+temp.year;
}

function getTime(){
    let date = new Date()
    let time = {
        hour: date.getHours() < 10 ? '0'+date.getHours(): date.getHours(),
        min: date.getMinutes() < 10 ? '0'+date.getMinutes(): date.getMinutes(),
        sec: date.getSeconds() < 10 ? '0'+date.getSeconds(): date.getSeconds()
    }
    return time.hour+':'+time.min+':'+time.sec;
}

async function setTime() {
    let reloj = document.getElementById('reloj');
    reloj.innerHTML = "Fecha: "+getDate()+" | Hora: "+getTime();
}

setInterval(setTime,100);