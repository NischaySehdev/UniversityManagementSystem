let checkForLogin=false, checkForPswd=false;
// This function will help to move from login page to forgot password page
function forgot_page() {   
        if(document.getElementById("staticEmail").value==" "){
        alert("The user id shouldn't be empty");
        document.getElementById("staticEmail").value=" "
        }
        else if(document.getElementById("staticEmail").value.length>10){
        alert("The user id can't be more than");
        document.getElementById("staticEmail").value=" "
        }
        else{
            console.log("From this page")
            window.open("Forgot_password.html")
        }
    }
function reset() {
    document.getElementById("staticEmail").value=""
    document.getElementById("inputPassword").value=""
}
function login() {
    if((document.getElementById("staticEmail").value==" ")||(document.getElementById("staticEmail").value).length>10)
    {
        alert("The user id shouldn't be empty");
        document.getElementById("staticEmail").value=" "
    }
    else if((document.getElementById("inputPassword").value==" ")||document.getElementById("inputPassword").value.length>10){
        alert("The password shouldn't be empty");
        document.getElementById("inputPassword").value=" "
    }
    else{
        alert("Welcome");
    }
}
function reset_fpswd() {
    document.getElementById("birthPlace").value="";
    document.getElementById("schoolName").value="";
    document.getElementById("homeAdress").value="";
    document.getElementById("newpswd").value="";
    document.getElementById("cpswd").value="";
}
function forgotpasswordsubmit() {
    if(document.getElementById("birthPlace").value==""){
        alert("Enter the answer in the birth place column")
    }
    else if(document.getElementById("schoolName").value==""){
        alert("Enter the answer in the school name column")
    }
    else if(document.getElementById("homeAdress").value==""){
        alert("Enter the answer in the home address column")
    }
    else if(document.getElementById("newpswd").value==""&&document.getElementById("cpswd").value=="")
    {
        alert("Plese enter the your new password")
    }
    else if(document.getElementById("newpswd").value==document.getElementById("cpswd")){
        alert("Both the password should be same");
    }
    else{
        alert("Welcome")
    }
}         
function reset_assignblock() {
    document.getElementById("myGradeS").selected="true";
    document.getElementById("myGradeSe").selected="true";
    document.getElementById("staffId").value="";
}
function reset_des() {
    document.getElementById("myGradeDesSe").selected="true";
    document.getElementById("myGradeDesGr").selected="true";
    document.getElementById("myDesFullName").value="";
    document.getElementById("myDesAddressName").value="";
    document.getElementById("myDesPhoneNumber").value="";
    document.getElementById("myDesAltDesPhoneNumber").value="";
    document.getElementById("myDesEmailId").value="";
    document.getElementById("inputGroupFile04").value="";
    document.getElementById("inputGroupFile05").value="";
}
function reset_staffterminblock() {
    document.getElementById("myTerminationId").value="";
    document.getElementById("inputGroupFile04").value="";
}
function reset_studentinfo(){
    document.getElementById("myStuProgSe").selected="true";
    document.getElementById("myStuProgSst").selected="true";
    document.getElementById("staticEmail").value="";
    document.getElementById("staticEmail1").value="";

}
function reset_studycenter() {
    document.getElementById("mystudycenterArea").selected=true;
    document.getElementById("mystudycenterStudyCenter").selected=true;
    document.getElementById("mystudycenterGrade").selected=true;
    document.getElementById("staticEmail").value="";
}
function reset_studycenteradd() {
    document.getElementById("exampleFormControlInput0").value="";
    document.getElementById("exampleFormControlInput1").value="";
    document.getElementById("exampleFormControlInput2").value="";
    document.getElementById("exampleFormControlInput4").value="";
    document.getElementById("studycenteraddProgramAlloted").selected="true";
    document.getElementById("studycenteraddCity").selected="true";
    document.getElementById("mystudycenteraddState").selected="true";
    document.getElementById("mystudycenteraddCountry").selected="true";
    document.getElementById("inputGroupFile04").value="";
}
function reset_studycenterstaffadd() {
    document.getElementById("exampleFormControlInput0").value="";
    document.getElementById("exampleFormControlInput1").value="";
    document.getElementById("exampleFormControlInput2").value="";
    document.getElementById("exampleFormControlInput3").value="";
    document.getElementById("exampleFormControlInput4").value="";
    document.getElementById("exampleFormControlInput5").value="";
    document.getElementById("exampleFormControlInput6").value="";
    document.getElementById("mystudycenterstaffadddepart").selected="true";
    document.getElementById("mystudycenterstaffaddGrade").selected="true";
}
function reset_studycenterTermination() {
    document.getElementById("exampleFormControlInput1").value="";
    document.getElementById("inputGroupFile04").value="";
}
function reset_studymaterial() {
    document.getElementById("mystudycenterProgramme").selected="true";
    document.getElementById("mystudycenterSubject").selected="true";
    document.getElementById("staticEmail").value="";
}
function reset_updateassignment() {
    document.getElementById("myupdateassignmnt").selected="true";
    document.getElementById("myupdateassignProgramm").selected="true";
    document.getElementById("staticEmail").value="";
}
function reset_studycenter() {
    document.getElementById("mystudycenterStudycenter").selected="true";
    document.getElementById("mystudentcenterProgramme").selected="true";
    document.getElementById("staticEmail").value="";
    document.getElementById("mystudycenterSubjects").selected="true";
    document.getElementById("staticEmail1").value="";
}
function reset_concern() {
    document.getElementById("myconcernConcern").selected="true";
    document.getElementById("myconcernProgramme").selected="true";
    document.getElementById("exampleFormControlTextarea1").value="";
}
function reset_updatemarks() {
    document.getElementById("myupdatemarksStudycenter").selected="true";
    document.getElementById("myupdatemarksProgramme").selected="true";
    document.getElementById("staticEmail").value="";
    document.getElementById("myupdatemarksSubjects").selected="true";
    document.getElementById("staticEmail1").value="";
}
function showstaffinfo() {
    let staffid=document.getElementById("staffId").value;
    let patternForNumber="/[0-9]/g";
    if((!document.getElementById("myGradeSe").selected)&&(!document.getElementById("myGradeS").selected))
    {
        alert("Welcome");
    }
    else{
        if((document.getElementById("staffId").value=="")||(document.getElementById("staffId").length>10)){
            alert("Staff id can be of 10 numeric characters.");
        }
        else if(patternForNumber.match(staffid)!=null){
            alert("The staff id can be formed with integers.");
        }
        else{
        alert("Welcome");
        }
    }
}
function showstaffdesignation() {
    if(document.getElementById("myGradeDesSe").selected)
    alert("Please choose the department.");
    else if(document.getElementById("myGradeDesGr").selected)
    alert("Please select the grade.");
    else if(document.getElementById("myDesFullName").value=="")
    alert("Please enter the name.");
    else if(document.getElementById("myDesFullName").value.length>26||document.getElementById("myDesFullName").value.length<2)
    {
        alert("The name characters count can be betweem 2 to 26.");
        document.getElementById("myDesFullName").value="";

    }
    else if(document.getElementById("myDesAddressName").value=="")
    alert("Please enter the address.");
    else if(document.getElementById("myDesAddressName").value.length>50)
    {
        alert("The name characters count can be betweem 10 to 50.");
        document.getElementById("myDesAddressName").value="";
    }
    else if(document.getElementById("myDesPhoneNumber").value=="")
    alert("Please enter the phone number.");
    else if(document.getElementById("myDesPhoneNumber").value.length!=10){
        alert("Please enter the correct phone number.");
        document.getElementById("myDesPhoneNumber").value="";
    }
    else if(document.getElementById("myDesAltDesPhoneNumber").value.length!=10){
        alert("Please enter the correct alternate phone number.");
        document.getElementById("myDesAltDesPhoneNumber").value="";

    }
    else if(document.getElementById("inputGroupFile04").value=="")
    alert("Please add the profile picture.");
    else
    alert("Employeee is sucessfully added.")
    document.getElementById("myGradeDesSe").selected=document.getElementById("myGradeDesGr").selected = "true";
    document.getElementById("myDesFullName").value=document.getElementById("myDesAddressName").value=document.getElementById("myDesPhoneNumber").value=document.getElementById("inputGroupFile04").value="";

}
function showstafftermination() {
    if((document.getElementById("myTerminationId").value=="")||(document.getElementById("myTerminationId").length>10)){
        alert("Please enter correct staff id");
    }
    else if(document.getElementById("myTerminationId").value.length>10)
    {
        alert("Staff id is always less than 10");
        document.getElementById("myTerminationId").value="";
    }
    else if(document.getElementById("inputGroupFile04").value=="")
    {
        alert("Please upload termination letter");
    }
    else{
    alert("Welcome");
    }
}
function showstudycenterperinfo(){
    if((document.getElementById("staticEmail").value=="")||(document.getElementById("staticEmail").length>10)){
        if((!document.getElementById("mystudycenterArea").selected&&!document.getElementById("mystudycenterStudyCenter").selected)&&!document.getElementById("mystudycenterGrade").selected){
            alert("RWelcome");
        }
        else{
            alert("Atleast select the options or enter correct study center registration number");
        }
    }
    else if(document.getElementById("staticEmail").value.length>10)
    {
        alert("The registration number should be less than 10.");
        document.getElementById("staticEmail").value="";
    }
    else{
        alert("Welcome");
    }
}
function showstudycenterstaffadd() {
    if(document.getElementById("mystudycenterstaffadddepart").selected)
    alert("Please choose the department.");
    else if(document.getElementById("mystudycenterstaffaddGrade").selected)
    alert("Please select the grade.");
    else if(document.getElementById("exampleFormControlInput0").value=="")
    alert("Please enter the name.");
    else if(document.getElementById("exampleFormControlInput0").value.length>26||document.getElementById("exampleFormControlInput0").value.length<2){
        alert("Name chracter count should be between 2 to 26.");
        document.getElementById("exampleFormControlInput0").value=""
    }
    else if(document.getElementById("exampleFormControlInput1").value=="")
    alert("Please enter the address.");
    else if(document.getElementById("exampleFormControlInput1").value>50||document.getElementById("exampleFormControlInput0").value<10){
        alert("Address chracter count should be between 10 to 50.");
        document.getElementById("exampleFormControlInput1").value="";
    }
    else if(document.getElementById("exampleFormControlInput2").value=="")
    alert("Please enter the phone number.");
    else if(document.getElementById("exampleFormControlInput2").value.length!=10){
    alert("Phone number should be of 10 number.");
    document.getElementById("exampleFormControlInput2").value="";

    }
    else if(document.getElementById("exampleFormControlInput3").value.length>0){
    alert("Phone number should be of 10 number.");
    document.getElementById("exampleFormControlInput3").value="";
    }
    else if(document.getElementById("exampleFormControlInput4").value=="")
    alert("Please enter the email id.");
    else if(document.getElementById("inputGroupFile04").value=="")
    alert("Please upload the profile picture.");
    else if(document.getElementById("inputGroupFile05").value=="")
    alert("Please enter the confirmation letter.");
    else
    alert("Employeee is sucessfully added.")
    document.getElementById("myGradeDesSe").selected=document.getElementById("myGradeDesGr").selected = "true";
    document.getElementById("myDesFullName").value=document.getElementById("myDesAddressName").value=document.getElementById("myDesPhoneNumber").value=document.getElementById("inputGroupFile04").value="";
}
function showstudycenteradd() {
     if(document.getElementById("exampleFormControlInput1").value==""){
        alert("Please enter the study center name.");
     }
     else if(document.getElementById("exampleFormControlInput1").value.length>26||document.getElementById("exampleFormControlInput1").value.length<2){
        alert("The name length should be between 2 to 26 characters.");
     }
     else if(document.getElementById("studycenteraddProgramAlloted").selected){
        alert("Please select programme.");
     }
     else if(document.getElementById("exampleFormControlInput0").value==""){
        alert("Please enter the study center head name.");
     }
     else if(document.getElementById("exampleFormControlInput0").value.length>26||document.getElementById("exampleFormControlInput1").value.length<2){
        alert("The name length should be between 2 to 26 characters.");
     }
     else if(document.getElementById("exampleFormControlInput2").value==""){
        alert("Please enter the address.");
     }
     else if(document.getElementById("exampleFormControlInput0").value.length>50||document.getElementById("exampleFormControlInput1").value.length<5){
        alert("The adrees length should be between 5 to 50 characters.");
     }
     else if(document.getElementById("studycenteraddCity").selected){
        alert("Please select city.");
     }
     else if(document.getElementById("exampleFormControlInput4").value==""){
        alert("Please enter the pin code.");
     }
     else if(document.getElementById("exampleFormControlInput0").value.length!=6){
        alert("The pincode length should be of 6 characters.");
     }
     else if(document.getElementById("mystudycenteraddState").selected){
        alert("Please select state.");
     }
     else if(document.getElementById("mystudycenteraddCountry").selected){
        alert("Please select country.");
     }
     else if(document.getElementById("inputGroupFile04").value==""){
        alert("Please upload the approval letter.");
     }
     else{
        alert("Welcome");
     }
}
function showstudycentertermination() {
    if(document.getElementById("exampleFormControlInput1").value==""){
        alert("Please enter the study center code.");
    }
    else if(document.getElementById("inputGroupFile04").value==""){
        alert("Please upload the termination letter.");
    }
    else{
        alert("Welcome");

    }
}

