const dropArea =document.querySelector('themimg')
const button=dropArea.querySelector('button');
const input=dropArea.querySelector('input');

button.addEventListener('click',() =>{
    input.click();
})

input.addEventListener('change',function(){
    const file= this.files[0];
    showFile(file);
})

// dropArea.addEventListener('drop')
function showFile(file){
    const fileType = file.type;
    const validExtensions=['image/jpg', 'image/png','image/jpeg'];
   if (validExtensions.includes(fileType)){
    const fileReader= new FileReader();
    fileReader.onload=()=>{
        console.log('aaaa')
        const fileUrl=fileReader.result;
        const imgTag='<img src="${fileUrl}">';
        dropArea.innerHTML=imgTag
    }
    fileReader.readAsDataURL(file);
   }else{
    alert(" Không Xác Định đươc File Ảnh");
    
   }
}