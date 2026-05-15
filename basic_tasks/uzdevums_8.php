<section>
    <h2>8. Nejaušs skaitlis</h2>

    <button onclick="randomNumber()">Ģenerēt skaitli</button>

    <p id="task8Result"></p>
</section>

<script>
    function randomNumber() {
        let num = Math.floor(Math.random() * 10) + 1;

        document.getElementById("task8Result").textContent = "Nejaušs skaitlis: " + num;
    }
</script>