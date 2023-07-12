let password_field = document.querySelector("#password");
let confirm_password_field = document.querySelector("#password_confirmation");
let password_icon = document.querySelector("#password_icon");
let confirm_password_icon = document.querySelector("#password_confirmation_icon");

password_icon.addEventListener("click", (e) => {
    if (password_field.getAttribute("type") === "password") {
        password_field.setAttribute("type", "text");
        let url = password_icon.getAttribute("src").split("/");
        url[1] = "/";
        url[url.length - 1] = "eye.svg";
        console.log(url);
        password_icon.setAttribute("src", url.join("/"));
    } else {
        let url = password_icon.getAttribute("src").split("/");
        url[1] = "/";
        url[url.length - 1] = "eye-slash.svg";
        console.log(url);
        password_icon.setAttribute("src", url.join("/"));
        password_field.setAttribute("type", "password");
    }
});

confirm_password_icon.addEventListener("click", (e) => {
    if (confirm_password_field.getAttribute("type") === "password") {
        confirm_password_field.setAttribute("type", "text");
        let url = confirm_password_icon.getAttribute("src").split("/");
        url[1] = "/";
        url[url.length - 1] = "eye.svg";
        console.log(url);
        confirm_password_icon.setAttribute("src", url.join("/"));
    } else {
        let url = confirm_password_icon.getAttribute("src").split("/");
        url[1] = "/";
        url[url.length - 1] = "eye-slash.svg";
        console.log(url);
        confirm_password_icon.setAttribute("src", url.join("/"));
        confirm_password_field.setAttribute("type", "password");
    }
});
