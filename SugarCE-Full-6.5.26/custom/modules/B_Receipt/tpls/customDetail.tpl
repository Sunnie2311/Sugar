<header>
    <h1 style="text-align: center"><font size="+1">My Invoice</font></h1>
    <p style="text-align: center">&#8766&#8766&#8766&#8766&#8766&#8766</p>
</header>
{*<link rel="stylesheet" href="custom/modules/B_Receipt/css/stype_nd.css" />*}
<script src="custom/modules/B_Receipt/js/calculateReceipt.js"></script>
{*</head>*}
{*<table border="1">*}
{*    <tr>*}
{*        <th>STT</th>*}
{*        <th class="form-control">Product Name</th>*}
{*        <th>Unit Price</th>*}
{*        <th>Quantity</th>*}
{*        <th>Product's Total-price </th>*}
{*    </tr>*}
{*        {foreach from=$stt item=result}*}
{*            <tr>*}
{*                {foreach from=$result item=temp}*}
{*                    <td style="text-align: center">{$temp}</td>*}
{*                {/foreach}*}
{*            </tr>*}
{*        {/foreach}*}
{*    <tr>*}
{*        <td colspan="4", style="text-align: center"><font size="+1" <b>Total Price</b></font></td>*}
{*        <td style="text-align: center"><font size="+1"<b>{$total}</b></font></td>*}
{*        <button type="button" onclick="myFunction()">Try it</button>*}
{*        <p id="demo"></p>*}
{*    </tr>*}
{*</table>*}
<button type="button" onclick="myFunction()"><font size="+1">Add row</button>
{*<link rel="stylesheet" href="custom/modules/B_Receipt/css/stype_nd.css" />*}

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
{literal}
    <script type="text/javascript">
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
    </script>
{/literal}