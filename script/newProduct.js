//Fetch img and admin register upload
async function fetchImg() {
    var formdata = new FormData();
    formdata.append('key', Fkey);
    formdata.append('image', Fphoto.files[0]);
    await fetch("https://api.imgbb.com/1/upload", {
        method: "post",
        body: formdata
    }).then(response => response.json()).then(data => {
        img = data.data.display_url;
        if (icon == "" || icon == null) {
            var formdata = new FormData();
            formdata.append('key', Fkey);
            formdata.append('image', Ficon.files[0]);
            fetch("https://api.imgbb.com/1/upload", {
                method: "post",
                body: formdata
            }).then(response => response.json()).then(data => {
                icon = data.data.display_url;
                uploadPhp(img, icon);
                console.log(img, icon);
            })
        }

    });
}

async function uploadPhp(img, icon) {
    let formData = new FormData();
    formData.append("img", img);
    formData.append("icon", icon);

    formData.append("gameName", FgameName.value);
    formData.append("unitName", FunitName.value);
    formData.append("aboutGame", FaboutGame.value);
    formData.append("link", Flink.value);

    formData.append("adminid", Fadminid);


    await fetch("../admin/newProductJumper.php", {
        method: "post",
        body: formData
    }).then(response => response.json()).then(data => {
        if (data.error == "" && data.check == "" && data.queryFail == "") {
            window.alert("success");
            window.location.href = '../admin/shopList.php';
        } else if (!(data.check == "")) {
            window.alert(data.check);
        } else if (!(data.error == "")) {
            window.alert(data.error);
        } else if (!(data.queryFail == "")) {
            window.alert(data.queryFail);
        }
    });
}