<div id="page-name">
    <div id="text">
        <table class="important">
            <tr class="light-header">
                <td width="10" class="tdheader">No.</td>
                <td width="70" class="tdheader">Name</td>
                <td width="300" class="tdheader">Short description</td>
                <td width="40" class="tdheader">Status</td>
                <td width="80" class="tdheader">Edit/Remove</td>
            </tr>
{foreach from=$list item=product key=key name=product}
            <tr class={cycle values="light, shadow"}>
                <td>{math equation="x + y" x=$smarty.foreach.product.index y=1}</td>
                <td align="left" >{$product.product}</td>
                <td align="left" >{$product.shortDescription}</td>
                <td>{$product.status}</td>
                <td><a href="index.php?section=admin&page=product&cmd=edit&id={$product.productId}" onClick=""><img src="images/en/edit.gif" class="contact-image"/></a>&nbsp;&nbsp;&nbsp;
                	<a href="javascript:void(0);" onclick="if(confirm('Are you sure to remove this product?'))document.location.href = 'index.php?section=admin&page=product&cmd=remove&id={$product.productId}';return false;" ><img src="images/en/delete.gif" class="contact-image"/></a></td>
            </tr>
{foreachelse}
            <tr class="light">
                <td align="center"> :: nothing product exist ::</td>
            </tr>
{/foreach}
        </table>
    </div>
</div>