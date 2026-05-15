<section>
    <h2>6. Auto brauc pa ekrānu</h2>

    <button onclick="startCar()">Sākt braukt</button>

    <div id="task6Area">
        <div id="task6Car"></div>
    </div>
</section>

<script>
    function startCar() {
        document.getElementById("task6Car").classList.add("task6Drive");
    }
</script>