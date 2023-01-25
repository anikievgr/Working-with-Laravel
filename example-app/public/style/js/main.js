console.log('s');
var addCategory = document.querySelector('#addCategory');
var buutonAddCategory = document.getElementById("select");
console.log(buutonAddCategory);
buutonAddCategory.addEventListener('change', (event) => {
  //console.log(event.target.value);
 if (event.target.value != 'buutonAddCategory') {
      console.log('buutonAddCategory');
       addCategory.style.display = 'none';
 }else{
     addCategory.style.display = 'block';
 }
});
