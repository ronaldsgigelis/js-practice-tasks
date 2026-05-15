<section>
    <h2>4. Vārti atveras</h2>

    <button onclick="openGates()">Atvērt vārtus</button>

    <div id="task4Area">
        <div id="task4LeftGate" class="task4Gate"></div>
        <div id="task4RightGate" class="task4Gate"></div>
        <div id="task4Car"></div>
    </div>
</section>

<script>
    function openGates() {
        document.getElementById("task4Area").classList.add("open");
    }
</script>