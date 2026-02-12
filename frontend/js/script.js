console.log("test");
function registerUser() {
    console.log("function reached");
    console.log("test");

    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm_password").value;
    const fullname = document.getElementById("fullname").value.trim();
    const contact_number = document.getElementById("contact_number").value.trim();
    const email = document.getElementById("email").value.trim();
    const NIC = document.getElementById("NIC").value.trim();
    const gender = document.getElementById("gender").value;
    const street_address = document.getElementById("street_address").value.trim();
    const city = document.getElementById("city").value.trim();
    const district = document.getElementById("district").value;
    const province = document.getElementById("province").value;
    const DOB = document.getElementById("DOB").value;

    if (!username || !password || !fullname || !contact_number || !email || 
        !NIC || !gender || !street_address || !city || !district || !province || !DOB) {
        alert("Please fill in all fields");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
    }

    const payload = {
        username,
        password,
        fullname,
        contact_number,
        email,
        NIC,
        gender,
        street_address,
        city,
        district,
        province,
        DOB
    };

    console.log("JSON being sent:", payload);
   fetch("http://localhost/flood-Relief-Management-System/backend/user_authentication/registration.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log("Server response:", data)
        
        if (data.status === "ok") {
          
          alert(data.message);
           window.location.href = "login.php";
        }else{
            alert(data.message);
        }
    })
    .catch(error => {
        console.error("Fetch error:", error);
   
    });
}

function login(){

const username=document.getElementById("username").value;
const password=document.getElementById("password").value;
const payload={
    username:username,
    password:password
}
    fetch("http://localhost/flood-Relief-Management-System/backend/user_authentication/login.php",{
        method:"POST",
        headers:{
            "Content-Type":"application/json"
        },
        body:JSON.stringify(payload)
    }).then(response=>response.json())
    .then(data=>{
        console.log(data);
        if(data.status=="ok"){
            alert(data.message);
           window.location.href="user-flood-relief.php";
        }else{
            alert(data.message);
        }
    })
}

function createReliefRequest(){
    const user_id=1;
    const type_of_relief = document.getElementById("type_of_relief").value.trim();
    console.log(type_of_relief);
    const devisional_secretariat= document.getElementById("devisional_secretariat").value.trim();
    const gn_devision = document.getElementById("gn_devision").value;
  
    console.log(gn_devision);
    
    const contact_person_name = document.getElementById("contact_person_name").value.trim();
    const contact_number = document.getElementById("contact_number").value.trim();
    const address = document.getElementById("address").value.trim();
    const num_of_family_members = document.getElementById("num_of_family_members").value.trim();
    const flood_level = document.getElementById("flood_level").value.trim();
    const description = document.getElementById("description").value.trim();
     const district = document.getElementById("district").value;
   
    
    const payload = {
        user_id,
        type_of_relief,
        devisional_secretariat,
        gn_devision,
        contact_person_name,
        contact_number,
        address,
        num_of_family_members,
        flood_level,
        description,
        district
    };

    console.log("JSON being sent:", payload);
   fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/user_relief_request.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log("Server response:", data)
        
        if (data.status === "ok") {
          
          alert(data.message);
          
        }else{
            alert(data.message);
        }
    })
    .catch(error => {
        console.error("Fetch error:", error);
   
    });

    

}

function updateReliefRequest(){
    const relief_id=document.getElementById("relief_id").value;
    const user_id=1;
    const type_of_relief = document.getElementById("type_of_relief").value.trim();
    const devisional_secretariat= document.getElementById("devisional_secretariat").value.trim();
    const gn_devision = document.getElementById("gn_devision").value.trim();
    const contact_person_name = document.getElementById("contact_person_name").value.trim();
    const contact_number = document.getElementById("contact_number").value.trim();
    const address = document.getElementById("address").value.trim();
    const num_of_family_members = document.getElementById("num_of_family_members").value.trim();
    const flood_level = document.getElementById("flood_level").value.trim();
    const description = document.getElementById("description").value.trim();
     const district = document.getElementById("district").value;
   
    
    const payload = {
        relief_id,
        user_id,
        type_of_relief,
        devisional_secretariat,
        gn_devision,
        contact_person_name,
        contact_number,
        address,
        num_of_family_members,
        flood_level,
        description,
        district
    };
    fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/user_relief_request.php",{
        method:"PUT",
        headers:{
            "Content-Type":"application/json"
        },
        body:JSON.stringify(payload)
    }).then(response=>response.json())
    .then(data=>{
        console.log(data);
        if(data.status=="ok"){
            alert(data.message);
         
        }else{
            alert(data.message);
        }
    })
}

function deleteReliefRequest(){
    const relief_id=document.getElementById("relief_id").value;
    fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/user_relief_request.php/"+relief_id,{
        method:"DELETE"
    }).then(response=>response.json())
    .then(data=>{
        console.log(data);
        if(data.status=="ok"){
            alert(data.message);
          
        }else{
            alert(data.message);
        }
    })
}