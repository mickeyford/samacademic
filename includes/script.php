<script>
document
    .getElementById("menu-toggle")
    .addEventListener("click", function(event) {
        event.preventDefault();
        var element = document.getElementById("wrapper");
        element.classList.toggle("toggled");
    });
</script>