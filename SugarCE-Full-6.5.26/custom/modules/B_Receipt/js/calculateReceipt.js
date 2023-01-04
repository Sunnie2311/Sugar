
    function myFunction() {
        document.getElementById("demo").innerHTML = "Paragraph changed.";
    }
    SUGAR.language.get('B_Product', 'name');
    function myFunction() {
        var itemRow =
            '<tr>' +
            '<td><input type="text" class="form-control" placeholder="Item name" /></td>' +
            '<td><input type="text" class="form-control" placeholder="Quantity" /></td>' +
            '<td><input type="text" class="form-control" placeholder="Price" /></td>' +
            '<td><input type="text" class="form-control price" disabled placeholder="0,00" /></td>' +
            '</tr>';
        $("#myTable tr:last").after(itemRow);
    }