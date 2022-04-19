


    // document.forms[0].onsubmit = function(e) {
    //     e.preventDefault();
    //     // window.open("../dashbord/Dashbord.html");
    //     window.location.href = "../dashbord/dashboard.php";
    // }


    const form = document.getElementById('form');
    const firstName=document.getElementById('firstName');
    const LastName=document.getElementById('lastName');
    const email=document.getElementById('email');
    const password=document.getElementById('password');
    const password_conf=document.getElementById('conf_pwd');
    console.log(form);

    function showerror(input ,message)
    {

        const formControll=input.parentElement;
        formControll.className='form-control error';
        const small=formControll.querySelector('small');
        small.innerText=message;
    }
    function showSuccess(input){
        const formControl=input.parentElement;
        formControl.className='form-control success';
    }
    function checkPassworMatch(input1 ,input2){
        // console.log("input 1");
        // console.log(input1);
        // console.log("input 2");
        // console.log(input2);
        
        const isPassValid=input1.value ==input2.value;
        if(!isPassValid){
            showerror(input2,'password not Match ');
        }
        return isPassValid;
        
    }
  
    const checkIfFormIsNotEmpty=(form)=>{
        let allValide=true;
        form.querySelectorAll('input').forEach((input)=>{
            if(input.value==''){
                showerror(input,input.name+' is required');
                allValide=false;
            }else{
                showSuccess(input);
            }
        });
        return allValide;
    }

    form.addEventListener('submit',function(e)
    {
            if(!checkIfFormIsNotEmpty(e.target) || !checkPassworMatch(password,password_conf))
            e.preventDefault();
    
    })