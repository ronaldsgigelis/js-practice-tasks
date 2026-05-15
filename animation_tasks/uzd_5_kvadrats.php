<section>
    <h2>5. Kvadrāts seko pelei</h2>

    <p>Pārvieto peli pa zaļo laukumu.</p>

    <div id="task5Area">
        <div id="task5Square"></div>
    </div>
</section>

<script>
    let task5Area = document.getElementById("task5Area");
    let task5Square = document.getElementById("task5Square");

    task5Area.addEventListener("mousemove", function(event) {
        let areaRect = task5Area.getBoundingClientRect();

        let x = event.clientX - areaRect.left - 17;
        let y = event.clientY - areaRect.top - 17;

        task5Square.style.left = x + "px";
        task5Square.style.top = y + "px";
    });
</script>