//Fetch img and admin register upload
async function fetchImg() {
    var formdata = new FormData();
    formdata.append('key', Fkey);
    formdata.append('image', Fimage.files[0]);
    await fetch("https://api.imgbb.com/1/upload", {
        method: "post",
        body: formdata
    }).then(response => response.json()).then(data => {
        img = data.data.display_url;
        uploadPhp(img);
        console.log(img);
    });
}

async function uploadPhp(img) {
    let formData = new FormData();
    formData.append("img", img);
    formData.append("email", Femail.value);
    formData.append("name", Fname.value);
    formData.append("phone", Fphone.value);
    formData.append("password", Fpassword.value);
    formData.append("cpassword", Fcpassword.value);
    formData.append("adminid", Fadminid);

    await fetch("../admin/register.php", {
        method: "post",
        body: formData
    }).then(response => response.json()).then(data => {
        if (data.error == "" && data.check == "" && data.queryFail == "") {
            backdrop.classList.toggle('show');
            modalBox.classList.toggle('open');
            key.innerHTML = data.key;
        } else if (!(data.error == "")) {
            window.alert(data.error);
        } else if (!(data.check == "")) {
            window.alert(data.check);
        } else {
            window.alert(data.queryFail);
        }

    });
}