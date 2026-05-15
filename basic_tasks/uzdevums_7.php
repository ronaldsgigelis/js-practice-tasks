<section>
    <h2>7. Reizināšanas tabula</h2>

    <input type="number" id="uzd_7" placeholder="Ievadi skaitli">
    <button onclick="multiplicationTable()">Parādīt tabulu</button>

    <p id="task7Result"></p>
</section>

<script>
    function multiplicationTable() {
        let num = Number(document.getElementById("uzd_7").value);
        let result = "";

        for (let i = 1; i <= 10; i++) {
            result += num + " x " + i + " = " + (num * i) + "<br>";
        }

        document.getElementById("task7Result").innerHTML = result;
    }
</script>