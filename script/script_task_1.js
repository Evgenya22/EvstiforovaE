//-----------------1 способ получения данных формы в консоль (оптимальный)-----------------

document.querySelector('#form').addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = Object.fromEntries(new FormData(e.target).entries());
    console.log(formData)});


//-----------------2 способ получения данных в консоль-----------------
/*
const form=document.getElementById("form");//найдем форму
function retrieveFormValue(event){
    event.preventDefault();
    const fio = form.querySelector('[name="fio"]');
    const BirthDate = form.querySelector('[name="BirthDate"]');
    const phone = form.querySelector('[name="phone"]');
    const email = form.querySelector('[name="email"]');
    const doclad = form.querySelector('[name="doclad"]');
    const theme = form.querySelector('[name="theme"]');
    const conference = form.querySelector('[name="conference"]');
 
//создадим объект в которой запишем полученные нами данные
const values={
    fio:fio.value,
    BirthDate:BirthDate.value,
    phone:phone.value,
    email:email.value,
    doclad:doclad.checked,
    theme:theme.value,
    conference:conference.value
};
console.log('вывод на консоль_2 способ',values);
}
form.addEventListener('submit',retrieveFormValue)//при отправке формы срабатывает сабмит и его слушаем (обработчик обытия)
*/

//-----------------3 способ вывода на консоль данных формы-----------------
/*
const{form}=document.forms;
function retrieveFormValue(event){
    event.preventDefault();
    const{fio,Birthday,phone,email,doclad,theme,conference}=form;
    const values = {
        fio:fio.value,
        BirthDate:BirthDate.value,
        phone:phone.value,
        email:email.value,
        doclad:doclad.value,
        theme:theme.value,
        conference:conference.value
    };
    console.log('вывод на консоль_3 способ',values);}
    form.addEventListener('submit',retrieveFormValue);
*/