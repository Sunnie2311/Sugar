<?php /* Smarty version 2.6.11, created on 2023-01-04 16:00:34
         compiled from custom/modules/B_Receipt/tpls/customDetail.tpl */ ?>
<header>
    <h1 style="text-align: center"><font size="+1">My Invoice</font></h1>
    <p style="text-align: center">&#8766&#8766&#8766&#8766&#8766&#8766</p>
</header>
<script src="custom/modules/B_Receipt/js/calculateReceipt.js"></script>
<button type="button" onclick="myFunction()"><font size="+1">Add row</button>

<table id="myTable" cellpadding="0" cellspacing="0">
    <tr class="heading">
        <td>
            Item
        </td>

        <td>
            Quantity
        </td>

        <td>
            Unit Price
        </td>

        <td>
            Total
        </td>
    </tr>
    <td class="mb-4"><input type="text" placeholder="Item name" class="form-control" /></td>
    <td class="text-center"><input type="number" min="1" id="target" placeholder="Quantity" class="form-control quantity" /></td>
    <td class="text-right"><input type="text" placeholder="Price" class="form-control" /></td>
    <td class="text-right"><input type="text" disabled placeholder="0,00" class="form-control price" /></td>
</table>
<?php echo '
    <script type="text/javascript">
        SUGAR.language.get(\'B_Product\', \'name\');

        function myFunction() {
            var itemRow =
                \'<tr>\' +
                \'<td><input type="text" class="form-control" placeholder="Item name" /></td>\' +
                \'<td><input type="text" class="form-control" placeholder="Quantity" /></td>\' +
                \'<td><input type="text" class="form-control" placeholder="Price" /></td>\' +
                \'<td><input type="text" class="form-control price" disabled placeholder="0,00" /></td>\' +
                \'</tr>\';
            $("#myTable tr:last").after(itemRow);

        }
    </script>
'; ?>