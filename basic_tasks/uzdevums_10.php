<section>
    <h2>10. Mini kalkulators</h2>

    <input type="number" id="uzd_10_1" placeholder="Pirmais skaitlis">

    <select id="uzd_10_operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="number" id="uzd_10_2" placeholder="Otrais skaitlis">

    <button onclick="miniCalculator()">Aprēķināt</button>

    <p id="task10Result"></p>
</section>

<script>
    function miniCalculator() {
        let num1 = Number(document.getElementById("uzd_10_1").value);
        let num2 = Number(document.getElementById("uzd_10_2").value);
        let operator = document.getElementById("uzd_10_operator").value;

        let result = "";

        if (operator === "+") {
            result = num1 + num2;
        } else if (operator === "-") {
            result = num1 - num2;
        } else if (operator === "*") {
            result = num1 * num2;
        } else if (operator === "/") {
            if (num2 === 0) {
                result = "Ar nulli dalīt nedrīkst";
            } else {
                result = num1 / num2;
            }
        }

        document.getElementById("task10Result").textContent = "Rezultāts: " + result;
    }
</script>