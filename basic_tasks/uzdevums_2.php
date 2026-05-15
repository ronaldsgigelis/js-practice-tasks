<section>
    <h2>2. Divu skaitļu summa</h2>
    <input type="number" id="task2Number1" placeholder="Pirmais skaitlis">
    <input type="number" id="task2Number2" placeholder="Otrais skaitlis">
    <button onclick="task2Sum()">Aprēķināt</button>
    <p id="task2Result"></p>
</section>

<script>
    function task2Sum() {
        let number1 = Number(document.getElementById("task2Number1").value);
        let number2 = Number(document.getElementById("task2Number2").value);
        let sum = number1 + number2;
        document.getElementById("task2Result").textContent = "Summa: " + sum;
    }
</script>