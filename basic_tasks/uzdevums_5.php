<section>
    <h2>5. Lielākais no diviem skaitļiem</h2>
    <input type="number" id="uzd_5_1" placeholder="Piemais skaitlis">
    <input type="number" id="uzd_5_2" plaseholder="Otrais skaitlis">
    <button onclick="biggestNumber()">Pārbaudīt</button>
    <p id="task5Result"></p>
</section>

<script>
    function biggestNumber() {
        let num1 = Number(document.getElementById("uzd_5_1").value);
        let num2 = Number(document.getElementById("uzd_5_2").value);
        let result = "";
        if (num1 > num2) {
            result = "Lielakais skaitlis ir: " + num1;
        } else if (num2 > num1) {
            result = "Lielākais skaitlis ir: " + num2;
        } else {
            result = "Abi skaitļi vienādi";
        }
        document.getElementById("task5Result").textContent = result;
    }
</script>