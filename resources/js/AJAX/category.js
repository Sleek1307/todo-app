const deletCategorie = document.querySelector("#delete-category");
const csrf_token = document.querySelector("meta[name=csrf-token]").content;

deletCategorie.addEventListener("click", async () => {
    const idCategorie = deletCategorie.dataset["idCategorie"];
    fetch(`http://localhost:8000/categories/${idCategorie}`, {
        headers: {
            "X-CSRF-TOKEN": csrf_token,
        },
        method: "delete",
    })
        .then((data) => {
            if (data.status === 200) {
                alert("Categoria eliminada con exito");
                location.replace("http://localhost:8000/home");
            }
        })
        .catch((error) => {
            alert("Algo ha ido mal");
            location.replace("http://localhost:8000/home");
        });
});
