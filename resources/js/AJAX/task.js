const deletTask = document.querySelector("#delete-task");
const csrf_token = document.querySelector("meta[name=csrf-token]").content;

deletTask.addEventListener("click", async () => {
    const idTask = deletTask.dataset["idTask"];
    fetch(`http://localhost:8000/tasks/${idTask}`, {
        headers: {
            "X-CSRF-TOKEN": csrf_token,
        },
        method: "delete",
    })
        .then((data) => {
            if (data.status === 200) {
                alert("Tarea eliminada con exito");
                location.replace("http://localhost:8000/home");
            }
        })
        .catch((error) => {
            alert("Algo ha ido mal");
            location.replace("http://localhost:8000/home");
        });
});