function showupdateassignment() {
    if (document.getElementById("myupdateassignmnt").selected) {
        if (document.getElementById("myupdateassignProgramm").selected) {
            if (document.getElementById("staticEmail").value=="") {
                alert("Atleast select any single option.");
            }
            else{
                alert("Welcome");
            }
        }  
        else{
            alert("Welcome");
        } 
    }
    else{
        alert("Welcome");
    }
}
function showstudycenter() {
    if(document.getElementById("mystudycenterStudycenter").selected){
        alert("Select the study center please.")
    }
    else if(document.getElementById("mystudentcenterProgramme").selected){
        alert("Select the programme please.")
    }
    else if(document.getElementById("staticEmail").value==""){
        alert("Please enter the enrollement number.")
    }
    else if(document.getElementById("mystudycenterSubjects").selected){
        alert("Select the subject please.")
    }
    else if(document.getElementById("staticEmail1").value==""){
        alert("Please enter the link please.")
    }
    else{
        alert("Welcome")
    }
}
function showconcern() {
    if(document.getElementById("myconcernConcern").selected){
        alert("Please select the type of concern.");
    }
    else if(document.getElementById("myconcernProgramme").selected){
        alert("Please select the priority");
    }
    else if(document.getElementById("exampleFormControlTextarea1").value==""){
        alert("Please describe the concern");
    }
    else{
        alert("Welcome")
    }
}

// document.getElementById("staffId").addEventListener("keypress", function(){
//     if(document.getElementById("staffId").value.length>10){
//         alert("The staff id is always less than 10 numbers")
//         document.getElementById("staffId").value="";
//         return false;
//     }
//     else{
//         return true;
//     }
// })
// function concernfielidcheck(){
    
// }
// document.getElementById("Concernfield").addEventListener("keypress", function(){
//     if(document.getElementById("Concernfield").value.length>6){
//         alert("The concern id is always less than 6 numeric.")
//     }
// })
{/* <div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div> */}