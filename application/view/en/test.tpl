<div id="products">

{foreach from=$list item=productList}
    <table class="space-products" dir="ltr" align="left">
        <tr>
            <td valign="top" align="left"><a href="#"><img src="showimg.php?i={$productList.imageId}" onclick="openNewWindow('showimg.php?i={$productList.imageId}&amp;t=2', '400', '450');" height="100" alt="product1" /></a></td>
            <td class="message">
                <table align="left">
                    <tr>
                        <td style="text-align:left"><h4><a href="index.php?page=product&cmd=view&id={$productList.productId}&la={$lang}">{$productList.product}</a></h4></td>
                    </tr>
                    <tr>
                        <td style="text-align:left">&nbsp;  </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
	<div class="clearer"></div>
{/foreach}
</div>