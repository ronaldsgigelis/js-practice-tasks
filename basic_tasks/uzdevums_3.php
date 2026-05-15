<section>
    <h2>Pāra vai nepāra skaitlis</h2>
    <input type="number" id="uzd_3" placeholder="ievadi skaitli">
    <button onclick="OddEven()">Pārbaudīt skaitli</button>
    <p id="task3Result"></p>
</section>

<script>
    function OddEven() {
        let num = Number(document.getElementById("uzd_3").value);
        let check = "";

        if (num % 2 === 0) {
            check = "Pāra skaitlis";
        } else {
            check = "Nepāra skaitlis";
        }

        document.getElementById("task3Result").textContent = "Skaitlis ir: " + check;

    }
</script>