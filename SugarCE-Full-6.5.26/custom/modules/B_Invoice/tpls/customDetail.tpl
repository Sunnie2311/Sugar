<header>
    <h1>My Invoice</h1>
</header>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Order</th>
    </tr>
    
    <tr>
        {foreach from=$invoice_customer item=result}
            <li><td>{$result}</td></li>
        {/foreach}
    </tr>
</table>