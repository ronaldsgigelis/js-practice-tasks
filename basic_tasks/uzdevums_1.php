<section>
    <h2>1. Sveiciens ar vārdu</h2>

    <input type="text" id="task1Name" placeholder="Ievadi vārdu">
    <button onclick="task1Greeting()">Parādīt</button>

    <p id="task1Result"></p>
</section>

<script>
    function task1Greeting() {
        let name = document.getElementById("task1Name").value;
        document.getElementById("task1Result").textContent = "Sveiks, " + name + "!";
    }
</script>