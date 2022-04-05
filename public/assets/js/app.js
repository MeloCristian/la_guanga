document.addEventListener("DOMContentLoaded", function (event) {
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll(".nav_link");

    function colorLink() {
        if (linkColor) {
            linkColor.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        }
    }
    linkColor.forEach((l) => l.addEventListener("click", colorLink));

    // Your code to run since DOM is loaded and ready
    $(".show_confirm").click(function (event) {
        event.preventDefault();
        var form = $(this).closest("form");
        var formData = new FormData(document.getElementById("form_delete"));
        swal({
            title: `Eliminar?`,
            text: `Seguro que desea eliminar ${formData.get("name")}`,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });

    $("#btn_consulta").click(function (event) {
        event.preventDefault();
        form = document.getElementById("form_consult")
        var formData = new FormData(form);
        form.action = `http://localhost:8000/persona/${formData.get('dni')}`
        val = form.submit();
    });
});
